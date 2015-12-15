var chinasa = angular.module('chinasa', ['duScroll', 'ngCookies']);

chinasa.controller( 'bodyController', function bodyController( $scope, $compile ){
    $scope.isInView = false;

    var menu = [];
    menu[0] = $('.chi-menu:first-child');
    menu[1] = $('.chi-menu:last-child');

    var onCallapseShown = function( collapse ) {
        var a = collapse.querySelector('a');
        a.setAttribute('href', "javascript:void(0)" );
        a.removeAttribute( 'data-toggle' );
        a.style.cursor ='default';
        a.classList.add( 'chi-visible' );
    };
    var onCallapseHidden = function( collapse ) {
        var a = collapse.querySelector('a');
        a.setAttribute('href', a.getAttribute('data-href-hidden'));
        a.setAttribute( 'data-toggle', 'collapse' );
        a.style.cursor ='initial';
        a.classList.remove( 'chi-visible' );
    };


    menu[0].on('show.bs.collapse', function(){ onCallapseShown( this ); } );
    menu[0].on('hide.bs.collapse', function(){ onCallapseHidden( this ); } );

    menu[1].on('show.bs.collapse', function(){ onCallapseShown( this ); } );
    menu[1].on('hide.bs.collapse', function(){ onCallapseHidden( this ); } );

    onCallapseShown( menu[0].get(0) );

});
