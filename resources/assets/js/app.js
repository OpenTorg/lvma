import Vue from 'vue';
import VueRouter from 'vue-router';
import VueResource from 'vue-resource';
import { sync } from 'vuex-router-sync';
import store from './vuex/store'
import  configRouter  from './routes'

import App from './components/App.vue'

Vue.use(Keen);
Vue.use(VueRouter);
Vue.use(VueResource);

const router = new VueRouter({
    saveScrollPosition: true,
    suppressTransitionError: true
});


configRouter(router);
sync(store, router);
router.start(Vue.extend(App), '#root');
window.router = router;
