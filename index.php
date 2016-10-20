<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lujinha do Brimo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/meuestilo.css">
</head>
<body>
    <div class="container">
        <div class="sup">
            <tr>
                <td><a href="<?php echo $_SERVER["PHP_SELF"]."?id=1" ?>">Conteúdo 1</a></td>
                <td><a href="<?php echo $_SERVER["PHP_SELF"]."?id=2" ?>">Conteúdo 2</a></td>
            </tr>
        </div>
        <div class="info">
            <?php
                if(isset($_REQUEST["id"])){
                    switch($_REQUEST["id"]){
                        case 1:
                            //echo "<h2>Valor clicado foi o 1 seu porra</h2>";
                            include "conteudo1.inc";
                            break;
                        case 2:
                            echo "<h2>Valor clicado foi o 2</h2>";
                            break;
                        default:
                            echo "<h2>Clique em algum conteúdo</h2>";
                    }
                }
            ?>
        </div>               
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>