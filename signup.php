<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = htmlspecialchars($_POST['name']);
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];   
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $pass2 = $_POST['pass2'];

    $msg = '';
    if(empty($name) or empty($last_name) or empty($email) or empty($user) or empty($pass) or empty($pass2)){
        $msg = "POR FAVOR RELLENAR TODOS LOS CAMPOS";
    }else{
        try {
            $conn = new PDO('mysql:host=localhost;dbname=xerna','root','');
        } catch (PDOException $e) {
            echo "Error: ". $e;
        }

        $stmt = $conn->prepare("SELECT username FROM users WHERE username = :user LIMIT 1");
        $stmt->execute(array(':user' => $user));
        $result = $stmt->fetch();
        if($result != false){
            $msg = "EL USUARIO YA EXISTE POR FAVOR ELIJA OTRO";
        }
    }
}
echo $name, $last_name;
require "signup_view.php";
?>