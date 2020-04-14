<template>
<div>

    <section class="product-area shop-product">
        <div class="container">
            <div v-if="products !== null && !$parent.is_loading && products.length > 0" class="row">
                <!-- Product -->
                <div v-for="product in products.slice(0, 9)" :key="product.id" class="col-4 col-sm-4 col-md-4 col-xs-4">
                    <div class="product product_id_94">
                        <div class="product-img">
                            <a href="#">
                                <img class="productimage" src="https://www.shop.casa-jewelry.eu/images/21/CASA-JEWELRY-ZILVER-OORRINGEN-FRANKFURTER-CR_320.jpg" alt="" title="">
                            </a>
                        </div>
                        <div class="product-name">
                            <a href="#">
                                <p>{{product.title}}</p>
                            </a>
                            <p>{{product.price}}</p>
                            <div class="product-btn">
                                <a class="btn-pro" href="#">View</a>
                                <!-- <a class="btn-pro" href="{{route('/product')}}">View</a> -->
                                <a class="btn-pro addToCart shop" href="#">Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-12 pt-5">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" data-page="0">Vorige</a>
                            </li>
                            <li class="page-item">
                                <select id="page_num" class="page-link">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                </select>
                            </li>

                            <li class="page-item paginate_next">
                                <a class="page-link" href="#" data-page="1">Volgende</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
</div>
</template>

<script>
export default {
    // name: 'app',
    // components: {
    //     'banner-area': BannerArea,
    //     'Subscribe-Area': SubscribeArea
    // },
    data() {
        return {
            products: []
        }
    },
    created() {
        this.$parent.is_loading = true;
        this.getProducts();
    },
    methods: {
        getProducts() {
            let self = this;
            //api link where data will be fetch from . it has to be json api
            axios.get("https://jsonplaceholder.typicode.com/todos").then(response => {
                self.products = response.data;
                self.$parent.is_loading = false;
            }).catch((error) => {
                self.$parent.is_loading = false;
            });
        },
    }
}
</script>
