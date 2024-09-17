<script setup>
import { ref } from 'vue'

// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from 'swiper/vue';
// Import Swiper styles
import 'swiper/css';
import 'swiper/css/pagination';
import BannerSection from '@/components/banner/BannerSection.vue';
// import required modules
import { Pagination,Autoplay, Navigation } from 'swiper/modules'

const newSlide = ref([Navigation])
const modules = ref([Pagination,Autoplay]);
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
              <swiper-slide>
                <div class="carousel-item position-relative active" style="height: 430px;">
                    <img class="position-absolute w-100 h-100" src="@/assets/img/carousel-1.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 700px;">
                            <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Men Fashion</h1>
                            <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                            <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Shop Now</a>
                        </div>
                    </div>
                </div>
            </swiper-slide>
            <swiper-slide>
                <div class="carousel-item position-relative active" style="height: 430px;">
                    <img class="position-absolute w-100 h-100" src="@/assets/img/carousel-2.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 700px;">
                            <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Men Fashion</h1>
                            <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                            <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Shop Now</a>
                        </div>
                    </div>
                </div>
            </swiper-slide>
            <swiper-slide>
                <div class="carousel-item position-relative active" style="height: 430px;">
                    <img class="position-absolute w-100 h-100" src="@/assets/img/carousel-3.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 700px;">
                            <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Men Fashion</h1>
                            <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                            <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Shop Now</a>
                        </div>
                    </div>
                </div>
            </swiper-slide>
              </swiper>
            </div>
        </div>
    </div>
</template>


<style scoped>

</style>