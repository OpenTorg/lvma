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
                                type="clear"  icon="more_vert" has-dropdown-menu
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
                <a class="list-group-item media" href="">

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

            <div class="mb-list">
                <div class="mbl-messages c-overflow">
                    <div class="mblm-item mblm-item-left">
                        <div>
                            Nullam id dolor id nibh ultricies vehicula ut id elit
                        </div>
                        <small>5:47 PM</small>
                    </div>
                    <div class="mblm-item mblm-item-right">
                        <div>
                            Cras justo odio, dapibus ac facilisis in, egestas eget quamurabitur blandit tempus porttitor
                        </div>
                        <small>5:49 PM</small>
                    </div>
                    <div class="mblm-item mblm-item-right">
                        <div>
                            blandit tempus
                        </div>
                        <small>5:55 PM</small>
                    </div>
                    <div class="mblm-item mblm-item-left">
                        <div>
                            Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec ullamcorper nulla non metus auctor fringilla. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget urna mollis ornare vel eu leo.
                        </div>
                        <small>6:10 PM</small>
                    </div>
                    <div class="mblm-item mblm-item-left">
                        <div>
                            <div class="mblmi-img">
                                <img src="media/gallery/20.jpg" alt="">
                            </div>
                        </div>
                        <small>6:10 PM</small>
                    </div>
                    <div class="mblm-item mblm-item-left">
                        <div>
                            Donec id elit non mi porta gravida at eget metus
                        </div>
                        <small>6:11 PM</small>
                    </div>
                    <div class="mblm-item mblm-item-right">
                        <div>
                            Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Sed posuere consectetur est at lobortis. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.                                    </div>
                        <small>6:15 PM</small>
                    </div>
                </div>

                <div class="mbl-compose">
                    <textarea placeholder="Type a message..."></textarea>

                    <button><i class="zmdi zmdi-mail-send"></i></button>
                </div>
            </div>
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
            secondaryText: 'Del'
        }
    ];


    export default{
        data(){
            return{
                msg:'hello vue',
                shareMenuOptions: dropdownOptions
            }
        },
        components:{

        }
    }
</script>

<style>

</style>