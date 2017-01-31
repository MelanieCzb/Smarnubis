// Attendre le chargement du DOM
$(document).ready(function(){
	

	// Supprimer les messages d'erreurs
	$('input:not([type="submit"])').focus(function(){

		// On enlève les class 'error' lors du focus
		$(this).removeClass();

	});


	$('form').on('submit', function(event){



		var formScore = 0;

		

		var $this = $(this);

		// On vérifie le champ username 
		// On utilise val pour récupérer la valeur et length pour la longueur
		if( $('#username').val().length < 5 ) {

			// Afficher un message d'erreur
			$("#username").addClass('error').fadeIn();
			
			// Ramener la valeur de formScore à 0
			formScore = 0;

		} else {
			// On incrémente formScore de 1.
			formScore++;
		};

		// On vérifie le champ email 
		// On utilise val pour récupérer la valeur et length pour la longueur
		if( $('#email').val().length < 6 ) {

			// Afficher un message d'erreur
			$("#email").addClass('error').fadeIn();
			
			// Ramener la valeur de formScore à 0
			formScore = 0;

		} else {
			// On incrémente formScore de 1.
			formScore++;
		};

		// On vérifie le champ password 
		// On utilise val pour récupérer la valeur et length pour la longueur
		if( $('#password').val().length < 6) {

			// Afficher un message d'erreur
			$("#password").addClass('error').fadeIn();
			
			// Ramener la valeur de formScore à 0
			formScore = 0;

		} else {
			// On incrémente formScore de 1.
			formScore++;
		};

		// On vérifie le champ confirmMotDePasse 
		// On utilise val pour récupérer la valeur et length pour la longueur
		if( ! $('#confirmMotDePasse').val() != ($('#password').val()) && ($('#confirmMotDePasse').val().length < 6 )) {

			// Afficher un message d'erreur
			$("#confirmMotDePasse").addClass('error').fadeIn();
			
			// Ramener la valeur de formScore à 0
			formScore = 0;

		} else {
			// On incrémente formScore de 1.
			formScore++;
		};





		event.preventDefault();
		var _data = $('form').serialize();
		console.log(_data);

		if (formScore == 4) {
			$.ajax({
	            url: "/inscription", // Le nom du fichier indiqué dans le formulaire
	            type: 'POST', // La méthode indiquée dans le formulaire (get ou post)
	            data: _data // Je sérialise les données (j'envoie toutes les valeurs présentes dans le formulaire)
	        }).done(function(data) {
	        	if (data == "OK") {
	        		window.location.replace("/login");
	        	}
				console.log(data);
	        });
    	}
	});


}); // Fin du chargement