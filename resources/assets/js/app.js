import Navigation from './Navigation.vue';
import PermissionsPage from './pages/PermissionsPage.vue';
import { configRouter } from './routes'

Vue.use(Keen);
Vue.use(VueRouter);

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