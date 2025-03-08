<script setup>

</script>

<template>
  <div class="our-staffing-process">
    <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div class="heading-section">
                <h1>OUR STAFFING PROCESS</h1>
            </div>
            <div class="body-section">
              <div class="card-section">
                <h3>RECRUITMENT</h3>
                <p>In the UK recruitment process, it is essential to confirm a job applicant’s right to work by obtaining UKVI’s acceptable documents, conducting a share code check, and making and retaining copies of these documents.</p>
              </div>
              <div class="card-section">
                <h3>TRAINING</h3>
                <p>All staff undergo comprehensive training tailored to your hotel’s standards and procedures, ensuring seamless integration and high-quality service delivery.</p>
              </div>
              <div class="card-section">
                <h3>RIGHT TO WORK</h3>
                <p>In the UK recruitment process, it is essential to confirm a job applicant’s right to work by obtaining UKVI’s acceptable documents, conducting a share code check, and making and retaining copies of these documents.</p>
              </div>
              <div class="card-section">
                <h3>REFERENCING</h3>
                <p>we conduct background checks when hiring staff. Our recruitment process involves discussing candidates’ previous work experiences with their recruiter and understanding their contributions to the workplace.</p>
              </div>
              <div class="card-section">
                <h3>ONBOARDING</h3>
                <p>Our onboarding process includes orientation on your specific policies, procedures, and culture to ensure staff are fully prepared to contribute from day one.</p>
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="image-section">
              <img src="@/assets/image/about/our-staffing-process/cleaner.png" alt="staffing-process">
            </div>
            <div class="heading-section">
              <h3>SERVICE IMPLEMENTATION PLAN</h3>
            </div>
            <div class="content-section">
                <div class="main-section">
                    <div class="left-section">
                    <img src="@/assets/image/about/our-staffing-process/check-circle.png" alt="">
                  </div>
                  <div class="right-section">
                    <p>We begin with a thorough consultation to understand your specific staffing needs and requirements.</p>
                  </div>
                </div>
                <div class="main-section">
                    <div class="left-section">
                    <img src="@/assets/image/about/our-staffing-process/check-circle.png" alt="">
                  </div>
                  <div class="right-section">
                    <p>Based on your needs, we select and train the appropriate staff to ensure they meet your standards.</p>
                  </div>
                </div>
                <div class="main-section">
                    <div class="left-section">
                    <img src="@/assets/image/about/our-staffing-process/check-circle.png" alt="">
                  </div>
                  <div class="right-section">
                    <p>Staff are deployed to your hotel, ready to perform their duties efficiently and effectively.</p>
                  </div>
                </div>
                <div class="main-section">
                    <div class="left-section">
                    <img src="@/assets/image/about/our-staffing-process/check-circle.png" alt="">
                  </div>
                  <div class="right-section">
                    <p>We provide ongoing support and management to ensure continuous high performance and satisfaction.</p>
                  </div>
                </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</template>


<style  scoped>

.our-staffing-process{
    background: #FAFAFA;
    padding: 100px 0;
}

.our-staffing-process .heading-section h1{
    color: var(--primary-color);
    margin-bottom: 14px;
    font: normal normal bold 40px/60px Montserrat;
    line-height: 60px;
}

.our-staffing-process .body-section .card-section{
    margin-top: 15px;
    padding: 15px 22px;
    background: #FFFFFF;
}

.our-staffing-process .body-section .card-section h3{
  text-align: left;
  font: normal normal bold 18px/27px Montserrat;
  letter-spacing: 0px;
  color: var(--primary-color);
  text-transform: uppercase;
  line-height: 27px;
  margin-bottom: 10px;
}

.our-staffing-process .body-section .card-section p{
  text-align: left;
  font: normal normal normal 16px/24px Poppins;
  letter-spacing: 0px;
  color: #363636;
  line-height: 24px;
}

.our-staffing-process .heading-section h3{
    color: var(--primary-color);
    margin-bottom: 14px;
    font: normal normal bold 25px/39px Montserrat;
    line-height: 39px;
    margin: 22px 0 16px 0;
}

.our-staffing-process .content-section{
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.our-staffing-process .content-section .main-section{
    display: flex;
    gap: 15px;
    align-items: center;
}

.our-staffing-process .content-section .right-section p{
  text-align: left;
  font: normal normal normal 16px/24px Poppins;
  letter-spacing: 0px;
  color: #464646;
  padding-right:70px;
  padding-bottom: 10px;
  position: relative;
}

.our-staffing-process .content-section .right-section p::after{
    content: '';
    position: absolute;
    bottom: -8%;
    width: 83%;
    height: 2%;
    background-color: var(--primary-color);
    left: 0;
}


@media (max-width: 991px) {

.our-staffing-process{
   padding: 60px 0;
}

.our-staffing-process .heading-section h1{
    font: normal normal bold 28px/27px Montserrat;
    line-height: 42px;
    margin-bottom: 28px;
}

.our-staffing-process .body-section .card-section h3{
  font: normal normal bold 16px/24px Montserrat;
  line-height: 24px;
}

.our-staffing-process .body-section .card-section p{
  font: normal normal normal 15px/21px Poppins;
  line-height: 21px;
}

.our-staffing-process .image-section img{
  width: 253px;
  height: 168px;
  margin-bottom: 12px;
}

.our-staffing-process .heading-section h3{
  font: normal normal bold 15px/21px Montserrat;
  line-height: 21px;
  margin-bottom: 18px;
}

.our-staffing-process .content-section .right-section p{
  font: normal normal normal 15px/21px Poppins;
  line-height: 21px;
  padding-right: 30px;
}

}


@media (max-width: 767px) {
.our-staffing-process{
   padding: 40px 0;
}

.our-staffing-process .heading-section h1{
    font: normal normal bold 18px/27px Montserrat;
    line-height: 27px;
    margin-bottom: 18px;
}

.our-staffing-process .body-section .card-section h3{
  font: normal normal bold 15px/24px Montserrat;
  line-height: 23px;
  margin-bottom: 5px;
}

.our-staffing-process .body-section .card-section p{
  font: normal normal normal 14px/21px Poppins;
  line-height: 21px;
}

.our-staffing-process .body-section .card-section{
    padding: 10px 25px;
    margin-bottom: 40px;
}

.our-staffing-process .image-section img{
  width: 356px;
  height: 238px;
  margin-bottom: 0px;
}

.our-staffing-process .heading-section h3{
  font: normal normal bold 15px/21px Montserrat;
  line-height: 21px;
  margin: 0px 0 18px 10px;
}

}

@media (max-width: 575px) {


}

@media (max-width: 350px) and (min-width: 320px) {
  .our-staffing-process .body-section .card-section {
    padding: 10px 25px;
    margin-bottom: 20px;
}

.our-staffing-process .image-section img {
      width: 284px; 
      height: auto;
      margin-bottom: 0px;
    }

}

</style>