jQuery(document).ready(function ($) {
    $('body.single img.full').each(function () {
        $(this).wrap('<div class="full-width"></div>');
    });
    jQuery('img').each(function () {
        var $this = jQuery(this);
        if ($this.data('clickable') == 'yes') {
            $this.addClass('linked-img');
            $this.click(function () {
                window.location = $this.data('url');
            });
        }
    });
});
jQuery(document).ready(function () {
    jQuery('ul#primary-menu > li.menu-item-has-children').click(function (e) {
        if (jQuery(this).find('ul').first().css('opacity') < 1) {
            e.preventDefault();
        }
    });

    jQuery('.button-collapse').sideNav({
            menuWidth: 300, // Default is 300
            edge: 'left', // Choose the horizontal origin
            closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
            draggable: true // Choose whether you can drag to open on touch screens
        }
    );
    if (jQuery('#wpadminbar').length) {
        jQuery('#mobile-menu').css('padding-top', '46px');
    }

});
/**
 * File skip-link-focus-fix.js.
 *
 * Helps with accessibility for keyboard only users.
 *
 * Learn more: https://git.io/vWdr2
 */
(function() {
	var isIe = /(trident|msie)/i.test( navigator.userAgent );

	if ( isIe && document.getElementById && window.addEventListener ) {
		window.addEventListener( 'hashchange', function() {
			var id = location.hash.substring( 1 ),
				element;

			if ( ! ( /^[A-z0-9_-]+$/.test( id ) ) ) {
				return;
			}

			element = document.getElementById( id );

			if ( element ) {
				if ( ! ( /^(?:a|select|input|button|textarea)$/i.test( element.tagName ) ) ) {
					element.tabIndex = -1;
				}

				element.focus();
			}
		}, false );
	}
})();

//# sourceMappingURL=theme.js.map
