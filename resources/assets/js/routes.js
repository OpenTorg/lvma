module.exports = {
    configRouter: function (router) {
        router.map({
            'permissions/permissionGroup/:id': {
                name: 'permissionGroup', // give the route a name
                component: require('./pages/PermissionGroup.vue')
            }
        })
    }
};