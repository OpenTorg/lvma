module.exports = {
    configRouter: function (router) {
        router.map({
            'permissions/permissionGroup/:id': {
                name: 'permissionGroup',
                component: require('./pages/PermissionGroup.vue')
            }
        })
    }
};