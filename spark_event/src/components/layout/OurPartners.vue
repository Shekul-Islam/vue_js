<script setup>
import { Swiper, SwiperSlide } from "swiper/vue";
import "swiper/css";
import "swiper/css/pagination";
import "swiper/css/navigation";
import { Pagination, Autoplay, Navigation } from "swiper/modules";
import { ref } from "vue";

const modules = ref([Pagination, Autoplay, Navigation]);

const imageName = ref(['Dorchester', 'Lansdowne', 'Oyo', 'Beaumont', 'Hilton', 'Savoy', 'Dorchester', 'Lansdowne', 'Oyo', 'Dorchester'])

</script>

<template>
    <div class="our-partners">
        <div class="heading-section container">
            <h1>OUR PARTNERS</h1>
            <p>Meet our excellent team members</p>
        </div>
        <div class="body-section">
            <swiper
                :autoplay="{ delay: 2000 }"
                :modules="[Pagination, Autoplay, Navigation]"
                class="mySwiper"
                :breakpoints="{
                    1200: { 
                        slidesPerView: 7, 
                        spaceBetween: 30 
                    },
                    992: { 
                        slidesPerView: 5, 
                        spaceBetween: 25 
                    },
                    768: { 
                        slidesPerView: 4, 
                        spaceBetween: 20 
                    },
                    480: { 
                        slidesPerView: 3, 
                        spaceBetween: 15 
                    },
                    320: { 
                        slidesPerView: 3, 
                        spaceBetween: 10 
                    }
                }"
            >
                <swiper-slide v-for="(name, index) in imageName" :key="index">
                    <div class="card-section">
                        <img :src="`/src/assets/image/home/our-partners/${name}.png`" alt="">
                    </div>
                </swiper-slide>
            </swiper>
        </div>
    </div>
</template>

<style scoped>

.our-partners{
    padding: 60px 0 100px 0;
    background: white;
}

.our-partners .heading-section h1{
    text-align: center;
    color: var(--primary-color);
    margin-bottom: 14px;
    font: normal normal bold 40px/60px Montserrat;
    line-height: 60px;
}

.our-partners .heading-section p{
    text-align: center;
    color: #464646;
    margin-bottom: 36px;
    font: normal normal 300 20px/30px Poppins;
    line-height: 30px;
}

.card-section img {
    max-width: 100%;
    height: auto;
}

@media (max-width: 350px) and (min-width: 320px) {
    .our-partners .heading-section h1 {
        text-align: center;
        color: var(--primary-color);
        margin-bottom: 10px;
        font: normal normal bold 18px/32px Montserrat;
        line-height: 25px;
    }

    .our-partners {
        padding: 20px 0 30px 0;
    }

    .our-partners .heading-section p{
        font: normal normal 300 15px/21px Poppins;
        margin-bottom: 20px;
    }


}

</style>