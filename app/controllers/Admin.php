 <?php

class Admin extends Controller 
    
    public function index($id = '') {       
        $r = $this->model('MyAdmin');
        $list = $r->get_MyAdmin();
        
        if ($id) {
            $item = $r->get_Admin($id);
            
            print_r ($item);
            
            die;
        }
        
        $this->view('users/index', [
        'list' => $list
        ] );
    }
    
    public function update($id) {
        $r = $this->model('admin');

        $item = $r->get_Admin($id);

        if(isset($_POST['submit'])){
        $subject=$_POST['subject'];
        $description=$_POST['description'];
    }
        $this->view('users/update', ['item' => $item] );
            
    }
    
    public function remove($id = '') {
        $r = $this->model('admin');
        $r->removeItem($id);
        header('Location:/Admin');
    }
    
    public function create() {
        $r = $this->model('admin');
        if(isset($_POST['add'])){
            $usersubject=$_POST['user_subject'];
            $userdescription=$_POST['user_description'];
            $r->add($usersubject,$userdescription);
        }
    }
}