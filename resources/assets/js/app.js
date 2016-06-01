import Navigation from './Navigation.vue';
import RolesPage from './pages/RolesPage.vue';
import { configRouter } from './routes'

Vue.use(Keen);
Vue.use(VueRouter);

var App = Vue.extend({

    components: {
        Navigation,
        "roles_page": RolesPage
    }
});

var router = new VueRouter({
    saveScrollPosition: true
});


configRouter(router);
router.start(App, 'body');