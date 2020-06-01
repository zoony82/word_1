<!DOCTYPE html>
    <head>
        <meta charset='utf-8'>
    </head>
    <body>
    <?php
    $var = "hello";
    $output = $var." world";
    echo $output
    ?>

    <h1>web</h1>
    <li><a href = "index.php?id=html">HTML</a></li>
    <li><a href = "index.php?id=css">CSS</a></li>

    <h2>
        <?php
        if(isset($_GET['id'])){
            echo $_GET['id'];
        }else {
            echo 'welcome';
        }
        ?>
    </h2>

    <h1>function</h1>
        <?php
        if(isset($_GET['id'])){
            echo file_get_contents("data/".$_GET['id']);
        } else {
            echo 'welcome';
        }        
        ?>
    </body>
</html>


<!-- ctrl+shift+b -->