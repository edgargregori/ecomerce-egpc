import "core-js/fn/object/assign";
import Vue from 'vue';

let model = JSON.parse(window.ecomerce_product_model);
console.log(model);

var app = new Vue({
                  el: '#app',
                  data: { model }
})

;
