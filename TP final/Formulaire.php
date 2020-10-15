<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="formulaire.php" method="get">
        <label for="name">Enter your name: </label>
        <input type="text" id="name"  name="name">
        <input type="submit1">
    </form>
</body>
<?php
    if(isset($_GET["name"])){
    echo "Ma valeur est: $_GET(name)";
    
}else{
    echo "Le formulaire n'existe pas";
}
?>
</html>