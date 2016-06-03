export default function(router) {
        router.map({
            '/group/:id': {
                name: 'permissionGroup',
                component: require('./pages/Access/partials/PermissionGroup.vue'),
                subRoutes : {
                    '/permission/:permissionId' : {
                        name: 'permissionShow',
                        component: require('./pages/Access/partials/PermissionShow.vue'),
                    }
                }
            }
        })

};