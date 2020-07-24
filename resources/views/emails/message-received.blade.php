<!DOCTYPE html>
<html>
<head>
    <title>Mensaje recibido</title>
</head>
<body>
    
    <p>Recibiste un mensaje de: {{ $msg['name'] }} con el correo {{ $msg['email'] }}</p>
    <p><stron>Asunto:</strong> {{ $msg['subject'] }}</p>
    <p><stron>Contenido:</strong> {{ $msg['content'] }}</p>


</body>
</html>