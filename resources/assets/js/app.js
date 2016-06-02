import Navigation from './Navigation.vue';
import PermissionsPage from './pages/PermissionsPage.vue';
import { configRouter } from './routes'

Vue.use(Keen);
Vue.use(VueRouter);
Vue.use(VueResource);

Vue.http.options.root = '/api/v1';
Vue.http.headers.common['Authorization'] = 'Basic YXBpOnBhc3N3b3Jk';

Vue.transition('bounce', {
    enterClass: 'bounceInLeft',
    leaveClass: 'bounceOutRight'
});

var App = Vue.extend({
    components: {
        Navigation,
        "permissions_page": PermissionsPage
    }
});

window.App = App;

var router = new VueRouter({
    saveScrollPosition: true
});


configRouter(router);
router.start(App, 'body');