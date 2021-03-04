<?php session_start();

include "conexion.php";
$users=mysqli_query(con(), "SELECT * from users");


$_SESSION['autentificado']=false;

while($user=mysqli_fetch_array($users)){
    if($user['dni']==$_POST['user']){
        if(password_verify($_POST['password'], $user['pass'])){
            $_SESSION['autentificado']=true;
            $_SESSION['usuario']=$_POST['user'];
            $_SESSION['id']=$user['id'];
        };
   }
};

if($_SESSION['codigo']!=$_POST['captcha']){
    header("location: index.php?errorcaptcha");
    exit();
}

if($_SESSION['autentificado']==true){
    header("location: mostrar_contenido.php");  
} else {
    header("location: index.php?errorusuario");
};
?>