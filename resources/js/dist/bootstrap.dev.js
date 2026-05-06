"use strict";

var _axios = _interopRequireDefault(require("axios"));

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { "default": obj }; }

window.axios = _axios["default"];
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';