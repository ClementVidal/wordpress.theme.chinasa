(function() {
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
