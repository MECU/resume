// chart for skill section start (working)
$(document).ready(function ($) {
    if ($('#skills').length) {

        var inView = false;

        function isScrolledIntoView(elem) {
            var docViewTop = $(window).scrollTop();
            var docViewBottom = docViewTop + $(window).height();

            var elemTop = $(elem).offset().top;
            var elemBottom = elemTop + $(elem).height();

            return ((elemTop <= docViewBottom) && (elemBottom >= docViewTop));
        }

        var html = [{value: 90, color: "#aed57c"}, {value: 10, color: "#eff7e5"}];
        var php = [{value: 85, color: "#aed57c"}, {value: 15, color: "#eff7e5"}];
        var wordpress = [{value: 50, color: "#aed57c"}, {value: 50, color: "#eff7e5"}];
        var css = [{value: 75, color: "#aed57c"}, {value: 25, color: "#eff7e5"}];
        var joomla = [{value: 10, color: "#aed57c"}, {value: 90, color: "#eff7e5"}];
        var js = [{value: 50, color: "#aed57c"}, {value: 50, color: "#eff7e5"}];
        var jquery = [{value: 75, color: "#aed57c"}, {value: 25, color: "#eff7e5"}];
        var mysql = [{value: 80, color: "#aed57c"}, {value: 20, color: "#eff7e5"}];
        var vue = [{value: 25, color: "#aed57c"}, {value: 75, color: "#eff7e5"}];
        var cpp = [{value: 15, color: "#aed57c"}, {value: 85, color: "#eff7e5"}];
        var oop = [{value: 74, color: "#aed57c"}, {value: 26, color: "#eff7e5"}];
        var html5 = [{value: 90, color: "#aed57c"}, {value: 10, color: "#eff7e5"}];
        var git = [{value: 66, color: "#aed57c"}, {value: 34, color: "#eff7e5"}];
        var composer = [{value: 50, color: "#aed57c"}, {value: 50, color: "#eff7e5"}];
        var bitbucket = [{value: 45, color: "#aed57c"}, {value: 55, color: "#eff7e5"}];
        var laravel = [{value: 50, color: "#aed57c"}, {value: 50, color: "#eff7e5"}];
        var querypath = [{value: 33, color: "#aed57c"}, {value: 67, color: "#eff7e5"}];
        var twitterapi = [{value: 44, color: "#aed57c"}, {value: 56, color: "#eff7e5"}];
        var rest = [{value: 50, color: "#aed57c"}, {value: 50, color: "#eff7e5"}];
        var eloquent = [{value: 33, color: "#aed57c"}, {value: 67, color: "#eff7e5"}];
        var bootstrap = [{value: 50, color: "#aed57c"}, {value: 50, color: "#eff7e5"}];
        var aws = [{value: 10, color: "#aed57c"}, {value: 90, color: "#eff7e5"}];
        var doctrine = [{value: 66, color: "#aed57c"}, {value: 34, color: "#eff7e5"}];
        var symfony = [{value: 50, color: "#aed57c"}, {value: 50, color: "#eff7e5"}];

        $(window).scroll(function () {
            if (isScrolledIntoView('#skills')) {
                if (inView) {
                    return;
                }
                inView = true;
                new Chart(document.getElementById("html").getContext("2d")).Doughnut(html);
                new Chart(document.getElementById("php").getContext("2d")).Doughnut(php);
                new Chart(document.getElementById("wordpress").getContext("2d")).Doughnut(wordpress);
                new Chart(document.getElementById("css").getContext("2d")).Doughnut(css);
                new Chart(document.getElementById("joomla").getContext("2d")).Doughnut(joomla);
                new Chart(document.getElementById("js").getContext("2d")).Doughnut(js);
                new Chart(document.getElementById("jquery").getContext("2d")).Doughnut(jquery);
                new Chart(document.getElementById("mysql").getContext("2d")).Doughnut(mysql);
                new Chart(document.getElementById("vue").getContext("2d")).Doughnut(vue);
                new Chart(document.getElementById("cpp").getContext("2d")).Doughnut(cpp);
                new Chart(document.getElementById("oop").getContext("2d")).Doughnut(oop);
                new Chart(document.getElementById("html5").getContext("2d")).Doughnut(html5);
                new Chart(document.getElementById("git").getContext("2d")).Doughnut(git);
                new Chart(document.getElementById("composer").getContext("2d")).Doughnut(composer);
                new Chart(document.getElementById("bitbucket").getContext("2d")).Doughnut(bitbucket);
                new Chart(document.getElementById("laravel").getContext("2d")).Doughnut(laravel);
                new Chart(document.getElementById("querypath").getContext("2d")).Doughnut(querypath);
                new Chart(document.getElementById("twitterapi").getContext("2d")).Doughnut(twitterapi);
                new Chart(document.getElementById("bootstrap").getContext("2d")).Doughnut(bootstrap);
                new Chart(document.getElementById("rest").getContext("2d")).Doughnut(rest);
                new Chart(document.getElementById("eloquent").getContext("2d")).Doughnut(eloquent);
                new Chart(document.getElementById("aws").getContext("2d")).Doughnut(aws);
                new Chart(document.getElementById("doctrine").getContext("2d")).Doughnut(doctrine);
                new Chart(document.getElementById("symfony").getContext("2d")).Doughnut(symfony);
            } else {
                if ($(window).width() >= 1024) {
                    inView = false;
                }
            }
        });
    }
});