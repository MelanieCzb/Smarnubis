// Attendre le chargement du DOM
$(document).ready(function(){
	

	// Supprimer les messages d'erreurs
	$('input:not([type="submit"])').focus(function(){

		// On enlève les class 'error' lors du focus
		$(this).removeClass();

	});

	$('form').on('submit', function(event){

		var formScore = 0;

		event.preventDefault();

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

		// Validation finale du formulaire
		if( formScore == 4 ) {
			console.log(formScore);
			// Pour terminer proprement le formulaire on en lève le event/prevent pour passer les champs sur le connect.php et on prépare sa requète AJAX
			var data = $this.serialize();
			console.log(data);
			$.ajax({
                url: $this.attr('action'), // Le nom du fichier indiqué dans le formulaire
                type: $this.attr('method'), // La méthode indiquée dans le formulaire (get ou post)
                data: data, // Je sérialise les données (j'envoie toutes les valeurs présentes dans le formulaire)
                success: function(html) { // Je récupère la réponse du fichier PHP
                    console.log(html); // J'affiche cette réponse
            	}
            });

			// Vider les champs du fromulaire
			$('#username').val('');
			$('#email').val('');
			$('#password').val('');
			$('#confirmMotDePasse').val('');
		
		};

	});


}); // Fin du chargement