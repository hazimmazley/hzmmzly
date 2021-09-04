import Vue from 'vue';
import router from './router';
import App from './components/App';
import VideoBg from 'vue-videobg'

require('./bootstrap');

Vue.component('video-bg', VideoBg)

const app = new Vue({
    el: '#app',
    components: {
        App
    },
    router
});
