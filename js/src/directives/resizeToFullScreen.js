(function() {
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
                }
            }
        };
    }
})();
