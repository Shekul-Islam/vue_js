<script setup>

import { ref } from 'vue'
// Import Swiper Vue.js components
import { Swiper, SwiperSlide, useSwiperSlide } from 'swiper/vue';
// Import Swiper styles
import 'swiper/css';
import 'swiper/css/pagination';

// import required modules
import { Pagination,Autoplay, Navigation } from 'swiper/modules'

const newSlide = ref([Navigation])
const modules = ref([Pagination,Autoplay]);

</script>
<template>
  <div>
    <section class="home-index-slider slider-arrow slider-dots">

        <swiper
        
          
        :slidesPerView="1"
        :sliderPerGroup="1"
        :loop="true"
        :pagination="{
          clickable: true,
        }"
        :autoplay="{
          delay: 2000,
        }"
        :modules="modules"
        class="mySwiper"
        
        
        >
            <SwiperSlide>
                <div class="banner-part banner-1">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-6 col-lg-6">
                                <div class="banner-content">
                                    <h1>free home delivery within 24 hours now.</h1>
                                    <p>Lorem ipsum dolor consectetur adipisicing elit modi consequatur eaque expedita porro necessitatibus eveniet voluptatum quis pariatur Laboriosam molestiae architecto excepturi</p>
                                    <div class="banner-btn">
                                        <a class="btn btn-inline" href="shop-4column.html">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span>shop now</span>
                                        </a>
                                        <a class="btn btn-outline" href="offer.html">
                                            <i class="icofont-sale-discount"></i>
                                            <span>get offer</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="banner-img">
                                    <img src="@/assets/images/home/index/01.png" alt="index">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </SwiperSlide>

            <SwiperSlide>
                <div class="banner-part banner-2">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-6 col-lg-6">
                                <div class="banner-img">
                                    <img src="@/assets/images/home/index/02.png" alt="index">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="banner-content">
                                    <h1>free home delivery within 24 hours now.</h1>
                                    <p>Lorem ipsum dolor consectetur adipisicing elit modi consequatur eaque expedita porro necessitatibus eveniet voluptatum quis pariatur Laboriosam molestiae architecto excepturi</p>
                                    <div class="banner-btn">
                                        <a class="btn btn-inline" href="shop-4column.html">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span>shop now</span>
                                        </a>
                                        <a class="btn btn-outline" href="offer.html">
                                            <i class="icofont-sale-discount"></i>
                                            <span>get offer</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </SwiperSlide>
            
        </swiper>
      
     
  </section>
  </div>
</template>


<style scoped>

</style>