<?php 

include_once "header.php";

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

	</div>

	<div id="body-sujets">
		<div class="container">
		<div class="row">
			<div class=" col-sm-9 entetesujets">
			<a href="post-sujets.php"  class="nouveau" >Nouveau Sujet</a>
		</div>

		</div>
		</div>
	</div>


        <div class="list-sujets-forum">
	<div id="banner-title" class="main-navbar text-center">
	<h3>Presentations</h3>	
		</div>
		  <table class="table table-striped">
    <thead>
      <tr>
        <th>Liste des sujets</th>
        <th>Reponses</th>
        <th>Dernier message</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><a class="membre-sujet" href="">[membres]</a><a class="nom-sujet" href="presentation-message.php"><b>Bienvenue dans la page presentation</b></a>
        <p class="date-sujet">le 28/06/2018 </p>

        </td>
        <td><span class="nbdereponses">90</span> 
        	<span style="color:grey;">reponses</span></td>
        <td>
        par<a class="membre-sujet" href="">[membres]</a>
        <p class="date-sujet">le 28/06/2018 </p>
</td>
      </tr>
            <tr>
        <td><a class="membre-sujet" href="">[membres]</a><a class="nom-sujet" href="presentation-message.php"><b>Bienvenue dans la page presentation</b></a>
        <p class="date-sujet">le 28/06/2018 </p>

        </td>
        <td><span class="nbdereponses">90</span> 
        	<span style="color:grey;">reponses</span></td>
        <td>
        par<a class="membre-sujet" href="">[membres]</a>
        <p class="date-sujet">le 28/06/2018 </p>
</td>
      </tr>

    </tbody>
  </table>

 </div>
<?php include"info.php"; ?>




</body>
