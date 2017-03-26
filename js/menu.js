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