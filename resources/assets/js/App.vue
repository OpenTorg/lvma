<template>
    <div> {{msg}}</div>
    <ui-button
            color="primary" has-dropdown-menu show-menu-secondary-text show-menu-icons :menu-options="shareMenuOptions"
             @menu-option-selected="menuOptionSelected"
    >Menu</ui-button>

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
        components:{

        },

        methods : {
            menuOptionSelected(option) {
                console.log('Selected', option.id);
            }
        }
    }
</script>