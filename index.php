<?php 

$db = new PDO('mysql:host=localhost;dbname=cours_php', 'root', '');


?>

<?php if (!isset($_GET['page'])) $_GET['page'] = 'home'; ?>
<!--Si la valeur n'existe pas attribue la valeur home par défault -->

<!DOCTYPE html>
<html lang = "fr">

<head>
    <meta charset = "UTF-8">
    <meta name    = "viewport" content = "width=device-width, initial-scale=1.0">
    <link rel     = "stylesheet" href  = "style.css">
    <!-- Font Awesome -->
    <link href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel = "stylesheet" />
    <!-- Google Fonts -->
    <link href = "https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel = "stylesheet" />
    <!-- MDB -->
    <link href = "https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.1.0/mdb.min.css" rel = "stylesheet" />
    <title>Const Temp</title>
</head>

<?php include('menu.php'); ?>
<br>
<br>
<?php if (file_exists('pages/' . $_GET['page'] . '.php')) include('pages/' . $_GET['page'] . '.php');
else echo "404 La page " . $_GET['page'] . " n'existe pas."; ?>



<?php include('footer.php'); ?>