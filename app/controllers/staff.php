<?php

class Staff extends Controller 
    
    public function index($id = '') {       
        $r = $this->model('get_MyStaff');
        $list = $r->get_MyStaff();
        
        if ($id) {
            $item = $r->get_MyStaff($id);
            
            print_r ($item);
            
            die;
        }
        
        $this->view('users/index', [
        'list' => $list
        ] );
    }
    
    public function update($id) {
        $r = $this->model('staff');

        $item = $r->get_MyStaff($id);

        if(isset($_POST['submit'])){
        $subject=$_POST['subject'];
        $description=$_POST['description'];
    }
        $this->view('users/update', ['item' => $item] );
            
    }
}