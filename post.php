<?php
// Generar una ID única
$id = uniqid();

// Obtener los datos del formulario
$Nombre = $_POST['nombre'];
$Apellido = $_POST['Apellido'];
$telefono = $_POST['telephone'];

// Crear el cuerpo del mensaje con la ID y los datos del formulario
$cuerpo = "ID de formulario: $id\n\nNombre: $nombre\nEmail: $email\nMensaje: $mensaje";

// Enviar el correo electrónico
mail('reyvegetta1234@gmail.com', 'Nuevo formulario', $cuerpo);

// Mostrar un mensaje de éxito al usuario
echo 'Tu formulario ha sido enviado con éxito. Tu ID es: ' . $id;
?>

