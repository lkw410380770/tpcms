<?php

namespace app\admin\model;

use think\Model;

class Content extends Model
{
    public function relationData($data, $fieldsArr, $modelId)
    {
        $articleArr = [];
        $attachArr = [];
        $tableName = db('model')->where('id', $modelId)->column('table_name');
        $tableStr = config('database.prefix') . $tableName[0];
        $attachFields = db($tableName[0])->getTableFields();
        foreach ($data as $k => $v) {
            foreach ($fieldsArr as $k1 => $v1) {
                if ($v1 == $k) {
                    if (is_array($v)) {
                        $v = implode(',', $v);
                    }
                    $articleArr[$k] = $v;
                    unset($data[$k]);
                }
            }
            foreach ($attachFields as $k2 => $v2) {
                if ($v2 == $k) {
                    if (is_array($v)) {
                        $v = implode(',', $v);
                    }
                    $attachArr[$k] = $v;
                }
            }
        }
        $articleArr['time'] = time();
        return ['ar' => $articleArr, 'attach' => $attachArr, 'tableName' => $tableName[0]];
    }

    public function addContent($data, $fieldsArr, $modelId)
    {
        $arr = $this->relationData($data, $fieldsArr, $modelId);
        $validate = validate('Content');
        if (!$validate->check($arr['ar'])) {
            $this->error($validate->getError());
        }
        $articleId = db('article')->insertGetId($arr['ar']);
        $attachArr['aid'] = $articleId;
        $attchId = db($arr['tableName'])->insert($arr['attach']);
        if ($attchId) {
            return $articleId;
        }
    }

    public function updateContent($data, $fieldsArr, $id, $modelId)
    {
        $arr = $this->relationData($data, $fieldsArr, $modelId);
        $arr['ar']['id'] = $id;
        $validate = validate('Content');
        if (!$validate->check($arr['ar'])) {
            $this->error($validate->getError());
        }
        $articleId = db('article')->update($arr['ar']);
        $attchId = db($arr['tableName'])->where('aid', $id)->update($arr['attach']);
        if ($articleId !== false || $attchId !== false) {
            return true;
        } else {
            return false;
        }
    }

    public function getDataa($id)
    {
        $tbname = db('article')
            ->alias('a')
            ->field('a.*,b.table_name')
            ->join('tpcms_model b', 'a.model_id=b.id', 'left')
            ->where('a.id', $id)
            ->find();
        $tableName = config('database.prefix') . $tbname['table_name'];
        $data = db('article')
            ->alias('a')
            ->field('a.*,b.*')
            ->join($tableName . ' b', 'a.id=b.aid', 'left')
            ->where('a.id', $id)
            ->find();
        return $data;
    }

    public function getArticle($title)
    {
        if (empty($title)) {
            $data = db('article')->alias('a')
                ->field('a.*,b.cate_name')
                ->join('tpcms_cate b', 'a.cate_id=b.id', 'left')
                ->paginate(10);
            return $data;
        } else {
            $data = db('article')->alias('a')
                ->field('a.*,b.cate_name')
                ->join('tpcms_cate b', 'a.cate_id=b.id', 'left')
                ->where('a.title', 'like','%'. $title.'%')
                ->paginate(10);
            return $data;
        }
    }
}
