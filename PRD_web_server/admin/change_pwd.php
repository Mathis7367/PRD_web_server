<?php
// Initialize the session
session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true ){
	
    header("location: ../login.php");
    exit;
}
if ('admin' != $_SESSION['username']){
    header("location: ../login.php");
    exit;
}

?>
 
<!DOCTYPE html>		<!-- DOCTYPE is use to put this webpage in HTML5 -->
<html>
    <head> 
        <meta charset="utf-8" />		<!-- This tag indicates the encoding used in your file is HTML5 -->
        <link rel="stylesheet" href="../style1.css" />
        <title>Bâtiment autorégulé</title>		<!-- It's the title of the web page, this one is displays on the search engine like Google-->
    </head>
    
    <body>		<!-- Body of the page -->
        <div id="bloc_page">		<!-- The body is divided with several div to separate the organisation -->
            <header>		<!-- It's the header of the page -->
                <div id="titre_principal" >		<!-- We will often use id inside tags to name each tag, it's useful for the css code --> 
                    <div id="logo">
                        <img src="../images/logoEcam.png" alt="Logo ECAM" /> <!-- We insert the logo of ECAM-->
                          
                    </div>
					<h1>Batiment autorégulé </h1>  
                </div>
            </header>
				<nav >		<!-- Inside this tag we create the drop-down menu to acces in differants pages -->
                    <ul>

						<li><a href="admindata.php">Admin</a></li>
                        <li><a href="admin.php">Accueil</a></li>
                        <li><a href="sensor_admin.php">Données</a></li>
                        <li><a href="climatisation_auto.php">Climatisation</a></li>
                        <li><a href="change_pwd.php">utilisateur</a></li>

					
                    </ul>
				
                </nav>
            <div id="banniere_image">		<!-- We create a zone wwith an image and un button to go to the connexion page --> 
                <div id="banniere_description">
                    Déconnexion
                    <a href="../logout.php" class="bouton_rouge">Déconnexion <img src="" alt="" /></a> <!-- When you click on the button, a link is made with the Page2.php file where is the code for the connexion page -->
                </div>
            </div>
            
            <section>
                <article>
					<form method="post" action="../pwd_update.php"> <!-- We use the same thing that we learnt in database labsession with e connexion part -->
						<h3 align="center">Changement de mot de passe</h3><br><br>
						<label for="pass">Ancient Mot de passe :</label>
							<input type="password" name="apwd" id="pass" required/>	
							
					
						<label for="pass">Nouveau Mot de passe :</label>
						<input type="password" name="pwd" id="pass" required/>	
						<input type="submit" value="Modifier" />
					</p><br>
				</form>
                    
				



					</p>
                </article>           
            </section>
            
            <footer>		<!-- We create a footer where we can find image for some social media and the name of each team member -->
                
                <div id="the_team">
                    <h1>Membres du projet :</h1>
                    <div id="list_team"> 
                        <ul>
                            <li><a href="https://www.linkedin.com/in/ayrton-kossi-50980012a/">Ayrton Kossi</a></li> 
                            <li><a href="https://www.linkedin.com/in/alexandre-roux-2969b9151/">Alexandre Roux</a></li>
                            <li><a href="https://www.linkedin.com/in/mathis-thomas-5b9b62172/">Mathis Thomas</a></li>
                            
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
