;(function ($, window, document, undefined) {
    var pluginName = "faq";
    var defaults = {};

    function Plugin(element, options) {
        var _this = this;
        this.element = $(element);
        this.items = {};
        this.settings = $.extend({}, defaults, options);
        this._defaults = defaults;
        this._name = pluginName;
        this.init();
    }

    Plugin.prototype = {
        init: function () {
            var _this = this;
            var hash = window.location.hash;
            var splitHashes = hash.split('#');
            for (idx in splitHashes) {
                var current = splitHashes[idx];
                if (current) {
                    $('a[href=\"#' + current + '\"]').click();
                }
            }

            if (splitHashes.length > 0 && splitHashes.pop()) {
                _this.scrollTo(`#${splitHashes.pop()}`);
            }

            $('#faq a, .faq-tabs-white a').click(function (e) {
                _this.buildHash(this);
            });

            $('.faq-categories ul li a').click(function (e) {
                $(this).tab('show');
                var scrollmem = $('body').scrollTop() || $('html').scrollTop();
                $('html,body').scrollTop(scrollmem);
            });

            $('.panel-body-content a[href^="#"]').click(function (e) {
                e.preventDefault();
                var elems = [];
                var id = this.getAttribute('href');
                $(id).parents('.collapse').each(function (i, elem) {
                    elems.push(elem.getAttribute('id'));
                    $(elem).collapse('show');
                });
                $(id).collapse('show');
                _this.scrollTo(id);
                var elemToHash = document.querySelector(`a[href="#${elems.pop()}"]`);
                _this.buildHash(elemToHash);

                return false;
            });

            //  Select first tab if hash is empty
            if (!hash) {
                $('.faq-categories ul li:eq(0) a').click();
            }
        },
        buildHash: function (elem, hash) {
            var hash = (hash || '');
            if (!elem.dataset.parent) {
                if (elem.getAttribute('id')) {
                    window.location.hash = '#tab-' + elem.getAttribute('id') + (hash || '');
                } else {
                    window.location.hash = elem.hash + hash;
                }
            } else {
                var parent = document.querySelector(`a[href="${elem.dataset.parent}"]`) || document.querySelector(`a[href="#tab-${elem.dataset.parent.replace(/#/g, '')}"]`);
                if (parent) {
                    this.buildHash(parent, elem.hash + hash);
                }
            }
        },
        scrollTo: function (selector) {
            var scrl = $(selector).offset().top;
            $('html, body').animate({
                scrollTop: scrl - 100
            }, 600);
        }
    };

    $.fn[pluginName] = function (options) {
        if (!$(this).data("plugin_" + pluginName)) {
            $(this).data("plugin_" + pluginName, new Plugin(this, options));
        }

        return $(this).data("plugin_" + pluginName);
    };
})(jQuery, window, document);
