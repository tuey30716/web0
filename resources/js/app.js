import Vue from 'vue'
import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css'

Vue.use(Vuetify);
Vue.component('profile-component', require('./components/ProfileComponent.vue').default);
Vue.component('carousel-component', require('./components/Carousel.vue').default);


const app = new Vue({
    el: '#app',
    vuetify : new Vuetify(),
});
