<script setup>


import { ref } from 'vue'
// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from 'swiper/vue';
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
    <section class="section suggest-part">
      <div class="container">
          <ul class="suggest-slider slider-arrow">
             
            <swiper
            
            :slidesPerView="3"
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
                <li>
                  <a class="suggest-card" href="shop-4column.html">
                      <img src="@/assets/images/suggest/01.jpg" alt="suggest">
                      <h5>vegetables <span>34 items</span></h5>
                  </a>
              </li>
              </SwiperSlide>
              <SwiperSlide>
                <li>
                  <a class="suggest-card" href="shop-4column.html">
                      <img src="@/assets/images/suggest/02.jpg" alt="suggest">
                      <h5>fruits <span>89 items</span></h5>
                  </a>
              </li>
              </SwiperSlide>
              <SwiperSlide>
                <li>
                  <a class="suggest-card" href="shop-4column.html">
                      <img src="@/assets/images/suggest/03.jpg" alt="suggest">
                      <h5>groceries <span>45 items</span></h5>
                  </a>
              </li>
              </SwiperSlide>
              <SwiperSlide>
                <li>
                  <a class="suggest-card" href="shop-4column.html">
                      <img src="@/assets/images/suggest/04.jpg" alt="suggest">
                      <h5>dairy farm <span>83 items</span></h5>
                  </a>
              </li>
              </SwiperSlide>
              <SwiperSlide>
                <li>
                  <a class="suggest-card" href="shop-4column.html">
                      <img src="@/assets/images/suggest/05.jpg" alt="suggest">
                      <h5>sea foods <span>40 items</span></h5>
                  </a>
              </li>
              </SwiperSlide>
              <SwiperSlide>
                <li>
                  <a class="suggest-card" href="shop-4column.html">
                      <img src="@/assets/images/suggest/06.jpg" alt="suggest">
                      <h5>vegan foods <span>57 items</span></h5>
                  </a>
              </li>
              </SwiperSlide>
              <SwiperSlide>
                <li>
                  <a class="suggest-card" href="shop-4column.html">
                      <img src="@/assets/images/suggest/07.jpg" alt="suggest">
                      <h5>dry foods <span>23 items</span></h5>
                  </a>
              </li>
              </SwiperSlide>
              <SwiperSlide>
                <li>
                  <a class="suggest-card" href="shop-4column.html">
                      <img src="@/assets/images/suggest/08.jpg" alt="suggest">
                      <h5>fast foods <span>97 items</span></h5>
                  </a>
              </li>
              </SwiperSlide>
            


            </swiper>
            
            
          
             
             
             
             
             
             
             
          </ul>
      </div>
  </section>
  </div>
</template>


<style scoped>

</style>