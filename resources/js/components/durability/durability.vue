<template>
<div>
    <contact-area></contact-area>
    <sustain-area></sustain-area>
</div>
    
</template>
<script>
import ContactArea from '../jewerly_tips/conctact.vue';
import SustainArea from './sustainabilityarea.vue';
export default {
    name: 'app',
        components:{
            'contact-area':ContactArea,
            'sustain-area':SustainArea,
            }
}
</script>