/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

import homePage from './components/home.vue';
import FooterArea from './components/inc/footer.vue';
import shopPage from './components/shop/shop.vue';
import collectionPage from './components/collections/collection.vue';
import jewerlyTipsPage from './components/jewerly_tips/jewerlytips.vue';
import aboutPage from './components/about/about.vue';
import durabilityPage from './components/durability/durability.vue';
import contactPage from './components/contact/contact.vue';
import productView from './components/shop/product_view.vue';
import cartPage from './components/shop/cart.vue';
import checkoutPage from './components/shop/checkout.vue';
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    components: {
        'homePage': homePage,
        'footer-area': FooterArea,
        'shop-page': shopPage,
        'collection-page': collectionPage,
        'jewerly-tips': jewerlyTipsPage,
        'about-page': aboutPage,
        'durability-page': durabilityPage,
        'contact-page': contactPage,
        'product-view': productView,
        'cart-page': cartPage,
        'checkout-page': checkoutPage,
    },
    created() {
        var is_loading = document.getElementById("is_loading");
        if (is_loading != null && is_loading) {
            is_loading.style.display = "none"
        }
    }
});