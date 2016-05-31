<template>
    <ui-toolbar type="colored" text-color="white" flat>
        <div slot="actions">
            <ui-icon-button
                    type="clear" color="white" icon="arrow_back"
            ></ui-icon-button>

            <ui-icon-button
                    type="clear" color="white" icon="star_border"
            ></ui-icon-button>

            <ui-icon-button
                    type="clear" color="white" icon="more_vert" has-dropdown-menu
                    :menu-options="shareMenuOptions" dropdown-position="bottom right"
            ></ui-icon-button>
        </div>

        Inbox
    </ui-toolbar>
</template>
<style>

</style>
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
        methods : {
            menuOptionSelected(option) {
                console.log('Selected', option.id);
            }
        },

        components:{

        }
    }
</script>