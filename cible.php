<html>



<p>Bonjour !</p>


<p>Je sais comment tu t'appelles, hé hé. Tu t'appelles <?php echo $_POST['pseudo_user']; ?> !</p>


<form method="post" action="cible.php">
  <p>
    <label for="prenom">Votre prenom</label> : <input type="text" name="prenom" id="1" />
<input type="submit" name="Envoyer" />

 $req = $bdd->prepare('INSERT INTO nom(prenom) VALUES(:prenom);
$req->execute(array(
    'prenom' => $prenom));

  </p>
 </form>

 <html>