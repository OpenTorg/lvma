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
                        <template v-for="group in permissionsGroups">
                            <a class="list-group-item media"
                               v-link="{ name: 'permissionGroup', params: { id: group.id }}">
                                <div class="media-body">
                                    <div class="lgi-heading">{{group.name}}</div>
                                    <small class="ms-time">{{group.permissions_count}} perms.</small>
                                </div>
                            </a>

                            <template v-for="children in group.children">
                                <a class="list-group-item media"
                                   v-link="{ name: 'permissionGroup', params: { id: children.id }}">
                                    <div class="media-body">
                                        <div class="lgi-heading">{{children.name}}</div>
                                        <small class="ms-time">{{children.permissions_count}} perms.</small>
                                    </div>
                                </a>
                            </template>
                        </template>

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

                    <router-view>
                    </router-view>

                </div>
            </div>
        </div>
    </section>

</template>

<script  type="text/babel">
    import {getPermissionGroupsList} from '../../vuex/actions'
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
        ready() {
            this.getPermissionGroupsList();
        },

        vuex: {
            getters: {
                permissionsGroups: ({accessPermissions}) => accessPermissions.items

        },
        actions: {
            getPermissionGroupsList
        }
    }
    }
</script>

<style>

</style>