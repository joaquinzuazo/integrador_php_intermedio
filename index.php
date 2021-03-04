<?php
session_start();
include ('helpers/header.php');
?>

<body>
    <main class='main'>
        <div class="login">
            <form class='login-form' action="validar.php" method="POST">
                <h2>Login:</h2>     
                <input type="text" name="user" id="user" placeholder="Ingrese su DNI">
                <input type="password" name="password" id="password" placeholder="Ingrese su contraseña">
                <input type="text" name="captcha" id="captcha" placeholder="Ingrese el captcha">
                <?php
                    $numero1=rand(0,9);
                    $numero2=rand(0,9);
                    $numero3=rand(0,9);
                    $signos=array("!","#","$","%","&","=");
                    $_SESSION["codigo"]=$numero1.$numero2.$signos[rand(0,5)].$numero3;
                    print "<img src=captcha.php>";
                ?>
                <button type="submit">Ingresar</button>
                <?php
                    if(isset($_GET['errorusuario'])){
                        echo '<p>Usuario o constraseña no validos.</p>';
                    };
                    if(isset($_GET['errorcaptcha'])){
                        echo '<p>El captcha ingresado no es valido.</p>';
                    };
                ?>
            </form>
        </div>
    </main>
</body>
</html>