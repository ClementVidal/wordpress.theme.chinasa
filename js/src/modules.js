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
