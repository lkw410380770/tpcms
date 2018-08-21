<?php 
namespace app\admin\model;
use think\Model;

class AuthRule extends Model
{
	public function ruletree($_cateRes){
		$cateRes = $_cateRes;
		return $this->resort($cateRes);
	}

	public function resort($data,$pid=0,$level=0){
		static $arr = [];
		foreach ($data as $k => $v) {
			if($v['pid'] == $pid){
				$v['level'] = $level;
				$arr[] = $v;
				$this->resort($data,$v['id'],$level+1);
			}
		}
		return $arr;
	}

}


 ?>