import api from '../api'
import * as types from './types'


export const getPermissionGroupsList = ({dispatch}) => {
    api.getPermissionsGroups().then(response => {
        dispatch(types.PERMISSIONS_GROUPS_LIST, {groups: response.data})
    }, response => {
        dispatch(types.API_ERROR)
    })
};

export const getPermissionGroup = ({dispatch}, id) => {
    api.getPermissionsGroup(id).then(response => {
        dispatch(types.PERMISSIONS_GROUP, {group: response.data})
    }, response => {
        dispatch(types.API_ERROR)
    })
};


export const getPermission = ({dispatch}, id) => {
    api.getPermission(id).then(response => {
        dispatch(types.PERMISSION, {permission: response.data})
    }, response => {
        dispatch(types.API_ERROR)
    })
};