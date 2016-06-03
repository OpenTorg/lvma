<template>
    <div id="app">
        <navigation></navigation>
    <section id="main">
        <permissions_page></permissions_page>
    </section>
    </div>
</template>

<script>
    import Navigation from './Navigation.vue';
    import PermissionsPage from '../pages/Access/PermissionsPage.vue';
    import store from '../vuex/store';

    export default{
        store,
        components: {
            navigation: Navigation,
            permissions_page: PermissionsPage
        }
    }
</script>

<style>

</style>