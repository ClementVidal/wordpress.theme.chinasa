(function() {
    'use strict';
    angular
        .module('chinasa')
        .directive('chiSidebar', chiSidebar);

    function chiSidebar() {

        return {
            restrict: 'E',
            template: "<div ng-class='{ \"chi-visible\": sidebarVisible }' ng-transclude></div>",
            transclude: true,
            replace: true,
            scope: {
                sidebarVisible: "="
            },
            link: link
        };

        function link() {
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


            // select which menu to open in the sidebar according to the current page state
            if( window.location.pathname === '/' ){
                onCallapseShown( menu[0].get(0) );
                menu[0].get(0).querySelector('div').classList.add('in');

            } else {
                onCallapseShown( menu[1].get(0) );
                menu[1].get(0).querySelector('div').classList.add('in');
            }
        }
    }

})();
