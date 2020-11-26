require('babel-polyfill');
require('webrtc-adapter');

var Instascan = {
  Scanner: require('./js/scanner'),
  Camera: require('.js/camera')
};

module.exports = Instascan;
