<?php 
require("connection.php");
if (isset($_SESSION['user'])){
    header('Location: index.php');
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $user = htmlspecialchars($_POST['user']);
    $pass = $_POST['pass'];
    $pass = hash('sha512',$pass);
    $error = '';
    try{
        $conn = new PDO('mysql:host=localhost;dbname=xerna','root','');
    }catch(PDOException $e){
        echo "Error: ". $e->getMessage();
    }
    $stmt = $conn->prepare("SELECT * from users WHERE username = :user and password = :pass");
    $stmt->execute(array(
        ':user'=>$user,
        ':pass'=>$pass
    ));
    $result = $stmt->fetch();
    if(!$result){
        echo $error = 'USUARIO O CONTRASEÑA INCORRECTOS';
    }else{
        $_SESSION['user'] = $user;
        header('Location: index.php');
    }

}
require("views/login_view.php")
?>