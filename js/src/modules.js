var chinasa = angular.module('chinasa', ['duScroll', 'ngCookies']);

chinasa.config( function($locationProvider){
    //$locationProvider.html5Mode(true);
});

chinasa.controller( 'bodyController', function bodyController( $scope, $compile, $location, $anchorScroll, $cookies ){
    $scope.isInView = false;

    var menu = [];
    menu[0] = $('.chi-menu:first-child');
    menu[1] = $('.chi-menu:last-child');

    var onCallapseShown = function( collapse ) {
        var a = collapse.querySelector('a');
        a.setAttribute('href', "javascript:void(0)" );
        a.style.cursor ='default';
    };
    var onCallapseHidden = function( collapse ) {
        var a = collapse.querySelector('a');
        a.setAttribute('href', a.getAttribute('data-href-hidden'));
        a.style.cursor ='initial';
    };


    menu[0].on('show.bs.collapse', function(){ onCallapseShown( this ); } );
    menu[0].on('hide.bs.collapse', function(){ onCallapseHidden( this ); } );

    menu[1].on('show.bs.collapse', function(){ onCallapseShown( this ); } );
    menu[1].on('hide.bs.collapse', function(){ onCallapseHidden( this ); } );


    // select which menu to open according to the current page state
    if( window.location.pathname === '/' ){
        onCallapseShown( menu[0].get(0) );
        menu[0].get(0).querySelector('div').classList.add('in');

    } else {
        onCallapseShown( menu[1].get(0) );
        menu[1].get(0).querySelector('div').classList.add('in');
    }

    // Play animation if necessary
    if( ! $cookies.get( 'animAlreadyPlayed' ) ) {
        $cookies.put( 'animAlreadyPlayed', 'true' );
        $('#chi-sidebar').get(0).classList.add( 'chi-enlarge-anim' );
        $('.chi-sidebar-footer').get(0).classList.add( 'chi-footer-up-and-bounce-anim' );
        $('.chi-sidebar-logo').get(0).classList.add( 'chi-logo-up-and-bounce-anim' );
    }


});
