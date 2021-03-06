// Generated by CoffeeScript 1.8.0

/*
jQuery Lighter
Copyright 2013 Kevin Sylvestre
1.1.9
 */

(function() {
  "use strict";
  var $, Animation, Lighter,
    __bind = function(fn, me){ return function(){ return fn.apply(me, arguments); }; };

  $ = jQuery;

  Animation = (function() {
    function Animation() {}

    Animation.transitions = {
      "webkitTransition": "webkitTransitionEnd",
      "mozTransition": "mozTransitionEnd",
      "oTransition": "oTransitionEnd",
      "transition": "transitionend"
    };

    Animation.transition = function($el) {
      var el, result, type, _ref;
      el = $el[0];
      _ref = this.transitions;
      for (type in _ref) {
        result = _ref[type];
        if (el.style[type] != null) {
          return result;
        }
      }
    };

    Animation.execute = function($el, callback) {
      var transition;
      transition = this.transition($el);
      if (transition != null) {
        return $el.one(transition, callback);
      } else {
        return callback();
      }
    };

    return Animation;

  })();

  Lighter = (function() {
    Lighter.namespace = "lighter";

    Lighter.prototype.defaults = {
      padding: 40,
      dimensions: {
        width: 480,
        height: 480
      },
      template: "<div class='" + Lighter.namespace + " fade'>\n  <div class='" + Lighter.namespace + "-container'>\n    <span class='" + Lighter.namespace + "-content'></span>\n    <a class='" + Lighter.namespace + "-close'>&times;</a>\n    <a class='" + Lighter.namespace + "-prev'>&lsaquo;</a>\n    <a class='" + Lighter.namespace + "-next'>&rsaquo;</a>\n  </div>\n  <div class='" + Lighter.namespace + "-overlay'></div>\n</div>"
    };

    Lighter.lighter = function($target, options) {
      var data;
      if (options == null) {
        options = {};
      }
      data = $target.data('_lighter');
      if (!data) {
        $target.data('_lighter', data = new Lighter($target, options));
      }
      return data;
    };

    Lighter.prototype.$ = function(selector) {
      return this.$el.find(selector);
    };

    function Lighter($target, settings) {
      if (settings == null) {
        settings = {};
      }
      this.show = __bind(this.show, this);
      this.hide = __bind(this.hide, this);
      this.observe = __bind(this.observe, this);
      this.keyup = __bind(this.keyup, this);
      this.size = __bind(this.size, this);
      this.align = __bind(this.align, this);
      this.resize = __bind(this.resize, this);
      this.preload = __bind(this.preload, this);
      this.process = __bind(this.process, this);
      this.href = __bind(this.href, this);
      this.type = __bind(this.type, this);
      this.prev = __bind(this.prev, this);
      this.next = __bind(this.next, this);
      this.close = __bind(this.close, this);
      this.$ = __bind(this.$, this);
      this.$target = $target;
      this.settings = $.extend({}, this.defaults, settings);
      this.$el = $(this.settings.template);
      this.$overlay = this.$("." + Lighter.namespace + "-overlay");
      this.$content = this.$("." + Lighter.namespace + "-content");
      this.$container = this.$("." + Lighter.namespace + "-container");
      this.$close = this.$("." + Lighter.namespace + "-close");
      this.$prev = this.$("." + Lighter.namespace + "-prev");
      this.$next = this.$("." + Lighter.namespace + "-next");
      this.$body = this.$("." + Lighter.namespace + "-body");
      this.dimensions = this.settings.dimensions;
      this.align();
      this.process();
    }

    Lighter.prototype.close = function(event) {
      if (event != null) {
        event.preventDefault();
      }
      if (event != null) {
        event.stopPropagation();
      }
      return this.hide();
    };

    Lighter.prototype.next = function(event) {
      if (event != null) {
        event.preventDefault();
      }
      return event != null ? event.stopPropagation() : void 0;
    };

    Lighter.prototype.prev = function() {
      if (typeof event !== "undefined" && event !== null) {
        event.preventDefault();
      }
      return typeof event !== "undefined" && event !== null ? event.stopPropagation() : void 0;
    };

    Lighter.prototype.type = function(href) {
      if (href == null) {
        href = this.href();
      }
      return this.settings.type || (this.href().match(/\.(webp|jpeg|jpg|jpe|gif|png|bmp)$/i) ? "image" : void 0);
    };

    Lighter.prototype.href = function() {
      return this.$target.attr("href");
    };

    Lighter.prototype.process = function() {
      var href, type;
      type = this.type(href = this.href());
      this.$content.html((function() {
        switch (type) {
          case "image":
            return $("<img />").attr({
              src: href
            });
          default:
            return $(href);
        }
      })());
      switch (type) {
        case "image":
          return this.preload(href);
      }
    };

    Lighter.prototype.preload = function(href) {
      var image;
      image = new Image();
      image.src = href;
      return image.onload = (function(_this) {
        return function() {
          return _this.resize({
            width: image.width,
            height: image.height
          });
        };
      })(this);
    };

    Lighter.prototype.resize = function(dimensions) {
      this.dimensions = dimensions;
      return this.align();
    };

    Lighter.prototype.align = function() {
      var size;
      size = this.size();
      return this.$container.css({
        height: size.height,
        width: size.width,
        margin: "-" + (size.height / 2) + "px -" + (size.width / 2) + "px"
      });
    };

    Lighter.prototype.size = function() {
      var ratio;
      ratio = Math.max(this.dimensions.height / ($(window).height() - this.settings.padding), this.dimensions.width / ($(window).width() - this.settings.padding));
      return {
        width: ratio > 1.0 ? Math.round(this.dimensions.width / ratio) : this.dimensions.width,
        height: ratio > 1.0 ? Math.round(this.dimensions.height / ratio) : this.dimensions.height
      };
    };

    Lighter.prototype.keyup = function(event) {
      if (event.target.form != null) {
        return;
      }
      if (event.which === 27) {
        this.close();
      }
      if (event.which === 37) {
        this.prev();
      }
      if (event.which === 39) {
        return this.next();
      }
    };

    Lighter.prototype.observe = function(method) {
      if (method == null) {
        method = 'on';
      }
      $(window)[method]("resize", this.align);
      $(document)[method]("keyup", this.keyup);
      this.$overlay[method]("click", this.close);
      this.$close[method]("click", this.close);
      this.$next[method]("click", this.next);
      return this.$prev[method]("click", this.prev);
    };

    Lighter.prototype.hide = function() {
      var alpha, omega;
      alpha = (function(_this) {
        return function() {
          return _this.observe('off');
        };
      })(this);
      omega = (function(_this) {
        return function() {
          return _this.$el.remove();
        };
      })(this);
      alpha();
      this.$el.removeClass('fade');
      this.$el.position();
      this.$el.addClass('fade');
      return Animation.execute(this.$container, omega);
    };

    Lighter.prototype.show = function() {
      var alpha, omega;
      omega = (function(_this) {
        return function() {
          return _this.observe('on');
        };
      })(this);
      alpha = (function(_this) {
        return function() {
          return $(document.body).append(_this.$el);
        };
      })(this);
      alpha();
      this.$el.addClass('fade');
      this.$el.position();
      this.$el.removeClass('fade');
      return Animation.execute(this.$container, omega);
    };

    return Lighter;

  })();

  $.fn.extend({
    lighter: function(option) {
      if (option == null) {
        option = {};
      }
      return this.each(function() {
        var $this, action, options;
        $this = $(this);
        options = $.extend({}, $.fn.lighter.defaults, typeof option === "object" && option);
        action = typeof option === "string" ? option : option.action;
        if (action == null) {
          action = "show";
        }
        return Lighter.lighter($this, options)[action]();
      });
    }
  });

  $(document).on("click", "[data-lighter]", function(event) {
    event.preventDefault();
    event.stopPropagation();
    return $(this).lighter();
  });

}).call(this);

//# sourceMappingURL=jquery.lighter.js.map
