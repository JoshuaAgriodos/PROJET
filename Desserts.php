<!DOCTYPE html>
<html>
<head>
      <title>Solibio Desserts</title>
      <meta charset="utf-8">
      <link href="style.css" rel="stylesheet" media="all" type="text/css"> 
</head>
<body>
      <p> <img align="left" src="image/iconelittle.png" alt="icone" /> </p>
     	<h1 align="left"> <font size="10" face="Lucida Sans Unicode" color="black">Solibio</font> </h1>
      <p>
      <h2> <font size="6" face="Lucida Sans Unicode" color="black">&dArr; Recettes De Desserts &dArr;</font> </h2>
      </p>

      <nav>
    	     <ul>
        	     <li> <a href="index.html">Accueil</a> </li>
        	     <li> <a href="publication.html">Publication</a> </li>
        	     <li> <a href="compte.html">Compte</a> </li>
   	 	      </ul>
      </nav>
      <center>
              <article class="film_review">
              <section class="main_review">
                <p><?php echo $_POST['Name_recette']; ?></p>
                <p>Posté le<time datetime="2015-05-16 19:00">16 Mai</time> par <?php echo $_POST['pseudo_user']; ?></p>
              </section>
              
            </form>
      </center>
</body>
<html>
