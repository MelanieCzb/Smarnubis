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

			['GET', '/vigilanceRisques', 'smarnu#vigilanceRisques', 'vigilanceRisques'],

			['GET', '/partenaires', 'smarnu#partenaires', 'partenaires'],
			
			['GET', '/liens', 'smarnu#liens', 'liens'],


		// Templates/textes 
			['GET', '/nouveauxTextes', 'textes#nouveauxTextes', 'nouveauxTextes'],

			['GET', '/textesEuropeens', 'textes#textesEuropeens', 'textesEuropeens'],

			['GET', '/emoluments', 'textes#emoluments', 'emoluments'],

			['GET', '/gardesAstreintes', 'textes#gardesAstreintes', 'gardesAstreintes'],

		// Templates/news
			['GET', '/archives', 'news#archives', 'archives'],

			['GET', '/newsletter', 'news#newsletter', 'newsletter'],

			['GET', '/news', 'news#news', 'news'],

		// Templates/xxxxx
			['GET', '/statutPH', 'xxxxx#statutPH', 'statutPH'],

			['GET', '/chirurgiePlateaux', 'xxxxx#chirurgiePlateaux', 'chirurgiePlateaux'],

			['GET', '/primes', 'xxxxx#primes', 'primes'],

			['GET', '/perinatalite', 'xxxxx#perinatalite', 'perinatalite'],

			['GET', '/demographie', 'xxxxx#demographie', 'demographie'],

			['GET', '/securite', 'xxxxx#securite', 'securite'],

			['GET', '/retraites', 'xxxxx#retraites', 'retraites'],

			['GET', '/permanenceSoins', 'xxxxx#permanenceSoins', 'permanenceSoins'],

			['GET', '/urgences', 'xxxxx#urgences', 'urgences'],

			['GET', '/travailAdditionnel', 'xxxxx#travailAdditionnel', 'travailAdditionnel'],

			['GET', '/reanimation', 'xxxxx#reanimation', 'reanimation'],

			['GET', '/fmcEpp', 'xxxxx#fmcEpp', 'fmcEpp'],

			['GET', '/rttCet', 'xxxxx#rttCet', 'rttCet'],

			['GET', '/mapar', 'xxxxx#mapar', 'mapar'],

		// Templates/contacts
			['GET', '/contacts', 'contacts#contacts', 'contacts'],

			['GET', '/adhesion', 'contacts#adhesion', 'adhesion'],

			['GET', '/agenda', 'contacts#agenda', 'agenda'],

			['GET', '/liste', 'contacts#liste', 'liste'],

		// Templates/administration
			['GET|POST', '/login', 'Administration#login', 'login'],
			['GET|POST', '/logout', 'Administration#logout', 'logout'],

			['GET|POST', '/inscription', 'Administration#inscription', 'inscription'],

	);