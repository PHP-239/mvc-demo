<?php 
    include "db.php";
    function getBooks(){
        

        $pdo = getPDO();

        $stmt = $pdo->prepare("SELECT * FROM beverages");
        $stmt->execute();
        return $stmt->fetchAll();
        
    }


