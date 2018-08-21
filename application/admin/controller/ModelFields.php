<?php 
namespace app\admin\controller;
use think\Db;
class ModelFields extends Common
{

	public function index()
	{
		$id = input('id');
		$data = db('modelFields')
		->alias('a')
		->field('a.*,b.model_name')
		->join('tpcms_model b','a.mid = b.id','left')
		->where('a.mid',$id)
		->paginate(7);
		$this->assign('arr',$data);
		$this->assign('id',$id);
		return view();
	}

	public function add()
	{
		$mid = input('id');
		$m_name = db('model')->field('model_name,id,table_name')->where('id',$mid)->find();
		$tableName =config('database.prefix').$m_name['table_name'];
		if(request()->isPost())
		{
			$data = input('post.');
			$validate = validate('ModelFields');
			if(!$validate->check($data)){
    			$this->error($validate->getError());
    		}
			$resu = db('modelFields')->insert($data);
			if($resu)
			{
				switch ($data['field_type']) {
					case '1':	
					case '3':
					case '4':
					case '6':
						$sql = "alter table {$tableName} add {$data['field_ename']} varchar(150) not null default ''";
						break;
					case '2':	
					case '5':
						$sql = "alter table {$tableName} add {$data['field_ename']} varchar(600) not null default ''";
						break;
					case '7':
						$sql = "alter table {$tableName} add {$data['field_ename']} float not null default '0.0'";
						break;
					case '8':
						$sql = "alter table {$tableName} add {$data['field_ename']} int not null default '0'";
						break;
					case '9':
						$sql = "alter table {$tableName} add {$data['field_ename']} longtext";
						break;
					default:
						# code...
						break;
				}
				$sqlRes = Db::execute($sql);
				$this->success('成功！',url('ModelFields/index',['id'=>$mid]));
			}else{
				$this->error('添加失败');
			}
		}
		
		$this->assign('modelAr',$m_name);
		return view();
	}

	public function edit()
	{
		if(request()->isPost()){
			$arr = input('post.');
			$validate = validate('ModelFields');
			if(!$validate->check($arr)){
    			$this->error($validate->getError());
    		}
			$resu = db('ModelFields')->update($arr);
			$resu ? $this->success('成功！',url('ModelFields/index',['id'=>$arr['mid']])):$this->error('修改失败');
		}
		$id = input('id');
		$data = db('modelFields')
		->alias('a')
		->field('a.*,b.model_name')
		->join('tpcms_model b','a.mid = b.id')
		->where('a.id',$id)
		->find();
		$this->assign('data',$data);
		return view();
	}

	public function dele($id){
    	$data = db('modelFields')
    			->alias('a')
    			->field('a.field_ename,b.table_name')
    			->join('tpcms_model b','a.mid = b.id','left')
    			->where('a.id',$id)
    			->find();
    	$tableName = config('database.prefix').$data['table_name'];
    	$sql = "ALTER TABLE {$tableName} DROP COLUMN {$data['field_ename']}";
    	if(!Db::execute($sql)){
    		$reu = db('modelFields')->where('id',$id)->delete();
    		return json(['status'=>1,'msg'=>'删除成功']);
    	}else{
    		return json(['status'=>2,'msg'=>'删除失败']);
    	}
    }

}


 ?>