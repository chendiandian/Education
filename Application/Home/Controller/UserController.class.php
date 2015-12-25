<?php
	namespace Home\Controller;
	use Think\Controller;
	class UserController extends Controller {
		//Login
		public function login(){
			$this->display();
		}
		
		//register
		public function register(){
			$this->display();
		}
		public function index(){
			echo '1';
		}
	}
