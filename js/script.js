$(function() {
    var singlePage = {
        init: function() {
            var self = this;
            
            self.initTriggers();
        },
        
        initTriggers: function() {
            
            // GENERIC VARS
            var width = $(window).width();
            var height = $(document).height();
            
            $('.page_connexion').css("height", height);
            $('.site-container, .liste-bdd, .contenu-site').css("min-height", height - 84);
            
            // TRY HARD
            if ( $('table').has('td') ) {
                var nbLignes = $('table tr:first td').length;
                $('td').css('width', 'calc(100% / ' + nbLignes + ')');
            }
            
            // ALERT ON DROP DATABASE
            $('#btn_drop_db').on('click', function() {
                alert('Attention ! Cette action est irréversible !');
            });
            
            // ALERT ON TRUNCATE TABLE
            $('.btn-vider').on('click', function() {
                alert('La table a bien été vidée !'); 
            });
        }
    };
    
    window.singlePage = singlePage;
    singlePage.init();
});