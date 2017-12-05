<?php

class Report extends Controller {
    public function index() {
       
		 $this->view('report/StafforMangerList');
        }
        public function TimeCreated($id='') {
            $user = $this->model('Reminders');
        
        if(isset($_POST['Search'])){
            $Srch=$_POST['date'];
            $myCount=$user->remindersSrch($Srch);
            $this->view('report/userList',[
        'myCount' => $myCount
        ] );

        }else{
            $this->view('report/StafforMangerList');  
        } 
   }
}