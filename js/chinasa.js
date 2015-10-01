angular.module('chinasa', []);
;(function() {
    'use strict';
    angular
        .module('chinasa')
        .directive('chiSection', chiSection);

    function chiSection() {

        return {
            restrict: 'A',
            link: function(scope, element, attrs, graphNode ) {

                console.log( "here ");
            }
        };
    }
})();
