<!DOCTYPE html>
<html>
<head>
      <title>Solibio Add Recette</title>
      <meta charset="utf-8">
      <link href="style.css" rel="stylesheet" media="all" type="text/css"> 
</head>
<body>
      <img align="left" src="image/iconelittle.png" alt="icone" />
      <h1 align="left"> <font size="10" face="Lucida Sans Unicode" color="black">Solibio</font></h1>
      <h2><font size="6" face="Lucida Sans Unicode" color="black">&dArr; ECRIVEZ VOTRE RECETTE &dArr;</font></h2>
      <img src="image/legume2.png" alt="legume2" />
<nav>
      <ul>
          <li><a href="index.html">Accueil</a></li>
          <li><a href="publication.html">Publication</a></li>
          <li><a href="compte.html">Compte</a></li>
      </ul>
</nav>
<center>

<form method="post" action="preview.php">
              <article class="film_review">
              <section class="main_review">
                <p><?php echo $_POST['catégorie']; ?></p>
                <p><?php echo $_POST['Name']; ?></p>
                <p>Posté le<time datetime="2015-05-16 19:00"></time> par <?php echo $_POST['pseudo']; ?></p>

                <br />
                <p>Ingrédients: <?php echo $_POST['Ingrédient']; ?></p>

                <br />
                <p>Etape de la racette: <?php echo $_POST['Etape']; ?></p>

                <br />
                <p>Posté le<time datetime="2019-05-22 09:00"></time> par <?php echo $_POST['pseudo']; ?></p>

                <?php
                try
                {
                  $bdd = new PDO('mysql:host=localhost;dbname=createrecette;charset=utf8', 'root', '');
                }
                catch(Exception $e)
                {
                        die('Erreur : '.$e->getMessage());
                }

                // On ajoute une entrée dans la table
                $bdd->exec('INSERT INTO createrecette(pseudo, Etape, Ingrédient, Name, catégorie)');
                ?>


              <?php
              $req = $bdd->prepare('INSERT INTO createrecette(pseudo, Etape, Ingrédient, Name, catégorie) VALUES:pseudo, :Etape, :Ingrédient, :Name, :catégorie)');
              $req->execute(array(
                'pseudo' => $pseudo,
                'Etape' => $Etape,
                'Ingrédient' => $Ingrédient,
                'Name' => $Name,
                'catégorie' => $catégorie,
                ));
              ?>


</form>
</center>
</body>
</html>
            