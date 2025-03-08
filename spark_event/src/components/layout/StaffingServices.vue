<script setup>
import { useRouter } from "vue-router";

const router = useRouter();
</script>

<template>
   <div class="staffing-services" >
    <div class="container">
          <div class="heading">
            <h2 class="title">BESPOKE STAFFING SERVICES</h2>
          <p class="description">
            Our bespoke staffing services provide skilled professionals tailored to fit your unique needs, ensuring both service quality and guest satisfaction. From front desk to back-of-house roles, we align talent with your brand’s standards, supporting seamless operations throughout each department.
          </p>
          </div>
        <div class="service-grid">
          <ul class="items">
            <li class="service-card">Housekeeper</li>
            <li class="service-card">Bartender</li>
            <li class="service-card">Cleaner</li>
            <li class="service-card">Kitchen Porter</li>
            <li class="service-card">Food & Beverage Staff</li>
            <li class="service-card">Electrician</li>
            <li class="service-card">Plumber</li>
            <li class="service-card">Chefs</li>
            <li class="service-card">Janitor</li>
            <li class="service-card">Lawn Mower</li>
            <li class="service-card">Pest Controller</li>
            <li class="service-card">Waiting Staffs</li>
          </ul>
        </div>
        <button class="view-all-btn" @click="router.push({name: 'bespoke-staffing'})">View All Services</button>
    </div>
   </div>
</template>

<style scoped>

.staffing-services{
  background-color: #FAFAFA;
}

.container {
  min-width: 1140px;
  margin: 0 auto;
  text-align: center;
  background-color: var(--secondary-color);
  background-color: #FAFAFA;
}

.heading{
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.title {
  opacity: 1;
  text-align: center;
  letter-spacing: 0px;
  text-transform: uppercase;
  color: var(--primary-color);
  font: normal normal bold 40px/60px Montserrat;
}

.description {
  opacity: 1;
  width: 946px;
  height: 71px;
  letter-spacing: 0px;
  padding: 0px 97px 0px 97px;
  color: var(--tertiary-color);
  font: normal normal normal 16px/24px Poppins;
}

.items {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 1.8rem;
  margin-top: 1.5rem;
  margin-bottom: 2rem;
}

.service-card {
  width: 267px;
  height: 100px;
  display: grid;
  opacity: 1;
  cursor: pointer;
  letter-spacing: 0px;
  border-radius: 8px;
  text-align: center;
  align-items: center;
  padding: 0rem 1.5rem;
  color: var(--primary-color);
  background-color: var(--secondary-color);
  box-shadow: 0px 4px 20px #0000000D;
  font: normal normal bold 18px/24px Poppins;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.service-card:hover {
  transform: translateY(-5px);
  box-shadow: 0px 4px 20px #0000000D;
}

.view-all-btn {
  opacity: 1;
  border: none;
  cursor: pointer;
  margin-bottom: 100px;
  border-radius: 10px;
  text-align: center;
  letter-spacing: 0px;
  padding: 0.75rem 1.5rem;
  color: var(--secondary-color);
  background: #A57B5D 0% 0% no-repeat padding-box;
  transition: background-color 0.3s ease;
  font: normal normal normal 16px/24px Poppins;
}

.view-all-btn:hover {
  background-color: var(--primary-color);
}

/* Responsive Design */





@media (max-width: 1920px) {
    
    .container {
      padding: 0px;
      min-width: auto;
      text-align: center;
    }
    
    .title {
      padding: .5rem 0.5rem;
      color: var(--primary-color);
      text-transform: uppercase;
      font: normal normal bold 40px/60px Montserrat;
    }
    
    .description {
      letter-spacing: 0px;
      padding: 0px 14px 0px 14px;
      color: var(--tertiary-color);
      font: normal normal normal 16px/24px Poppins;
    }
    
    .service-grid {
      gap: 8px;
      padding: 0rem 3.5rem;
      grid-template-columns: repeat(4, 1fr); 
    }
    
    .service-card {
      display: flex;
      width: 267px;
      height: 100px;
      justify-content: center;
      font: normal normal bold 18px/24px Poppins;
    }
    .view-all-btn {
      margin: 0px 0px 35px 0px;
      font: normal normal normal 16px/24px Poppins;
    }
}


@media (max-width: 1440px) {
    
    .container {
      padding: 0px;
      text-align: center;
    }
    
    .title {
      padding: .5rem 0.5rem;
      color: var(--primary-color);
      text-transform: uppercase;
      font: normal normal bold 35px/48px Montserrat;
    }
    
    .description {
      width: 795px;
      height: 100px;
      letter-spacing: 0px;
      padding: 0px 14px 0px 14px;
      color: var(--tertiary-color);
      font: normal normal normal 16px/25px Poppins;
    }
    
    .service-grid {
      gap: 12px;
      padding: 0.0rem 0.5rem;
      grid-template-columns: repeat(4, 1fr); 
    }
    
    .service-card {
      display: flex;
      width: 267px;
      height: 100px;
      justify-content: center;
      font: normal normal bold 17px/24px Poppins;
    }
    .view-all-btn {
      margin: 0px 0px 35px 0px;
      font: normal normal normal 16px/24px Poppins;
    }
}

@media (max-width: 1024px) {
    
    .container {
      padding: 0px;
      min-width: auto;
      text-align: center;
    }
    
    .items {
    display: grid;
    justify-content: center;
    grid-template-columns: repeat(4, 1fr);
    gap: 0.8rem;
    margin-top: 1.5rem;
    margin-bottom: 2rem;
  }

    .title {
      padding: .5rem 0.5rem;
      color: var(--primary-color);
      text-transform: uppercase;
      font: normal normal bold 28px/42px Montserrat;
    }
    
    .description {
      width: 585px;
      height: 88px;
      letter-spacing: 0px;
      padding: 0px 14px 0px 14px;
      color: var(--tertiary-color);
      font: normal normal normal 15px/21px Poppins;
    }
    
   
    .service-grid {
      gap: 8px;
      padding: 0rem 3.5rem;
      grid-template-columns: repeat(4, 1fr); 
    }
    
    .service-card {
      display: flex;
      width: 188px;
      height: 76px;
      justify-content: center;
      font: normal normal bold 16px/22px Poppins;
    }
    .view-all-btn {
      margin: 0px 0px 35px 0px;
      font: normal normal normal 16px/24px Poppins;
    }
}

@media (max-width: 853px) {
    
    .container {
      padding: 0px;
      min-width: auto;
      text-align: center;
    }

  .items {
  display: grid;
  justify-content: center;
  padding-right: 50px;
  grid-template-columns: repeat(4, 1fr);
  gap: 0.5rem;
  margin-top: 1.5rem;
  margin-bottom: 2rem;
}

    .title {
      padding: .5rem 0.5rem;
      color: var(--primary-color);
      text-transform: uppercase;
      font: normal normal bold 28px/42px Montserrat;
    }
    
    .description {
      width: 556px;
      height: 88px;
      letter-spacing: 0px;
      padding: 0px 14px 0px 14px;
      color: var(--tertiary-color);
      font: normal normal normal 15px/21px Poppins;
    }
    
   
    .service-grid {
      padding: 0rem 0.5rem;
      grid-template-columns: repeat(4, 1fr); 
    }
    
    .service-card {
      display: flex;
      width: 175px;
      height: 78px;
      justify-content: center;
      font: normal normal bold 15px/21px Poppins;
    }
    .view-all-btn {
      margin: 0px 0px 35px 0px;
      font: normal normal normal 15px/21px Poppins;
    }
}

@media (max-width: 768px) {
    
    .container {
      padding: 0px;
      min-width: auto;
      text-align: center;
    }

  .items {
  display: grid;
  justify-content: center;
  padding-right: 50px;
  grid-template-columns: repeat(4, 1fr);
  gap: 0.5rem;
  margin-top: 1.5rem;
  margin-bottom: 2rem;
}

    .title {
      padding: .5rem 0.5rem;
      color: var(--primary-color);
      text-transform: uppercase;
      font: normal normal bold 28px/42px Montserrat;
    }
    
    .description {
      width: 556px;
      height: 84px;
      letter-spacing: 0px;
      padding: 0px 14px 0px 14px;
      color: var(--tertiary-color);
      font: normal normal normal 15px/21px Poppins;
    }
    
   
    .service-grid {
      padding: 0rem 0.5rem;
      grid-template-columns: repeat(4, 1fr); 
    }
    
    .service-card {
      display: flex;
      width: 170px;
      height: 74px;
      justify-content: center;
      font: normal normal bold 15px/21px Poppins;
    }
    .view-all-btn {
      margin: 0px 0px 35px 0px;
      font: normal normal normal 15px/21px Poppins;
    }
}



@media (max-width: 540px) {

  .staffing-services{
  padding-top: 20px;
}

    .items {
    display: grid;
    justify-content: center;
    padding-right: 0px;
    grid-template-columns: repeat(3, 1fr);
    gap: 0.5rem;
    margin-top: 1.5rem;
    margin-bottom: 2rem;
  }

    .title {
      padding: .5rem 0.5rem;
      color: var(--primary-color);
      text-transform: uppercase;
      font: normal normal bold 21px/30px Montserrat;
    }
    
    .description {
      width: 385px;
      height: 160px;
      letter-spacing: 0px;
      padding: 0px 14px 0px 14px;
      color: var(--tertiary-color);
      font: normal normal normal 16px/22px Poppins;
    }
    
   
    .service-grid {
      padding: 0rem 0.5rem;
      grid-template-columns: repeat(3, 1fr); 
    }
    
    .service-card {
      display: flex;
      width: 150px;
      height: 80px;
      justify-content: center;
      font: normal normal bold 14px/21px Poppins;
    }
    .view-all-btn {
      margin: 0px 0px 35px 0px;
      font: normal normal normal 14px/20px Poppins;
    }
}


@media (max-width: 430px) {
    .items {
    display: grid;
    justify-content: center;
    padding-right: 20px;
    grid-template-columns: repeat(3, 1fr);
    gap: 0.5rem;
    margin-top: 1.5rem;
    margin-bottom: 2rem;
  }

    .title {
      padding: .5rem 0.5rem;
      color: var(--primary-color);
      text-transform: uppercase;
      font: normal normal bold 20px/29px Montserrat;
    }
    
    .description {
      width: 360px;
      height: 150px;
      letter-spacing: 0px;
      padding: 0px 14px 0px 14px;
      color: var(--tertiary-color);
      font: normal normal normal 15px/21px Poppins;
    }
    
   
    .service-grid {
      padding: 0rem 0.5rem;
      grid-template-columns: repeat(3, 1fr); 
    }
    
    .service-card {
      display: flex;
      width: 121px;
      height: 75px;
      justify-content: center;
      font: normal normal bold 14px/21px Poppins;
    }
    .view-all-btn {
      margin: 0px 0px 35px 0px;
      font: normal normal normal 14px/20px Poppins;
    }
}


@media (max-width: 425px) {
    .items {
    display: grid;
    justify-content: center;
    padding-right: 20px;
    grid-template-columns: repeat(3, 1fr);
    gap: 0.5rem;
    margin-top: 1.5rem;
    margin-bottom: 2rem;
  }

    .title {
      padding: .5rem 0.5rem;
      color: var(--primary-color);
      text-transform: uppercase;
      font: normal normal bold 20px/29px Montserrat;
    }
    
    .description {
      width: 360px;
      height: 150px;
      letter-spacing: 0px;
      padding: 0px 14px 0px 14px;
      color: var(--tertiary-color);
      font: normal normal normal 15px/21px Poppins;
    }
    
   
    .service-grid {
      padding: 0rem 0.5rem;
      grid-template-columns: repeat(3, 1fr); 
    }
    
    .service-card {
      display: flex;
      width: 121px;
      height: 75px;
      justify-content: center;
      font: normal normal bold 14px/21px Poppins;
    }
    .view-all-btn {
      margin: 0px 0px 35px 0px;
      font: normal normal normal 14px/20px Poppins;
    }
}


@media screen and (max-width: 412px) {
  
  .items {
    padding-right: 50px;
  }
  .service-card {
      display: flex;
      width: 110px;
      height: 70px;
      justify-content: center;
      font: normal normal bold 13px/21px Poppins;
    }

}

@media screen and (max-width: 414px) {
  
  .items {
    padding-right: 35px;
  }

}

@media (max-width: 390px) {
    
    .items {
    display: grid;
    justify-content: center;
    padding-right: 30px;
    grid-template-columns: repeat(3, 1fr);
    gap: 0.5rem;
    margin-top: 1.0rem;
    margin-bottom: 2rem;
  }

    .title {
      padding: .5rem 0.5rem;
      color: var(--primary-color);
      text-transform: uppercase;
      font: normal normal bold 18px/27px Montserrat;
    }
    
    .description {
      width: 360px;
      height: 150px;
      letter-spacing: 0px;
      padding: 0px 14px 0px 14px;
      color: var(--tertiary-color);
      font: normal normal normal 15px/21px Poppins;
    }
    
   
    .service-grid {
      padding: 0rem 0.5rem;
      grid-template-columns: repeat(3, 1fr); 
    }
    
    .service-card {
      display: flex;
      width: 115px;
      height: 75px;
      justify-content: center;
      font: normal normal bold 14px/21px Poppins;
    }
    .view-all-btn {
      margin: 0px 0px 35px 0px;
      font: normal normal normal 14px/20px Poppins;
    }
}




@media (max-width: 375px) {
    
    .items {
    display: grid;
    justify-content: center;
    padding-right: 30px;
    grid-template-columns: repeat(3, 1fr);
    gap: 0.5rem;
    margin-top: 1.0rem;
    margin-bottom: 2rem;
  }

    .title {
      padding: .5rem 0.5rem;
      color: var(--primary-color);
      text-transform: uppercase;
      font: normal normal bold 18px/27px Montserrat;
    }
    
    .description {
      width: 360px;
      height: 150px;
      letter-spacing: 0px;
      padding: 0px 14px 0px 14px;
      color: var(--tertiary-color);
      font: normal normal normal 15px/21px Poppins;
    }
    
   
    .service-grid {
      padding: 0rem 0.5rem;
      grid-template-columns: repeat(3, 1fr); 
    }
    
    .service-card {
      display: flex;
      width: 115px;
      height: 75px;
      justify-content: center;
      font: normal normal bold 14px/21px Poppins;
    }
    .view-all-btn {
      margin: 0px 0px 35px 0px;
      font: normal normal normal 14px/20px Poppins;
    }
}



@media (max-width: 360px) {
    
    .items {
    padding-right: 30px;
  }

    .title {
      font: normal normal bold 17px/27px Montserrat;
    }
    
    .description {
      font: normal normal normal 14px/21px Poppins;
    }

    .service-card {
      width: 105px;
      height: 75px;
      font: normal normal bold 13px/21px Poppins;
    }
    .view-all-btn {
      margin: 0px 0px 35px 0px;
      font: normal normal normal 14px/20px Poppins;
    }
}

@media (max-width: 334px) {
    
    .items {
    display: grid;
    justify-content: center;
    padding-right: 20px;
    grid-template-columns: repeat(3, 1fr);
    gap: 0.5rem;
    margin-top: 1.0rem;
    margin-bottom: 2rem;
  }

    .title {
      padding: .5rem 0.5rem;
      color: var(--primary-color);
      text-transform: uppercase;
      font: normal normal bold 17px/26px Montserrat;
    }
    
    .description {
      width: 320px;
      height: 140px;
      letter-spacing: 0px;
      padding: 0px 14px 0px 14px;
      color: var(--tertiary-color);
      font: normal normal normal 14px/19px Poppins;
    }
    
   
    .service-grid {
      padding: 0rem 0.5rem;
      grid-template-columns: repeat(3, 1fr); 
    }
    
    .service-card {
      display: flex;
      width: 90px;
      height: 60px;
      justify-content: center;
      font: normal normal bold 12px/19px Poppins;
    }
    .view-all-btn {
      margin: 0px 0px 35px 0px;
      font: normal normal normal 13px/19px Poppins;
    }
}

@media (max-width: 320px) {
    
    .items {
    display: grid;
    justify-content: center;
    padding-right: 30px;
    grid-template-columns: repeat(3, 1fr);
    gap: 0.5rem;
    margin-top: 1.0rem;
    margin-bottom: 2rem;
  }

    .title {
      padding: .5rem 0.5rem;
      color: var(--primary-color);
      text-transform: uppercase;
      font: normal normal bold 17px/26px Montserrat;
    }
    
    .description {
      width: 335px;
      height: 140px;
      letter-spacing: 0px;
      padding: 0px 14px 0px 14px;
      color: var(--tertiary-color);
      font: normal normal normal 14px/19px Poppins;
    }
    
   
    .service-grid {
      padding: 0rem 0.5rem;
      grid-template-columns: repeat(3, 1fr); 
    }
    
    .service-card {
      display: flex;
      width: 95px;
      height: 65px;
      justify-content: center;
      font: normal normal bold 13px/19px Poppins;
    }
    .view-all-btn {
      margin: 0px 0px 35px 0px;
      font: normal normal normal 13px/19px Poppins;
    }
}

</style>