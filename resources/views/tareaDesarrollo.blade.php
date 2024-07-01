<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea1.5</title>
</head>
<body>
    <div>
        <h1>Bienvenido a Tarea1.5</h1>
        <p>Nombre del alumno: Brian Rodolfo Manriquez Carrillo</p>
        <p>Hoy es el día {{ \Carbon\Carbon::now()->format('d/m/Y') }}</p>
        <p>Y la hora es {{ \Carbon\Carbon::now()->format('H:i:s') }}</p>
    </div>
</body>
</html>
