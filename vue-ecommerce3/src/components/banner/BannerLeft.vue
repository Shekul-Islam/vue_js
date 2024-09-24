<script setup>
import BannerLeftStandard from './BannerLeftStandard.vue';
import { ref } from 'vue'

import "skeleton-screen-css";

// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from 'swiper/vue';
// Import Swiper styles
import 'swiper/css';
import 'swiper/css/pagination';
import BannerSection from '@/components/banner/BannerSection.vue';
// import required modules
import { Pagination,Autoplay, Navigation } from 'swiper/modules';
import HomeSliderSkeleton from '@/components/skeleton/HomeSliderSkeleton.vue';


const newSlide = ref([Navigation])
const modules = ref([Pagination,Autoplay]);


var sliders = { image1: '@/assets/img/carousel-1.jpg'}

var sliders = { image1: '@/assets/img/carousel-1.jpg', image2: '@/assets/img/carousel-2.jpg', image3: '@/assets/img/carousel-3.jpg'}


</script>

<template>
    <div class="col-lg-8">
        <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                <li data-target="#header-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">

                <template v-if="sliders?.image1">
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
                  <swiper-slide
                  v-for="(slider, index) in slider?.data"
                  :key="index"
                  
                  
                  >
                    <div><BannerLeftStandard/></div>
                </swiper-slide>

                <swiper-slide>
                    <div><BannerLeftStandard/></div>
                </swiper-slide>

                <swiper-slide>
                    <div><BannerLeftStandard/></div>
                </swiper-slide>
                  </swiper>
                 </template>
                 <template v-else>
                    <HomeSliderSkeleton />
                </template>
                
            </div>
        </div>
    </div>
</template>


<style scoped>

</style>