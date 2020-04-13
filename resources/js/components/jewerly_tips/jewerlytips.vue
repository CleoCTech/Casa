<template>
<div>
    <contact-area></contact-area>
    <mantainence-area></mantainence-area>
    <tips-area></tips-area>
</div>
    
</template>
<script>
import ContactArea from './conctact.vue';
import MantainenceArea from './mantainence.vue';
import TipsList from './tipslist.vue';
export default {
    name: 'app',
        components:{
            'contact-area':ContactArea,
            'mantainence-area':MantainenceArea,
            'tips-area':TipsList,
            }
}
</script>