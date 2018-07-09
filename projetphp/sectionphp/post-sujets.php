<?php 

include_once "header.php";

?>
<?php if(!isset($_SESSION['id'])) {
  header("Location: connexion.php");
}
?>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<title>Liste des sujets</title>
	<link rel="stylesheet" href="../css/presentation.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">






</head>


          
          <div class="sections-forum text-center">
       			<ul class="list-navbar">
				<li><a href="presentation.php"><figure><img class="img-fluid rounded" src="../assets/img/tupac.jpg" width="80"><figcaption>Presentation</figcaption></figure></a></li>
				<li><a href="partage.php"><figure><img class="img-fluid rounded" src="../assets/img/bobmarley2.jpg" width="80"><figcaption>Partage musical</figcaption></figure></a></li>
				<li><a href="creations.php"><figure><img class="img-fluid rounded" src="../assets/img/mj.jpg" width="80"><figcaption>Creations</figcaption></figure></a></li>	
			</ul>

          </div>

	

	<div id="body-sujets">
		<div class="container">
		<div class="row">
			<div class=" col-sm-9 entetesujets">
			<button class="btn btn-primary" href="post-sujet.php">Nouveau Sujet</button>
		</div>

		</div>
		</div>
	</div>


        <div class="list-sujets-forum">
	<div id="banner-title" class="main-navbar text-center">
	<h3>Nouveau Sujet</h3>	
		</div>
		<form action="requete_post_sujet.php"method="POST">
		  <table class="table table-striped">
      <tr>
         <th colspan="2">Nouveau Topic</th>
      </tr>
      <tr>
         <td>Sujet</td>
         <td><input type="text" name="nom_sujet" size="50" maxlength="50" /></td>
      </tr>
      <tr>
         <td>Catégorie</td>
         <td>
            <select>
               <option>Presentation</option>
               <option>Partage Musical</option>
               <option>Creations</option>
            </select>
         </td>
      </tr>
<tr>
         <td>Message</td>
         <td><textarea name="tcontenu"></textarea></td>
      </tr>
      <tr>
      <tr>
         <td colspan="2"><input type="submit" name="tsubmit" value="Poster le Topic" /></td>
      </tr>
   </table>
</form>

 </div>
<?php include"info.php"; ?>




</body>
