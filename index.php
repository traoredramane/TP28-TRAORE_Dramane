<?php include 'fonctions.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Page d'accueil</title>
</head>
<body>
    <?php 
    include 'header.php'; 
    ?>
    <section class="hero">
        <div class="hero-content">
            <h1>SITES TOURISTIQUES BURKINA</h1>
        </div>
    </section>


<section class="ville">
<?php afficherImageVilleParNom("BOBO-DIOULASSO");?>
    <div class="infos">

  
        <h1>   <?php echo afficherNomVilleParID(1)?></h1>
        <p> <?php echo afficherDescriptionVilleParNom("BOBO-DIOULASSO");?></p>
        <a href="bobo.php" class="bouton">Voir plus</a>
    </div>
</section>

<section class="ville">
        <div class="infos">
        <h1>   <?php echo afficherNomVilleParID(2)?></h1>
        <p> <?php echo afficherDescriptionVilleParNom("OUAGADOUGOU");?></p>
        <a href="ouaga.php" class="bouton">Voir plus</a>
            </div>
            <?php afficherImageVilleParNom("OUAGADOUGOU");?>
  
</section>

<section class="ville">
<?php afficherImageVilleParNom("BANFORA");?>
    <div class="infos">
    <h1>   <?php echo afficherNomVilleParID(3)?></h1>
    <p> <?php echo afficherDescriptionVilleParNom("BANFORA");?></p>    
    <a href="banfora.php" class="bouton">Voir plus</a>
    </div>
</section>


    
  
<?php 
    include 'footer.php'; 
    ?>
</body>
</html>
