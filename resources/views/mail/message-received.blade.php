<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensaje recibido</title>
</head>

<body>
    <p>Recibiste un mensaje del sistema automatizado</p>
    <p><strong>Nombre:</strong> {{ $contact['name'] }}</p>
    <p><strong>Email:</strong> {{ $contact['email'] }}</p>
    <p><strong>Asunto:</strong> {{ $contact['case'] }}</p>
    <p><strong>Mensaje:</strong> {{ $contact['message'] }}</p>
</body>

</html>
