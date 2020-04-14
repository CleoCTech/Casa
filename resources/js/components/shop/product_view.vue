<template>
<div>
    <product-details></product-details>
</div>
    
</template>
<script>
import ProductDetails from './product_details.vue';
export default {
    name: 'app',
        components:{
            'product-details':ProductDetails,
            }
}
</script>