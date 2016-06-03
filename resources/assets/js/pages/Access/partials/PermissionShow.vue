<template>
Permission
    <div  v-if="permission">
    {{ permission.name }}
        </div>
</template>
<style>

</style>
<script  type="text/babel">
    import {getPermission} from '../../../vuex/actions'
    export default{
        name: "permissionShow",
        vuex: {
            getters: {
                permission: ({accessPermissions}) => accessPermissions.permission

        },
        actions: {
            getPermission
        }
    },
        route: {
            data ({ to: { params: { permissionId }}}) {
                this.getPermission(permissionId)
            }
        },
    }
</script>