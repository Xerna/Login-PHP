<?php 
try{
    $conn = new PDO("mysql:host=localhost;dbname=xerna", "root","");
}
catch(PDOException $e){
    echo $e->getMessage();
}
?>