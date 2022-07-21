<?php session_start();

if (isset($_SESSION['user'])){
    header('Location: index.php');
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = htmlspecialchars($_POST['name']);
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];   
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $pass2 = $_POST['pass2'];
    $error = '';
    if(empty($name) or empty($last_name) or empty($email) or empty($user) or empty($pass) or empty($pass2)){
        $error = "POR FAVOR RELLENAR TODOS LOS CAMPOS";
    }else{
        try {
            $conn = new PDO('mysql:host=localhost;dbname=xerna','root','');
        } catch (PDOException $e) {
            echo "Error: ". $e->getMessage();
        }
        $stmt = $conn->prepare("SELECT username FROM users WHERE username = :user LIMIT 1");
        $stmt->execute(array(':user' => $user));
        $result = $stmt->fetch();
        if($result != false){
            $error = "EL USUARIO YA EXISTE POR FAVOR ELIJA OTRO";
        }
        $iduser = $name[0].$last_name[0].$user;
            if($pass != $pass2){
                $error = "Las contraseñas no son iguales";
            } else{
                $pass = hash('sha512',$pass);
            }
    }
    echo $error;
    if($error == ''){
        $stmt = $conn->prepare("INSERT INTO users (iduser,name,lastname,username,password) VALUES (:iduser,:name,:lastname,:username,:password)");
        $stmt->execute(array(':iduser' => $iduser,
        ':name' => $name,
        ':lastname' => $last_name,
        ':username' => $user,
        ':password' => $pass));
        header('Location: login.php');
    }
}
require "signup_view.php";
?>