<template>
<div>
    <cart-view></cart-view>
</div>
    
</template>
<script>
import CartView from './cart_view';
export default {
    name: 'app',
        components:{
            'cart-view':CartView,
            }
}
</script>