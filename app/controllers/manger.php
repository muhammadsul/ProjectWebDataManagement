<?php

class Manger extends Controller 
    
    public function index($id = '') {       
        $r = $this->model('MyManger');
        $list = $r->get_Manger();
        
        if ($id) {
            $item = $r->get_Manger($id);
            
            print_r ($item);
            
            die;
        }
        
        $this->view('users/index', [
        'list' => $list
        ] );
    }
    
    public function update($id) {
        $r = $this->model('manger');

        $item = $r->get_Manger($id);

        if(isset($_POST['submit'])){
        $subject=$_POST['subject'];
        $description=$_POST['description'];
    }
        $this->view('users/update', ['item' => $item] );
            
    }
    
    public function remove($id = '') {
        $r = $this->model('MyManger');
        $r->removeItem($id);
        header('Location:/manger');
    }
    
    }
}