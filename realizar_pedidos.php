<?php
include ('middlewares/session.php');
include ('helpers/header.php');
?>

<body>
    <main class='main'>
        <div class="main-pedido">
            <h2>Realizar un pedido:</h2> 
            <form class='pedido-form' action="cargar_pedido.php" method="POST" enctype='multipart/form-data'>              
                <input type="text" name="cliente" id="cliente" placeholder="Nombre del cliente">
                <input type="text" name="importe" id="importe" placeholder="Ingrese el importe del pedido">
                <input type="file" name="imagen" id="imagen">
                <button type="submit">Cargar pedido</button>
                <?php
                    if(isset($_GET['errorusuario'])){
                        echo '<p>Usuario o constraseña no validos.</p>';
                    };
                    if(isset($_GET['errorcaptcha'])){
                        echo '<p>El captcha ingresado no es valido.</p>';
                    };
                ?>
            </form>
            <a href="mostrar_contenido.php">Volver al menu</a>
        </div>
    </main>
</body>
</html>