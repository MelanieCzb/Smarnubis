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
        
        <!-- Ajout du css pour la page type -->
        <link rel="stylesheet" type="text/css" href="<?= $this->assetUrl('css/stylePage.css') ?>">

        <!-- Style accordéon -->
        <link rel="stylesheet" type="text/css" href="<?= $this->assetUrl('css/styleAccordeon.css') ?>">

        
        <!-- CSS pour l'affichage des articles sur la HOME -->
        <link rel="stylesheet" href="<?= $this->assetUrl('css/styleArticles.css') ?>">
    
        <!-- Mon style -->
        <link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
    </head>

    <body>
                <header>
            <ul id="bttn-co">
            <?php if (isset($_SESSION['user'])) { ?>
                <li><a href="<?= $this->url('logout') ?>"><button>Deconnexion</button></a></li>
            <?php }else{ ?>
                <li><a href="<?= $this->url('inscription') ?>"><button>Inscription</button></a></li>
                <li><a href="<?= $this->url('login') ?>"><button>Connexion</button></a></li>
            <?php } ?>
            </ul>
        <!-- MENU -->
            <nav class="stellarnav"> 
                <ul>
                    <li><a href="<?= $this->url('home') ?>"><img src="<?= $this->assetUrl('img/logo-smarnubis.png') ?>" alt=""></a></li>
                    <li><a href="<?= $this->url('home') ?>">Le Smarnubis</a>
                        <ul>
                            <li><a href="#">Qui sommes-nous?</a>
                                <ul>
                                    <li><a href="<?= $this->url('deleguesRegionaux') ?>">Délégués régionaux</a></li> 
                                    <li><a href="<?= $this->url('conseilAdministration') ?>">Conseil d'administration</a></li> 
                                    <li><a href="<?= $this->url('crReunion') ?>">Compte rendu des réunions</a></li> 
                                    <li><a href="<?= $this->url('regInterieur') ?>">Statuts et réglément intérieur</a></li> 
                                    <li><a href="<?= $this->url('comStatutaire') ?>">Com. Statutaire</a></li> 
                                    <li><a href="<?= $this->url('histoireSmarnu') ?>">Histoire du SMARNU</a></li> 
                                </ul>
                            </li>
                            <li><a href="<?= $this->url('lettreSyndicale') ?>">Lettre Syndicale</a></li>
                            <li><a href="<?= $this->url('vigilanceRisques') ?>">Vigilance Risques !</a></li>
                            <li><a href="#">Listes des partenaires</a>
                                <ul>
                                    <li><a href="<?= $this->url('conseilOrdre') ?>">Conseil de l'Ordre</a></li> 
                                    <li><a href="<?= $this->url('sfar') ?>">SFAR</a></li> 
                                </ul>
                            </li>
                            <li><a href="<?= $this->url('liens') ?>">Liens</a></li>
                        </ul>
                    </li>

                    <li><a href="">Textes de Loi</a>
                        <ul>
                            <li><a href="<?= $this->url('nouveauxTextes') ?>">Nouveau textes</a></li>
                            <li><a href="<?= $this->url('textesEuropeens') ?>">Textes européens</a></li>
                            <li><a href="<?= $this->url('emoluments') ?>">Emoluments</a></li>
                            <li><a href="<?= $this->url('gardesAstreintes') ?>">Gardes/Astreintes</a></li>
                        </ul>
                    </li>

                    <li><a href="">Documentation</a>
                        <ul>
                            <li><a href="#">Dossiers</a>
                                <ul>
                                    <li><a href="<?= $this->url('statutPH') ?>">Statut P.H.</a></li>
                                    <li><a href="<?= $this->url('chirurgiePlateaux') ?>">Chirurgie - Plateaux - SROS3</a></li>
                                    <li><a href="<?= $this->url('primes') ?>">Primes</a></li>
                                    <li><a href="<?= $this->url('perinatalite') ?>">Périnatalité</a></li>
                                    <li><a href="<?= $this->url('securite') ?>">Sécurité</a></li>
                                    <li><a href="<?= $this->url('retraites') ?>">Retraites</a></li>
                                    <li><a href="<?= $this->url('permanenceSoins') ?>">Permanence des soins</a></li>
                                    <li><a href="<?= $this->url('urgences') ?>">Urgences</a></li>
                                    <li><a href="<?= $this->url('travailAdditionnel') ?>">Travail Additionnel (TTA)</a></li>
                                    <li><a href="<?= $this->url('reanimation') ?>">Réanimation</a></li>
                                    <li><a href="<?= $this->url('fmcEpp') ?>">FMC-EPP</a></li>
                                    <li><a href="<?= $this->url('rttCet') ?>">RTT / CET</a></li>
                                </ul>
                            </li>
                            <li><a href="<?= $this->url('mapar') ?>">Présentation MAPAR</a></li>
                        </ul>
                    </li>

                    <li><a href="">Contact & Adhésion</a>
                        <ul>
                            <li><a href="<?= $this->url('contacts') ?>">Contact</a></li>
                            <li><a href="<?= $this->url('adhesion') ?>">Adhésion</a></li>
                            <li><a href="<?= $this->url('agenda') ?>">Agenda</a></li>
                        </ul>
                    </li>

                    <li><a href="">News</a>
                        <ul>
                            <li><a href="<?= $this->url('archives') ?>">Archives</a></li>
                            <li><a href="<?= $this->url('newsletter') ?>">Newsletter</a></li>
                            <li><a href="<?= $this->url('news') ?>">News</a></li>
                        </ul>
                    </li>
                
                <?php if (isset($_SESSION['user']) && $_SESSION['user']['role'] == 'admin') { ?>
               <li><a href="">Administration</a>
                   <ul>
                       <li><a href="<?= $this->url('gestionArticles') ?>">Articles</a></li>
                       <li><a href="<?= $this->url('gestionDelegue') ?>">Délégués régionaux</a></li>
                   </ul>
               </li>
           <?php } ?> 
           </ul>
            </nav>
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
        <script type="text/javascript" src="<?= $this->assetUrl('js/jsAccordeon.js') ?>"></script> 
    </body>
</html>

