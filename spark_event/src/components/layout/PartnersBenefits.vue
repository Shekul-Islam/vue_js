<script setup>

</script>

<template>
    <div class="partner-benefits">
        <div class="container">
            <div class="heading-section">
                <div class="order-services">
                    <h1>PARTNER'S BENEFITS</h1>
                    <p>What Special Benefits Our Partners Get</p>
                </div>
            </div>
            <div class="body-section">
                <div class="card-main-section">
                    <div class="image-section">
                        <img src="@/assets/icon/home/partners-benefits/money_1572396.png" alt="Hotel Operations Management">
                    </div>
                    <div class="heading-section">
                        <h6>EFFICIENT RESOURCE MANAGEMENT</h6>
                    </div>
                    <div class="paragraph-section">
                        <p>Efficiently handle operations management, staffing, and HR to ensure exceptional guest satisfaction.</p>
                    </div>
                </div>
                <div class="card-main-section">
                    <div class="image-section">
                        <img src="@/assets/icon/home/partners-benefits/vision_3040420.png" alt="Hotel Operations Management">
                    </div>
                    <div class="heading-section">
                        <h6>ADAPTIVE CHANGED MINDSET</h6>
                    </div>
                    <div class="paragraph-section">
                        <p>We instill adaptability and a customer-first mindset, ensuring proactive service and client satisfaction.</p>
                    </div>
                </div>
                <div class="card-main-section">
                    <div class="image-section">
                        <img src="@/assets/icon/home/partners-benefits/generating_11778256.png" alt="Hotel Operations Management">
                    </div>
                    <div class="heading-section">
                        <h6>INNOVATIVE DYNAMIC SOLUTION</h6>
                    </div>
                    <div class="paragraph-section">
                        <p>Our hotel management solutions adapt to industry changes, ensuring flexible and efficient operations.</p>
                    </div>
                </div>
                <div class="card-main-section">
                    <div class="image-section">
                        <img src="@/assets/icon/home/partners-benefits/reliability_16912752.png" alt="Hotel Operations Management">
                    </div>
                    <div class="heading-section">
                        <h6>TOP-NOTCH SERVICE QUALITY</h6>
                    </div>
                    <div class="paragraph-section">
                        <p>We ensure high standards through performance reviews, feedback, and strict quality inspections.</p>
                    </div>
                </div>
                <div class="card-main-section">
                    <div class="image-section">
                        <img src="@/assets/icon/home/partners-benefits/training_12650135.png" alt="Hotel Operations Management">
                    </div>
                    <div class="heading-section">
                        <h6>HIGHLY TRAINED PROFESSIONALS</h6>
                    </div>
                    <div class="paragraph-section">
                        <p>Our staff undergo rigorous training to deliver exceptional service and enhance your hotel’s reputation.</p>
                    </div>
                </div>
                <div class="card-main-section">
                    <div class="image-section">
                        <img src="@/assets/icon/home/partners-benefits/optimization_16139806.png" alt="Hotel Operations Management">
                    </div>
                    <div class="heading-section">
                        <h6>UNMATCHED COST-EFFECTIVENESS</h6>
                    </div>
                    <div class="paragraph-section">
                        <p>Outsourcing staffing lets you focus on operations, saving on recruitment while ensuring staff meet your hotel’s needs.</p>
                    </div>
                </div>
                <div class="card-main-section">
                    <div class="image-section">
                        <img src="@/assets/icon/home/partners-benefits/insurance_18067911.png" alt="Hotel Operations Management">
                    </div>
                    <div class="heading-section">
                        <h6>100% SATISFACTION GUARANTEED</h6>
                    </div>
                    <div class="paragraph-section">
                        <p>Our services guarantee satisfaction, delivering staffing solutions that exceed expectations and ensure great service.</p>
                    </div>
                </div>
                <div class="card-main-section">
                    <div class="image-section">
                        <img src="@/assets/icon/home/partners-benefits/reliability_10374492.png" alt="Hotel Operations Management">
                    </div>
                    <div class="heading-section">
                        <h6>RELIABILITY & CONSISTENCY</h6>
                    </div>
                    <div class="paragraph-section">
                        <p>Our team ensures quality, efficiency, and professionalism, with staff on short notice. Count on us for reliable staffing.</p>
                    </div>
                </div>
                <div class="card-main-section">
                    <div class="image-section">
                        <img src="@/assets/icon/home/partners-benefits/health-insurance_18612532.png" alt="Hotel Operations Management">
                    </div>
                    <div class="heading-section">
                        <h6>HEALTH & SAFETY COMPLIANCE</h6>
                    </div>
                    <div class="paragraph-section">
                        <p>Our team is trained in food and fire safety, ensuring hygiene standards and compliance.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>


<style scoped>
.partner-benefits{
    padding: 100px 0;
    background-color: #FFFFFF;
}

.partner-benefits .heading-section .order-services h1{
    text-align: center;
    color: var(--primary-color);
    margin-bottom: 14px;
    font: normal normal bold 40px/60px Montserrat;
    line-height: 60px;
}

.partner-benefits .heading-section .order-services p{
    text-align: center;
    color: #464646;
    margin-bottom: 36px;
    font: normal normal 300 20px/30px Poppins;
    line-height: 30px;

}

.partner-benefits .body-section{
   display: grid;
   grid-template-columns: repeat(3, 1fr);
   gap: 20px;
}

.partner-benefits .body-section .card-main-section{
    background: #FAFAFA 0% 0% no-repeat padding-box;
    box-shadow: 0px 4px 20px #0000000D;
    border: 1px solid #D5D5D5;
    padding: 22px;
    border-radius: 10px;
}

.partner-benefits .body-section .card-main-section:hover .image-section img{
    transform: scale(1.1);
    transition: all 0.3s ease;
}

.partner-benefits .body-section .card-main-section .image-section img{
    width: 90px;
    margin-bottom: 24px;
    transform: scale(1);
    transition: all 0.3s ease;
}

.partner-benefits .body-section .card-main-section .heading-section h6{
    margin-bottom: 14px;
    font: normal normal bold 16px/24px Montserrat;
    text-transform: uppercase;
    font-size: 16px;
    color: var(--primary-color);
}

.partner-benefits .body-section .card-main-section .paragraph-section p{
    font: normal normal normal 16px/24px Poppins;
    font-size: 16px;
    color: #363636;
    text-align: left;
    line-height: 24px;
}

@media (max-width: 991px) {
.partner-benefits{
    padding: 60px 0;
}

.partner-benefits .heading-section .order-services h1{
    font-size: 28px;
    margin-bottom: 12px;
}

.partner-benefits .heading-section .order-services p{
    font-size: 18px;
    margin-bottom: 28px;
}

.partner-benefits .body-section{
   grid-template-columns: 229px 229px 229px;
   gap: 8.5px;
   padding: 10px;
}

.partner-benefits .body-section .card-main-section .heading-section h6{
    font-size: 15px;
}

}


@media (max-width: 767px) {
.partner-benefits{
    padding: 40px 0;
}

.partner-benefits .heading-section .order-services h1{
    font-size: 28px;
    margin-bottom: 10px;
    line-height: 27px;
}

.partner-benefits .heading-section .order-services p{
    font-size: 18px;
    margin-bottom: 18px;
    line-height: 21px;
    text-align: center;
}

.partner-benefits .body-section{
   grid-template-columns: 250px 250px;
   gap: 8.5px;
   padding: 10px;
}

.partner-benefits .body-section .card-main-section{
    padding: 12px;
}

.partner-benefits .body-section .card-main-section .heading-section h6{
    font-size: 15px;
}

}

@media (max-width: 575px) {
.partner-benefits{
    padding: 40px 0;
}

.partner-benefits .heading-section .order-services h1{
    font-size: 18px;
    margin-bottom: 10px;
    line-height: 27px;
}

.partner-benefits .heading-section .order-services p{
    font-size: 18px;
    margin-bottom: 18px;
    line-height: 21px;
    text-align: center;
}

.partner-benefits .body-section{
   grid-template-columns: 174px 174px;
   gap: 10px;
   justify-content: center;
   align-items: center;
}
.partner-benefits .body-section .card-main-section{
    padding: 12px;
}

.partner-benefits .body-section .card-main-section .heading-section h6{
    font-size: 15px;
}

}

@media (max-width: 350px) and (min-width: 320px) {
.partner-benefits{
    padding: 40px 0;
}

.partner-benefits .heading-section .order-services h1{
    font-size: 18px;
    margin-bottom: 10px;
    line-height: 27px;
}

.partner-benefits .heading-section .order-services p{
    font-size: 18px;
    margin-bottom: 18px;
    line-height: 21px;
    text-align: center;
}

.partner-benefits .body-section{
   grid-template-columns: 300px;
   gap: 10px;
   justify-content: center;
   align-items: center;
}
.partner-benefits .body-section .card-main-section{
    padding: 12px;
}

.partner-benefits .body-section .card-main-section .heading-section h6{
    font-size: 15px;
}

}

</style>