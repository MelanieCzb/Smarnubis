<?php
// http://192.168.33.10/
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'home'],

		// Templates/smarnu
		['GET', '/presentation', 'Smarnu#presentation', 'presentation'],

			['GET', '/deleguesRegionaux', 'smarnu#deleguesRegionaux', 'deleguesRegionaux'],

			['GET', '/conseilAdministration', 'smarnu#conseilAdministration', 'conseilAdministration'],

			['GET', '/crReunion', 'smarnu#crReunion', 'crReunion'],

			['GET', '/regInterieur', 'smarnu#regInterieur', 'regInterieur'],

			['GET', '/comStatutaire', 'smarnu#comStatutaire', 'comStatutaire'],

			['GET', '/histoireSmarnu', 'smarnu#histoireSmarnu', 'histoireSmarnu'],

			['GET', '/lettreSyndicale', 'smarnu#lettreSyndicale', 'lettreSyndicale'],

			['GET|POST', '/vigilanceRisques', 'smarnu#vigilanceRisques', 'vigilanceRisques'],

			['GET', '/conseilOrdre', 'smarnu#conseilOrdre', 'conseilOrdre'],

			['GET', '/sfar', 'smarnu#sfar', 'sfar'],
			
			['GET', '/liens', 'smarnu#liens', 'liens'],


		// Templates/textes 
			['GET', '/nouveauxTextes', 'textes#nouveauxTextes', 'nouveauxTextes'],

			['GET', '/textesEuropeens', 'textes#textesEuropeens', 'textesEuropeens'],

			['GET', '/emoluments', 'textes#emoluments', 'emoluments'],

			['GET', '/gardesAstreintes', 'textes#gardesAstreintes', 'gardesAstreintes'],

		// Templates/documentation
			['GET', '/statutPH', 'documentation#statutPH', 'statutPH'],

			['GET', '/chirurgiePlateaux', 'documentation#chirurgiePlateaux', 'chirurgiePlateaux'],

			['GET', '/primes', 'documentation#primes', 'primes'],

			['GET', '/perinatalite', 'documentation#perinatalite', 'perinatalite'],

			['GET', '/demographie', 'documentation#demographie', 'demographie'],

			['GET', '/securite', 'documentation#securite', 'securite'],

			['GET', '/retraites', 'documentation#retraites', 'retraites'],

			['GET', '/permanenceSoins', 'documentation#permanenceSoins', 'permanenceSoins'],

			['GET', '/urgences', 'documentation#urgences', 'urgences'],

			['GET', '/travailAdditionnel', 'documentation#travailAdditionnel', 'travailAdditionnel'],

			['GET', '/reanimation', 'documentation#reanimation', 'reanimation'],

			['GET', '/fmcEpp', 'documentation#fmcEpp', 'fmcEpp'],

			['GET', '/rttCet', 'documentation#rttCet', 'rttCet'],

			['GET', '/mapar', 'documentation#mapar', 'mapar'],

		// Templates/contacts
			['GET', '/contacts', 'contacts#contacts', 'contacts'],

			['GET', '/adhesion', 'contacts#adhesion', 'adhesion'],

			['GET', '/agenda', 'contacts#agenda', 'agenda'],

			['GET|POST', '/[i:id]/detailEvenement', 'contacts#detailEvenement', 'detailEvenement'],

			['GET', '/liste', 'contacts#liste', 'liste'],

		// Templates/news
			['GET', '/archives', 'news#archives', 'archives'],

			['GET', '/newsletter', 'news#newsletter', 'newsletter'],

			['GET', '/news', 'news#news', 'news'],

			['GET|POST', '/[i:id]/detailNews', 'News#detailNews', 'detailNews'],

		// Templates/administration
			['GET|POST', '/login', 'Administration#login', 'login'],
			['GET|POST', '/logout', 'Administration#logout', 'logout'],

			['GET|POST', '/inscription', 'Administration#inscription', 'inscription'],
			
			['GET|POST', '/ajoutDelegue', 'Administration#ajoutDelegue', 'ajoutDelegue'],
			['GET|POST', '/gestionDelegue', 'Administration#gestionDelegue', 'gestionDelegue'],
			['GET|POST', '/[i:id]/updateDelegue', 'Administration#updateDelegue', 'updateDelegue'],
			['GET|POST', '/[i:id]/deleteDelegue', 'Administration#deleteDelegue', 'deleteDelegue'],
			
			['GET|POST', '/gestionArticles', 'Administration#gestionArticles', 'gestionArticles'],
			['GET|POST', '/ajoutArticles', 'Administration#ajoutArticles', 'ajoutArticles'],
			['GET|POST', '/[i:id]/modificationArticle', 'Administration#modificationArticle', 'modificationArticle'],
			['GET|POST', '/[i:id]/deleteArticle', 'Administration#deleteArticle', 'deleteArticle'],

			['GET|POST', '/gestionConseil', 'Administration#gestionConseil', 'gestionConseil'],
			['GET|POST', '/ajoutConseil', 'Administration#ajoutConseil', 'ajoutConseil'],
			['GET|POST', '/[i:id]/updateConseil', 'Administration#updateConseil', 'updateConseil'],
			['GET|POST', '/[i:id]/deleteConseil', 'Administration#deleteConseil', 'deleteConseil'],

			['GET|POST', '/gestionNews', 'Administration#gestionNews', 'gestionNews'],
			['GET|POST', '/ajoutNews', 'Administration#ajoutNews', 'ajoutNews'],
			['GET|POST', '/[i:id]/modificationNews', 'Administration#modificationNews', 'modificationNews'],
			['GET|POST', '/[i:id]/deleteNews', 'Administration#deleteNews', 'deleteNews'],

			['GET|POST', '/ajoutCalendrier', 'Administration#ajoutCalendrier', 'ajoutCalendrier'],
			['GET|POST', '/gestionCalendrier', 'Administration#gestionCalendrier', 'gestionCalendrier'],
			['GET|POST', '/[i:id]/modificationCalendrier', 'Administration#modificationCalendrier', 'modificationCalendrier'],
			['GET|POST', '/[i:id]/deleteCalendrier', 'Administration#deleteCalendrier', 'deleteCalendrier'],

			['GET|POST', '/gestionVigilance', 'Administration#gestionVigilance', 'gestionVigilance'],
			['GET|POST', '/[i:id]/deleteVigilance', 'Administration#deleteVigilance', 'deleteVigilance'],



	);