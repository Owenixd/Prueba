"use strict";

if (typeof jQuery === "undefined") {
    throw new Error("jQuery plugins need to be before this file");
}

$(document).ready(function() {

    $.fn.scroll2inner = function(elem, speed) { 
        $(this).animate({
            scrollTop:  ($(this).scrollTop() - $(this).offset().top + $(elem).offset().top - 50)
        }, speed == undefined ? 1000 : speed); 
        return this; 
    };

    var _side_bar_ = $('[data-app="left-sidebar"]');


    _side_bar_.find('[data-toggle-menu]').on('click', function(event) {
        event.preventDefault();

        $(this).parent("li.menu-list-item").toggleClass("open");
        $(this).next("div.submenu-list").slideToggle(100);
    });

    _side_bar_.find("ul.menu-list").scroll2inner(_side_bar_.find("li.active"), 0);

    if (_side_bar_.find("li.active").find("div.submenu-list").length) {
        _side_bar_.find("li.active").find("div.submenu-list").slideDown(100);
    }
});