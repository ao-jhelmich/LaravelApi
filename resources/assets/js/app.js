
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import './bootstrap';

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('items', require('./components/ItemListComponent.vue'));
Vue.component('game-room-list', require('./components/RoomListComponent.vue'));

// Item list and item components
Vue.component('item-list', require('./components/Item/ItemListComponent.vue'));
Vue.component('item-list-create', require('./components/Item/CreateItemListComponent.vue'));

// Score components
Vue.component('score-list', require('./components/ScoreListComponent.vue'));

const app = new Vue({
    el: '#app'
});
