var chinasa = angular.module('chinasa', ['angular-inview']);

chinasa.controller( 'bodyController', function bodyController( $scope ){
    $scope.isInView = false;

});
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
