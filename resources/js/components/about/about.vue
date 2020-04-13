<template>
<div>
    <contact-area></contact-area>
    <about-area></about-area>
</div>
    
</template>
<script>
import ContactArea from '../jewerly_tips/conctact.vue';
import AboutArea from './aboutarea.vue';
export default {
    name: 'app',
        components:{
            'contact-area':ContactArea,
            'about-area':AboutArea,
            }
}
</script>