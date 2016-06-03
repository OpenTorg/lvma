import {PermissionGroupResource, PermissionResource} from './resourses'

export default {
    getPermissionsGroups: function () {
        return PermissionGroupResource.get()
    },

    getPermissionsGroup: function (id) {
        return PermissionGroupResource.get({id: id})
    },

    getPermission: function (id) {
        return PermissionResource.get({id: id})
    }
}