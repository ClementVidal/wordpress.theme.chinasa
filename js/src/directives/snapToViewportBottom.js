(function() {
    'use strict';
    angular
        .module('chinasa')
        .directive('chiSnapToViewportBottom', chiSnapToViewportBottom);

    chiSnapToViewportBottom.$inject = ['$window', '$document'];
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
