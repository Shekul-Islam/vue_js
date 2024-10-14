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

// import Swiper from "swiper";
// import { SwiperSlide } from "swiper/vue";
</script>

<template>
  <div>
    <section class="section brand-part">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-heading">
              <h2>shop by brands</h2>
            </div>
          </div>
        </div>
        <div class="brand-slider slider-arrow">
          <Swiper
          
          :slidesPerView="5"
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
              <div class="brand-wrap">
                <div class="brand-media">
                  <img src="@/assets/images/brand/01.jpg" alt="brand" />
                  <div class="brand-overlay">
                    <a href="brand-single.html"><i class="fas fa-link"></i></a>
                  </div>
                </div>
                <div class="brand-meta">
                  <h4>natural greeny</h4>
                  <p>(45 items)</p>
                </div>
              </div>
            </SwiperSlide>

            <SwiperSlide>
              <div class="brand-wrap">
                <div class="brand-media">
                  <img src="@/assets/images/brand/02.jpg" alt="brand" />
                  <div class="brand-overlay">
                    <a href="brand-single.html"><i class="fas fa-link"></i></a>
                  </div>
                </div>
                <div class="brand-meta">
                  <h4>vegan lover</h4>
                  <p>(45 items)</p>
                </div>
              </div>
            </SwiperSlide>

            <SwiperSlide>
              <div class="brand-wrap">
                <div class="brand-media">
                  <img src="@/assets/images/brand/03.jpg" alt="brand" />
                  <div class="brand-overlay">
                    <a href="brand-single.html"><i class="fas fa-link"></i></a>
                  </div>
                </div>
                <div class="brand-meta">
                  <h4>organic foody</h4>
                  <p>(45 items)</p>
                </div>
              </div>
            </SwiperSlide>

            <SwiperSlide>
              <div class="brand-wrap">
                <div class="brand-media">
                  <img src="@/assets/images/brand/04.jpg" alt="brand" />
                  <div class="brand-overlay">
                    <a href="brand-single.html"><i class="fas fa-link"></i></a>
                  </div>
                </div>
                <div class="brand-meta">
                  <h4>ecomart limited</h4>
                  <p>(45 items)</p>
                </div>
              </div>
            </SwiperSlide>

            <SwiperSlide>
              <div class="brand-wrap">
                <div class="brand-media">
                  <img src="@/assets/images/brand/05.jpg" alt="brand" />
                  <div class="brand-overlay">
                    <a href="brand-single.html"><i class="fas fa-link"></i></a>
                  </div>
                </div>
                <div class="brand-meta">
                  <h4>fresh fortune</h4>
                  <p>(45 items)</p>
                </div>
              </div>
            </SwiperSlide>

            <SwiperSlide>
              <div class="brand-wrap">
                <div class="brand-media">
                  <img src="@/assets/images/brand/06.jpg" alt="brand" />
                  <div class="brand-overlay">
                    <a href="brand-single.html"><i class="fas fa-link"></i></a>
                  </div>
                </div>
                <div class="brand-meta">
                  <h4>econature</h4>
                  <p>(45 items)</p>
                </div>
              </div>
            </SwiperSlide>
          </Swiper>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="section-btn-50">
              <a href="brand-list.html" class="btn btn-outline">
                <i class="fas fa-eye"></i>
                <span>view all brands</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>


<style scoped>
</style>