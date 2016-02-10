var chinasa = angular.module('chinasa', ['duScroll', 'ngCookies', 'ngTouch']);
chinasa.controller('bodyController', chiBodyController);

var attachSidebarFunction = function($scope, $rootScope, $document) {
    $scope.sidebarVisible = false;

    $scope.showSidebar = function() {
        if (!$scope.sidebarVisible) {
            $scope.sidebarVisible = true;
        }
    };

    $scope.hideSidebar = function() {
        if ($scope.sidebarVisible) {
            $scope.sidebarVisible = false;
        }
    };

    $scope.toggleSidebar = function() {
        if ($scope.sidebarVisible) {
            $scope.sidebarVisible = false;
        } else {
            $scope.sidebarVisible = true;
        }
    };

    // Setup event handler to handle click in the document or press on escape
    // This is catched and hide the sidebar
    $rootScope.$on('documentClicked', _close);
    $rootScope.$on('escapePressed', _close);

    function _close() {
        $scope.$apply(function() {
            $scope.hideSidebar();
        });
    }

    $document[0].addEventListener('keyup', function(e) {
        if (e.keyCode === 27) {
            $rootScope.$broadcast('escapePressed', e.target);
        }
    });

    $document[0].addEventListener('click', function(e) {
        $rootScope.$broadcast('documentClicked', e.target);
    });
};

chiBodyController.$inject = ['$scope', '$rootScope', '$document', '$cookies', '$timeout'];

function chiBodyController($scope, $rootScope, $document, $cookies, $timeout) {

    function isBreakpoint(alias) {
        return $('.device-' + alias).is(':visible');
    }

    $timeout(function() {

        // Play CSS animation if necessary based on cookie.
        if (true){//} || !$cookies.get('animAlreadyPlayed')) {
            //$cookies.put('animAlreadyPlayed', 'true');

            if (isBreakpoint('lg')) {
                $('#chi-sidebar').get(0).classList.add('chi-enlarge-anim');
                $('.chi-sidebar-footer').get(0).classList.add('chi-footer-up-and-bounce-anim');
                $('.chi-sidebar-logo').get(0).classList.add('chi-logo-up-and-bounce-anim');
            }
        }

        attachSidebarFunction($scope, $rootScope, $document);
    });
}
