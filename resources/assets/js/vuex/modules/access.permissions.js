import {
    PERMISSIONS_GROUPS_LIST,
    PERMISSIONS_GROUP,
    PERMISSIONS_GROUP_FAILURE,
    PERMISSION
} from '../types'

const state = {
    items: [],
    group : null,
    permission: null
}

const mutations = {
    [PERMISSIONS_GROUP_FAILURE](state){
        state.group = []
    },
    [PERMISSIONS_GROUPS_LIST](state, action){
        state.items = action.groups
    },
    [PERMISSIONS_GROUP](state, action){
        state.group = action.group
    },

    [PERMISSION](state, action){
        state.permission = action.permission
    },
}

export default {
    state,
    mutations
}