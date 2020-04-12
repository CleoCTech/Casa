<template>
    <div>
        <div>
            <banner-area></banner-area>
        </div>
    <div v-if="products !== null && !$parent.is_loading && products.length > 0" class="row">
        <div class="col-12">
             <div class="section-title text-center">
                 <h2>Casa Jewelry</h2>
             </div>
        </div>
            <div v-for="product in products.slice(0, 9)" :key="product.id" class="col-4 col-sm-4 col-md-4 col-xl-4 m-0 p-0">
                 <div class="productx bg-pink homex text-center">
                     <div class="product-imgx mb-2">
                         <!-- <a href="#">
                         
                         </a> -->
                         <img class="img-fluid" src="https://picsum.photos/200/300">
                     </div>
                     <div class="product-namex text-pink hometitlex text-center">
                        <a href="/"><h5>{{product.title}}</h5></a>
                    </div>
                 </div>
            </div>
        </div>
        <div v-else-if="!$parent.is_loading && products.length == 0" class="row">
            Oops!! No products found
        </div>
         <div>
            <Subscribe-Area></Subscribe-Area>
        </div>
        </div>
</template>
<script>
import BannerArea from './inc/banner.vue';
import SubscribeArea from './inc/subscribe.vue';
    export default{
        name: 'app',
        components:{
            'banner-area':BannerArea,
             'Subscribe-Area': SubscribeArea
            },
        data(){
            return{
                products:[]
            }
        },
        created(){
            this.$parent.is_loading = true;
            this.getProducts();
        },
        methods:{
            getProducts(){
                let self = this;
                axios.get("https://jsonplaceholder.typicode.com/todos").then(response =>{
                    self.products = response.data;
                    self.$parent.is_loading = false;
                }).catch((error) =>{
                    self.$parent.is_loading = false;
                });
            },
        }
    }
</script>