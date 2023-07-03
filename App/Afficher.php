<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'Composants/lien.php';?>

        <title>Document</title>
        <script type="text/javascript"></script>  
</head>
<body>
<?php
        include 'Backend/cnxbdd.php';
        $sql = $cnx->prepare("select * from evenement");
        $sql->execute();
        foreach($sql->fetchAll(PDO::FETCH_ASSOC) as $unCine)
        {
            echo "<table class='divCine'>";
            echo "<tr>".$unCine['Type']."<tr>";
            echo "<tr>".$unCine['Date']."</tr>"; 
            echo "<tr>".$unCine['Description']."</t>";
            echo "<table>";
        }
    ?>

    </div> 
</body>
</html>