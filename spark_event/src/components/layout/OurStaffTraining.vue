
<script setup>

</script>

<template>
    <div class="our-staff-training">
        <div class="container">
            <div class="heading-section">
                <h1>OUR STAFF TRAINING</h1>
                <p>Our continuous training ensures staff stay skilled in best practices, safety, and customer engagement, maintaining high standards of service and efficiency. This approach guarantees seamless operations and consistent satisfaction.</p>
            </div>
            <div class="body-section">
                <div class="card-section">
                    <div class="image-section">
                        <img src="/src/assets/image/operations-management/our-staff-training/Training Initial.png" alt="">
                    </div>
                    <div class="heading-section">
                        <h3>INITIAL TRAINING PROGRAMS</h3>
                    </div>
                    <div class="content-section">
                        <p>New operations staff undergo extensive training, covering all facets of efficient management and client interaction, ensuring they’re fully prepared from day one.</p>
                    </div>
                </div>
                <div class="card-section">
                    <div class="image-section">
                        <img src="/src/assets/image/operations-management/our-staff-training/Training Initial.png" alt="">
                    </div>
                    <div class="heading-section">
                        <h3>ONGOING TRAINING SESSIONS</h3>
                    </div>
                    <div class="content-section">
                        <p>We provide ongoing training to keep operations staff informed on the latest management techniques, ensuring high-quality and reliable service in every interaction.</p>
                    </div>
                </div>
                <div class="card-section">
                    <div class="image-section">
                        <img src="/src/assets/image/operations-management/our-staff-training/Training Initial.png" alt="">
                    </div>
                    <div class="heading-section">
                        <h3>SAFETY AND COMPLIANCE</h3>
                    </div>
                    <div class="content-section">
                        <p>Staff are trained in safety protocols and regulatory compliance, ensuring the wellbeing of both guests and employees while upholding operational standards.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>

.our-staff-training{
   padding: 70px 0 100px 0;
}

.our-staff-training .heading-section h1{
    text-align: center;
    color: var(--primary-color);
    margin-bottom: 14px;
    font: normal normal bold 40px/60px Montserrat;
    line-height: 60px;
}

.our-staff-training .heading-section p{
    color: #464646;
    font: normal normal normal 16px/24px Poppins;
    line-height: 30px;
    width: 752px;
    margin: 0 auto 143px auto;
    text-align: center;
}

.our-staff-training .body-section {
    display: grid;
    grid-template-columns: auto auto auto;
    gap: 24px;
}

.our-staff-training .body-section .card-section {
    background: #FFFFFF 0% 0% no-repeat padding-box;
    box-shadow: 0px 3px 6px #00000029;
    border-radius: 8px;
    opacity: 1;
    padding: 22px 26px;
}

.our-staff-training .body-section .card-section:hover .image-section img{
    transform: scale(1.1);
}

.our-staff-training .body-section .card-section .image-section{
    overflow: hidden;
    margin-top: -38%;
}

.our-staff-training .body-section .card-section .image-section img{
    width: 100%;
    object-fit: cover;
    transition: transform 0.3s ease; 
    margin-bottom: 27px;
}

.our-staff-training .body-section .card-section .heading-section h3{
    margin-bottom: 15px;
    font: normal normal 600 18px/27px Montserrat;
    text-transform: uppercase;
    font-size: 16px;
    color: var(--primary-color);
}

.our-staff-training .body-section .card-section .content-section p{
    font: normal normal normal 16px/24px Poppins;
}


@media (max-width: 991px) {

.our-staff-training{
   padding: 50px 0 60px 0;
}

.our-staff-training .heading-section h1{
    font: normal normal bold 28px/42px Montserrat;
    line-height: 42px;
}

.our-staff-training .heading-section p{
    font: normal normal normal 16px/21px Poppins;
    line-height: 32px;
    width: 556px;
}

.our-staff-training .body-section .card-section .image-section img{
    margin-bottom: 23px;
}

.our-staff-training .body-section .card-section .heading-section h3{
    margin-bottom: 10px;
    font: normal normal 600 15px/21px Montserrat;
    line-height: 21px;
}

.our-staff-training .body-section .card-section .heading-section p{
    font: normal normal normal 15px/21px Poppins;
    line-height: 21px;
}

.our-staff-training .heading-section p{
    color: #464646;
    font: normal normal normal 16px/24px Poppins;
    line-height: 30px;
    width: 752px;
    margin: 0 auto 143px auto;
    text-align: center;
}

}


@media (max-width: 767px) {
.our-staff-training{
   padding: 40px 0;
}

.our-staff-training .heading-section h1{
    font: normal normal bold 18px/27px Montserrat;
    line-height: 27px;
    margin-bottom: 12px;
}

.our-staff-training .heading-section p{
    font: normal normal normal 14px/21px Poppins;
    line-height: 21px;
    margin: 0 auto 70px auto;
    width: 356px;
}

.our-staff-training .body-section {
    display: grid;
    grid-template-columns: auto auto;
    gap: 24px;
    row-gap: 80px;
}

}

@media (max-width: 575px) {
    .our-staff-training .heading-section p{
        width: 300px;
    }

}

@media (max-width: 350px) and (min-width: 320px) {
.our-staff-training{
   padding: 30px 0;
}

.our-staff-training .heading-section p{
    width: 300px;
}

.our-staff-training .body-section {
    row-gap: 60px;
}

.our-staff-training .body-section {
    display: grid;
    grid-template-columns: auto auto;
    gap: 14px;
}

.our-staff-training .heading-section p{
    width: 270px;
}

.our-staff-training .body-section .card-section {
    padding: 10px 5px;
}

.our-staff-training .body-section {
        display: grid;
        grid-template-columns: auto auto;
        gap: 5px;
        row-gap: 65px;
    }

}

</style>
