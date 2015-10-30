var chinasa = angular.module('chinasa', ['angular-inview']);

chinasa.controller( 'bodyController', function bodyController( $scope ){
    $scope.isInView = false;

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
                var clh = ($window.innerHeight || $document.documentElement.clientHeight);

                // Do not resize if there full screen height is less than the container original size
                if( clh > element.height() ){
                    element.height( clh );
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
