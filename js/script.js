$(document).ready(function() {
	// GENERIC VARIABLES
	var width = $(window).width();
	var height = $(window).height();

	// DASHBOARD
	var headerHeight = $('header').height();
	var containerHeight = height - headerHeight - 1;

	$('.page_connexion').css("height", height);
	$('.site-container, .liste-bdd, .contenu-site').css("min-height", containerHeight);
});

$(function() {
    var singlePage = {
        init: function() {
            var self = this;
            
            self.initTriggers();
        },
        
        initTriggers: function() {
            
            // TRY HARD
            if ( $('table').has('td') ) {
                var nbLignes = $('table tr:first td').length;
                $('td').css('width', 'calc(100% / ' + nbLignes + ')');
            }
            
            // ALERT ON DROP DATABASE
            $('#btn_drop_db').on('click', function() {
                alert('Attention ! Cette action est irréversible !');
            });
        }
    };
    
    window.singlePage = singlePage;
    singlePage.init();
});