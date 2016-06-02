module.exports = {
    configRouter: function (router) {
        router.map({
            'group/:id': {
                name: 'permissionGroup',
                component: require('./pages/PermissionGroup.vue'),
                subRoutes : {
                    '/permission/:permissionId' : {
                        name: 'permissionShow',
                        component: require('./pages/PermissionShow.vue')
                    }
                }
            }

        })
    }
};