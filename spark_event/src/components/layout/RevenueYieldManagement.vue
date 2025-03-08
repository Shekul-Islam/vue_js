<script setup>

</script>

<template>
  <div class="partner-benefits">
    <div class="container">
      <div class="heading-section">
        <div class="order-services">
          <h1>REVENUE AND YIELD MANAGEMENT</h1>
          <p>Our Revenue & Yield Management services maximize profitability through pricing strategies, inventory control, and market analysis. We use data-driven insights to optimize revenue streams
            and adjust strategies for growth. With forecasting and reporting, we ensure sustainable success in a competitive market.</p>
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
              <h6>PRICING STRATEGY DEVELOPMENT</h6>
            </div>
            <div class="paragraph-section">
              <p>Creating dynamic pricing models based on market trends, demand forecasting, and competitor analysis to maximize revenue and maintain a competitive edge.</p>
            </div>
          </div>

          <div class="card-main-section">
            <div class="image-section">
              <img src="@/assets/icon/home/partners-benefits/vision_3040420.png" alt="Hotel Operations Management">
            </div>
            <hr class="underline"><br>

            <div class="heading-section">
              <h6>INVENTORY MANAGEMENT</h6>
            </div>
            <div class="paragraph-section">
              <p>Efficiently managing room and service availability while analyzing occupancy patterns to optimize occupancy rates and diversify revenue streams across different segments.</p>
            </div>
          </div>

          <div class="card-main-section">
            <div class="image-section">
              <img src="@/assets/icon/home/partners-benefits/generating_11778256.png" alt="Hotel Operations Management">
            </div>
            <hr class="underline"><br>

            <div class="heading-section">
              <h6>PERFORMANCE ANALYTICS</h6>
            </div>
            <div class="paragraph-section">
              <p>Analyzing financial data and key performance indicators (KPIs) to identify areas for improvement, enhancing revenue strategies and overall business performance.</p>
            </div>
          </div>

          <div class="card-main-section">
            <div class="image-section">
              <img src="@/assets/icon/home/partners-benefits/reliability_16912752.png" alt="Hotel Operations Management">
            </div>
            <hr class="underline"><br>

            <div class="heading-section">
              <h6>MARKET SEGMENTATION</h6>
            </div>
            <div class="paragraph-section">
              <p>Identifying and targeting distinct customer segments to tailor pricing and promotions effectively, ensuring that offerings meet varied customer preferences and drive sales.</p>
            </div>
          </div>

          <div class="card-main-section">
            <div class="image-section">
              <img src="@/assets/icon/home/partners-benefits/training_12650135.png" alt="Hotel Operations Management">
            </div>
            <hr class="underline"><br>

            <div class="heading-section">
              <h6>FORECASTING & REPORTING</h6>
            </div>
            <div class="paragraph-section">
              <p>Providing accurate revenue forecasts and detailed performance reports to guide strategic decision-making, facilitate operational adjustments, and support long-term planning efforts.</p>
            </div>
          </div>

          <div class="card-main-section">
            <div class="image-section">
              <img src="@/assets/icon/home/partners-benefits/optimization_16139806.png" alt="Hotel Operations Management">
            </div>
            <hr class="underline"><br>

            <div class="heading-section">
              <h6>COMPETITIVE ANALYSIS</h6>
            </div>
            <div class="paragraph-section">
              <p>Continuously monitoring competitor pricing strategies, promotional tactics, and market positioning to inform strategic adjustments and maintain a competitive edge in a dynamic market.</p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</template>


<style scoped>
.card-section {
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
  border: none;
  /* ডিফল্ট বর্ডার রিমুভ */
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