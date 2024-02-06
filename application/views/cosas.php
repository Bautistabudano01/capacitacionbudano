<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Capacitacion.</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        #container {
            max-width: 800px;
            margin: 0 auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

    
        form {
            margin-bottom: 20px;
        }

        h2 {
            margin-bottom: 10px;
        }

        /* Estilo para la fila que contiene el formulario y la tabla */
        .form-table-row {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        /* Estilo para el formulario */
        .form-container {
            width: 45%; 
        }

      
        .hidden-id {
            display: none;
        }
    </style>
</head>
<body>

<div id="container">
    <!-- Título del listado -->
    <h2>Lista de cosas</h2>

    <!-- Fila que contiene el formulario y la tabla -->
    <div class="form-table-row">
        <!-- Formulario -->
        <div class="form-container">
            <?php $this->load->view('formulario'); ?>  
        </div>

        <!-- Tabla de cosas -->
        <table>
            <tr>
              
                <th class="hidden-id">ID</th>
                <th>Nombre</th>
                <th>Cantidad</th>
            </tr>

            <?php foreach ($cosasmodel as $cosa): ?>
                <tr>
                    <!-- Agrega una clase para ocultar la columna de ID -->
                    <td class="hidden-id"><?php echo $cosa->id; ?></td>
                    <td><?php echo $cosa->nombre; ?></td>
                    <td><?php echo $cosa->cantidad; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>
</body>
</html>
