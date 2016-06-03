<template>
    <div v-if="group">
    {{ group.name }}

    <ul>
        <li v-for="permission in group.permissions">
            <a class="list-group-item media" v-link="{ name: 'permissionShow', params: { permissionId: permission.id }}">{{permission.name}}</a>
        </li>
    </ul>

    <router-view></router-view>
    </div>
</template>

<script  type="text/babel">
    import {getPermissionGroup} from '../../../vuex/actions'
    export default{
        name: "permissionGroup",
        vuex: {
            getters: {
                group: ({accessPermissions}) => accessPermissions.group

        },
        actions: {
            getPermissionGroup
        }
    },

        route: {
            data ({ to: { params: { id }}}) {
                this.getPermissionGroup(id)
            }
        },
        components: {}
    }
</script>

<style>
</style>