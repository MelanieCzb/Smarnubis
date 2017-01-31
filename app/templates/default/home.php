<?php $this->layout('layout', ['title' => 'Smarnubis']) ?>

<?php $this->start('main_content') ?>
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

	   <h1>Le Syndicat des Médecins Anesthésistes-Réanimateurs<span> Non-Universitaire</span></h1>

            <p>Le SMARNU (Syndicat des Médecins Anesthésistes Réanimateurs Non Universitaires) accompagne et défend ses adhérents depuis 1970. Nos principales missions sont la reconnaissance et la valorisation du travail de garde, la revalorisation de nos salaires, l’amélioration de la formation de nos équipes hospitalières…</p>
            <p>Nous sommes également à vos côté pour vous accompagner en cas de litiges administratifs, au tribunal ou dans toutes vos autres démarches administratives.
            N’hésitez plus à nous rejoindre, adhérez au Smarnu !</p>
            

            <section id="flat_icon">
                <div>
                    <figure>
                        <a href="<?= $this->url('histoireSmarnu')?>"> <img src="<?= $this->assetUrl('img/heart.png') ?>" onmouseover="this.src='<?= $this->assetUrl('img/heart_2.png') ?>'" onmouseout="this.src='<?= $this->assetUrl('img/heart.png') ?>'" /></a>
                        <figcaption><span>Histoire du SMARNU</span><p>Qui sommes-nous ? Comment pouvons-nous vous aider ? Découvrez notre rôle...</p></figcaption>
                    </figure>

                    <figure>
                        <a href="<?= $this->url('vigilanceRisques')?>"><img src="<?= $this->assetUrl('img/stethoscope.png') ?>" onmouseover="this.src='<?= $this->assetUrl('img/stethoscope_2.png') ?>'" onmouseout="this.src='<?= $this->assetUrl('img/stethoscope.png') ?>'" /></a>
                        <figcaption><span>Vigilance Risques</span><p>Retrouvez notre cellule de vigilance. Le Smarnu vous accompagne dans vos différentes démarches...</p></figcaption>
                    </figure>

                    <figure>
                        <a href="<?= $this->url('adhesion')?>"><img src="<?= $this->assetUrl('img/pill.png') ?>" onmouseover="this.src='<?= $this->assetUrl('img/pill_2.png') ?>'" onmouseout="this.src='<?= $this->assetUrl('img/pill.png') ?>'" /></a>
                        <figcaption><span>Adhésion</span><p>Quels sont les avantages de nos membres ? Comment nous rejoindre...</p></figcaption>
                    </figure>

                    <figure>
                        <a href="<?= $this->url('nouveauxTextes')?>"><img src="<?= $this->assetUrl('img/syringe.png') ?>" onmouseover="this.src='<?= $this->assetUrl('img/syringe_2.png') ?>'" onmouseout="this.src='<?= $this->assetUrl('img/syringe.png') ?>'" /></a>
                        <figcaption><span>Que dit la loi ?</span><p>Retrouvez tous les textes de loi qui nous encadrent et nous protègent...</p></figcaption>
                    </figure>
                </div>
            </section>          


<!-- Intégration du système d'affichage des articles -->
            <h2 class ="h2Home">Les News du Smarnubis</h2>
            
            <section id="afficheArticles">
                <div id="articles">
                    <div class="tabs">
                        <nav>
                            <a><i class="fa fa-newspaper-o" aria-hidden="true"></i></a>
                            <a><i class="fa fa-newspaper-o" aria-hidden="true"></i></a> 
                            <a><i class="fa fa-newspaper-o" aria-hidden="true"></i></a> 
                        </nav>
                        <?php
                        foreach ($articles as $article) : ?>
                            <div class="content">
                            <h3><?= $this->e($article['titre']) ?></h3>
                            <p><?= $this->e($article['resume']) ?></p>
                            <a href="<?= $this->e($article['id']) ?>/detailNews">Lire la suite</a>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>    
            </section>

                <h2 class ="h2Home">Événements</h2>
            <section> 
                
                <div id="events">
                    <?php
                    foreach ($evenements as $evenement) : ?>
                    <div class="event">
                        <h3><?= $this->e($evenement['titre']) ?> - <?= $this->e($evenement['date']) ?></h3>
                        <a href="<?= $this->e($evenement['id']) ?>/detailEvenement">En savoir plus</a>
                    </div>
                    <?php endforeach ?>
                </div>
            </section>


<?php $this->stop('main_content') ?>
