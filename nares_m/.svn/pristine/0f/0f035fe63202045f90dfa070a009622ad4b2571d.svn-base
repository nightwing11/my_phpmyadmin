$(document).ready(function() {
	// GENERIC VARIABLES
	var width = $(window).width();
	var height = $(window).height();

	// CENTRAGE PANEL DE CONNEXION
	var panelConnexionHeight = $('.connexion_area').height();
	var midPageHeight = height / 2;
	var midPannelConnexionHeight = panelConnexionHeight / 2;
	var marginPanelConnexion = midPageHeight - midPannelConnexionHeight - 50;
	$('.connexion_area').css("margin-top", marginPanelConnexion);

	// DASHBOARD
	var headerHeight = $('header').height();
	var containerHeight = height - headerHeight;

	$('.page_connexion').css("height", height);
	$('.site-container, .liste-bdd, .contenu-site').css("height", height);

	// OPERATIONS
	function nbColonne() {
		var nbColunms = document.getElementById("nb_colonnes").value;
		alert(nbColunms);
	}
	
	/*$('#btn_create_table').on('click', function() {
		
	});*/

	$('#btn_drop_db').on('click', function() {
		alert('Attention ! Cette action est irréversible !');
	});
});