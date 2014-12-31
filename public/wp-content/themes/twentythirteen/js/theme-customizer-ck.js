/**
 * Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Customizer preview reload changes asynchronously.
 * Things like site title and description changes.
 */(function(e){wp.customize("blogname",function(t){t.bind(function(t){e(".site-title").text(t)})});wp.customize("blogdescription",function(t){t.bind(function(t){e(".site-description").text(t)})});wp.customize("header_textcolor",function(t){t.bind(function(t){if("blank"==t){"remove-header"==wp.customize.instance("header_image").get()&&e(".home-link").css("min-height","0");e(".site-title, .site-description").css({clip:"rect(1px, 1px, 1px, 1px)",position:"absolute"})}else{e(".home-link").css("min-height","230px");e(".site-title, .site-description").css({clip:"auto",color:t,position:"relative"})}})})})(jQuery);