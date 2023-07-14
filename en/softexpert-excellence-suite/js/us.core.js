if (window.$us === undefined) window.$us = {};
jQuery.fn.usMod = function(mod, value) {
    if (this.length == 0) return this;
    if (value === !1) {
        this.get(0).className = this.get(0).className.replace(new RegExp('(^| )' + mod + '\_[a-z0-9]+( |$)'), '$2');
        return this
    }
    var pcre = new RegExp('^.*?' + mod + '\_([a-z0-9]+).*?$'),
        arr;
    if (value === undefined) {
        return (arr = pcre.exec(this.get(0).className)) ? arr[1] : !1
    } else {
        this.usMod(mod, !1).get(0).className += ' ' + mod + '_' + value;
        return this
    }
};
$us.toBool = function(value) {
    if (typeof value == 'string') return (value == 'true' || value == 'True' || value == 'TRUE' || value == '1');
    if (typeof value == 'boolean') return value;
    return !!parseInt(value)
};
jQuery.isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
jQuery('html').toggleClass('no-touch', !jQuery.isMobile);
! function($) {
    $us.$window = $(window);
    $us.$document = $(document);
    $us.$html = $('html');
    $us.$body = $('.l-body:first');
    $us.$htmlBody = $us.$html.add($us.$body);
    $us.$canvas = $('.l-canvas:first')
}(jQuery);
! function($) {
    "use strict";

    function USCanvas(options) {
        var defaults = {
            disableEffectsWidth: 900,
            responsive: !0
        };
        this.options = $.extend({}, defaults, options || {});
        this.$header = $us.$canvas.find('.l-header');
        this.$main = $us.$canvas.find('.l-main');
        this.$titlebar = $us.$canvas.find('.l-titlebar');
        this.$sections = $us.$canvas.find('.l-section');
        this.$firstSection = this.$sections.first();
        this.$fullscreenSections = this.$sections.filter('.height_full');
        this.$topLink = $('.w-toplink');
        this.sidebar = $us.$canvas.usMod('sidebar');
        this.type = $us.$canvas.usMod('type');
        this._headerPos = this.$header.usMod('pos');
        this.headerPos = this._headerPos;
        this.headerBg = this.$header.usMod('bg');
        this.rtl = $us.$body.hasClass('rtl');
        this.scrolledOccupiedHeight = 0;
        this.isScrolling = !1;
        this.scrollTimeout = !1;
        this.isAndroid = /Android/i.test(navigator.userAgent);
        this._events = {
            scroll: this.scroll.bind(this),
            resize: this.resize.bind(this)
        };
        $us.$window.on('scroll', this._events.scroll);
        $us.$window.on('resize load', this._events.resize);
        setTimeout(this._events.resize, 25);
        setTimeout(this._events.resize, 75)
    }
    USCanvas.prototype = {
        scroll: function() {
            var scrollTop = parseInt($us.$window.scrollTop());
            this.$topLink.toggleClass('active', (scrollTop >= this.winHeight));
            if (this.isAndroid) {
                this.isScrolling = !0;
                if (this.scrollTimeout) clearTimeout(this.scrollTimeout);
                this.scrollTimeout = setTimeout(function() {
                    this.isScrolling = !1
                }, 100)
            }
        },
        resize: function() {
            this.winHeight = parseInt($us.$window.height());
            this.winWidth = parseInt($us.$window.width());
            $us.$body.toggleClass('disable_effects', (this.winWidth <= this.options.disableEffectsWidth));
            if (this.$fullscreenSections.length > 0 && !this.isScrolling) {
                var adminBar = $('#wpadminbar'),
                    adminBarHeight = (adminBar.length) ? adminBar.height() : 0;
                if ($.isMobile) {}
                this.$fullscreenSections.each(function(index, section) {
                }.bind(this));
                $us.$canvas.trigger('contentChange')
            }
            this.scroll()
        }
    };
    $us.canvas = new USCanvas($us.canvasOptions || {})
}(jQuery);
