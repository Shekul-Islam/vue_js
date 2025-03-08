<script setup>

</script>

<template>
  <div class="partner-benefits">
    <div class="container">
      <div class="heading-section">
        <div class="order-services">
          <h1>LASER AND SPA MANAGEMENT</h1>
          <p>Our Laser & Spa Management services enhance customer experience and efficiency. We manage staffing, scheduling, equipment upkeep, and compliance while ensuring top-tier service quality.
            Through expert training and personalized care, we create a seamless, luxurious, and rejuvenating spa experience.</p>
        </div>
      </div>

      <div class="card-section">
        <div class="body-section">
        <div class="card-main-section">
          <div class="image-section">
            <img src="@/assets/icon/home/partners-benefits/money_1572396.png" alt="Hotel Operations Management">
          </div>
          <hr class="underline"><br>

          <div class="heading-section">
            <h6>TREATMENT & THERAPY PLANNING</h6>
          </div>
          <div class="paragraph-section">
            <p>Crafting personalized treatment plans for each client to meet their unique wellness goals, ensuring each spa session is both effective and tailored for maximum rejuvenation.</p>
          </div>
        </div>

        <div class="card-main-section">
          <div class="image-section">
            <img src="@/assets/icon/home/partners-benefits/vision_3040420.png" alt="Hotel Operations Management">
          </div>
          <hr class="underline"><br>

          <div class="heading-section">
            <h6>FACILITY MAINTENANCE & SANITATION</h6>
          </div>
          <div class="paragraph-section">
            <p>Maintaining high standards of cleanliness and safety for all spa and laser equipment, ensuring clients enjoy a sanitized and professional environment for every treatment.</p>
          </div>
        </div>
        
        <div class="card-main-section">
          <div class="image-section">
            <img src="@/assets/icon/home/partners-benefits/generating_11778256.png" alt="Hotel Operations Management">
          </div>
          <hr class="underline"><br>

          <div class="heading-section">
            <h6>PRODUCT & INVENTORY MANAGEMENT</h6>
          </div>
          <div class="paragraph-section">
            <p>Managing inventory levels to ensure quality skincare and laser products are consistently available, allowing for seamless treatments and enhancing client satisfaction with the best offerings.</p>
          </div>
        </div>

        <div class="card-main-section">
          <div class="image-section">
            <img src="@/assets/icon/home/partners-benefits/reliability_16912752.png" alt="Hotel Operations Management">
          </div>
          <hr class="underline"><br>

          <div class="heading-section">
            <h6>STAFF TRAINING & CERTIFICATION</h6>
          </div>
          <div class="paragraph-section">
            <p>Providing ongoing training for staff in the latest spa and laser techniques and compliance standards, ensuring they are skilled in delivering exceptional services while adhering to industry regulations.</p>
          </div>
        </div>

        <div class="card-main-section">
          <div class="image-section">
            <img src="@/assets/icon/home/partners-benefits/training_12650135.png" alt="Hotel Operations Management">
          </div>
          <hr class="underline"><br>

          <div class="heading-section">
            <h6>CUSTOMER SERVICE & EXPERIENCE</h6>
          </div>
          <div class="paragraph-section">
            <p>Ensuring an exceptional, relaxing experience for clients through attentive service and personalized engagement, creating a welcoming atmosphere where each guest feels valued and rejuvenated.</p>
          </div>
        </div>

        <div class="card-main-section">
          <div class="image-section">
            <img src="@/assets/icon/home/partners-benefits/optimization_16139806.png" alt="Hotel Operations Management">
          </div>
          <hr class="underline"><br>

          <div class="heading-section">
            <h6>SERVICE QUALITY & FEEDBACK</h6>
          </div>
          <div class="paragraph-section">
            <p>Collecting client feedback and conducting regular service reviews to enhance treatment quality and improve customer satisfaction, ensuring each client's experience is tailored to their needs.</p>
          </div>
        </div>
        
      </div>
      </div>

    </div>
  </div>
</template>


<style scoped>
.card-section{
  display: flex;
  justify-content: center;
}
.partner-benefits {
  padding: 100px 0;
  background-color: #FFFFFF;
}

.partner-benefits .heading-section .order-services h1 {
  text-align: center;
  color: var(--primary-color);
  margin-bottom: 14px;
  font: normal normal bold 40px/60px Montserrat;
  line-height: 60px;
}

.partner-benefits .heading-section .order-services p {
  text-align: center;
  color: #464646;
  margin-bottom: 36px;
  line-height: 30px;
  font: normal normal normal 16px/24px Poppins;
  margin: 26px 58px;

}

.partner-benefits .body-section {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
  width: 1142px;
}

.partner-benefits .body-section .card-main-section {
  background: #FAFAFA 0% 0% no-repeat padding-box;
  box-shadow: 0px 4px 20px #0000000D;
  border: 1px solid #D5D5D5;
  padding: 22px;
  border-radius: 10px;
  width: 368px;
}

.partner-benefits .body-section .card-main-section .image-section {
  position: relative;
}
.partner-benefits .body-section .card-main-section:hover .image-section img {
  transform: scale(1.1);
  transition: all 0.3s ease;
}

.partner-benefits .body-section .card-main-section .image-section img {
  width: 90px;
  margin-bottom: 24px;
  transform: scale(1);
  transition: all 0.3s ease;
}

.underline {
  margin: 0 auto;
  align-items: start;
  float: left;
  width: 120px;
  height: 2px;
  background: var(--primary-color) 0% 0% no-repeat padding-box;
  border: none; /* ডিফল্ট বর্ডার রিমুভ */
}

.partner-benefits .body-section .card-main-section .heading-section h6 {
  margin-bottom: 14px;
  font: normal normal bold 20px/30px Montserrat;
  text-transform: uppercase;
  font-size: 16px;
  color: var(--primary-color);
}

.partner-benefits .body-section .card-main-section .paragraph-section p {
  font: normal normal normal 16px/24px Poppins;
  font-size: 16px;
  color: #363636;
  text-align: left;
  line-height: 24px;
  
}

@media (max-width: 991px) {
  .partner-benefits {
    padding: 60px 0;
  }

  .partner-benefits .heading-section .order-services h1 {
    font-size: 28px;
    margin-bottom: 12px;
  }

  .partner-benefits .heading-section .order-services p {
    font-size: 18px;
    margin-bottom: 28px;
  }

  .partner-benefits .body-section {
    grid-template-columns: 229px 229px 229px;
    gap: 8.5px;
    padding: 10px;
  }

  .partner-benefits .body-section .card-main-section .heading-section h6 {
    font-size: 15px;
  }

}


@media (max-width: 767px) {
  .partner-benefits {
    padding: 40px 0;
  }

  .partner-benefits .heading-section .order-services h1 {
    font-size: 28px;
    margin-bottom: 10px;
    line-height: 27px;
  }

  .partner-benefits .heading-section .order-services p {
    font-size: 18px;
    margin-bottom: 18px;
    line-height: 21px;
    text-align: center;
  }

  .partner-benefits .body-section {
    grid-template-columns: 250px 250px;
    gap: 8.5px;
    padding: 10px;
  }

  .partner-benefits .body-section .card-main-section {
    padding: 12px;
  }

  .partner-benefits .body-section .card-main-section .heading-section h6 {
    font-size: 15px;
  }

}

@media (max-width: 575px) {
  .partner-benefits {
    padding: 40px 0;
  }

  .partner-benefits .heading-section .order-services h1 {
    font-size: 18px;
    margin-bottom: 10px;
    line-height: 27px;
  }

  .partner-benefits .heading-section .order-services p {
    font-size: 18px;
    margin-bottom: 18px;
    line-height: 21px;
    text-align: center;
  }

  .partner-benefits .body-section {
    grid-template-columns: 174px 174px;
    gap: 10px;
    justify-content: center;
    align-items: center;
  }

  .partner-benefits .body-section .card-main-section {
    padding: 12px;
  }

  .partner-benefits .body-section .card-main-section .heading-section h6 {
    font-size: 15px;
  }

}

@media (max-width: 350px) and (min-width: 320px) {
  .partner-benefits {
    padding: 40px 0;
  }

  .partner-benefits .heading-section .order-services h1 {
    font-size: 18px;
    margin-bottom: 10px;
    line-height: 27px;
  }

  .partner-benefits .heading-section .order-services p {
    font-size: 18px;
    margin-bottom: 18px;
    line-height: 21px;
    text-align: center;
  }

  .partner-benefits .body-section {
    grid-template-columns: 300px;
    gap: 10px;
    justify-content: center;
    align-items: center;
  }

  .partner-benefits .body-section .card-main-section {
    padding: 12px;
  }

  .partner-benefits .body-section .card-main-section .heading-section h6 {
    font-size: 15px;
  }

}
</style>