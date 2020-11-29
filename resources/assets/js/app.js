
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});

$(document).ready(function(){
    function update_price(price){
        $('#price').val(price);
    }

    function update_total(){
        var qty = +($('#quantity').val());
        var price = +($('#price').val());
        var total = qty * price;
        $('#total').val(total);
    }

    $("#item_select").on('change', function(){
        var price = +($(this).find(":selected").data("price"));
        update_price(price);
        update_total();
    });

    $("#quantity").on('change', function(){
        update_total();
    });
});
