import App from './App.vue';
import Navigation from './Navigation.vue';
import RolesPage from './pages/RolesPage.vue';

Vue.use(Keen);

var vm = new Vue({
    el: 'body',
    components: {
        App, 
        Navigation,
        "roles_page": RolesPage
    }
});