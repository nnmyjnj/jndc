require('./bootstrap');

window.Vue = require('vue');
import Buefy from 'buefy';
//import 'buefy/lib/buefy.css'

Vue.use(Buefy);

// Vue.component('example', require('./components/Example.vue'));

// var app = new Vue({
//   el: '#app',
//   data: {}
// });

$(document).ready(function() {
  //  Dropdowns
  $('.dropdown').hover(function(e) {
    $(this).toggleClass('is-open');
  })
})
