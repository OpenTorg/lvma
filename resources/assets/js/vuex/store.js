import Vue from 'vue'
import Vuex from 'vuex'

import accessPermissions from './modules/access.permissions'

Vue.use(Vuex);
//Vue.config.warnExpressionErrors = false;

export default new Vuex.Store({
    modules: {
        accessPermissions
    }
})
