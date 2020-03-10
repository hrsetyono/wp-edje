!function(e, t) {
  "object" == typeof exports && "object" == typeof module ? module.exports = t() : "function" == typeof define && define.amd ? define([], t) : "object" == typeof exports ? exports.ctEvents = t() : e.ctEvents = t()
}(window, (function() {
  return function(e) {
      var t = {};
      function n(r) {
          if (t[r])
              return t[r].exports;
          var o = t[r] = {
              i: r,
              l: !1,
              exports: {}
          };
          return e[r].call(o.exports, o, o.exports, n),
          o.l = !0,
          o.exports
      }
      return n.m = e,
      n.c = t,
      n.d = function(e, t, r) {
          n.o(e, t) || Object.defineProperty(e, t, {
              enumerable: !0,
              get: r
          })
      }
      ,
      n.r = function(e) {
          "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
              value: "Module"
          }),
          Object.defineProperty(e, "__esModule", {
              value: !0
          })
      }
      ,
      n.t = function(e, t) {
          if (1 & t && (e = n(e)),
          8 & t)
              return e;
          if (4 & t && "object" == typeof e && e && e.__esModule)
              return e;
          var r = Object.create(null);
          if (n.r(r),
          Object.defineProperty(r, "default", {
              enumerable: !0,
              value: e
          }),
          2 & t && "string" != typeof e)
              for (var o in e)
                  n.d(r, o, function(t) {
                      return e[t]
                  }
                  .bind(null, o));
          return r
      }
      ,
      n.n = function(e) {
          var t = e && e.__esModule ? function() {
              return e.default
          }
          : function() {
              return e
          }
          ;
          return n.d(t, "a", t),
          t
      }
      ,
      n.o = function(e, t) {
          return Object.prototype.hasOwnProperty.call(e, t)
      }
      ,
      n.p = "",
      n(n.s = 0)
  }([function(e, t, n) {
      "use strict";
      function r(e) {
          return function(e) {
              if (Array.isArray(e)) {
                  for (var t = 0, n = new Array(e.length); t < e.length; t++)
                      n[t] = e[t];
                  return n
              }
          }(e) || function(e) {
              if (Symbol.iterator in Object(e) || "[object Arguments]" === Object.prototype.toString.call(e))
                  return Array.from(e)
          }(e) || function() {
              throw new TypeError("Invalid attempt to spread non-iterable instance")
          }()
      }
      function o(e, t) {
          for (var n = 0; n < t.length; n++) {
              var r = t[n];
              r.enumerable = r.enumerable || !1,
              r.configurable = !0,
              "value"in r && (r.writable = !0),
              Object.defineProperty(e, r.key, r)
          }
      }
      function i(e, t) {
          var n = Object.keys(e);
          if (Object.getOwnPropertySymbols) {
              var r = Object.getOwnPropertySymbols(e);
              t && (r = r.filter((function(t) {
                  return Object.getOwnPropertyDescriptor(e, t).enumerable
              }
              ))),
              n.push.apply(n, r)
          }
          return n
      }
      function u(e) {
          for (var t = 1; t < arguments.length; t++) {
              var n = null != arguments[t] ? arguments[t] : {};
              t % 2 ? i(n, !0).forEach((function(t) {
                  c(e, t, n[t])
              }
              )) : Object.getOwnPropertyDescriptors ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(n)) : i(n).forEach((function(t) {
                  Object.defineProperty(e, t, Object.getOwnPropertyDescriptor(n, t))
              }
              ))
          }
          return e
      }
      function c(e, t, n) {
          return t in e ? Object.defineProperty(e, t, {
              value: n,
              enumerable: !0,
              configurable: !0,
              writable: !0
          }) : e[t] = n,
          e
      }
      n.r(t);
      var f = function(e, t) {
          return "string" != typeof e ? e : e.replace(/\s\s+/g, " ").trim().split(" ").reduce((function(e, n) {
              return u({}, e, c({}, n, t))
          }
          ), {})
      }
        , a = new (function() {
          function e() {
              !function(e, t) {
                  if (!(e instanceof t))
                      throw new TypeError("Cannot call a class as a function")
              }(this, e),
              c(this, "_events", {})
          }
          var t, n, i;
          return t = e,
          (n = [{
              key: "on",
              value: function(e, t) {
                  var n = this
                    , o = f(e, t);
                  return Object.keys(o).map((function(e) {
                      return n._events = u({}, n._events, c({}, e, [].concat(r(n._events[e] || []), [o[e]])))
                  }
                  )),
                  this
              }
          }, {
              key: "off",
              value: function(e, t) {
                  var n = this
                    , r = f(e, t);
                  return Object.keys(r).map((function(e) {
                      n._events[e] && (r[e] ? n._events[e].splice(n._events[e].indexOf(t) >>> 0, 1) : n._events[e] = [])
                  }
                  )),
                  this
              }
          }, {
              key: "trigger",
              value: function(e, t) {
                  var n = this
                    , r = f(e)
                    , o = function(e) {
                      return e && e.call(window, t)
                  };
                  return Object.keys(r).map((function(e) {
                      try {
                          (n._events[e] || []).map(o),
                          (n._events.all || []).map(o)
                      } catch (e) {
                          if (console.log("%c [Events] Exception raised.", "color: red; font-weight: bold;"),
                          "undefined" == typeof console)
                              throw e;
                        // @changed - it outputs error that doesn't seem to affect anything
                        // Error message: TypeError: Cannot read property 'firstElementChild' of null
                          console.error(e)
                      }
                  }
                  )),
                  this
              }
          }]) && o(t.prototype, n),
          i && o(t, i),
          e
      }());
      t.default = a
  }
  ]).default
}
));
