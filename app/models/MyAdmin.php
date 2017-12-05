<?php

class MyAdmin {
    
    public function __construct() {  

     
    }
	public function admin ($firstNM,$Email,$phoneN,$birthD) {
        $db = db_connect();
        $statement = $db->prepare("INSERT INTO Admin(FirstName,email, PhoneNumber,BirthDate) 
            values (:firstNM,:Email,:phoneN,:birthD)");
        $statement->bindParam(':firstNM',$firstNM);
        $statement->bindParam(':Email',$Email);
        $statement->bindParam(':phoneN',$phoneN);
        $statement->bindParam(':birthD',$birthD);
        $statement->execute();
    }

}
