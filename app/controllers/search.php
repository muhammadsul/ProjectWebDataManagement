<?php

class search extends controller{
	public function index(){
		$user=$this-> model(model:Reminders);
		if (isset($_POST[submit])){
			$list = $user ->search($_POST['search']);
			$this-> view  (view: 'home/userList', ['list'=>$list]);
		}
	}
}
>