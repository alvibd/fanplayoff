(function ($) {
    "use strict";

    jQuery(document).ready(function ($) {


        /* MOBILE DETECTION */
        var is_mobile = ((/Mobile|Android|iPhone|iPod|BlackBerry|Windows Phone/i).test(navigator.userAgent || navigator.vendor || window.opera) ? true : false);

        /* BROWSER WINDOW DETECTION */
        var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
        var h = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);

        if (is_mobile || (w < 767)) {
            
        }



        var ps9 = new PerfectScrollbar('.team-table tbody');
        var ps10 = new PerfectScrollbar('.team-table2 tbody');

    });

    jQuery(window).load(function ($) {

    });
})(jQuery);