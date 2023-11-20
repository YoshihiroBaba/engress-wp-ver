/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/js/main.js":
/*!************************!*\
  !*** ./src/js/main.js ***!
  \************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _scss_style_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../scss/style.scss */ \"./src/scss/style.scss\");\n/* harmony import */ var scroll_hint__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! scroll-hint */ \"./node_modules/scroll-hint/lib/index.js\");\n/* harmony import */ var scroll_hint__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(scroll_hint__WEBPACK_IMPORTED_MODULE_1__);\n\n\n$(function () {\n  // バーガーメニュー\n  $(\".c-burger-icon\").off(\"click\");\n  $(\".c-burger-icon\").on(\"click\", function () {\n    $(\"#c-burger-icon\").toggleClass(\"c-burger-open\");\n    $(\".l-header__burger\").toggleClass(\"u-dis--show\");\n    $(window).scroll(function () {\n      $(\"#c-burger-icon\").removeClass(\"c-burger-open\");\n      $(\".l-header__burger\").removeClass(\"u-dis--show\");\n    });\n  });\n  //アコーディオン\n  $(\".l-faq__content > dt\").off(\"click\");\n  $(\".l-faq__content > dt\").on(\"click\", function () {\n    $(this).next().slideToggle(400);\n    $(this).find(\".c-close\").toggleClass(\"c-open\");\n  });\n});\n\n//スクロールヒント\nwindow.onload = function () {\n  new (scroll_hint__WEBPACK_IMPORTED_MODULE_1___default())(\".l-list__scroll\", {\n    i18n: {\n      scrollable: \"スクロールできます\"\n    }\n  });\n};\n\n//# sourceURL=webpack://engress/./src/js/main.js?");

/***/ }),

/***/ "./node_modules/es6-object-assign/index.js":
/*!*************************************************!*\
  !*** ./node_modules/es6-object-assign/index.js ***!
  \*************************************************/
/***/ ((module) => {

eval("/**\n * Code refactored from Mozilla Developer Network:\n * https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Object/assign\n */\n\n\n\nfunction assign(target, firstSource) {\n  if (target === undefined || target === null) {\n    throw new TypeError('Cannot convert first argument to object');\n  }\n\n  var to = Object(target);\n  for (var i = 1; i < arguments.length; i++) {\n    var nextSource = arguments[i];\n    if (nextSource === undefined || nextSource === null) {\n      continue;\n    }\n\n    var keysArray = Object.keys(Object(nextSource));\n    for (var nextIndex = 0, len = keysArray.length; nextIndex < len; nextIndex++) {\n      var nextKey = keysArray[nextIndex];\n      var desc = Object.getOwnPropertyDescriptor(nextSource, nextKey);\n      if (desc !== undefined && desc.enumerable) {\n        to[nextKey] = nextSource[nextKey];\n      }\n    }\n  }\n  return to;\n}\n\nfunction polyfill() {\n  if (!Object.assign) {\n    Object.defineProperty(Object, 'assign', {\n      enumerable: false,\n      configurable: true,\n      writable: true,\n      value: assign\n    });\n  }\n}\n\nmodule.exports = {\n  assign: assign,\n  polyfill: polyfill\n};\n\n\n//# sourceURL=webpack://engress/./node_modules/es6-object-assign/index.js?");

/***/ }),

/***/ "./src/scss/style.scss":
/*!*****************************!*\
  !*** ./src/scss/style.scss ***!
  \*****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n\n\n//# sourceURL=webpack://engress/./src/scss/style.scss?");

/***/ }),

/***/ "./node_modules/scroll-hint/lib/index.js":
/*!***********************************************!*\
  !*** ./node_modules/scroll-hint/lib/index.js ***!
  \***********************************************/
/***/ ((module, exports, __webpack_require__) => {

eval("\n\nObject.defineProperty(exports, \"__esModule\", ({\n  value: true\n}));\n\nvar _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();\n\nvar _es6ObjectAssign = __webpack_require__(/*! es6-object-assign */ \"./node_modules/es6-object-assign/index.js\");\n\nvar _util = __webpack_require__(/*! ./util */ \"./node_modules/scroll-hint/lib/util.js\");\n\nfunction _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }\n\nvar defaults = {\n  suggestClass: 'is-active',\n  scrollableClass: 'is-scrollable',\n  scrollableRightClass: 'is-right-scrollable',\n  scrollableLeftClass: 'is-left-scrollable',\n  scrollHintClass: 'scroll-hint',\n  scrollHintIconClass: 'scroll-hint-icon',\n  scrollHintIconAppendClass: '', // 'scroll-hint-icon-white'\n  scrollHintIconWrapClass: 'scroll-hint-icon-wrap',\n  scrollHintText: 'scroll-hint-text',\n  scrollHintBorderWidth: 10,\n  remainingTime: -1,\n  enableOverflowScrolling: true,\n  applyToParents: false,\n  suggestiveShadow: false,\n  offset: 0,\n  i18n: {\n    scrollable: 'scrollable'\n  }\n};\n\nvar ScrollHint = function () {\n  function ScrollHint(ele, option) {\n    var _this = this;\n\n    _classCallCheck(this, ScrollHint);\n\n    this.opt = (0, _es6ObjectAssign.assign)({}, defaults, option);\n    this.items = [];\n    var elements = typeof ele === 'string' ? document.querySelectorAll(ele) : ele;\n    var applyToParents = this.opt.applyToParents;\n\n    [].forEach.call(elements, function (element) {\n      if (applyToParents) {\n        element = element.parentElement;\n      }\n      element.style.position = 'relative';\n      element.style.overflow = 'auto';\n      if (_this.opt.enableOverflowScrolling) {\n        if ('overflowScrolling' in element.style) {\n          element.style.overflowScrolling = 'touch';\n        } else if ('webkitOverflowScrolling' in element.style) {\n          element.style.webkitOverflowScrolling = 'touch';\n        }\n      }\n      var item = {\n        element: element,\n        scrolledIn: false,\n        interacted: false\n      };\n      document.addEventListener('scroll', function (e) {\n        if (e.target === element) {\n          item.interacted = true;\n          _this.updateItem(item);\n        }\n      }, true);\n      (0, _util.addClass)(element, _this.opt.scrollHintClass);\n      (0, _util.append)(element, '<div class=\"' + _this.opt.scrollHintIconWrapClass + '\" data-target=\"scrollable-icon\">\\n        <span class=\"' + _this.opt.scrollHintIconClass + (_this.opt.scrollHintIconAppendClass ? ' ' + _this.opt.scrollHintIconAppendClass : '') + '\">\\n          <div class=\"' + _this.opt.scrollHintText + '\">' + _this.opt.i18n.scrollable + '</div>\\n        </span>\\n      </div>');\n      _this.items.push(item);\n    });\n    window.addEventListener('scroll', function () {\n      _this.updateItems();\n    });\n    window.addEventListener('resize', function () {\n      _this.updateItems();\n    });\n    this.updateItems();\n  }\n\n  _createClass(ScrollHint, [{\n    key: 'isScrollable',\n    value: function isScrollable(item) {\n      var offset = this.opt.offset;\n      var element = item.element;\n      var offsetWidth = element.offsetWidth;\n\n      return offsetWidth + offset < element.scrollWidth;\n    }\n  }, {\n    key: 'checkScrollableDir',\n    value: function checkScrollableDir(item) {\n      var _opt = this.opt,\n          scrollHintBorderWidth = _opt.scrollHintBorderWidth,\n          scrollableRightClass = _opt.scrollableRightClass,\n          scrollableLeftClass = _opt.scrollableLeftClass;\n      var element = item.element;\n\n      var child = element.children[0];\n      var width = child.scrollWidth;\n      var parentWidth = element.offsetWidth;\n      var scrollLeft = element.scrollLeft;\n      if (parentWidth + scrollLeft < width - scrollHintBorderWidth) {\n        (0, _util.addClass)(element, scrollableRightClass);\n      } else {\n        (0, _util.removeClass)(element, scrollableRightClass);\n      }\n      if (parentWidth < width && scrollLeft > scrollHintBorderWidth) {\n        (0, _util.addClass)(element, scrollableLeftClass);\n      } else {\n        (0, _util.removeClass)(element, scrollableLeftClass);\n      }\n    }\n  }, {\n    key: 'needSuggest',\n    value: function needSuggest(item) {\n      var scrolledIn = item.scrolledIn,\n          interacted = item.interacted;\n\n      return !interacted && scrolledIn && this.isScrollable(item);\n    }\n  }, {\n    key: 'updateItems',\n    value: function updateItems() {\n      var _this2 = this;\n\n      [].forEach.call(this.items, function (item) {\n        _this2.updateItem(item);\n      });\n    }\n  }, {\n    key: 'updateStatus',\n    value: function updateStatus(item) {\n      var _this3 = this;\n\n      var element = item.element,\n          scrolledIn = item.scrolledIn;\n\n      if (scrolledIn) {\n        return;\n      }\n      var target = element.querySelector('[data-target=\"scrollable-icon\"] > span');\n      if ((0, _util.getOffset)(target).top < (0, _util.getScrollTop)() + window.innerHeight) {\n        item.scrolledIn = true;\n        if (this.opt.remainingTime !== -1) {\n          setTimeout(function () {\n            item.interacted = true;\n            _this3.updateItem(item);\n          }, this.opt.remainingTime);\n        }\n      }\n    }\n  }, {\n    key: 'updateItem',\n    value: function updateItem(item) {\n      var opt = this.opt;\n      var element = item.element;\n\n      var target = element.querySelector('[data-target=\"scrollable-icon\"]');\n      this.updateStatus(item);\n      if (this.isScrollable(item)) {\n        (0, _util.addClass)(element, opt.scrollableClass);\n      } else {\n        (0, _util.removeClass)(element, opt.scrollableClass);\n      }\n      if (this.needSuggest(item)) {\n        (0, _util.addClass)(target, opt.suggestClass);\n      } else {\n        (0, _util.removeClass)(target, opt.suggestClass);\n      }\n      if (opt.suggestiveShadow) {\n        this.checkScrollableDir(item);\n      }\n    }\n  }]);\n\n  return ScrollHint;\n}();\n\nexports[\"default\"] = ScrollHint;\nmodule.exports = exports['default'];\n\n//# sourceURL=webpack://engress/./node_modules/scroll-hint/lib/index.js?");

/***/ }),

/***/ "./node_modules/scroll-hint/lib/util.js":
/*!**********************************************!*\
  !*** ./node_modules/scroll-hint/lib/util.js ***!
  \**********************************************/
/***/ ((__unused_webpack_module, exports) => {

eval("\n\nObject.defineProperty(exports, \"__esModule\", ({\n  value: true\n}));\nvar append = exports.append = function append(element, string) {\n  var div = document.createElement('div');\n  div.innerHTML = string;\n  while (div.children.length > 0) {\n    element.appendChild(div.children[0]);\n  }\n};\n\nvar addClass = exports.addClass = function addClass(element, className) {\n  if (element.classList) {\n    element.classList.add(className);\n  } else {\n    element.className += ' ' + className;\n  }\n};\n\nvar removeClass = exports.removeClass = function removeClass(element, className) {\n  if (element.classList) {\n    element.classList.remove(className);\n  } else {\n    element.className = element.className.replace(new RegExp('(^|\\\\b)' + className.split(' ').join('|') + '(\\\\b|$)', 'gi'), ' ');\n  }\n};\n\nvar getScrollTop = exports.getScrollTop = function getScrollTop() {\n  return window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;\n};\n\nvar getScrollLeft = exports.getScrollLeft = function getScrollLeft() {\n  return window.pageXOffset || document.documentElement.scrollLeft || document.body.scrollLeft || 0;\n};\n\nvar getOffset = exports.getOffset = function getOffset(el) {\n  var rect = el.getBoundingClientRect();\n  return {\n    top: rect.top + getScrollTop(),\n    left: rect.left + getScrollLeft()\n  };\n};\n\n//# sourceURL=webpack://engress/./node_modules/scroll-hint/lib/util.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = __webpack_require__("./src/js/main.js");
/******/ 	
/******/ })()
;