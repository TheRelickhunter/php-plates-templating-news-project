<?php 
    require "vendor/autoload.php";
    require "DbLetturaArticoli.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quotidiano di Andrea Zappa</title>
</head>
<body>
    <?php 

    // SEZIONARE IL CODICE SOTTOSTANTE IN UN NUOVO FILE DEDICATO.

    $template=new League\Plates\Engine("templates");
    $letturaArticoli=new DbLetturaArticoli("mysql:dbname=quotidiano;host=127.0.0.1","root","");
    
    foreach ($letturaArticoli->selectData() as $articolo) {
        echo $template->render("articolo",["titoloArticolo"=>$articolo["titoloArticolo"],
                                            "contenutoArticolo"=>$articolo["contenutoArticolo"],
                                            "id"=>$articolo["id"]
                                        ]);

       
    }
    ?>
</body>
</html>