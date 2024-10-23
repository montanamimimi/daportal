/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/modules/DotsGallery.js":
/*!************************************!*\
  !*** ./src/modules/DotsGallery.js ***!
  \************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
class DotsGallery {
  constructor() {
    this.findGallerys();
  }
  findGallerys() {
    const galleryArray = document.querySelectorAll('.gallery-dots');
    galleryArray.forEach(gallery => {
      this.addGallery(gallery);
    });
  }
  addGallery(gallery) {
    const dots = gallery.querySelectorAll('.dot');
    dots.forEach(dot => {
      dot.addEventListener('click', e => {
        this.changeImage(dots, gallery, dot.dataset.id);
      });
    });
  }
  changeImage(dots, gallery, id) {
    const images = gallery.querySelectorAll('.image-item');
    images.forEach(image => {
      if (id == image.dataset.id) {
        image.classList.remove('image-item--hidden');
      } else {
        image.classList.add('image-item--hidden');
      }
    });
    dots.forEach(dot => {
      if (id == dot.dataset.id) {
        dot.classList.add('dot--active');
      } else {
        dot.classList.remove('dot--active');
      }
    });
  }
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (DotsGallery);

/***/ }),

/***/ "./src/modules/Navs.js":
/*!*****************************!*\
  !*** ./src/modules/Navs.js ***!
  \*****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
class Navs {
  constructor() {
    this.findNavs();
  }
  findNavs() {
    const navs = document.querySelectorAll('.nav-wrapper');
    const container = document.querySelector('.container');
    const rect = container.getBoundingClientRect();
    navs.forEach(nav => {
      this.adjustNavStart(nav, rect);
      const tabs = nav.querySelectorAll('.tab');
      tabs.forEach(tab => {
        tab.addEventListener('click', e => {
          this.adjustTabs(tab, nav, tabs[0]);
        });
      });
    });
  }
  adjustNavStart(nav, rect) {
    nav.style.marginLeft = rect.left + 'px';
  }
  adjustTabs(tab, nav, zero) {
    const content = nav.querySelector('.nav-list');
    const rect = tab.getBoundingClientRect();
    const diff = window.innerWidth - rect.right - 140;
    let padding = +content.style.left.replace('px', '');
    if (diff < 0) {
      content.style.left = padding + diff + 'px';
    } else {
      const leftTab = zero.getBoundingClientRect();
      const moveRIght = leftTab.left + diff;
      if (moveRIght < 0) {
        content.style.left = leftTab.left + diff + 'px';
      } else {
        content.style.left = '0';
      }
    }
  }
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (Navs);

/***/ }),

/***/ "./src/modules/Steps.js":
/*!******************************!*\
  !*** ./src/modules/Steps.js ***!
  \******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
class Steps {
  constructor() {
    this.findSteps();
  }
  findSteps() {
    const steps = document.querySelectorAll('.steps');
    if (steps.length > 0) {
      window.addEventListener('scroll', e => {
        const height = window.innerHeight;
        this.checkElements(steps, height);
      });
    }
  }
  checkElements(steps, height) {
    steps.forEach(step => {
      const blocks = step.querySelectorAll('.step');
      blocks.forEach(block => {
        const rect = block.getBoundingClientRect();
        const isInMiddle = rect.top + rect.height / 2 >= height / 2 - 50 && rect.top + rect.height / 2 <= height / 2 + 50;
        if (isInMiddle) {
          this.changeBorder(blocks, block.dataset.id);
        }
      });
    });
  }
  changeBorder(blocks, id) {
    blocks.forEach(block => {
      if (id == block.dataset.id) {
        block.classList.add('border-bald');
      } else {
        block.classList.remove('border-bald');
      }
    });
  }
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (Steps);

/***/ }),

/***/ "./css/main.scss":
/*!***********************!*\
  !*** ./css/main.scss ***!
  \***********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

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
/************************************************************************/
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
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
(() => {
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _css_main_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../css/main.scss */ "./css/main.scss");
/* harmony import */ var _modules_DotsGallery__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./modules/DotsGallery */ "./src/modules/DotsGallery.js");
/* harmony import */ var _modules_Steps__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./modules/Steps */ "./src/modules/Steps.js");
/* harmony import */ var _modules_Navs__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./modules/Navs */ "./src/modules/Navs.js");




const dotsGallery = new _modules_DotsGallery__WEBPACK_IMPORTED_MODULE_1__["default"]();
const steps = new _modules_Steps__WEBPACK_IMPORTED_MODULE_2__["default"]();
const navs = new _modules_Navs__WEBPACK_IMPORTED_MODULE_3__["default"]();
})();

/******/ })()
;
//# sourceMappingURL=index.js.map