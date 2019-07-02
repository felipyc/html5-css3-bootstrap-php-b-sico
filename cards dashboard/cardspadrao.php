<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        
        <link rel="stylesheet" href="cardsestilo.css">
    </head>
    <body>
        <div id="menu-left">
            <div id="img-user">
                <img src="usuario-masc.png" alt="">
            </div>
            <div>
                <a href="">Amigos</a>
            </div>
            <div>
                <a href="">Configurações</a>
            </div>
            <div>
                <a href="">Termos</a>
            </div>
            <div>
                <a href="">Sair</a>
            </div>
        </div>
        <div id="menu-right">
            <div id="menu-right-header">
                <h1>Amigos</h1>
            </div>
            <div id="menu-right-body">
                <?php
                    $foto_smart1 = "usuario-fem.png";
                    $foto_smart2 = "usuario-masc.png";
                    for($a = 1;$a <= 10;$a++){
                        if($a % 2 == 0){
                            $foto_smart = $foto_smart1 = "usuario-fem.png";
                        }
                        else{
                            $foto_smart = $foto_smart2 = "usuario-masc.png";
                        }
                        echo "
                            <div class='card'>
                                <div class='card-header'>
                                    <img src='$foto_smart' alt='' style='width:256px;height: 256px;'>
                                    <h1>Card $a</h1>
                                </div>
                                <div class='card-body'>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ac pellentesque tortor. Nulla facilisi. Nunc pellentesque orci eget sapien luctus, non malesuada odio tincidunt. Sed nec eleifend nisl. Proin hendrerit posuere justo, non fringilla augue aliquam ut. Fusce lacinia tortor sit amet felis condimentum vehicula. Praesent a scelerisque lorem. Etiam vel pretium nunc.
                                    </p>
                                </div>
                            </div>
                        ";
                    }
                ?>
            </div>
            <div style="clear: both;"></div>
        </div>
    </body>
</html>