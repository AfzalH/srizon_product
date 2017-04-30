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