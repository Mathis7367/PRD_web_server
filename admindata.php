<?php

// Initialize the session
session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true ){
	
    header("location: login.php");
    exit;
}
if ('admin' != $_SESSION['username']){
    header("location: logout.php");
    exit;
}
// ignore_user_abort(TRUE);

// require('./phpMQTT.php');


// $server = '192.168.43.181';     // change if necessary
// $port = 1883;                     // change if necessary
// $username = 'PRD';                   // set your username
// $password = 'ECAM';                   // set your password
// $client_id = 'phpMQTT-subscriber'; // make sure this is unique for connecting to sever - you could use uniqid()

// $mqtt = new Bluerhinos\phpMQTT($server, $port, $client_id);
// if(!$mqtt->connect(true, NULL, $username, $password)) {
	// exit(1);
// }

// $mqtt->debug = true;

// $topics['bluerhinos/phpMQTT/examples/publishtest'] = array('qos' => 0, 'function' => 'procMsg');
// $mqtt->subscribe($topics, 0);

// while($mqtt->proc()) {

// }

// $mqtt->close();

// function procMsg($topic, $msg){
		// echo 'Msg Recieved: ' . date('r') . "\n";
		// echo "Topic: {$topic}\n\n";
		// echo "\t$msg\n\n";
// }

//system('D:\Python suscribe.py &');

//shell_exec("suscribe.py '".$post_id."' 'alert' >> paging.log &");

 ?>
<!DOCTYPE html>		<!-- DOCTYPE is use to put this webpage in HTML5 -->
<html>
    <head> 
        <meta charset="utf-8" />		<!-- This tag indicates the encoding used in your file is HTML5 -->
        <link rel="stylesheet" href="style1.css" />
        <title>Batiment autorégulé</title>		<!-- It's the title of the web page, this one is displays on the search engine like Google-->
    </head>
    
    <body>		<!-- Body of the page -->
        <div id="bloc_page">		<!-- The body is divided with several div to separate the organisation -->
            <header>		<!-- It's the header of the page -->
                <div id="titre_principal">		<!-- We will often use id inside tags to name each tag, it's useful for the css code --> 
                    <div id="logo">
                        <img src="images/logoEcam.png" alt="Logo ECAM" /> <!-- We insert the logo of ECAM-->
                          
                    </div>
					<h1>Batiment autorégulé</h1>  
                </div>
                
                <nav>		<!-- Inside this tag we create the drop-down menu to acces in differants pages -->
                    <ul>
						<li><a href="admindata.php">Admin</a></li>
                        <li><a href="admin.php">Accueil</a></li>
                        <li><a href="Teampage.php">Données</a></li>
                        <li><a href="Sourcespage.php">Climatisation</a></li>


                    </ul>
                </nav>
            </header>
			
            <div id="banniere_image">		<!-- We create a zone wwith an image and un button to go to the connexion page --> 
                <div id="banniere_description">
                    Déconnexion
                    <a href="logout.php" class="bouton_rouge">Déconnexion <img src="" alt="" /></a> <!-- When you click on the button, a link is made with the Page2.php file where is the code for the connexion page -->
                </div>
            </div>
            
            <section>
                <article>
                    <nav>
						<ul>
					
							<li><a href="users.php">Utilisateurs</a></li>
							<li><a href="logs.php">Logs</a></li>
						</ul>
					<nav>
					
					<h1><img src="images/database.png" alt="BDD Projet" class="ico_categorie" /></h1>
                    <p>
					<h1>Bienvenue  </h1></br></br>

					</p>
                </article>           
            </section>
            
            <footer>		<!-- We create a footer where we can find image for some social media and the name of each team member -->
                
                <div id="the_team">
                    <h1>Membres du projet :</h1>
                    <div id="list_team"> 
                        <ul>
                            <li><a href="#">Ayrton Kossi</a></li> 
                            <li><a href="#">Alexandre Roux</a></li>
                            <li><a href="#">Mathis Thomas</a></li>
                            
                        </ul>                      
                    </div>
                </div>
				<div id = adresse>
					<p>Ecam Strasbourg-Europe -- 2 allée de Madrid, 67300 Schiltigheim</p>
				</div>
            </footer>
        </div>
    </body>
</html>