!function($){$.fn.visible=function(i){var t=$(this),n=$(window),o=n.scrollTop(),e=o+n.height(),f=t.offset().top,h=f+t.height(),r=!0===i?h:f;return(!0===i?f:h)<=e&&r>=o}}(jQuery);