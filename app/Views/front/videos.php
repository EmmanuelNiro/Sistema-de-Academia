<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tablas.css">
    <title>Document</title>
</head>
<body>
<div class="container">

<div class="row">
    <div class="col">
        <h1>Videos</h1>
     
        
    </div>
</div>

    <div class="row">
        <div class="col">
            <table class="table table-striped table-bordered">
                <thead>
                    <th>idVideo</th>
                    <th>titulo</th>
                    <th>duracion</th>
                    <th>archivoVideo</th>
                </thead>
                <tbody>
                    <?php foreach($videos as $key) : ?>
                        <tr>
                        <td><?=$key->idVideo ?></td>
                        <td><?=$key->titulo ?></td>
                        <td><?=$key->duracion ?></td>
                        <td><?=$key->archivoVideo ?></td>
                        <td>
                            
                        
                        </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

        </div>  <div class="pagination">
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
<link rel="stylesheet" href="tablas.css">