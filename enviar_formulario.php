<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];

    $destinatarios = array("bengutjul2@gmail.com", "juliobendz13@gmail.com");
    $asunto = "Nuevo mensaje de $nombre";

    foreach ($destinatarios as $destinatario) {
        mail($destinatario, $asunto, $mensaje, "From: $correo");
    }

    // Puedes redirigir a una página de confirmación o hacer cualquier otra cosa después del envío.
    header("Location: confirmacion.html");
    exit();
}
?>
