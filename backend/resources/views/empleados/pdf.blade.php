<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte de Guardería</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #ffcc00;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #ffcc00;
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:nth-child(odd) {
            background-color: #e6f7ff;
        }
        img {
            display: block;
            margin: 0 auto 20px;
            max-width: 100px;
        }
    </style>
</head>
<body>
    <img src="./favicon.png" alt="">
    <h1>Reporte de Productos</h1>
    <table>
        <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripción</th>
            <th scope="col">Precio</th>
            <th scope="col">Estado</th>
            <th scope="col">Fecha de Vencimiento</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($productos as $producto)
            <tr>     
                <td>{{ $producto->id }}</td>          
                <td>{{ $producto->nombre }}</td>
                <td>{{ $producto->descripcion }}</td>
                <td>{{ $producto->precio }}</td>
                <td>{{ $producto->status }}</td>
                <td>{{ $producto->fecha_vencimiento }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>
