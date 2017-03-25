jQuery(document).ready(function () {
    jQuery('ul#primary-menu > li.menu-item-has-children').click(function (e) {
        if (jQuery(this).find('ul').first().css('opacity') < 1) {
            e.preventDefault();
        }
    })
});