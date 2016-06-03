import Vue from 'vue'
import VueResource from 'vue-resource'


Vue.use(VueResource);

Vue.http.options.root = '/api/v1';
Vue.http.headers.common['Authorization'] = 'Basic YXBpOnBhc3N3b3Jk';
Vue.http.options.crossOrigin = true;


export const PermissionGroupResource = Vue.resource('access/groups{/id}');
export const PermissionResource = Vue.resource('access/permissions{/id}');


