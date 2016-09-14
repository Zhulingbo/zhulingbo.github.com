//代码整理：懒人之家 www.lanrenzhijia.com
(function($) {

    $.fn.fontFlex = function(max, mid, min) {

        var $this = this;

        $(window).resize(function() {

            var size = window.innerWidth / mid;

            if (size < min) size = min;
            if (size > max) size = max;

            $this.css('font-size', size + 'px');

        }).trigger('resize');
    };

})(jQuery);