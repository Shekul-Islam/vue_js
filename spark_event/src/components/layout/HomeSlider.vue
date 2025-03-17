<script setup>
import { Pagination, Navigation, Autoplay } from "swiper/modules";
import { Swiper, SwiperSlide } from 'swiper/vue';
import { onMounted, ref } from "vue";

import "swiper/css";
import "swiper/css/pagination";
import "swiper/css/navigation";

</script>

<template>
<div class="home-slider">
  <swiper 
    :slidesPerView="1" 
    :sliderPerGroup="1" 
    :loop="true" 
    :autoplay="{ delay: 5000 }" 
    :pagination="{ clickable: true }"
    :navigation="{ nextEl: '.custom-next', prevEl: '.custom-prev' }"
    :modules="[Pagination, Navigation, Autoplay]" class="mySwiper"
>

    <swiper-slide v-for="(data, i) in 2" :key="i">
      <div class="slider-content" :style="{ background: `linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(/src/assets/image/home/home-slider/image-1.png) no-repeat center center/cover`}">
          <div class="slider-text">
            <h2>Hotel Operations And Staffing Management</h2>
            <p>From seamless operations to tailored staffing, we’re your one-stop solution for exceptional hospitality management.</p>
            <button class="primary-button">Fix a Metting</button>
          </div>
      </div>
    </swiper-slide>

  </swiper>

  <div class="custom-navigation">
    <button class="custom-prev">
      <i class="fa-solid fa-arrow-left"></i>
    </button>

    <button class="custom-next">
      <i class="fa-solid fa-arrow-right"></i>
    </button>
  </div>
</div>

</template>


<style scoped>
.home-slider{
    position: relative;
}

.home-slider .slider-content{
    max-height: 600px;
    height: 600px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.slider-content .slider-text{
    text-align: center;
    padding: 0 20px;
}

.slider-content .slider-text h2{
    color: #ffffff;
    font: normal normal bold 40px/60px Montserrat;
}

.slider-content .slider-text p{
    width: 670px;
    font: normal normal normal 20px/30px Poppins;
    margin: auto;
    color: #ffffff;
    margin-bottom: 18px;
}

/* Swiper js navigation design */
.custom-navigation button{
    width: 35px;
    height: 35px;
    border: 2px solid #ffffff;
    background-color: transparent;
    border-radius: 100%;
    position: absolute;
    z-index: 99;
    color: #ffffff;
}

.custom-navigation button:hover{
    color: var(--primary-color);
    border-color: var(--primary-color);
}

.custom-navigation .custom-prev{
    bottom: 50px;
    right: 100px;
}

.custom-navigation .custom-next{
    bottom: 50px;
    right: 50px;
}

@media screen and (max-width:991px) {
    .home-slider .slider-content{
        max-height: 500px;
        height: 500px;
    }
    .custom-navigation button{
        width: 32px;
        height: 32px;
    }

    .slider-content .slider-text h2{
        font-size: 28px;
        line-height: 1;
    }

    .slider-content .slider-text p{
        font-size: 16px;
        line-height: 1.3;
    }
}

@media screen and (max-width:768px) {
    .slider-content .slider-text h2{
        font-size: 20px;
    }
    .slider-content .slider-text p{
        width: 500px;
        font-size: 15px;
    }

    .slider-content .slider-text button{
        font-size: 14px;
    }

}

@media screen and (max-width:575px) {
    .home-slider .slider-content{
        max-height: 350px;
        height: 350px;
    }
    .slider-content .slider-text h2{
        font-size: 15px;
    }
    .slider-content .slider-text p{
        width: 371px;
        font-size: 11px;
    }
    .custom-navigation button{
        display: none;
    }

}

@media screen and (max-width:390px) {
    .slider-content .slider-text p{
        width: 300px;
    }
}
</style>