<template>
<div>
    <contact-area></contact-area>
</div>
    
</template>
<script>
import ContactArea from './contactarea.vue';
export default {
    name: 'app',
        components:{
            'contact-area':ContactArea,
            }
}
</script>