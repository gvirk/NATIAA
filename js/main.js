/**
 * 
 */


// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1000, 'easeInOutExpo');
        event.preventDefault();
    });
});

var navlnks = document.querySelectorAll(".nav a");
        Array.prototype.map.call(navlnks, function(item) {

            item.addEventListener("click", function(e) {

                var navlnks = document.querySelectorAll(".nav a"); 

                Array.prototype.map.call(navlnks, function(item) {

                    if (item.parentNode.className == "active" || item.parentNode.className == "active open" ) {

                        item.parentNode.className = "";

                    } 

                }); 

                e.currentTarget.parentNode.className = "active";
            });
        });


// Highlight the top nav as scrolling occurs
$('body').scrollspy({
    target: '.navbar-fixed-top'
})