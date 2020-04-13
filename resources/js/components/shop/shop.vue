<template>
<div>
    <mega-menu></mega-menu>
    <product-area></product-area>
</div>
    
</template>
<script>
import MegaMenu from './megamenu.vue';
import ProductArea from './products.vue';
export default {
    name: 'app',
        components:{
            'mega-menu':MegaMenu,
            'product-area':ProductArea,
            }
}
</script>