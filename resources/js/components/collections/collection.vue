<template>
<div>
    <slider-area></slider-area>
    <jewerly-collections></jewerly-collections>
</div>
    
</template>
<script>
import SliderArea from './slider.vue';
import JewerlyCollections from './jewerlyCollections.vue';
export default {
    name: 'app',
        components:{
            'slider-area':SliderArea,
            'jewerly-collections': JewerlyCollections,
            }
}
</script>