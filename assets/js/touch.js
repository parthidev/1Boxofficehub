"use strict";
function _typeof3(e) {
    return (_typeof3 =
        "function" == typeof Symbol && "symbol" === _typeof3(Symbol.iterator)
            ? function (e) {
                  return void 0 === e ? "undefined" : _typeof3(e);
              }
            : function (e) {
                  return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : void 0 === e ? "undefined" : _typeof3(e);
              })(e);
}
$(document).ready(function () {
    var e;
    (e = function (e, t) {
        var o;
        (e.fn.hammer = function (o) {
            return this.each(function () {
                !(function (o, i) {
                    var n = e(o);
                    n.data("hammer") || n.data("hammer", new t(n[0], i));
                })(this, o);
            });
        }),
            (t.Manager.prototype.emit =
                ((o = t.Manager.prototype.emit),
                function (t, i) {
                    o.call(this, t, i), e(this.element).trigger({ type: t, gesture: i });
                }));
    }),
        "function" == typeof define && define.amd ? define(["jquery", "hammerjs"], e) : "object" === ("undefined" == typeof exports ? "undefined" : _typeof3(exports)) ? e(require("jquery"), require("hammerjs")) : e(jQuery, Hammer),
        $(".sidebar-panel li").on("click", function () {
            window.matchMedia("(max-width: 768px)").matches && window.matchMedia("(orientation:portrait)").matches && ($(this).closest(".sidebar-panel").removeClass("is-active"), $(".huro-hamburger .icon-box-toggle").removeClass("active"));
        }),
        void 0 !== window.orientation &&
            ($(".sidebar-panel .inner").each(function () {
                var e = $(this);
                new Hammer(this).on("swipeleft", function () { 
                    console.log("Swipe left detected."), e.closest(".sidebar-panel").removeClass("is-active"), $(".huro-hamburger .icon-box-toggle").removeClass("active");
                });
            }),
            $(".sidebar-search .inner").each(function () {
                var e = $(this);
                new Hammer(this).on("swipeleft", function () {
                    console.log("Swipe left detected."), e.closest(".sidebar-search").removeClass("is-active"), $(".huro-hamburger .icon-box-toggle").removeClass("active");
                });
            }),
            $(".is-messages #conversations-list").each(function () {
                var e = $(this);
                new Hammer(this).on("swipeleft", function () {
                    console.log("Swipe left detected."), e.closest(".is-messages").removeClass("is-active"), $(".huro-hamburger .icon-box-toggle").removeClass("active");
                });
            }),
            $(".main-sidebar .sidebar-inner, .view-wrapper").each(function () {
                $(this);
                new Hammer(this).on("swiperight", function () { 
                    console.log("Swipe Right detected."), $(".sidebar-panel").addClass("is-active"), $(".huro-hamburger .icon-box-toggle").addClass("active");
                });
            }),
            $(".conversation-area .conversation").each(function () {
                var e = $(this);
                new Hammer(this).on("swipeleft", function () {
                    console.log("Swipe left detected."), e.closest(".conversation-area").removeClass("is-active");
                });
            }));
});
