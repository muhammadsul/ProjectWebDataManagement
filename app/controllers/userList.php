<?php

class userList extends Controller {
    public function index() {
       
		 $this->view('report/index');
        }

        public function stafflist($id='') {
            $user = $this->model('Reminders');
            $myCount=$user->stafflist($Srch);
            $this->view('userList',[
        'userlist' => $myCount
        ] );
   }
     public function managerlist($id='') {
            $user = $this->model('Reminders');
            $myCount=$user->managerlist($Srch);
            $this->view('userList',[
        'userlist' => $myCount
        ] );
   }
}