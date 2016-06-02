<template>
    {{ group.name }}

    <ul>
        <li v-for="permission in permissions">
            <a class="list-group-item media" v-link="{ name: 'permissionShow', params: { permissionId: permission.id }}">{{permission.name}}</a>
        </li>
    </ul>

    <router-view></router-view>
</template>

<script>

    export default{
        data(){
            return {
                group: null,
                permissions: []
            }
        },
        ready() {

        },
        methods: {

            getPermissions(id) {
                this.$http.get('access/groups/'+id).then(function(response) {
                    this.group = response.data;
                    this.permissions = response.data.permissions;
                });
            }
        },
        route: {
            data: function (transition) {
                this.getPermissions(this.$route.params.id);
            }
        },
        components: {}
    }
</script>

<style>
</style>