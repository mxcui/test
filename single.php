<?php

//单例模式，一个类只能创建一个对象
class Single {

	//
	private $name;
	//定义一个静态属性来保存对象
	private static $single;
	
	//私有化构造方法
	private function __construct( $name ) {
		//
		$this->name = $name;

	}

	//私有化克隆方法
	private function __clone() {

	}
	
	//入口
	public static function getInstance( $name ) {
		//1、根据参数得到类名和路径
		if( self::$single ) {
		

			//对象已经存在，返回原来对象
		} else {
			//对象不存在
			self::$single = new Single( $name );
		}
		return self::$single;
	}

}
$obj = Single::getInstance( '李宇杰' );	


$obj2 = Single::getInstance( '徐文俊' );	
var_dump( '<pre>', $obj, $obj2 );