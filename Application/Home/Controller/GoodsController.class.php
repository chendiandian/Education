<?php
	namespace Home\Controller;
	use Think\Controller;
	class GoodsController extends Controller {
		//商品列表
		public function showlist(){
			echo U("Goods/showlist");
			echo "list";
		}
		public function detail(){
			echo "detail";
		}
	}