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
        a.classList.add( 'chi-visible' );
    };
    var onCallapseHidden = function( collapse ) {
        var a = collapse.querySelector('a');
        a.setAttribute('href', a.getAttribute('data-href-hidden'));
        a.style.cursor ='initial';
        a.classList.remove( 'chi-visible' );
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
    if( !$cookies.get( 'animAlreadyPlayed' ) ) {
        $cookies.put( 'animAlreadyPlayed', 'true' );
        $('#chi-sidebar').get(0).classList.add( 'chi-enlarge-anim' );
        $('.chi-sidebar-footer').get(0).classList.add( 'chi-footer-up-and-bounce-anim' );
        $('.chi-sidebar-logo').get(0).classList.add( 'chi-logo-up-and-bounce-anim' );
    }


});
;(function() {
    'use strict';
    angular
        .module('chinasa')
        .directive('chiResizeToFullScreen', chiResizeToFullScreen);

    function chiResizeToFullScreen($window, $document) {

        return {
            restrict: 'A',
            link: function(scope, element, attrs, graphNode) {
                var clh = ( $window.innerHeight );

                // Do not resize if the full screen height is less than the container original size
                if( clh > element.height() ){
                    element.innerHeight( clh );
                    console.log( "set height: ", clh);
                }
            }
        };
    }
})();
;(function() {
    'use strict';
    angular
        .module('chinasa')
        .directive('chiSmoothApparition', chiSmoothApparition);

    function chiSmoothApparition($window, $document) {
        function isVisible(el) {
            var rect = el.getBoundingClientRect();
            var clh = ($window.innerHeight || $document.documentElement.clientHeight);
            return (rect.top <= clh && rect.bottom > 0 );
        }
        return {
            restrict: 'A',
            scope: {
                class: '@chiClass'
            },
            link: function(scope, element, attrs, graphNode) {

                if( ! angular.isDefined( scope.class ) ) {
                    scope.class = "visible";
                }
                
                scope.isVisible = false;

                // Attach event handler
                angular.element($window).on("load resize scroll", function() {

                    var wasVisible = scope.isVisible;
                    scope.isVisible = isVisible( element[0] );

                    if( wasVisible !== scope.isVisible ) {
                        if(scope.isVisible ) {
                            element.addClass( scope.class );
                        } else {
                            element.removeClass( scope.class );
                        }
                    }
                });
            }
        };
    }
})();
;(function() {
    'use strict';
    angular
        .module('chinasa')
        .directive('chiSnapToViewportBottom', chiSnapToViewportBottom);

    function chiSnapToViewportBottom( $window, $document) {

        return {
            restrict: 'A',
            link: function(scope, element, attrs, graphNode) {

                var snap = function() {
                    var height = $window.innerHeight - element[0].offsetTop;
                    element.innerHeight( height );
                };

                var w = angular.element($window);

                w.bind('resize', function () {
                    snap();
                });

                snap();

            }
        };
    }
})();
