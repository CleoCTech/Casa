<template>
    <div>
        <div>
            <banner-area></banner-area>
        </div>
<section class="product-area">
    <div class="container-fluid">
        <!-- //loop the products here form API -->
    <div v-if="products !== null && !$parent.is_loading && products.length > 0" class="row">
        <div class="col-12">
             <div class="section-title text-center">
                 <h2>Casa Jewelry</h2>
             </div>
        </div>
            <div v-for="product in products.slice(0, 9)" :key="product.id" class="col-4 col-sm-4 col-md-4 col-xs-4 p-0">
                 <div class="product bg-pink home">
                     <div class="product-img">
                         <!-- <a href="#">
                         
                         </a> -->
                         <!-- <img class="img-fluid" src="https://picsum.photos/200/300"> -->
                         <a href="#">
                                <img class="img-fluid" src="https://www.shop.casa-jewelry.eu/themes/assets/transparent/armbanden-armband-sieraden-casa-jewelry.png" alt="product">
                        </a>
                     </div>
                     <div class="product-name text-pink hometitle">
                        <a href="/"><h5 style="vertical-align: inherit;">{{product.title}}</h5></a>
                    </div>
                 </div>
            </div>
        </div>
        <div v-else-if="!$parent.is_loading && products.length == 0" class="row">
            Oops!! No products found
        </div>
    </div>
</section>

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
                //api link where data will be fetch from . it has to be json api
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