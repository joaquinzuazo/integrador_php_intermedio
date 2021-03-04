<?php
include ('middlewares/session.php');
include ('helpers/header.php');
?>

<body>
    <main class='main'>
        <div class="login">
            <?PHP
                session_destroy();
            ?>
            <form class='login-form'>
                <h2>Fin de sesión</h2>
                <a href="index.php">Página de inicio</a>
            </form>
        </div>
    </main>
</body>
</html>