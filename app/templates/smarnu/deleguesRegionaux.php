<?php $this->layout('layout', ['title' => 'Le smarnubis']) ?>

<?php $this->start('main_content') ?>
	<h2>Délégués régionaux.</h2>
	<?php 
		foreach ($delegues as $delegue) : ?>
			<h3><?= $this->e($delegue['identite']) ?></h3>
			<p><?= $this->e($delegue['region']) ?> 
			<?php 
				if(! empty($delegue['departements'])){
					echo " (Depts : " .$delegue['departements']. ")";
				} ?>
			<?php 
				if(! empty($delegue['telPrincipal'])){?>
					Tel principal : <?= $delegue['telPrincipal'];
				}

				if(! empty($delegue['telSecondaire'])){?>
					Tel principal : <?= $delegue['telPrincipal'];
				}

				if(! empty($delegue['telPortable'])){?>
					Tel principal : <?= $delegue['telPrincipal'];
				}

				if(! empty($delegue['telBureau'])){?>
					Tel principal : <?= $delegue['telPrincipal'];
				}

				?>

			<?php

			if(! empty($delegue['email'])){ ?>
				email : <?= $delegue['email']; ?>
				<?php }?>
			
		<?php endforeach ?>


	

			<!-- <section>Auvergne-Rhone-Alpes</section>

			<section>Bourgogne-Franche-Compté
				<article>
					<aside>
						Dr Jacqueline Bertrand (Dépts 21 - 58 - 71)
						CHG William Morey, 71100 Chalon sur Saone
						<a href="mailto:jacqueline.bertrand@ch-chalon71.fr">Contacter par courriel</a>
					</aside>

					<aside>
						Dr Rodriguez Michel (Dépts 89)
						Tel : 03.86.48.48.48 Fax : 03.86.48.47.19
						Centre Hospitalier - 89000 Auxerre
					</aside>
				</article>
				<article>
					<aside>
						Dr Schoch Jean-Pierre (Dépts 25 - 39 - 70)
						Tel : 03.81.91.63.92 - 03.81.91.62.24 Fax : 03.81.91.63.92
						Centre hospitalier 2 rue Dr Flamand 25209 Montbeliard
						<a href="mailto:jean-pierre.schoch@wanadoo.fr">Contacter par courriel</a>
					</aside>
				</article>
				<article>
					<aside>
						Dr Doutre Pierre-Antoine (Dépt 90)
						Tel : 03.84.57.40.00 - Bur : 03.84.57.41.86 Fax : 03.84.57.47.56 Sec : 03.84.57.47.12
						Centre hospitalier 14 rue Mulhouse 90016 Belfort
						<a href="mailto:padoutre@ch-belfort-montbeliard.rss.fr">Contacter par courriel</a>
					</aside>
				</article>
			</section>

			<section>Bretagne
				<article>
					<aside>
						Dr Brule Remi (Dépts 22)
						Port : 06.73.25.71.98
						<a href="mailto:remi.brule@wanadoo.fr">Contacter par courriel</a>
					</aside>
				</article>
			</section> 

			<section>Corse</section>

			<section>Centre-Val-de-Loire
				<article>
					<aside>
						Dr Brodeur James (Dépts 22 - 28 - 36 - 37 - 41 - 45)
						Tel : 02.48.48.49.14 - 02.48.48.48.48 Fax : 02.48.48.48.13
						Centre hospitalier 145 av Fr Mitterand 18000 Bourges
						<a href="mailto:james.brodeur@wanadoo.fr">Contacter par courriel</a>
					</aside>
				</article>
			</section>

			<section>Grands-Est
				<article>
					<aside>
						Dr Tonnelier Hubert
						Tel : 03.29.68.70.00 Sec : 03.29.68.76.69 Fax : 03.29.34.27.75
						Centre hospitalier 3 av Robert Schuman
						<a href="mailto:samu88@wanadoo.fr">Contacter par courriel</a>
					</aside>
				</article>
			</section>

			<section>Hauts-de-France
				<article>
					<aside>
						Dr Desmidt Marc (Dépts 59 - 62)
						Tel : 03.20.22.50.65 Dom : 03.20.08.26.97 Port : 06.09.20.38.96 Fax : 03.20.22.50.25
						Centre hospitalier St Philibert 59462 Lomme
						97 Avenue Pottier 59130 Lambersart
						<a href="mailto:desmidt@club-internet.fr">Contacter par courriel</a>
					</aside>
				</article>
			</section>

			<section>Ile de France
				<article>
					<aside>
						Dr Vignier (Dépts 78)
						Tel : 01.34.97.40.00 Sec : 01.34.97.41.10 Fax 01.34.97.41.14
						Centre hospitalier Bl Sully 78021 Mantes la jolie
						<a href="mailto:pen6f@aol.com">Contacter par courriel</a>
					</aside>

					<aside>
						Dr Cazaban Denis (Dépt 93 - 92)
						Tel : 01.41.70.82.55 Fax : 01.41.70.82.02
						Centre Hospitalier 10 rue Gnl Leclerc 93370 Montfremeil
						<a href="mailto:denis.cazaban@wanadoo.fr">Contacter par courriel</a>
					</aside>

					<aside>
						Dr Reyes Seti (Dépt 93 - 92)
						Tel : 01.49.20.30.40
						Centre Hospitalier 93100 Montreuil
						<a href="mailto:seti.reyes@wanadoo.fr">Contacter par courriel</a>
					</aside>
				</article>
			</section>

			<section>Normandie</section>

			<section>Nouvelle-Aquitaine</section>
				<article>
					<aside>
						Dr Goumard Daniele (Dépts 16 - 17 - 79 - 86)
						Dom : 05.46.34.11.31 Port : 06.81.58.58.06
						<a href="mailto:daniele.gourmard@wanadoo.fr">Contacter par courriel</a>
					</aside>
				</article>

			<section>Occitanie
				<article>
					<aside>
						Dr Perucho Pierre (Dépts 11 - 30 - 34 - 48 - 66)
						Tel : 04.68.61.66.33 Fax : 04.68.61.69.89
						Centre hospitalier 20 av Languedoc 66000 Perpignan
						<a href="mailto:pierre.perucho@ch-perpignan.fr">Contacter par courriel</a>
					</aside>
				</article>
			</section>

			<section>Provence Alpes Cote d'Azur
				<article>
					<aside>
						Dr Bretszajn Alain (Dépts 04-05)
						Tel : 04.90.44.91.44 Fax : 04.90.44.92.54
						207 av Julien Fabre 13658 Salon de Provence
						<a href="mailto:rea@ch-salon.fr">Contacter par courriel</a>
					</aside>
					<aside>
						Dr Kaidomar Michel (Dépt 83)
						Tel : 04.94.40.20.68 Fax : 04.94.17.79.03
						Centre hospitalier 605 av A Léotard 83608 Frejus
						<a href="mailto:kaidomar-m@chi-frejus-saint-raphael.fr">Contacter par courriel</a>
					</aside>
				</article>
			</section>

			<section>Pays de la loire</section>

			<section>DOM : Martinique</section>

			<section>DOM : Guyane</section>

				<aside>Centre hospitalier (Dépt 97.3)</aside>

			<section>DOM : Reunion</section>

			<section>DOM : Polynésie</section>-->






		

	<?php $this->stop('main_content') ?>
