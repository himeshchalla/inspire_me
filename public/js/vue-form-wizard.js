/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 26);
/******/ })
/************************************************************************/
/******/ ({

/***/ 1:
/***/ (function(module, exports) {

module.exports = function(module) {
	if(!module.webpackPolyfill) {
		module.deprecate = function() {};
		module.paths = [];
		// module.parent = undefined by default
		if(!module.children) module.children = [];
		Object.defineProperty(module, "loaded", {
			enumerable: true,
			get: function() {
				return module.l;
			}
		});
		Object.defineProperty(module, "id", {
			enumerable: true,
			get: function() {
				return module.i;
			}
		});
		module.webpackPolyfill = 1;
	}
	return module;
};


/***/ }),

/***/ 26:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(27);


/***/ }),

/***/ 27:
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function(module) {var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

!function (t, e) {
  "object" == ( false ? "undefined" : _typeof(exports)) && "object" == ( false ? "undefined" : _typeof(module)) ? module.exports = e() :  true ? !(__WEBPACK_AMD_DEFINE_ARRAY__ = [], __WEBPACK_AMD_DEFINE_FACTORY__ = (e),
				__WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ?
				(__WEBPACK_AMD_DEFINE_FACTORY__.apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__)) : __WEBPACK_AMD_DEFINE_FACTORY__),
				__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__)) : "object" == (typeof exports === "undefined" ? "undefined" : _typeof(exports)) ? exports.VueFormWizard = e() : t.VueFormWizard = e();
}(this, function () {
  return function (t) {
    function e(i) {
      if (a[i]) return a[i].exports;var n = a[i] = { i: i, l: !1, exports: {} };return t[i].call(n.exports, n, n.exports, e), n.l = !0, n.exports;
    }var a = {};return e.m = t, e.c = a, e.i = function (t) {
      return t;
    }, e.d = function (t, a, i) {
      e.o(t, a) || Object.defineProperty(t, a, { configurable: !1, enumerable: !0, get: i });
    }, e.n = function (t) {
      var a = t && t.__esModule ? function () {
        return t.default;
      } : function () {
        return t;
      };return e.d(a, "a", a), a;
    }, e.o = function (t, e) {
      return Object.prototype.hasOwnProperty.call(t, e);
    }, e.p = "", e(e.s = 9);
  }([function (t, e) {
    t.exports = function (t, e, a, i) {
      var n,
          r = t = t || {},
          s = _typeof(t.default);"object" !== s && "function" !== s || (n = t, r = t.default);var o = "function" == typeof r ? r.options : r;if (e && (o.render = e.render, o.staticRenderFns = e.staticRenderFns), a && (o._scopeId = a), i) {
        var c = Object.create(o.computed || null);Object.keys(i).forEach(function (t) {
          var e = i[t];c[t] = function () {
            return e;
          };
        }), o.computed = c;
      }return { esModule: n, exports: r, options: o };
    };
  }, function (t, e, a) {
    a(10);var i = a(0)(a(7), a(13), null, null);t.exports = i.exports;
  }, function (t, e, a) {
    a(12);var i = a(0)(a(8), a(16), null, null);t.exports = i.exports;
  }, function (t, e, a) {
    a(11);var i = a(0)(a(5), a(14), null, null);t.exports = i.exports;
  }, function (t, e, a) {
    var i = a(0)(a(6), a(15), null, null);t.exports = i.exports;
  }, function (t, e, a) {
    "use strict";
    Object.defineProperty(e, "__esModule", { value: !0 });var i = a(1),
        n = a.n(i),
        r = a(2),
        s = a.n(r);e.default = { name: "form-wizard", components: { WizardButton: n.a, WizardStep: s.a }, props: { title: { type: String, default: "Awesome Wizard" }, subtitle: { type: String, default: "Split a complicated flow in multiple steps" }, nextButtonText: { type: String, default: "Next" }, backButtonText: { type: String, default: "Back" }, finishButtonText: { type: String, default: "Finish" }, hideButtons: { type: Boolean, default: !1 }, validateOnBack: Boolean, color: { type: String, default: "#e74c3c" }, errorColor: { type: String, default: "#8b0000" }, shape: { type: String, default: "circle" }, stepSize: { type: String, default: "md", validator: function validator(t) {
            return -1 !== ["xs", "sm", "md", "lg"].indexOf(t);
          } }, transition: { type: String, default: "" }, startIndex: { type: Number, default: 0, validator: function validator(t) {
            return t >= 0;
          } } }, data: function data() {
        return { activeTabIndex: 0, isLastStep: !1, currentPercentage: 0, maxStep: 0, loading: !1, tabs: [] };
      }, computed: { slotProps: function slotProps() {
          return { nextTab: this.nextTab, prevTab: this.prevTab, activeTabIndex: this.activeTabIndex, isLastStep: this.isLastStep, fillButtonStyle: this.fillButtonStyle };
        }, tabCount: function tabCount() {
          return this.tabs.length;
        }, displayPrevButton: function displayPrevButton() {
          return 0 !== this.activeTabIndex;
        }, stepPercentage: function stepPercentage() {
          return 1 / (2 * this.tabCount) * 100;
        }, progressBarStyle: function progressBarStyle() {
          return { backgroundColor: this.color, width: this.progress + "%", color: this.color };
        }, fillButtonStyle: function fillButtonStyle() {
          return { backgroundColor: this.color, borderColor: this.color, color: "white" };
        }, progress: function progress() {
          return this.activeTabIndex > 0 ? this.stepPercentage * (2 * this.activeTabIndex + 1) : this.stepPercentage;
        } }, methods: { emitTabChange: function emitTabChange(t, e) {
          this.$emit("on-change", t, e), this.$emit("update:startIndex", e);
        }, addTab: function addTab(t) {
          var e = this.$slots.default.indexOf(t.$vnode);this.tabs.splice(e, 0, t), e < this.activeTabIndex + 1 && (this.maxStep = e, this.changeTab(this.activeTabIndex + 1, e));
        }, removeTab: function removeTab(t) {
          var e = this.tabs,
              a = e.indexOf(t);a > -1 && (a === this.activeTabIndex && (this.maxStep = this.activeTabIndex - 1, this.changeTab(this.activeTabIndex, this.activeTabIndex - 1)), a < this.activeTabIndex && (this.maxStep = this.activeTabIndex - 1, this.activeTabIndex = this.activeTabIndex - 1, this.emitTabChange(this.activeTabIndex + 1, this.activeTabIndex)), e.splice(a, 1));
        }, navigateToTab: function navigateToTab(t) {
          var e = this,
              a = t > this.activeTabIndex;if (t <= this.maxStep) {
            var i = function i() {
              a && t - e.activeTabIndex > 1 ? (e.changeTab(e.activeTabIndex, e.activeTabIndex + 1), e.beforeTabChange(e.activeTabIndex, i)) : e.changeTab(e.activeTabIndex, t);
            };a ? this.beforeTabChange(this.activeTabIndex, i) : (this.setValidationError(null), i());
          }
        }, nextTab: function nextTab() {
          var t = this,
              e = function e() {
            t.activeTabIndex < t.tabCount - 1 ? t.changeTab(t.activeTabIndex, t.activeTabIndex + 1) : (t.isLastStep = !0, t.$emit("on-complete"));
          };this.beforeTabChange(this.activeTabIndex, e);
        }, prevTab: function prevTab() {
          var t = this,
              e = function e() {
            t.activeTabIndex > 0 && (t.setValidationError(null), t.changeTab(t.activeTabIndex, t.activeTabIndex - 1), t.isLastStep = !1);
          };this.validateOnBack ? this.beforeTabChange(this.activeTabIndex, e) : e();
        }, setLoading: function setLoading(t) {
          this.loading = t, this.$emit("on-loading", t);
        }, setValidationError: function setValidationError(t) {
          this.tabs[this.activeTabIndex].validationError = t, this.$emit("on-error", t);
        }, validateBeforeChange: function validateBeforeChange(t, e) {
          var a = this;if (this.setValidationError(null), t.then && "function" == typeof t.then) this.setLoading(!0), t.then(function (t) {
            a.setLoading(!1);var i = !0 === t;a.executeBeforeChange(i, e);
          }).catch(function (t) {
            a.setLoading(!1), a.setValidationError(t);
          });else {
            var i = !0 === t;this.executeBeforeChange(i, e);
          }
        }, executeBeforeChange: function executeBeforeChange(t, e) {
          this.$emit("on-validate", t, this.activeTabIndex), t ? e() : this.tabs[this.activeTabIndex].validationError = "error";
        }, beforeTabChange: function beforeTabChange(t, e) {
          if (!this.loading) {
            var a = this.tabs[t];if (a && void 0 !== a.beforeChange) {
              var i = a.beforeChange();this.validateBeforeChange(i, e);
            } else e();
          }
        }, changeTab: function changeTab(t, e) {
          var a = !(arguments.length > 2 && void 0 !== arguments[2]) || arguments[2],
              i = this.tabs[t],
              n = this.tabs[e];return i && (i.active = !1), n && (n.active = !0), a && this.activeTabIndex !== e && this.emitTabChange(t, e), this.activeTabIndex = e, this.activateTabAndCheckStep(this.activeTabIndex), !0;
        }, tryChangeRoute: function tryChangeRoute(t) {
          this.$router && t.route && this.$router.push(t.route);
        }, checkStep: function checkStep() {
          this.activeTabIndex === this.tabCount - 1 ? this.isLastStep = !0 : this.isLastStep = !1;
        }, increaseMaxStep: function increaseMaxStep() {
          this.activeTabIndex > this.maxStep && (this.maxStep = this.activeTabIndex);
        }, checkRouteChange: function checkRouteChange(t) {
          var e = -1,
              a = this.tabs.find(function (a, i) {
            var n = a.route === t;return n && (e = i), n;
          });if (a && !a.active) {
            var i = e > this.activeTabIndex;this.navigateToTab(e, i);
          }
        }, deactivateTabs: function deactivateTabs() {
          this.tabs.forEach(function (t) {
            t.active = !1;
          });
        }, activateTab: function activateTab(t) {
          this.deactivateTabs();var e = this.tabs[t];e && (e.active = !0, e.checked = !0, this.tryChangeRoute(e));
        }, activateTabAndCheckStep: function activateTabAndCheckStep(t) {
          this.activateTab(t), this.checkStep(), t > this.maxStep && (this.maxStep = t), this.activeTabIndex = t;
        }, initializeTabs: function initializeTabs() {
          this.tabs.length > 0 && 0 === this.startIndex && this.activateTab(this.activeTabIndex), this.startIndex < this.tabs.length ? this.activateTabAndCheckStep(this.startIndex) : window.console.warn("Prop startIndex set to " + this.startIndex + " is greater than the number of tabs - " + this.tabs.length + ". Make sure that the starting index is less than the number of tabs registered");
        } }, mounted: function mounted() {
        this.initializeTabs();
      }, watch: { "$route.path": function $routePath(t) {
          this.checkRouteChange(t);
        } } };
  }, function (t, e, a) {
    "use strict";
    Object.defineProperty(e, "__esModule", { value: !0 }), e.default = { name: "tab-content", props: { title: { type: String, default: "" }, icon: { type: String, default: "" }, beforeChange: { type: Function }, route: { type: [String, Object] } }, data: function data() {
        return { active: !1, validationError: null, checked: !1 };
      }, computed: { shape: function shape() {
          return this.$parent.shape;
        }, color: function color() {
          return this.$parent.color;
        }, errorColor: function errorColor() {
          return this.$parent.errorColor;
        } }, mounted: function mounted() {
        this.$parent.addTab(this);
      }, destroyed: function destroyed() {
        this.$el && this.$el.parentNode && this.$el.parentNode.removeChild(this.$el), this.$parent.removeTab(this);
      } };
  }, function (t, e, a) {
    "use strict";
    Object.defineProperty(e, "__esModule", { value: !0 }), e.default = {};
  }, function (t, e, a) {
    "use strict";
    Object.defineProperty(e, "__esModule", { value: !0 }), e.default = { name: "wizard-step", props: { tab: { type: Object, default: function _default() {} }, transition: { type: String, default: "" }, index: { type: Number, default: 0 } }, computed: { iconActiveStyle: function iconActiveStyle() {
          return { backgroundColor: this.tab.color };
        }, stepCheckedStyle: function stepCheckedStyle() {
          return { borderColor: this.tab.color };
        }, errorStyle: function errorStyle() {
          return { borderColor: this.tab.errorColor, backgroundColor: this.tab.errorColor };
        }, stepTitleStyle: function stepTitleStyle() {
          return { color: this.tab.validationError ? this.tab.errorColor : this.tab.color };
        }, isStepSquare: function isStepSquare() {
          return "square" === this.tab.shape;
        }, isTabShape: function isTabShape() {
          return "tab" === this.tab.shape;
        } } };
  }, function (t, e, a) {
    "use strict";
    Object.defineProperty(e, "__esModule", { value: !0 });var i = a(3),
        n = a.n(i),
        r = a(4),
        s = a.n(r),
        o = a(1),
        c = a.n(o),
        u = a(2),
        l = a.n(u);a.d(e, "FormWizard", function () {
      return n.a;
    }), a.d(e, "TabContent", function () {
      return s.a;
    }), a.d(e, "WizardButton", function () {
      return c.a;
    }), a.d(e, "WizardStep", function () {
      return l.a;
    });var d = { install: function install(t) {
        t.component("form-wizard", n.a), t.component("tab-content", s.a), t.component("wizard-button", c.a), t.component("wizard-step", l.a);
      } };"undefined" != typeof window && window.Vue && window.Vue.use(d), e.default = d;
  }, function (t, e) {}, function (t, e) {}, function (t, e) {}, function (t, e) {
    t.exports = { render: function render() {
        var t = this,
            e = t.$createElement;return (t._self._c || e)("button", { staticClass: "wizard-btn btn-fill wizard-btn-wd", attrs: { type: "button" } }, [t._t("default")], 2);
      }, staticRenderFns: [] };
  }, function (t, e) {
    t.exports = { render: function render() {
        var t = this,
            e = t.$createElement,
            a = t._self._c || e;return a("div", { staticClass: "vue-form-wizard", class: t.stepSize }, [a("div", { staticClass: "wizard-header" }, [t._t("title", [a("h4", { staticClass: "wizard-title" }, [t._v(t._s(t.title))]), t._v(" "), a("p", { staticClass: "category" }, [t._v(t._s(t.subtitle))])])], 2), t._v(" "), a("div", { staticClass: "wizard-navigation" }, [a("div", { staticClass: "wizard-progress-with-circle" }, [a("div", { staticClass: "wizard-progress-bar", style: t.progressBarStyle })]), t._v(" "), a("ul", { staticClass: "wizard-nav wizard-nav-pills" }, [t._l(t.tabs, function (e, i) {
          return t._t("step", [a("wizard-step", { attrs: { tab: e, "step-size": t.stepSize, transition: t.transition, index: i }, nativeOn: { click: function click(e) {
                t.navigateToTab(i);
              } } })], { tab: e, index: i, navigateToTab: t.navigateToTab, stepSize: t.stepSize, transition: t.transition });
        })], 2), t._v(" "), a("div", { staticClass: "wizard-tab-content" }, [t._t("default", null, null, t.slotProps)], 2)]), t._v(" "), t.hideButtons ? t._e() : a("div", { staticClass: "wizard-card-footer clearfix" }, [t._t("footer", [a("div", { staticClass: "wizard-footer-left" }, [t.displayPrevButton ? a("span", { on: { click: t.prevTab } }, [t._t("prev", [a("wizard-button", { style: t.fillButtonStyle, attrs: { disabled: t.loading } }, [t._v("\n              " + t._s(t.backButtonText) + "\n            ")])], null, t.slotProps)], 2) : t._e(), t._v(" "), t._t("custom-buttons-left", null, null, t.slotProps)], 2), t._v(" "), a("div", { staticClass: "wizard-footer-right" }, [t._t("custom-buttons-right", null, null, t.slotProps), t._v(" "), t.isLastStep ? a("span", { on: { click: t.nextTab } }, [t._t("finish", [a("wizard-button", { style: t.fillButtonStyle }, [t._v("\n              " + t._s(t.finishButtonText) + "\n            ")])], null, t.slotProps)], 2) : a("span", { on: { click: t.nextTab } }, [t._t("next", [a("wizard-button", { style: t.fillButtonStyle, attrs: { disabled: t.loading } }, [t._v("\n            " + t._s(t.nextButtonText) + "\n           ")])], null, t.slotProps)], 2)], 2)], null, t.slotProps)], 2)]);
      }, staticRenderFns: [] };
  }, function (t, e) {
    t.exports = { render: function render() {
        var t = this,
            e = t.$createElement;return (t._self._c || e)("div", { directives: [{ name: "show", rawName: "v-show", value: t.active, expression: "active" }], staticClass: "wizard-tab-container" }, [t._t("default", null, { active: t.active })], 2);
      }, staticRenderFns: [] };
  }, function (t, e) {
    t.exports = { render: function render() {
        var t = this,
            e = t.$createElement,
            a = t._self._c || e;return a("li", { class: { active: t.tab.active } }, [a("a", [a("div", { staticClass: "wizard-icon-circle md", class: { checked: t.tab.checked, square_shape: t.isStepSquare, tab_shape: t.isTabShape }, style: [t.tab.checked ? t.stepCheckedStyle : {}, t.tab.validationError ? t.errorStyle : {}] }, [a("transition", { attrs: { name: t.transition, mode: "out-in" } }, [t.tab.active ? a("div", { staticClass: "wizard-icon-container", class: { square_shape: t.isStepSquare, tab_shape: t.isTabShape }, style: [t.tab.active ? t.iconActiveStyle : {}, t.tab.validationError ? t.errorStyle : {}] }, [t._t("active-step", [t.tab.icon ? a("i", { staticClass: "wizard-icon", class: t.tab.icon }) : a("i", { staticClass: "wizard-icon" }, [t._v(t._s(t.index + 1))])])], 2) : t._e(), t._v(" "), t.tab.active ? t._e() : t._t("default", [!t.tab.active && t.tab.icon ? a("i", { staticClass: "wizard-icon", class: t.tab.icon }) : t._e(), t._v(" "), t.tab.active || t.tab.icon ? t._e() : a("i", { staticClass: "wizard-icon" }, [t._v(t._s(t.index + 1))])])], 2)], 1), t._v(" "), t._t("title", [a("span", { staticClass: "stepTitle", class: { active: t.tab.active, has_error: t.tab.validationError }, style: t.tab.active ? t.stepTitleStyle : {} }, [t._v("\n            " + t._s(t.tab.title) + "\n      ")])])], 2)]);
      }, staticRenderFns: [] };
  }]);
});
/* WEBPACK VAR INJECTION */}.call(exports, __webpack_require__(1)(module)))

/***/ })

/******/ });