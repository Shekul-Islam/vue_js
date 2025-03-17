
<script setup>
import { onMounted, ref } from "vue";

</script>

<template>
    <div class="our-working-process" :style="{ background: `linear-gradient(#000000B3 , #000000B3), url(/src/assets/image/about/years-of-expreience/Experience-Image.png) no-repeat center center / cover` }">
        <div class="container">
            <div class="heading-section">
                <h1>OUR WORKING PROCESS</h1>
                <p>At Spark Event Solutions Ltd, we ensure efficient, precise hotel operations through a structured approach. From strategy to execution, our tailored services deliver quality, streamline processes, and guarantee client satisfaction. Here’s how we work:</p>
            </div>
            <div class="body-section">
                <div class="card-section">
                    <div class="number-section">
                        <p>1</p>
                    </div>
                    <div class="logo-image-section">
                        <img src="/src/assets/icon/housekeeping-management/our-working-process/consultation.png" alt="">
                    </div>
                    <div class="content-section">
                        <p>Initial Consultation</p>
                    </div>
                </div>
                <div class="card-section">
                    <div class="number-section">
                        <p>2</p>
                    </div>
                    <div class="logo-image-section">
                        <img src="/src/assets/icon/housekeeping-management/our-working-process/assessment.png" alt="">
                    </div>
                    <div class="content-section">
                        <p>Project Assessment</p>
                    </div>
                </div>
                <div class="card-section">
                    <div class="number-section">
                        <p>3</p>
                    </div>
                    <div class="logo-image-section">
                        <img src="/src/assets/icon/housekeeping-management/our-working-process/service.png" alt="">
                    </div>
                    <div class="content-section">
                        <p>Custom Service Plan</p>
                    </div>
                </div>
                <div class="card-section">
                    <div class="number-section">
                        <p>4</p>
                    </div>
                    <div class="logo-image-section">
                        <img src="/src/assets/icon/housekeeping-management/our-working-process/flexible.png" alt="">
                    </div>
                    <div class="content-section">
                        <p>Flexible Schedule</p>
                    </div>
                </div>
                <div class="card-section">
                    <div class="number-section">
                        <p>5</p>
                    </div>
                    <div class="logo-image-section">
                        <img src="/src/assets/icon/housekeeping-management/our-working-process/team.png" alt="">
                    </div>
                    <div class="content-section">
                        <p>Team Development</p>
                    </div>
                </div>
                <div class="card-section">
                    <div class="number-section">
                        <p>6</p>
                    </div>
                    <div class="logo-image-section">
                        <img src="/src/assets/icon/housekeeping-management/our-working-process/quality.png" alt="">
                    </div>
                    <div class="content-section">
                        <p>Strict Quality Control</p>
                    </div>
                </div>
                <div class="card-section">
                    <div class="number-section">
                        <p>7</p>
                    </div>
                    <div class="logo-image-section">
                        <img src="/src/assets/icon/housekeeping-management/our-working-process/feedback.png" alt="">
                    </div>
                    <div class="content-section">
                        <p>Feedback And Adjustment</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.our-working-process{
  padding: 70px 0;
}

.our-working-process .heading-section h1{
    text-align: center;
    color: var(--primary-color);
    margin-bottom: 14px;
    font: normal normal bold 40px/60px Montserrat;
    line-height: 60px;
}

.our-working-process .heading-section p{
    text-align: center;
    color: #ffffff;
    margin: 0 auto 43px auto;
    font: normal normal normal 16px/24px Poppins;
    line-height: 30px;
    width: 752px;
}

.our-working-process .body-section{
    display: grid;
    grid-template-columns: auto auto auto auto auto auto auto;
    gap: 12px;
}

.our-working-process .body-section .card-section{
    background-color: #ffffff;
    padding: 30px 30px 20px 30px;
    border-radius: 8px;
    text-align: center;
}

.our-working-process .body-section .card-section .number-section {
    margin-top: -47%;
}
.our-working-process .body-section .card-section .number-section p{
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 40px; 
    height: 40px; 
    color: #D5D5D5; 
    background-color: #ffffff;
    border-radius: 50%; 
    font: normal normal 900 30px/30px Montserrat;
}

.our-working-process .body-section .card-section .content-section p{
    font: normal normal 600 16px/24px Poppins;
    color: var(--primary-color);
}

@media (max-width: 1399px) {

.our-working-process .body-section{
    display: grid;
    grid-template-columns: auto auto auto auto auto auto;
    column-gap: 12px;
    row-gap: 50px;
}

}

@media (max-width: 1199px) {

.our-working-process .body-section{
    display: grid;
    grid-template-columns: auto auto auto auto auto;
    column-gap: 12px;
    row-gap: 50px;
}

}

@media (max-width: 991px) {

.our-working-process{
   padding: 50px 0;
}

.our-working-process .heading-section h1{
    font: normal normal bold 28px/39px Montserrat;
    line-height: 42px;
}

.our-working-process .heading-section p{
    font: normal normal normal 15px/21px Poppins;
    line-height: 21px;
    width: 556px;
}

.our-working-process .body-section{
    display: grid;
    grid-template-columns: auto auto auto auto ;
    column-gap: 12px;
    row-gap: 50px;
}

.our-working-process .body-section .card-section .content-section p{
    font: normal normal 600 16px/24px Poppins;
}

}


@media (max-width: 767px) {
.our-working-process{
   padding: 30px 0;
}

.our-working-process .heading-section h1{
    font: normal normal bold 24px/39px Montserrat;
    line-height: 42px;
}

.our-working-process .heading-section p{
    font: normal normal normal 14px/21px Poppins;
    line-height: 21px;
    width: 356px;
}

.our-working-process .body-section .card-section{
    background-color: #ffffff;
    padding: 24px 13px 13px 13px;
    border-radius: 8px;
    text-align: center;
}

.our-working-process .body-section{
    display: grid;
    grid-template-columns: auto auto auto ;
    column-gap: 4px;
    row-gap: 34px;
}

.our-working-process .body-section .card-section .content-section p{
    font: normal normal 600 14px/21px Poppins;
}

.our-working-process .body-section .card-section .number-section {
    margin-top: -33%;
}

}

@media (max-width: 390px) and (min-width: 320px) {

.our-working-process .body-section .card-section .number-section {
    margin-top: -45%;
}

}

@media (max-width: 350px) and (min-width: 320px) {
    .our-working-process .heading-section p {
        width: 300px;
    }

    .our-working-process .heading-section h1{
        line-height: 36px;
    }

    .our-working-process .body-section .card-section {
        padding: 21px 5px 5px 5px;
    }
    .our-working-process .body-section .card-section .content-section p{
        font: normal normal 600 13px / 21px Poppins;
    }

}

</style>
