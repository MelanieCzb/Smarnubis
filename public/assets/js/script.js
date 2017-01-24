$(document).ready(function () {
    $('#calendar').eCalendar({
        weekDays: ['Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam', 'Dim'],
        months: ['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Decembre'],
        textArrows: { previous: '<', next: '>' },
        eventTitle: 'Événements',
        url: '',
        firstDayOfWeek: 0,

        // Tableau pour les évènements
        events: [
            { title: 'Assemblée générale du Smarnubis', description: 'Première assemblée générale du Smarnubis pour cette année 2017', datetime: new Date(2017, 1, 15, 10, 16) },
            { title: 'Assemblée générale du Smarnubis', description: 'Première assemblée générale du Smarnubis pour cette année 2017', datetime: new Date(2017, 1, 24, 10, 16) },
            { title: 'Event 2', description: 'Description 2', datetime: new Date(2017, 2, 14, 10, 16) },
            { title: 'Event 3', description: 'jQueryScript.Net', datetime: new Date(2017, 2, 10, 10, 16) }
        ]
    });
});

// Les dates pour les mois en JS vont de 0 à 11 !