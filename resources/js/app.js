(function () {

    'use strict';


    const button =
        document.querySelector(
            '[data-menu-button]'
        );


    const sidebar =
        document.querySelector(
            '[data-sidebar]'
        );


    if (
        button &&
        sidebar
    ) {

        button.addEventListener(
            'click',
            function () {

                sidebar
                    .classList
                    .toggle('open');

            }
        );


        document.addEventListener(
            'click',
            function (event) {

                const clickedButton =
                    event.target.closest(
                        '[data-menu-button]'
                    );


                const clickedSidebar =
                    event.target.closest(
                        '[data-sidebar]'
                    );


                if (
                    !clickedButton &&
                    !clickedSidebar
                ) {

                    sidebar
                        .classList
                        .remove('open');

                }

            }
        );

    }

})();