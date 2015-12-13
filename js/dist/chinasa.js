var chinasa = angular.module('chinasa', ['duScroll']);

console.log( "Enter module definition");

chinasa.controller('bodyController', function bodyController($timeout, $scope, $compile) {

        //$.fn.collapse.Constructor.TRANSITION_DURATION = 10000;

        console.log( $.fn.collapse.Constructor );

        $scope.isInView = false;

        console.log( "Enter body controller");

        var menu = $('.chi-menu');

        var onCallapseShown = function(collapse) {
            var a = collapse.querySelector('a');
            a.setAttribute('href', "javascript:void(0)");
            a.removeAttribute('data-toggle');
            a.style.cursor = 'default';
            a.classList.add('visible');

        };
        var onCallapseHidden = function(collapse) {
            var a = collapse.querySelector('a');
            a.setAttribute('href', a.getAttribute('data-href-hidden'));
            a.setAttribute('data-toggle', 'collapse');
            a.style.cursor = 'initial';
            a.classList.remove('visible');
        };

        menu.on('show.bs.collapse', function() {
            onCallapseShown(this);

        });
        menu.on('hide.bs.collapse', function() {
            onCallapseHidden(this);
        });


        onCallapseShown(menu.get(0));

//    });
});
;(function() {
    'use strict';
    angular
        .module('chinasa')
        .directive('chiMenuContainer', chiMenuContainer);

    function chiMenuContainer($window, $document) {

        var keyframesTemplate = "@keyframes disapear{ \
                0% { height: {{height}};  } \
                100% {  height: 0;  }\
            }"
        var replacementPattern = /\{\{height\}\}/g;

        function insertKeyframes( height ) {

            var styleElement = angular.element("<style/>")[0];
            styleElement.appendChild(document.createTextNode(keyframesTemplate));
            console.log( "1New stylesheet: ", styleElement );
            document.head.appendChild(styleElement);
            /*
            styleElement.textContent = keyframesTemplate.replace(replacementPattern, height + 'px');
            console.log( "Insert keyframe: ", styleElement, styleElement.textContent );
            $document[0].head.appendChild(styleElement[0]);
            */
        }

        function removeElement(event) {
          if (event.animationName === 'disapear') {
            event.target.parentNode.removeChild(event.target);
          }
        }



        return {
            restrict: 'A',
            link: function(scope, element, attrs, graphNode) {

                var menusContainer = $document[0].querySelector(".chi-menu-container");
                var menus = element[0].querySelectorAll(".chi-menu>div");
                var headers = element[0].querySelectorAll(".chi-menu>a");

                var onClick = function( e ) {

                    var menu = event.target.parentElement.querySelector( "div" );
                    insertKeyframes( menu.clientHeight );
                    menu.classList.add( 'chi-removed' );

                    menusContainer.addEventListener('animationend',removeElement);
                };

                for (var i = 0; i < headers.length; i++) {
                    headers[i].addEventListener('click', onClick);
                }

            }
        };
    }
})();
;(function() {
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
                    console.log( "set height: ", clh);
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

    function chiSnapToViewportBottom( $window, $document) {

        return {
            restrict: 'A',
            link: function(scope, element, attrs, graphNode) {

                var snap = function() {
                    var height = $window.innerHeight - element[0].offsetTop;
                    element.innerHeight( height );
                };

                var w = angular.element($window);

                w.bind('resize', function () {
                    console.log('resize');
                    snap();
                });

                snap();

            }
        };
    }
})();
