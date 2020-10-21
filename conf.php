
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
<!-- ajouter un icone ici --><link rel="icon" href="">
    <link rel="stylesheet" href="./styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <!-- menu -->
    <header>
        <ul class="nav-list">
            <li class="nav-item"><a class="deco" href="index.html">Accueil</a></li>
            <li class="nav-item"><a class="deco" href="histoire.html">L'histoire</a></li>
            <li class="nav-item"><a class="deco" href="evo.html">L'évolution</a></li>
            <li class="nav-item"><a class="deco" href="fonctionnement.html">Fonctionnement</a></li>
            <li class="nav-item"><a class="deco" href="utilisation.html">Utilisation</a></li>
            <li class="nav-item"><a class="deco" href="materiel.html">Matériels</a></li>
            <li class="nav-item"><a class="deco" href="contact.html">Contact</a></li>
        </ul>
    </header>

    <!-- page principale -->
    <main>
    <?php include("header.php"; ?>
<br/>

<br/><br/>


<div id="Formulaire de contact"></div>


<br/>

<?php $ps=htmlentities($_POST["Pseudo"]);
			$ma=htmlentities($_POST['Mail']);
			$ma=htmlentities($_POST['Message']);
			mail("xxx@gmail.com","$su", "De:$ps/n/n$ma/n/n$u/n/n$me",""),?>
			<script src="./js/conf.js"></script> 
   
			
			   
     <div class="container">

Merci d'avoir pris le temps de nous écrire, vous recevrez une réponse très prochainement, en attendant vous pouvez retourner à l'accueil du site en cliquant sur le bouton ci-dessous.

</div> 
<div class=bouton><a href="index.html">Retour à l'accueil</a></div>   
    </main>
    <!-- bas de page -->
    <footer>
        <ul class="nav-list">
            <li class="nav-item"><a class="deco" href="https://goo.gl/maps/5jtBrYVvBaeCcDZ36">Notre adresse postale</a></li>
            <li class="nav-item"><a class="deco" href="accueil.html">Plan du site </a></li>
            
        </ul>
    </footer>


    <!-- fichiers javascripts -->
  
   
</body>
</html>>