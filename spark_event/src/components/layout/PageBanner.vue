<script setup>
import { onMounted, ref } from "vue";


</script>

<template>
<div class="page-banner">
    <div class="slider-content" :style="{ background: `linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(/src/assets/image/home/home-slider/image-1.png) no-repeat center center/cover`}">
        <div class="slider-text">
          <h2>Hotel Operations And Staffing Management</h2>
          <p>From seamless operations to tailored staffing, we’re your one-stop solution for exceptional hospitality management.</p>
          <button class="primary-button">Fix a Metting</button>
        </div>
    </div>
</div>

</template>


<style scoped>
.page-banner .slider-content{
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

@media screen and (max-width:991px) {
    .page-banner .slider-content{
        max-height: 500px;
        height: 500px;
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
    .page-banner .slider-content{
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

}

@media screen and (max-width:390px) {
    .slider-content .slider-text p{
        width: 300px;
    }
}
</style>