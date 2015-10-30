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

                element.height( clh );
                console.log( clh );
            }
        };
    }
})();
