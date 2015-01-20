<?php
include_once("./smtp_auth.php");
include ("./Conexion.php");
             

$nombrePedido = $_REQUEST["pedidoNombre"];
$emailPedido = $_REQUEST["pedidoEmail"];
$telPedido = $_REQUEST["pedidoTel"];
$dirPedido = $_REQUEST["pedidoDir"];
$dudasPedido = $_REQUEST["pedidoDudas"];
$idProductoPedido = $_REQUEST["productId"];
$nombreProductoPedido = $_REQUEST["productName"];

$sql = "INSERT INTO `pedidos`(`id_producto`,`nombre_producto`,`nombre_comprador`"
        . ",`email_comprador`,`telefono_comprador`,`direccion_comprador`,`dudas`) "
        . "VALUES ('" . $idProductoPedido . "','" . $nombreProductoPedido . "',"
        . "'" . $nombrePedido . "','" . $emailPedido . "','" . $telPedido . "',"
        . "'" . $dirPedido . "','" . $dudasPedido . "')";

$conn = new Conexion();
$conn->conectar();
try {
    $res = $conn->consulta($sql);
    $conn->desconectar();
    $tabla["respuesta1"] = "si";
} catch (Exception $e) {
    $tabla["respuesta1"] = "no";
}

$SMTPservidor = "mail.mitanash.com";
$SMTPusuario = "contacto@mitanash.com";
$SMTPclave = "Lauriz1053803970";
$SMTPpuerto = "25";

$destinatario = "info@mitanash.com";
$asunto = "Nuevo Pedido de Mitanash";
$body = "<html lang='es'>
                    <HEAD>
                            <TITLE>Pedido de Mitansh</TITLE>
                     </HEAD>
                        <BODY>
                            <div>
                            <center>
                            <h1>Pedido de Mitansh</h1>
                                <img src='http://mitanash.com/images/others/logo.png'/>
                                    <p>Acaban de hacer un pedido y preguntar por el producto llamado: <strong>$nombreProductoPedido</strong></p>
                                    <p>Los datos del comprador son los siguientes:</p>
                                    <p><strong>Nombre:</strong> $nombrePedido</p>
                                    <p><strong>Email:</strong> $emailPedido</p>
                                    <p><strong>Telefono:</strong> $telPedido</p>
                                    <p><strong>Direccion:</strong> $dirPedido</p>
                                    <p><strong>Dudas:</strong> $dudasPedido</p>    
                                    <p><strong>ESTAMOS HACIENDO PLATICA CON MITANASH</strong></p>
                            </center>
                            </div>
                        </BODY>
                    </html>";


$remitente = "Mitanash tienda de accesorios";
$remitenteemail = "contacto@mitanash.com";
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$smtp = new eSmtp("$SMTPservidor", $SMTPpuerto);
$smtp->setAuth("$SMTPusuario", "$SMTPclave");
$smtp->setFrom("$remitente", "$remitenteemail");
$smtp->isHtml = 1;
$smtp->addRecipient("", "$destinatario", "to");
$smtp->setSubject("$asunto");
$smtp->setBody("$body");
$smtp->isDebug = 0;


if ($smtp->connect()) {
    $success = $smtp->send();
    $smtp->disconnect();
}

$destinatario2 = "$emailPedido";
$asunto2 = "Nuevo pedido en mitansh tienda de accesorios";
$body2 = "<html lang='es'>
                    <HEAD>
                            <TITLE>Pedido Mitansh</TITLE>
                     </HEAD>
                        <BODY>
                            <div>
                            <center>
                            <h1>Hiciste un pedido en Mitanash</h1>
                                <img src='http://mitanash.com/images/others/logo.png'/>
                                    <p>Hola gracias por pedir cosas por la pagina web de mitanash.</p>
                                    <p>En menos de 24 horas despacharemos tu pedido primero te llamaremos a 
                                    darte las instrucciones para que tu producto llegue satisfactoriamente.</p>
                                    <p>Estos son tus datos:</p>
                                    <p><strong>Nombre:</strong> $nombrePedido</p>
                                    <p><strong>Email:</strong> $emailPedido</p>
                                    <p><strong>Telefono:</strong> $telPedido</p>
                                    <p><strong>Direccion:</strong> $dirPedido</p>
                                    <p><strong>Dudas:</strong> $dudasPedido</p>  
                            </center>
                            </div>
                        </BODY>
                    </html>";


$remitente2 = "Mitanash tienda de accesorios";
$remitenteemail2 = "contacto@mitanash.com";
$headers2 = "MIME-Version: 1.0\r\n";
$headers2 .= "Content-type: text/html; charset=iso-8859-1\r\n";

$smtp2 = new eSmtp("$SMTPservidor", $SMTPpuerto);
$smtp2->setAuth("$SMTPusuario", "$SMTPclave");
$smtp2->setFrom("$remitente2", "$remitenteemail2");
$smtp2->isHtml = 1;
$smtp2->addRecipient("", "$destinatario2", "to");
$smtp2->setSubject("$asunto2");
$smtp2->setBody("$body2");
$smtp2->isDebug = 0;

if ($smtp2->connect()) {
    $success2 = $smtp2->send();
    $smtp2->disconnect();
}
if ($success && $success2) {
    $tabla["respuesta"] = "si";
} else {
    $tabla["respuesta"] = "no";
}
echo json_encode($tabla);
