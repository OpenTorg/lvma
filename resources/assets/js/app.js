import App from './App.vue';
import Navigation from './Navigation.vue';

Vue.use(Keen);

var vm = new Vue({
    el: 'body',
    components: { App, Navigation }
});