<script setup>
import { onMounted, ref } from "vue";

</script>

<template>
  <div class="years-of-expreience" :style="{ background: `linear-gradient(#363636E6, #363636E6), url(/src/assets/image/about/years-of-expreience/Experience-Image.png) no-repeat center center / cover` }">
    <div class="container">
      <div class="heading-section">
          <h1>15 YEARS OF EXPERIENCE</h1>
          <p>Partnering with us guarantee</p>
      </div>
      <div class="main-section">
        <div class="body-section">
        <div class="card-section">
          <div class="image-section">
            <img src="/src/assets/image/about/years-of-expreience/Item 1 Icon.png" alt="">
          </div>
          <div class="content-section">
            <p>Enhanced Guest Experience</p>
          </div>
        </div>
        <div class="card-section">
          <div class="image-section">
            <img src="/src/assets/image/about/years-of-expreience/Item 2 Icon.png" alt="">
          </div>
          <div class="content-section">
            <p>Peace of Mind Guaranteed</p>
          </div>
        </div>
        <div class="card-section">
          <div class="image-section">
            <img src="/src/assets/image/about/years-of-expreience/Item 3 Icon.png" alt="">
          </div>
          <div class="content-section">
            <p>Same Staffs Everytime</p>
          </div>
        </div>
        <div class="card-section">
          <div class="image-section">
            <img src="/src/assets/image/about/years-of-expreience/Item 4 Icon.png" alt="">
          </div>
          <div class="content-section">
            <p>Operational Efficiency</p>
          </div>
        </div>
        <div class="card-section">
          <div class="image-section">
            <img src="/src/assets/image/about/years-of-expreience/Item 5 Icon.png" alt="">
          </div>
          <div class="content-section">
            <p>Reliable and Affordable</p>
          </div>
        </div>
        <div class="card-section">
          <div class="image-section">
            <img src="/src/assets/image/about/years-of-expreience/Item 6 Icon.png" alt="">
          </div>
          <div class="content-section">
            <p>Well Mannered and Professional</p>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</template>


<style scoped>
.years-of-expreience{
  padding: 38px 0;
}

.years-of-expreience .heading-section h1{
    text-align: center;
    color: var(--primary-color);
    margin-bottom: 14px;
    font: normal normal bold 40px/60px Montserrat;
    line-height: 60px;
}

.years-of-expreience .heading-section p{
    text-align: center;
    color: #ffffff;
    margin-bottom: 43px;
    font: normal normal 300 20px/30px Poppins;
    line-height: 30px;
}

.years-of-expreience .body-section .card-section{
    display: flex;
    gap: 18px;
    align-items: center;
}

.years-of-expreience .main-section{
    display: flex;
    justify-content: center;
}

.years-of-expreience .body-section {
    display: grid;
    grid-template-columns: auto auto;
    row-gap: 25px;
    column-gap: 170px;
}

.years-of-expreience .body-section .card-section .image-section{
    border: 1px solid var(--primary-color);
    padding: 5px;
    border-radius: 4px;
}

.years-of-expreience .body-section .card-section .content-section p{
    text-align: left;
    font: normal normal normal 18px/27px Poppins;
    letter-spacing: 0px;
    color: #FAFAFA;
    line-height: 18px;
    margin-top: 15px;
}


@media (max-width: 991px) {

.years-of-expreience{
   padding: 28px 0;
}

.years-of-expreience .heading-section h1{
    font: normal normal bold 28px/42px Montserrat;
    line-height: 42px;
    margin-bottom: 12px;
}

.years-of-expreience .heading-section p{
    font: normal normal 300 18px/32px Poppins;
    line-height: 32px;
    margin-bottom: 28px;
}

.years-of-expreience .body-section {
    column-gap: 40px;
}

.years-of-expreience .body-section .card-section .content-section p{
    font: normal normal normal 16px/25px Poppins;
    line-height: 25px;
}

}


@media (max-width: 767px) {
  .years-of-expreience{
   padding: 18px 0;
}

.years-of-expreience .heading-section h1{
    font: normal normal bold 18px/42px Montserrat;
    line-height: 42px;
    margin-bottom: 8px;
}

.years-of-expreience .heading-section p{
    font: normal normal 300 15px/21px Poppins;
    line-height: 32px;
    margin-bottom: 18px;
}

.years-of-expreience .body-section {
    column-gap: 10px;
}

.years-of-expreience .body-section .card-section .content-section p{
    font: normal normal normal 14px/21px Poppins;
    line-height: 21px;
}

}

@media (max-width: 350px) and (min-width: 320px) {
.years-of-expreience .heading-section h1 {
      font: normal normal bold 18px / 42px Montserrat;
      line-height: 35px;
      margin-bottom: 8px;
  }

.years-of-expreience .heading-section p{
      font: normal normal 300 15px / 21px Poppins;
      line-height: 20px;
      margin-bottom: 18px;
  }

  .years-of-expreience .body-section .card-section{
      display: flex;
      gap: 5px;
      align-items: center;
  }

}

</style>