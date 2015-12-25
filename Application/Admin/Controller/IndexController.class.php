<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
	
    public function index(){
        $this->display();
    }
	public function admin(){
        $this->display('admin-index');
    }
}