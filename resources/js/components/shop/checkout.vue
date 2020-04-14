<template>
<div>
    <cart-view></cart-view>
    <checkout-view></checkout-view>
</div>
    
</template>
<script>
import CartView from './cart_view';
import CheckoutView from './checkout_view';
export default {
    name: 'app',
        components:{
            'cart-view':CartView,
            'checkout-view':CheckoutView,
            }
}
</script>