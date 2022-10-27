/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/components/accordion.js":
/*!**********************************************!*\
  !*** ./resources/js/components/accordion.js ***!
  \**********************************************/
/***/ (() => {

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }
function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }
function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }
var Accordion = /*#__PURE__*/function () {
  function Accordion() {
    _classCallCheck(this, Accordion);
    this.accordions = document.querySelectorAll('.accordion__single');
    this.actions();
  }
  _createClass(Accordion, [{
    key: "actions",
    value: function actions() {
      var _this = this;
      this.accordions.forEach(function (el) {
        return el.addEventListener('click', function () {
          return _this.toggleAccordion(el);
        });
      });
    }
  }, {
    key: "toggleAccordion",
    value: function toggleAccordion(el) {
      var elementToToggle = el.children[1];
      elementToToggle.classList.toggle('accordion__toggle');
    }
  }]);
  return Accordion;
}();
document.addEventListener('DOMContentLoaded', function () {
  var accordion = new Accordion();
});

/***/ }),

/***/ "./resources/js/components/dropdownMenu.js":
/*!*************************************************!*\
  !*** ./resources/js/components/dropdownMenu.js ***!
  \*************************************************/
/***/ (() => {

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }
function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }
function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }
var DropdownMenu = /*#__PURE__*/function () {
  function DropdownMenu() {
    _classCallCheck(this, DropdownMenu);
    this.dropdown__btn = document.querySelector('.dropdown__btn');
    this.dropdown__listWrapper = document.querySelector('.dropdown__listWrapper');
    this.actions();
  }
  _createClass(DropdownMenu, [{
    key: "actions",
    value: function actions() {
      var _this = this;
      this.dropdown__btn.addEventListener('click', function () {
        return _this.toggleMenu();
      });
    }
  }, {
    key: "toggleMenu",
    value: function toggleMenu(el) {
      this.dropdown__listWrapper.classList.toggle('hide');
    }
  }]);
  return DropdownMenu;
}();
document.addEventListener('DOMContentLoaded', function () {
  var accordion = new DropdownMenu();
});

/***/ }),

/***/ "./resources/js/components/rotate.js":
/*!*******************************************!*\
  !*** ./resources/js/components/rotate.js ***!
  \*******************************************/
/***/ (() => {

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }
function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }
function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }
var Scroll = /*#__PURE__*/function () {
  function Scroll() {
    _classCallCheck(this, Scroll);
    this.getElements();
    this.events();
  }
  _createClass(Scroll, [{
    key: "getElements",
    value: function getElements() {
      this.section1__circle = document.querySelector('.section1__circle');
      this.section2__circle = document.querySelector('.section2__circle');
    }
  }, {
    key: "events",
    value: function events() {
      var _this = this;
      document.addEventListener('scroll', function () {
        return _this.manageRotate();
      });
    }
  }, {
    key: "isInViewPort",
    value: function isInViewPort(element) {
      var elementTop = element.getBoundingClientRect().top;
      var elementBottom = element.getBoundingClientRect().bottom;
      var topAtViewport = window.innerHeight - elementTop;
      if (topAtViewport > 0 && elementBottom > 0) {
        return true;
      }
    }
  }, {
    key: "manageRotate",
    value: function manageRotate() {
      if (this.isInViewPort(this.section1__circle)) {
        this.rotate(this.section1__circle);
      }
      if (this.isInViewPort(this.section2__circle)) {
        this.rotate(this.section2__circle);
      }
    }
  }, {
    key: "rotate",
    value: function rotate(element) {
      var scrollY = window.scrollY / 10;
      if (element == this.section1__circle) {
        element.style.transform = "translate(-30%, -30%) rotate(".concat(scrollY, "deg)");
      } else {
        element.style.transform = "translate(30%, -30%) rotate(".concat(scrollY, "deg)");
      }
    }
  }]);
  return Scroll;
}();
document.addEventListener('DOMContentLoaded', function () {
  var scroll = new Scroll();
});

/***/ }),

/***/ "./resources/js/components/slider.js":
/*!*******************************************!*\
  !*** ./resources/js/components/slider.js ***!
  \*******************************************/
/***/ (() => {

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }
function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }
function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }
var Slider = /*#__PURE__*/function () {
  function Slider() {
    _classCallCheck(this, Slider);
    this.opinie__moveLeft = document.querySelector('.home__opinie__moveLeft');
    this.opinie__moveRight = document.querySelector('.home__opinie__moveRight');
    this.opinie__sliders = document.querySelectorAll('.home__opinie__slider');
    this.directions = {
      left: 'left',
      right: 'right'
    };
    this.testimonialsSliderNr = 0;
    this.displaySlider();
    this.events();
  }
  _createClass(Slider, [{
    key: "events",
    value: function events() {
      var _this = this;
      this.opinie__moveLeft.addEventListener('click', function () {
        return _this.changeSlide(_this.directions.left);
      });
      this.opinie__moveRight.addEventListener('click', function () {
        return _this.changeSlide(_this.directions.right);
      });
    }
  }, {
    key: "displaySlider",
    value: function displaySlider() {
      this.opinie__sliders.forEach(function (slider) {
        slider.style.display = 'none';
        slider.style.opacity = '0';
      });
      this.opinie__sliders[this.testimonialsSliderNr].style.display = 'block';
      this.opinie__sliders[this.testimonialsSliderNr].style.opacity = '1';
    }
  }, {
    key: "changeSlide",
    value: function changeSlide(direction) {
      var _this2 = this;
      this.opinie__sliders[this.testimonialsSliderNr].style.opacity = 0;
      if (direction == 'left') {
        this.testimonialsSliderNr--;
        if (this.testimonialsSliderNr < 0) {
          this.testimonialsSliderNr = 2;
        }
      } else if (direction == 'right') {
        this.testimonialsSliderNr++;
        if (this.testimonialsSliderNr > 2) {
          this.testimonialsSliderNr = 0;
        }
      }
      setTimeout(function () {
        return _this2.displaySlider();
      }, 300);
    }
  }]);
  return Slider;
}(); // export default new Slider()
document.addEventListener('DOMContentLoaded', function () {
  var slider = new Slider();
});

/***/ }),

/***/ "./resources/js/landingPage.js":
/*!*************************************!*\
  !*** ./resources/js/landingPage.js ***!
  \*************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _components_rotate__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./components/rotate */ "./resources/js/components/rotate.js");
/* harmony import */ var _components_rotate__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_components_rotate__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _components_slider__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./components/slider */ "./resources/js/components/slider.js");
/* harmony import */ var _components_slider__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_components_slider__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _components_accordion__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./components/accordion */ "./resources/js/components/accordion.js");
/* harmony import */ var _components_accordion__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_components_accordion__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _components_dropdownMenu__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./components/dropdownMenu */ "./resources/js/components/dropdownMenu.js");
/* harmony import */ var _components_dropdownMenu__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_components_dropdownMenu__WEBPACK_IMPORTED_MODULE_3__);





/***/ }),

/***/ "./resources/sass/style.scss":
/*!***********************************!*\
  !*** ./resources/sass/style.scss ***!
  \***********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


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
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
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
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/landingPage": 0,
/******/ 			"css/style": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/style"], () => (__webpack_require__("./resources/js/landingPage.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/style"], () => (__webpack_require__("./resources/sass/style.scss")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;