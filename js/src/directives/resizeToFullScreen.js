(function() {
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
