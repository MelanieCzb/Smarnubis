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

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod veritatis excepturi aspernatur eveniet. Qui vitae eos, magni sequi aliquid dolore ipsam non blanditiis illum facere quisquam illo. Pariatur, similique, delectus.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod veritatis excepturi aspernatur eveniet. Qui vitae eos, magni sequi aliquid dolore ipsam non blanditiis illum facere quisquam illo. Pariatur, similique, delectus.
            </p>

            <section id="flat_icon">
                <div>
                    <figure>
                        <img src="<?= $this->assetUrl('img/heart.png') ?>" onmouseover="this.src='<?= $this->assetUrl('img/heart_2.png') ?>'" onmouseout="this.src='<?= $this->assetUrl('img/heart.png') ?>'" />
                        <figcaption>Image 1</figcaption>
                    </figure>
                    <figure>
                        <img src="<?= $this->assetUrl('img/stethoscope.png') ?>" onmouseover="this.src='<?= $this->assetUrl('img/stethoscope_2.png') ?>'" onmouseout="this.src='<?= $this->assetUrl('img/stethoscope.png') ?>'" />
                        <figcaption>Image 2</figcaption>
                    </figure>
                    <figure>
                        <img src="<?= $this->assetUrl('img/pill.png') ?>" onmouseover="this.src='<?= $this->assetUrl('img/pill_2.png') ?>'" onmouseout="this.src='<?= $this->assetUrl('img/pill.png') ?>'" />
                        <figcaption>Image 3</figcaption>
                    </figure>
                    <figure>
                        <img src="<?= $this->assetUrl('img/syringe.png') ?>" onmouseover="this.src='<?= $this->assetUrl('img/syringe_2.png') ?>'" onmouseout="this.src='<?= $this->assetUrl('img/syringe.png') ?>'" />
                        <figcaption>Image 4</figcaption>
                    </figure>
                </div>
            </section>          


<!-- Intégration du système d'affichage des articles -->
            <h2>Les News du Smarnubis</h2>
            <section id="afficheArticles">

                <div class="tabs">
                    <nav> <a>Article 1</a> <a>Article 2</a> <a>Article 3</a> </nav>
                    <?php
                     foreach ($articles as $article) : ?>
                        <div class="content">
                          <h3><?= $this->e($article['titre']) ?></h3>
                          <p><?= $this->e($article['resume']) ?></p>
                          <a href="<?= $this->e($article['id']) ?>/detailNews">Lire la suite</a>
                        </div>
                      <?php endforeach ?>
                </div>
            </section>

            <section>
                <h2>Calendrier</h2>
                <?php
                foreach ($evenements as $evenement) : ?>
                <h3><?= $this->e($evenement['titre']) ?> - <?= $this->e($evenement['date']) ?></h3>
                <a href="<?= $this->e($evenement['id']) ?>/detailEvenement">En savoir plus</a>
                <?php endforeach ?>
            </section>


<?php $this->stop('main_content') ?>
