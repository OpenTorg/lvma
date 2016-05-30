import App from './App.vue';

Vue.use(Keen);

var vm = new Vue({
    el: 'body',
    components: { App }
});