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
                    <div class="content">
                      <h3>Nouveautés en chirurgie pediatrique</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id ultricies lorem. Donec mattis ornare eros, eget hendrerit est porttitor nec. Aenean tristique massa vel nunc lobortis venenatis. Integer sit amet faucibus dolor, vitae iaculis ex. Sed blandit libero ut ante facilisis, ac imperdiet nibh mollis. Suspendisse eget leo suscipit, malesuada metus at, semper libero. Aliquam neque libero, fermentum id bibendum eu, feugiat consequat leo. Vestibulum ut purus et libero pulvinar mollis. Morbi dapibus varius ipsum eu tristique. Donec tortor justo, tincidunt malesuada nunc sed, ornare viverra eros. Nullam et massa ultrices, vulputate neque at, blandit velit. Nunc ultricies at quam vitae tempor. Quisque maximus fringilla arcu, vel sollicitudin dui luctus ac.</p>
                      <p>Sed vitae consectetur urna. Aenean facilisis vitae massa quis auctor. Ut at ullamcorper magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et venenatis justo. Vivamus feugiat purus sit amet mi tincidunt, id egestas erat sodales. Vivamus dapibus rhoncus feugiat. Quisque pulvinar eu est vitae facilisis. Maecenas ac vestibulum lectus, in auctor turpis. In ultrices massa eget finibus volutpat. Nam eu nibh quis purus euismod eleifend. Fusce quis mattis erat. Praesent aliquet urna non imperdiet condimentum. Praesent a venenatis tortor. Donec porttitor enim nec facilisis volutpat.</p>
                  </div>
                  <div class="content">
                      <h3>Un nouveau ministre de la santé en poste</h3>
                      <p>Ut molestie, neque ac malesuada aliquet, orci ligula ornare lorem, et sagittis diam dolor id odio. Maecenas blandit dolor nec tincidunt vulputate. Proin ultrices dui vulputate ullamcorper molestie. Sed non orci id tortor commodo molestie. Curabitur lectus lacus, iaculis eu quam nec, congue rutrum felis. Morbi rhoncus metus a diam mattis, vel lacinia lectus ultricies. Quisque aliquet magna justo, quis pretium purus vulputate sit amet. Vivamus vehicula nisl eu sollicitudin efficitur. Curabitur egestas, felis vel tempus efficitur, felis nibh fermentum nulla, at gravida risus mauris sed sapien. Donec lobortis mi convallis tortor iaculis, sit amet vulputate libero mollis. Cras sagittis ligula eget est sodales tempor.</p>
                  </div>
                  <div class="content">
                      <h3>Nouvelle technique d'anesthésie : le gourdin !</h3>
                      <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse tempor accumsan purus a rutrum. Nam congue tempor dui, vel auctor dolor tincidunt id. Proin fringilla consectetur urna. Fusce nec sodales turpis, eu rhoncus enim. Pellentesque pretium, dui et feugiat venenatis, sapien augue molestie quam, ac vulputate arcu quam et mauris. Duis lectus mi, congue ac tortor vel, maximus venenatis sem. Nam eget cursus sapien, sit amet rhoncus lacus. Vestibulum est justo, scelerisque ac erat eu, fermentum suscipit tellus. Aliquam velit nisi, feugiat ut arcu et, finibus efficitur lectus.</p>
                      <p>Nulla aliquam dapibus nunc, sed convallis sem semper sit amet. Mauris et ullamcorper lorem. Donec volutpat egestas massa, vitae porttitor mi venenatis sit amet. Nulla condimentum fermentum risus non mattis. Mauris ut posuere erat. Duis vel ante sit amet augue blandit facilisis. Nulla congue turpis at imperdiet porta. Nullam quis aliquet augue. Duis et arcu in augue fringilla sodales. Aliquam pulvinar elit non iaculis egestas. Nam risus enim, malesuada id augue a, sagittis pharetra quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eleifend, ligula eget ultrices venenatis, metus neque finibus tortor, sit amet venenatis turpis nibh et odio.</p>
                      <p>Nulla aliquam dapibus nunc, sed convallis sem semper sit amet. Mauris et ullamcorper lorem. Donec volutpat egestas massa, vitae porttitor mi venenatis sit amet. Nulla condimentum fermentum risus non mattis. Mauris ut posuere erat. Duis vel ante sit amet augue blandit facilisis. Nulla congue turpis at imperdiet porta. Nullam quis aliquet augue. Duis et arcu in augue fringilla sodales. Aliquam pulvinar elit non iaculis egestas. Nam risus enim, malesuada id augue a, sagittis pharetra quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eleifend, ligula eget ultrices venenatis, metus neque finibus tortor, sit amet venenatis turpis nibh et odio.</p>
                  </div>
              </div>
            </section>

            <section>
                <h2>Calendrier</h2>
                
            </section>


<?php $this->stop('main_content') ?>
