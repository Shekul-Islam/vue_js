<script setup>
import "skeleton-screen-css";
import HomeSliderSkeleton from "../skeleton/HomeSliderSkeleton.vue";

var img = {image: '@/assets/img/product-9.jpg'};
</script>

<template>
  
    <template v-if="img?.image">
      
        <div 
         v-for="(img, index) in img?.data"
                  :key="index"
        
        >
            <img src="@/assets/img/product-9.jpg" alt="">
        </div>
    </template>

    <template v-else>
        <div>
            <HomeSliderSkeleton/>
        </div>
    </template>
      
        <!-- Slider Skeleton -->
    <!-- <div class="slider-skeleton" style="height: 320px; width: 965px;">
      
      <div class="slide">
        <div class="slide-content">
          <div class="slide-image ssc-square mb"></div>
         
        </div>
        <div class="ssc-hr"></div>
        
      </div>
     
    </div> -->
     
</template>


<style scoped>

.slide-content{
    border-radius: 5px !important;
  }
  
  .ssc-square {
      width: 100%;
      height: 365px !important;
  }

</style>