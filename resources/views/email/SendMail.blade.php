<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio Mail</title>
</head>
<body>
    <p>{{$details[mensaje]}}</p>
    <ul>
        <li>Nombre:{{$details[nombre]}}</li>
        <li>Apellido:{{$details[apellido]}}</li>
        <li>Email: {{$details[email]}}</li>
        <li>Celular: {{$details[celular]}}</li>
       
    </ul>
</body>
</html>