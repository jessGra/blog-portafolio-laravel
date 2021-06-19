<!DOCTYPE html>
<html lang="es">
<head>
    <title>Mensaje Recibido</title>
</head>
<body>
    <P>Recibiste un correo de: {{$correo['name']}} -- {{$correo['email']}}</P>
    <p><strong>Asunto: </strong>{{$correo['subject']}}</p>
    <p><strong>Contenido: </strong>{{$correo['content']}}</p>
</body>
</html>