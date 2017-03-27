(function ($) {
    $('body.single img.full').each(function () {
        $(this).wrap('<div class="full-width"></div>');
    });
})(jQuery);