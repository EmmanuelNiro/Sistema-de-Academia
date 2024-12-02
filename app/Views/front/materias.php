<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tables.css">
    <title>Document</title>
</head>
<body>
    

<div class="container">

<div class="row">
    <div class="col">
        <h1>Materias</h1>
       
        
    </div>
</div>

    <div class="row">
        <div class="col">
            <table class="table table-striped table-bordered">
                <thead>
                    <th>idMateria</th>
                    <th>nombre</th>
                    <th>planEstudios</th>
                </thead>
                <tbody>
                    <?php foreach($materias as $key) : ?>
                        <tr>
                        <td><?=$key->idMateria ?></td>
                        <td><?=$key->nombre ?></td>
                        <td><?=$key->planEstudios ?></td>
                        <td>
                        
                        </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <div class="pagination">
            <a href="#">&laquo;</a>
            <a href="#">1</a>
            <a href="#" class="current-page">2</a>
            <a href="#">3</a>
            <a href="#">&raquo;</a>
        </div>
        </div>
    </div>
</div>



</body>
</html>