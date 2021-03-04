<?php
include ('middlewares/session.php');
include ('helpers/header.php');
?>

<body>
    <main class='main'>
        <div class="main-pedido">
            <h2>Pedidos:</h2> 
            <table class='tabla-contenido-dato'>
                <tr class='titulo'>
                    <td>ID Pedido</td>
                    <td>Cliente</td>
                    <td>Importe</td>
                    <td>Estado</td>
                    <td>Remito</td>
                </tr>
            <?php
            include "conexion.php";
            $id=$_SESSION['id'];
            $resultado=mysqli_query(con(), "SELECT * from pedidos WHERE id_user=$id AND estado='finalizado'");
            if(mysqli_num_rows($resultado)==0)
            {
                echo '<td colspan="5">'.'Todavia no hay pedidos finalizados'.'</td>';
            } else {
            while ($row=mysqli_fetch_array($resultado)){
                echo '<tr>';
                    echo '<td>'.$row["id"].'</td>';
                    echo '<td>'.$row["cliente"].'</td>';
                    echo '<td>'.$row["importe"].'</td>';
                    echo '<td>'.$row["estado"].'</td>';
                    echo '<td>'.'<a href=/images/'.$row["img_remito"].'>'.'<img src="/images/img_vect.png" alt="imagen">'.'</a>'.'</td>';
                echo "</tr>";
            };
            mysqli_free_result($resultado);
            };            
            ?>
            </table>
            <small>Para descargar el remito, clic derecho -> guardar enlace como...</small>
            <a class='enlace' href="mostrar_contenido.php">Volver al menu</a>
        </div>
    </main>
</body>
</html>