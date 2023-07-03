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

<?php include 'Composants/Header.php';?>

<div class="d-flex align-items-center ajoutev" >
	<a href="Ajoutevènement.php" class="inscription-link movement">Ajouter un évènement</a>
</div>
<section class="intro ">
    <div class="bg-image h-100">
    <div class="mask d-flex align-items-center h-100">
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
            <div class="card_table">
                <div class="card-body p-0">
                <div class="table-responsive table-rounded">
                    <table class="table table-striped mb-0">
                    <thead style="background-color: #141517;" class="height">
                        <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Type</th>
                        <th scope="col">Description</th>
                        <th scope="col">Détails</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'Backend/cnxbdd.php';
                        $sql = $cnx->prepare("SELECT * FROM evenement");
                        $sql->execute();

                        foreach ($sql->fetchAll(PDO::FETCH_ASSOC) as $unevenement) {
                        echo "<tr>";
                        echo "<td>" . $unevenement['Date'] . "</td>";
                        echo "<td>" . $unevenement['Type'] . "</td>";
                        echo "<td>" . $unevenement['Description'] . "</td>";
                        echo "<td><a href='Detail.php'>Plus de détails</a></td>";
                        echo "</tr>";
                        }
                        ?>
                    </tbody>
                    </table>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<?php include 'Composants/Footer.php';?>
</body>
</html>