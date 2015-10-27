angular.module('chinasa', ['ui.router']);

var chinasa = angular.module('chinasa');

chinasa.config(function($stateProvider, $urlRouterProvider) {

    console.log( "here ");
    //
    // For any unmatched url, redirect to /state1
    $urlRouterProvider.otherwise("/home");
    //
    // Now set up the states
    $stateProvider
        .state('home', {
            url: "/home",
            templateUrl: '/home'
        })
        .state('blog', {
            url: "/blog",
            templateUrl: '/blog'
        });

});

// run blocks
chinasa.run(function($rootScope) {
    $rootScope.$on('$stateChangeStart',
        function(event, toState, toParams, fromState, fromParams) {
            console.log("heyy");
        });
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
