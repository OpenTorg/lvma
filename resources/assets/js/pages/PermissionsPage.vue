<template>

    <section id="content">
        <div class="container container-alt">
            <div class="block-header">
                <h2>Permission Management
                    <small>Manage Permission</small>
                </h2>

                <ul class="actions m-t-20 hidden-xs">
                    <li class="dropdown">
                        <ui-icon-button containFocus transition="fadeLeft"
                                        type="clear" icon="more_vert" has-dropdown-menu
                                        :menu-options="shareMenuOptions" dropdown-position="bottom right"
                        ></ui-icon-button>
                    </li>
                </ul>
            </div>
            <div class="messages card">
                <div class="m-sidebar">
                    <header>
                        <h2 class="hidden-xs">Groups</h2>

                        <ul class="actions">
                            <li>
                                <a href="">
                                    <i class="zmdi zmdi-comment-text"></i>
                                </a>
                            </li>
                            <li class="dropdown hidden-xs">
                                <a href="" data-toggle="dropdown">
                                    <i class="zmdi zmdi-more-vert"></i>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li>
                                        <a href="">Profile & Status</a>
                                    </li>
                                    <li>
                                        <a href="">Help</a>
                                    </li>
                                    <li>
                                        <a href="">Settings</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </header>

                    <div class="ms-search hidden-xs">
                        <div class="fg-line">
                            <i class="zmdi zmdi-search"></i>

                            <input type="text" class="form-control" placeholder="Search...">
                        </div>
                    </div>

                    <div class="list-group c-overflow">
                        <a class="list-group-item media" v-link="{ name: 'permissionGroup', params: { id: 23 }}">

                            <div class="media-body">
                                <div class="lgi-heading">Access</div>
                                <small class="lgi-text">Access group</small>
                                <small class="ms-time">5 perm</small>
                            </div>
                        </a>

                        <a class="list-group-item media active" href="">

                            <div class="media-body">
                                <div class="lgi-heading">User</div>
                                <small class="lgi-text">User group</small>
                                <small class="ms-time">3 perm</small>
                            </div>
                        </a>
                    </div>

                </div>

                <div class="m-body">
                    <header class="mb-header">
                        <div class="mbh-user clearfix">
                            <div class="p-t-5">User Group</div>
                        </div>

                        <ul class="actions">
                            <li>
                                <a href="">
                                    <i class="zmdi zmdi-refresh-alt"></i>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="zmdi zmdi-delete"></i>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="" data-toggle="dropdown">
                                    <i class="zmdi zmdi-more-vert"></i>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li>
                                        <a href="">Contact Info</a>
                                    </li>
                                    <li>
                                        <a href="">Mute</a>
                                    </li>
                                    <li>
                                        <a href="">Clear Messages</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </header>

                    <router-view></router-view>
                </div>
            </div>
        </div>
    </section>

</template>

<script>

    let dropdownOptions = [
        {
            id: 'edit',
            text: 'Edit',
            icon: 'edit',
            secondaryText: 'Ctrl+E'
        }, {
            id: 'duplicate',
            text: 'Duplicate',
            icon: 'content_copy',
            secondaryText: 'Ctrl+D'
        }, {
            id: 'share',
            text: 'Share',
            icon: 'share',
            secondaryText: 'Ctrl+Shift+S',
            disabled: true
        }, {
            type: 'divider'
        }, {
            id: 'delete',
            text: 'Delete',
            icon: 'delete',
            secondaryText: 'Del1'
        }
    ];


    export default{
        props: {
            permissions
        },
        components: {},
    }
</script>

<style>

</style>