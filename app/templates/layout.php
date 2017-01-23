<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Smarnubis</title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

        <!-- Style Menu-->	
        <link rel="stylesheet" type="text/css" media="all" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" media="all" href="<?= $this->assetUrl('css/stellarnav.css') ?>">

        <!-- Style Slider -->
        <link rel="stylesheet" type="text/css" href="<?= $this->assetUrl('css/jcarousel.basic.css') ?>">

        <!-- Intégration de Materialize -->
            <!--Import Google Icon Font-->
            <!-- <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
            <!--Import materialize.css-->
            <!-- <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/> -->
        
        <!-- CSS pour l'affichage des articles sur la HOME -->
        <link rel="stylesheet" href="<?= $this->assetUrl('css/styleArticles.css') ?>">
    
        <!-- Mon style -->
        <link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
    </head>

    <body>
        <header>
            <ul id="bttn-co">
                <li><button>Inscription</button></li>
                <li><button>Connexion</button></li>
            </ul>
        <!-- MENU -->
            <nav class="stellarnav"> 
                <ul>
                    <li><img src="<?= $this->assetUrl('img/logo-smarnubis.png') ?>" alt=""></li>
                    <li><a href="">Le Smarnubis</a>
                        <ul>
                            <li><a href="#">Qui sommes-nous?</a>
                                <ul>
                                    <li><a href="">Délégués régionaux</a></li> 
                                    <li><a href="">Conseil d'administration</a></li> 
                                    <li><a href="">Compte rendu des réunions</a></li> 
                                    <li><a href="">Statuts et réglément intérieur</a></li> 
                                    <li><a href="">Com. Statutaire</a></li> 
                                    <li><a href="">Histoire du SMARNU</a></li> 
                                </ul>
                            </li>
                            <li><a href="">Lettre Syndicale</a></li>
                            <li><a href="">Vigilance Risques !</a></li>
                            <li><a href="">Liste des partenaires</a></li>
                            <li><a href="">Liens</a></li>
                        </ul>
                    </li>

                    <li><a href="">Textes de Loi</a>
                        <ul>
                            <li><a href="">Nouveau textes</a></li>
                            <li><a href="">Textes européens</a></li>
                            <li><a href="">Emoluments</a></li>
                            <li><a href="">Gardes/Astreintes</a></li>
                        </ul>
                    </li>

                    <li><a href="">Dossiers ?(à trouver)</a>
                        <ul>
                            <li><a href="#">Dossiers</a>
                                <ul>
                                    <li><a href="">Statut P.H.</a></li>
                                    <li><a href="">Chirurgie - Plateaux - SROS3</a></li>
                                    <li><a href="">Primes</a></li>
                                    <li><a href="">Périnatalité</a></li>
                                    <li><a href="">Démographie</a></li>
                                    <li><a href="">Sécurité</a></li>
                                    <li><a href="">Retraites</a></li>
                                    <li><a href="">Permanence des soins</a></li>
                                    <li><a href="">Urgences</a></li>
                                    <li><a href="">Travail Additionnel (TTA)</a></li>
                                    <li><a href="">Réanimation</a></li>
                                    <li><a href="">FMC-EPP</a></li>
                                    <li><a href="">RTT / CET</a></li>
                                </ul>
                            </li>
                            <li><a href="">Présentation MAPAR</a></li>
                        </ul>
                    </li>

                    <li><a href="">Contact & Adhésion</a>
                        <ul>
                            <li><a href="">Contact</a></li>
                            <li><a href="">Adhésion</a></li>
                            <li><a href="">Agenda</a></li>
                        </ul>
                    </li>

                    <li><a href="">News</a>
                        <ul>
                            <li><a href="">Archives</a></li>
                            <li><a href="">Newsletter</a></li>
                            <li><a href="">News</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        <!-- SLIDER -->
                <div class="jcarousel-wrapper">
                <!--La taille originale des img est 600x400-->
                    <div class="jcarousel">
                        <ul>
                            <li><img src="<?= $this->assetUrl('img/slider-3.png') ?>" alt=""></li>
                            <li><img src="<?= $this->assetUrl('img/slider-4.png') ?>" alt=""></li>
                            <li><img src="<?= $this->assetUrl('img/slider-5.png') ?>" alt=""></li>
                        </ul>
                    </div>

                    <a href="#" class="fa fa-arrow-circle-left"></a>
                    <a href="#" class="fa fa-arrow-circle-right"></a>

                    <p class="jcarousel-pagination"></p>
                </div>     
        </header>
        
        <main>

			<?= $this->section('main_content') ?>

        </main>  

        <footer>
            <section>
                <h3>Contact</h3>
                    <div>
                        <p>Dr ANDRIAMIFIDY Louison</p>
                        <p><span>Portable :</span> 06 62 59 55 05</p>
                        <p><span>Fax :</span> 09 58 92 61 61</p>
                        <p><span>email :</span> anlou84@yahoo.fr</p>
                    </div>    

                    <div>
                        <p>Dr BRODEUR James</p>
                        <p><span>Hop. :</span> 02 48 48 48 48</p>
                        <p><span>Sec. :</span> 02 48 48 48 14</p>
                        <p><span>Fax :</span> 02 48 48 48 13</p>
                        <p><span>email:</span> james.brodeur@wanadoo.fr</p>
                    </div>
            </section>

            <section>
                <h3>Newsletter</h3>
                <p>Entrez votre adresse email pour recevoir les dernières news du Smarnubis !</p>
                <label>Inscription à la Newsletter </label><input type="text">
                <input type="submit" name="" value="Valider">
            </section>

            <aside>Smarnubis - Copyright</aside>
        </footer>

    <!-- Ancien Script Jquery en version 1.11.1 -->
        <!-- <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script> -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    	<script type="text/javascript" src="<?= $this->assetUrl('js/stellarnav.js') ?>"></script>
    	<script type="text/javascript">
    		jQuery(document).ready(function($) {
    			jQuery('.stellarnav').stellarNav({
    				theme: 'light'
    			});
    		});
    	</script>   
        <!-- <script type="text/javascript" src="js/jquery.js"></script> -->
        <script type="text/javascript" src="<?= $this->assetUrl('dist/jquery.jcarousel.js') ?>"></script>
        <script type="text/javascript" src="<?= $this->assetUrl('js/jcarousel.basic.js') ?>"></script> 
        <script type="text/javascript" src="<?= $this->assetUrl('js/articlesHome.js') ?>"></script> 

        <!-- Intégration Materialize pour les articles sur la Home -->
            <!-- <script type="text/javascript" src="js/materialize.js"></script> -->

    </body>
</html>

