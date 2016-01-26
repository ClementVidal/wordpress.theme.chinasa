var chinasa = angular.module('chinasa', ['duScroll', 'ngCookies', 'ngTouch']);


var attachSidebarFunction = function($scope, $rootScope, $document) {
    $scope.sidebarVisible = false;

    $scope.showSidebar = function() {
        if( !$scope.sidebarVisible ) {
            $scope.sidebarVisible = true;
        }
    };

    $scope.hideSidebar = function() {
        if( $scope.sidebarVisible ) {
            $scope.sidebarVisible = false;
        }
    };

    $scope.toggleSidebar = function() {
        if( $scope.sidebarVisible ) {
            $scope.sidebarVisible = false;
        } else {
            $scope.sidebarVisible = true;
        }
    };

    // Setup event handler to handle click in the document or press on escape
    // This is catched and hide the sidebar
    $rootScope.$on("documentClicked", _close);
    $rootScope.$on("escapePressed", _close);

    function _close() {
        $scope.$apply(function() {
            $scope.hideSidebar();
        });
    }

    $document[0].addEventListener("keyup", function(e) {
        if (e.keyCode === 27)
            $rootScope.$broadcast("escapePressed", e.target);
    });

    $document[0].addEventListener("click", function(e) {
        $rootScope.$broadcast("documentClicked", e.target);
    });
};



chinasa.controller( 'bodyController', function bodyController( $scope, $rootScope, $compile, $cookies, $document ){

    // Play CSS animation if necessary based on cookie.
    if( ! $cookies.get( 'animAlreadyPlayed' ) ) {
        $cookies.put( 'animAlreadyPlayed', 'true' );
        $('#chi-sidebar').get(0).classList.add( 'chi-enlarge-anim' );
        $('.chi-sidebar-footer').get(0).classList.add( 'chi-footer-up-and-bounce-anim' );
        $('.chi-sidebar-logo').get(0).classList.add( 'chi-logo-up-and-bounce-anim' );
    }

    attachSidebarFunction($scope, $rootScope, $document);
});
