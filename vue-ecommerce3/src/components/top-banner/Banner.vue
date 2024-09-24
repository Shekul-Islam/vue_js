<script setup>
import "skeleton-screen-css";
import HomeSliderSkeleton from "../skeleton/HomeSliderSkeleton.vue";

var img = {name: "Top Banner", image: '@/assets/img/product-9.jpg'};
</script>

<template>
  
   <div>
   <div class="row px-xl-5">
    <template v-if="img?.name">
      
      <div>
        <HomeSliderSkeleton/>
    </div>
  </template>

  <template v-else>
      <div>
          <HomeSliderSkeleton/>
      </div>
  </template>
   </div>
   </div>



      
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