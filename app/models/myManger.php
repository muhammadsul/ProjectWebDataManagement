<?php

class myManger {
    
    public function __construct() {  

     
    }
	public function manger ($firstNM,$Email,$phoneN,$birthD) {
        $db = db_connect();
        $statement = $db->prepare("INSERT INTO Manger(FirstName,email, PhoneNumber,BirthDate) 
            values (:firstNM,:Email,:phoneN,:birthD)");
        $statement->bindParam(':firstNM',$firstNM);
        $statement->bindParam(':Email',$Email);
        $statement->bindParam(':phoneN',$phoneN);
        $statement->bindParam(':birthD',$birthD);
        $statement->execute();
    }

}
