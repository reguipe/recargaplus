(function(c, d) {
    "object" === typeof exports ? d(exports) : "function" === typeof define && define.amd ? define(["exports"], d) : d(c)
})(this, function(c) {
    c.Nanobar = function() {
        var d, c, e, f, g, h, k = {
                width: "100%",
                position: "static",
                height: "4px",
                zIndex: 9999,
                top: "0"
            },
            l = {
                width: 0,
                height: "0.5%",
                position: "fixed",
                clear: "both",
                transition: "height .3s"
            };
        d = function(a, b) {
            for (var c in b) a.style[c] = b[c];
            a.style["float"] = "left"
        };
        f = function() {
            var a = this,
                b = this.width - this.here;.1 > b && -.1 < b ? (g.call(this, this.here), this.moving = !1, 100 == this.width && (this.el.style.height = 0, setTimeout(function() {
                    a.cont.el.removeChild(a.el)
                },
                300))) : (g.call(this, this.width - b / 4), setTimeout(function() {
                a.go()
            }, 16))
        };
        g = function(a) {
            this.width = a;
            this.el.style.width = this.width + "%"
        };
        h = function() {
            var a = new c(this);
            this.bars.unshift(a)
        };
        c = function(a) {
            this.el = document.createElement("div");
            this.el.style.backgroundColor = a.opts.bg;
            this.here = this.width = 0;
            this.moving = !1;
            this.cont = a;
            d(this.el, l);
            a.el.appendChild(this.el)
        };
        c.prototype.go = function(a) {
            a ? (this.here = a, this.moving || (this.moving = !0, f.call(this))) : this.moving && f.call(this)
        };
        e = function(a) {
            a = this.opts =
                a || {};
            var b;
            a.bg = a.bg || "#000";
            this.bars = [];
            b = this.el = document.createElement("div");
            d(this.el, k);
            a.id && (b.id = a.id);
            b.style.position = a.target ? "relative" : "fixed";
            a.target ? a.target.insertBefore(b, a.target.firstChild) : document.getElementsByTagName("body")[0].appendChild(b);
            h.call(this)
        };
        e.prototype.go = function(a) {
            this.bars[0].go(a);
            100 == a && h.call(this)
        };
        return e
    }();
    return c.Nanobar
});