<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        body{
            background-color: blueviolet;
        }

        .editarsvg{
            width: 60%;
            margin: auto;
        }

        .editarsvg path{
            stroke: greenyellow; /*Cambiar color de contorno del circulo*/ 
            stroke-width: 2px; /* Cambiar el ancho de la linea del circlo */
        }

        .editarsvg :hover{ /** clase css para el cambio de color en el control del boton  */
            fill: black;
            cursor: pointer;
            stroke: gray;
        }

    </style>
    <title>imagen SVG</title>
</head>
<body>