<script setup>
// All Import File  Code Is Here......................................................................................................
import { ref,onMounted } from 'vue';
import {HomeSliderSkeleton, CategorySkeleton} from '@/components/skeleton'

// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from 'swiper/vue';
// Import Swiper styles
import 'swiper/css';
import 'swiper/css/pagination';
// import required modules
import { Pagination,Autoplay, Navigation } from 'swiper/modules'

// slider get data
import { storeToRefs } from 'pinia';
// slider data fetch
import {useSlider, useCategory, useBanner} from '@/stores'


// All Variable  Code Is Here.....................................................................................................
const newSlide = ref([Navigation])
const modules = ref([Pagination,Autoplay]);

// banner part start
const banner = useBanner();
const banner1 = ref(''); 
const banner2 = ref('');
// banner part end

// slider data fetch
const slider = useSlider();
const {sliders} = storeToRefs(slider)
// category data fetch
const category = useCategory();
const {categories} = storeToRefs(category)

// banner part start

const getBanner = async() => {
  banner1.value =  await banner.getData('home-page-b1');
  banner2.value =  await banner.getData('home-page-b2');
}

// banner part end

onMounted(() => {
    getBanner();
    slider.getData();
    category.getData();
})

// API Calling Code Is Here.....................................................................................................

// All Function  Code Is Here.....................................................................................................
</script>

<template>
  <div>
    <section class="banner-part">

      <div class="container">
        <div class="row">
          <!-- <div class="col-lg-3">
            <div class="banner-category">
              <div class="banner-category-head">
                <i class="fas fa-bars"></i>
                <span>top categories</span>
              </div>
              <ul class="banner-category-list">
                <template v-if="!categories.result">
                  <CategorySkeleton />
                </template>
                <template v-else>
                  <li class="banner-category-item" v-for="(category, index) in categories.result" :key="index">
                    <router-link :to="{ name: 'shopPage', query: { category: category.id }}">
                      <i class="flaticon-vegetable"></i>
                      <span>{{ category.name }}</span>
                      <i class="fa-solid fa-arrow-right ms-auto fs-6" @click.prevent="toggleDropdown(index, category)" v-if="category.sub_category.length > 0"></i>
                    </router-link>
                  </li>
                </template>
              </ul>
            </div>
          </div> -->
          <div class="col-lg-12">
            <div class="row">
              <div class="col-lg-12">
                <div class="home-grid-slider slider-dots">
                   <template v-if="!sliders.result">
                      <HomeSliderSkeleton />
                   </template>
                   <template v-else>
                   <swiper
                      :slidesPerView="1"
                      :sliderPerGroup="1"
                      :loop="true"
                      :pagination="{
                        clickable: true,
                      }"
                      
                      :modules="modules"
                      
                      class="mySwiper"
                    >
                      <swiper-slide v-for="(slider, index) in sliders.result" :key="index">
                        <div class="banner-image">
                          <img :src="slider.image" alt="" />
                        </div>
                      </swiper-slide>
                    </swiper>
                  </template>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-md-6 col-lg-6 d-none d-sm-block" v-if="banner1[0]">
                <div class="banner-promo">
                  <a href="#"
                    > <img :src="banner1[0]?.image" alt="promo"
                  /></a>
                </div>
              </div>
              <div class="col-md-6 col-lg-6 d-none d-sm-block" v-if="banner2[0]">
                <div class="banner-promo">
                  <a href="#"
                    > <img :src="banner2[0]?.image" alt="promo"
                  /></a>
                </div>
              </div>  
        </div>
      </div>
    </section>

  </div>
</template>

<style>

.banner-promo {
  margin-bottom: 25px;
  overflow: hidden;
  border-radius: 5px;
}

.banner-promo a img {
  width: 100%;
  border-radius: 8px;
  transition: transform 0.5s;
}
.banner-promo a img:hover {
  transform: scale(1.1);
  transition: transform 0.5s;
}


.home-grid-slider {
  margin-bottom: 25px;
}

.home-grid-slider img {
  width: 100%;
  border-radius: 8px;
}

.banner-category-list {
  max-height: 315px;
  overflow-y: auto; 
  overflow-x: hidden; 
}

.banner-category-dropdown{
  z-index: 999999 !important;
}

.banner-promo a {
  width: 100%;
}



@media (max-width: 425px) {
 /* .home-grid-slider img {
    height: 170px;
  } */
}

</style>
