<template>
Permission

    {{ permission.name }}
</template>
<style>

</style>
<script>

    export default{
        data(){
            return{
              permission : null
            }
        },
        methods : {
            getPermission: function(id) {
                this.$http.get('access/permissions/'+id).then(function(response) {
                    this.permission = response.data;
                });
            }
        },
        route: {
            data: function (transition) {
                this.getPermission(this.$route.params.permissionId);
            }
        },
    }
</script>