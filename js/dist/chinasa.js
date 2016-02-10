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
        if (!$cookies.get('animAlreadyPlayed')) {
            $cookies.put('animAlreadyPlayed', 'true');

            if (isBreakpoint('lg')) {
                $('#chi-sidebar').get(0).classList.add('chi-enlarge-anim');
                $('.chi-sidebar-footer').get(0).classList.add('chi-footer-up-and-bounce-anim');
                $('.chi-sidebar-logo').get(0).classList.add('chi-logo-up-and-bounce-anim');
            }
        }

        attachSidebarFunction($scope, $rootScope, $document);
    });
}
;(function() {
    'use strict';
    angular
        .module('chinasa')
        .directive('chiResizeToFullScreen', chiResizeToFullScreen);

    chiResizeToFullScreen.$inject = ['$window', '$document'];

    function chiResizeToFullScreen($window, $document) {

        return {
            restrict: 'A',
            link: function(scope, element, attrs, graphNode) {
                var clh = ($window.innerHeight);

                // Do not resize if the full screen height is less than the container original size
                if (clh > element.height()) {
                    element.innerHeight(clh);
                }
            }
        };
    }
})();
;(function() {
    'use strict';
    angular
        .module('chinasa')
        .directive('chiSidebar', chiSidebar);

    chiSidebar.$inject = [];

    function chiSidebar() {

        return {
            restrict: 'E',
            template: "<div ng-class='{ \"chi-visible\": sidebarVisible }' ng-transclude></div>",
            transclude: true,
            replace: true,
            scope: {
                sidebarVisible: '='
            },
            link: link
        };

        function link() {
            var menu = [];
            menu[0] = $('.chi-menu:first-child');
            menu[1] = $('.chi-menu:last-child');

            var onCallapseShown = function(collapse) {
                var a = collapse.querySelector('a');
                a.setAttribute('href', 'javascript:void(0)');
                a.style.cursor = 'default';
            };
            var onCallapseHidden = function(collapse) {
                var a = collapse.querySelector('a');
                a.setAttribute('href', a.getAttribute('data-href-hidden'));
                a.style.cursor = 'initial';
            };

            menu[0].on('show.bs.collapse', function() {
                onCallapseShown(this);
            });
            menu[0].on('hide.bs.collapse', function() {
                onCallapseHidden(this);
            });

            menu[1].on('show.bs.collapse', function() {
                onCallapseShown(this);
            });
            menu[1].on('hide.bs.collapse', function() {
                onCallapseHidden(this);
            });

            // select which menu to open in the sidebar according to the current page state
            if (window.location.pathname === '/') {
                onCallapseShown(menu[0].get(0));
                menu[0].get(0).querySelector('div').classList.add('in');

            } else {
                onCallapseShown(menu[1].get(0));
                menu[1].get(0).querySelector('div').classList.add('in');
            }
        }
    }

})();
;(function() {
    'use strict';
    angular
        .module('chinasa')
        .directive('chiSmoothApparition', chiSmoothApparition);

    chiSmoothApparition.$inject = ['$window', '$document'];
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

                if( ! angular.isDefined( scope.class ) ) {
                    scope.class = "visible";
                }

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
;(function() {
    'use strict';
    angular
        .module('chinasa')
        .directive('chiSnapToViewportBottom', chiSnapToViewportBottom);

    chiSnapToViewportBottom.$inject = ['$window', '$document'];

    function chiSnapToViewportBottom($window, $document) {

        return {
            restrict: 'A',
            link: function(scope, element, attrs, graphNode) {

                var snap = function() {
                    var height = $window.innerHeight - element[0].offsetTop;
                    element.innerHeight(height);
                };

                var w = angular.element($window);

                w.bind('resize scroll', function() {
                    snap();
                });

                snap();

            }
        };
    }
})();
