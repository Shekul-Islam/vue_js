<script setup>
import { Pagination, Navigation, Autoplay } from "swiper/modules";
import { Swiper, SwiperSlide } from 'swiper/vue';
import { ref } from "vue";

import "swiper/css";
import "swiper/css/pagination";
import "swiper/css/navigation";

</script>

<template>



    <div class="client-testimonials">
        <div class="container">
            <div class="blog-heading">
                <h6>Blog Page</h6>
            </div>
            <div class="row">

                <div class="col-xl-9 col-lg-8 ">
                    <div class="order-lg-1 order-sm-2">
                        <div class="testimonial-area">
                            <div class="review-item">
                                <div class="testimonial-heading">
                                    <h6>Blog Topics</h6>
                                </div>

                                <div class="review-text">
                                    <p>Spark Event Solutions Ltd has provided us with cost-effective housekeeping and kitchen staff. Their quick response and commitment to maintaining health and
                                        safety guidelines ensure our guests always have a pleasant experience. Highly recommended!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="order-lg-1 order-sm-2">
                        <div class="testimonial-area">
                            <div class="review-item">
                                <div class="testimonial-heading">
                                    <h6>Blog Topics</h6>
                                </div>

                                <div class="review-text">
                                    <p>Spark Event Solutions Ltd has provided us with cost-effective housekeeping and kitchen staff. Their quick response and commitment to maintaining health and
                                        safety guidelines ensure our guests always have a pleasant experience. Highly recommended!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 ">
                    <div class="order-lg-2 order-sm-1 testimonial-form">
                        <div class="form-heading">
                            <h6>Blog Comments</h6>
                        </div>

                    </div>

                    <div class="order-lg-2 order-sm-1 testimonial-form">
                        <div class="form-heading">
                            <h6>Blog Comments</h6>
                        </div>

                    </div>

                    <div class="order-lg-2 order-sm-1 testimonial-form">
                        <div class="form-heading">
                            <h6>Blog Comments</h6>
                        </div>

                    </div>


                </div>

            </div>
        </div>
    </div>

    <!-- Recent-Post -->
    <!-- Recent-Post -->
    

    <div class="client-testimonials">
        <div class="container">
            <div>

                <div>
                    <div class="testimonial-area"
                        :style="{ background: `linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(/src/assets/image/home/testimonial/testimonial-bg.png) no-repeat center center/cover` }">
                        <div class="testimonial-heading">
                            <h6>Recent Job Post</h6>
                            <p>Pick up your one</p>
                        </div>

                        <div>
                            <swiper :slidesPerView="4" :spaceBetween="20" :loop="true" :autoplay="{ delay: 5000 }" :pagination="{ clickable: true }"
                                :navigation="{ nextEl: '.testimonial-next', prevEl: '.testimonial-prev' }" :modules="[Pagination, Navigation, Autoplay]" class="mySwiper" :breakpoints="{
                                    300: { slidesPerView: 2, spaceBetween: 10 },
                                    575: { slidesPerView: 4, spaceBetween: 10 },
                                    1199: { slidesPerView: 4, spaceBetween: 10 },
                                    1399: { slidesPerView: 4, spaceBetween: 20 },
                                }">

                                <swiper-slide>
                                    <div class="recent-job">
                                        <div class="row job-card">
                                            <div class="job-image-container col-lg-3 col-md-3 col-sm-6">
                                                <img src="https://cdn.pixabay.com/photo/2023/03/14/20/22/office-7853103_1280.jpg" alt="Housekeeping Job"
                                                    class="job-image" />
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 job-info">
                                                <h3 class="job-title">Floor Supervisor</h3>
                                                <p class="job-location">
                                                    <strong>NOVOTEL LONDON EXCEL - 1049</strong> <br />
                                                </p>
                                                <p> London (East) £14.25 p/h, Recognition, Incentives and Awards HC21671</p>
                                                <p> Reference : </p>
                                                <p>Job status: </p>
                                                <p>Last Apply Data:</p>
                                                <router-link :to="{ name: 'career-job-details' }" class="btn apply-btn">Details / Apply</router-link>
                                            </div>
                                        </div>
                                    </div>
                                </swiper-slide>

                                <swiper-slide>
                                    <div class="recent-job">
                                        <div class="row job-card">
                                            <div class="job-image-container col-lg-3 col-md-3 col-sm-6">
                                                <img src="https://cdn.pixabay.com/photo/2024/01/26/22/56/ai-generated-8534841_1280.png" alt="Housekeeping Job"
                                                    class="job-image" />
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 job-info">
                                                <h3 class="job-title">Floor Supervisor</h3>
                                                <p class="job-location">
                                                    <strong>NOVOTEL LONDON EXCEL - 1049</strong> <br />
                                                </p>
                                                <p> London (East) £14.25 p/h, Recognition, Incentives and Awards HC21671</p>
                                                <p> Reference : </p>
                                                <p>Job status: </p>
                                                <p>Last Apply Data:</p>
                                                <router-link :to="{ name: 'career-job-details' }" class="btn apply-btn">Details / Apply</router-link>
                                            </div>
                                        </div>
                                    </div>
                                </swiper-slide>


                                <swiper-slide>
                                    <div class="recent-job">
                                        <div class="row job-card">
                                            <div class="job-image-container col-lg-3 col-md-3 col-sm-6">
                                                <img src="https://cdn.pixabay.com/photo/2024/08/03/10/09/business-8941842_1280.jpg" alt="Housekeeping Job"
                                                    class="job-image" />
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 job-info">
                                                <h3 class="job-title">Floor Supervisor</h3>
                                                <p class="job-location">
                                                    <strong>NOVOTEL LONDON EXCEL - 1049</strong> <br />
                                                </p>
                                                <p> London (East) £14.25 p/h, Recognition, Incentives and Awards HC21671</p>
                                                <p> Reference : </p>
                                                <p>Job status: </p>
                                                <p>Last Apply Data:</p>
                                                <router-link :to="{ name: 'career-job-details' }" class="btn apply-btn">Details / Apply</router-link>
                                            </div>
                                        </div>
                                    </div>
                                </swiper-slide>

                                <swiper-slide>
                                    <div class="recent-job">
                                        <div class="row job-card">
                                            <div class="job-image-container col-lg-3 col-md-3 col-sm-6">
                                                <img src="https://cdn.pixabay.com/photo/2023/03/14/20/22/office-7853103_1280.jpg" alt="Housekeeping Job"
                                                    class="job-image" />
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 job-info">
                                                <h3 class="job-title">Floor Supervisor</h3>
                                                <p class="job-location">
                                                    <strong>NOVOTEL LONDON EXCEL - 1049</strong> <br />
                                                </p>
                                                <p> London (East) £14.25 p/h, Recognition, Incentives and Awards HC21671</p>
                                                <p> Reference : </p>
                                                <p>Job status: </p>
                                                <p>Last Apply Data:</p>
                                                <router-link :to="{ name: 'career-job-details' }" class="btn apply-btn">Details / Apply</router-link>
                                            </div>
                                        </div>
                                    </div>
                                </swiper-slide>

                                <swiper-slide>
                                    <div class="recent-job">
                                        <div class="row job-card">
                                            <div class="job-image-container col-lg-3 col-md-3 col-sm-6">
                                                <img src="https://cdn.pixabay.com/photo/2024/06/03/05/28/ai-generated-8805518_1280.png" alt="Housekeeping Job"
                                                    class="job-image" />
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 job-info">
                                                <h3 class="job-title">Floor Supervisor</h3>
                                                <p class="job-location">
                                                    <strong>NOVOTEL LONDON EXCEL - 1049</strong> <br />
                                                </p>
                                                <p> London (East) £14.25 p/h, Recognition, Incentives and Awards HC21671</p>
                                                <p> Reference : </p>
                                                <p>Job status: </p>
                                                <p>Last Apply Data:</p>
                                                <router-link :to="{ name: 'career-job-details' }" class="btn apply-btn">Details / Apply</router-link>
                                            </div>
                                        </div>
                                    </div>
                                </swiper-slide>

                                <swiper-slide>
                                    <div class="recent-job">
                                        <div class="row job-card">
                                            <div class="job-image-container col-lg-3 col-md-3 col-sm-6">
                                                <img src="https://cdn.pixabay.com/photo/2024/08/03/10/09/business-8941885_1280.jpg" alt="Housekeeping Job"
                                                    class="job-image" />
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 job-info">
                                                <h3 class="job-title">Floor Supervisor</h3>
                                                <p class="job-location">
                                                    <strong>NOVOTEL LONDON EXCEL - 1049</strong> <br />
                                                </p>
                                                <p> London (East) £14.25 p/h, Recognition, Incentives and Awards HC21671</p>
                                                <p> Reference : </p>
                                                <p>Job status: </p>
                                                <p>Last Apply Data:</p>
                                                <router-link :to="{ name: 'career-job-details' }" class="btn apply-btn">Details / Apply</router-link>
                                            </div>
                                        </div>
                                    </div>
                                </swiper-slide>

                                


                               

                                

                            </swiper>

                            <div class="custom-navigation">
                                <button class="testimonial-prev">
                                    <i class="fa-solid fa-chevron-left"></i>
                                </button>

                                <button class="testimonial-next">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </button>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>

<style scoped>
.blog {
    padding: 100px 0;
    background-color: #fafafa;
}

.testimonial-form {
    border: 1px solid #D5D5D5;
    border-radius: 8px;
    background: #FFFFFF 0% 0% no-repeat padding-box;
    padding: 40px 23px;
    margin-top: 50px;
}

.form-heading h6 {
    font: normal normal 300 28px/42px Montserrat;
    text-align: center;
    color: #C29774;
    margin-bottom: 42px;
}

.form-group input {
    border: 1px solid #D5D5D5;
    border-radius: 10px;
    width: 100%;
    padding: 10px 15px;
    margin-bottom: 28px;
    outline: none;
    color: var(--primary-color);
}

.form-group input::placeholder {
    color: #D5D5D5;
    font: normal normal 300 16px/42px Poppins;
}

.form-group input:focus {
    border: 1px solid var(--primary-color);
}

.form-group button {
    width: 100%;
    padding: 10px 15px;
    margin-bottom: 42px;
}

.read-text p {
    font: normal normal 300 16px/24px Poppins;
    color: #464646;
}

.read-text p a {
    text-decoration: none;
    color: #C29774;
}

.read-text p a:hover {
    color: #A57B5D;
}

.testimonial-area {
    padding: 46px 20px;
    height: 100%;
    border-radius: 8px;
    margin-left: 20px;
}

.testimonial-heading h6 {
    text-align: center;
    font: normal normal bold 28px/60px Montserrat;
    color: #C29774;
    text-transform: uppercase;
    line-height: 1;
}

.blog-heading h6 {
    padding: 40px;
    text-align: center;
    font: normal normal bold 28px/60px Montserrat;
    color: #C29774;
    text-transform: uppercase;
    line-height: 1;
}

.testimonial-heading p {
    text-align: center;
    font: normal normal 300 18px/30px Poppins;
    color: #D5D5D5;
    line-height: 1;
    margin-bottom: 30px;
}

.review-item {
    background: #FFFFFF 0% 0% no-repeat padding-box;
    border-radius: 8px;
    padding: 20px 15px;
}

.review-item .designation p {
    text-align: center;
    font: normal normal medium 18px/24px Poppins;
    color: #464646;
    margin-bottom: 0;
}

.review-item .company h6 {
    text-align: center;
    font: normal normal bold 16px/24px Poppins;
    color: #363636;
}

.rating {
    display: flex;
    justify-content: center;
    margin-bottom: 24px;
}

.rating i {
    color: #f3b604;
}

.review-text p {
    text-align: center;
    font: normal normal normal 16px/24px Poppins;
    color: #464646;
}


.custom-navigation button {
    background-color: transparent;
    border: none;
    position: absolute;
    z-index: 99;
    color: #D5D5D5;
    font-size: 30px;
}

.custom-navigation button:hover {
    color: var(--primary-color);
}

.custom-navigation .testimonial-prev {
    bottom: -60px;
    right: 25px;
}

.custom-navigation .testimonial-next {
    bottom: -60px;
    right: 0;
}

@media screen and (max-width: 1399px) {
    .testimonial-form {
        padding: 55px 20px;
    }

    .form-heading h6 {
        font-size: 24px;
        line-height: 1.3;
    }
}

@media screen and (max-width: 1199px) {
    .testimonial-area {
        margin-left: 0;
        padding: 26px 10px;
    }

    .review-text p {
        font-size: 15px;
    }

    .custom-navigation .testimonial-prev {
        bottom: -50px;
        right: 25px;
    }

    .custom-navigation .testimonial-next {
        bottom: -50px;
        right: 0;
    }
}

@media screen and (max-width: 991px) {
    .testimonial-area {
        padding: 40px 20px;
        padding-bottom: 57px;
    }

    .testimonial-form {
        margin-top: 60px;
    }

    .read-text p {
        text-align: center;
    }

    .order-sm-1 {
        padding: 0 !important;
    }

    .form-group button {
        font-size: 16px;
    }
}

@media screen and (max-width: 575px) {

    .client-testimonials .row {
        display: flex !important;
        flex-direction: column;
    }

    .order-sm-2 {
        order: 2 !important;
        margin: 40px 10px 0 10px;
        width: 96%;
    }

    .order-sm-1 {
        order: 1 !important;
        padding: 0;
    }

    .testimonial-area {
        border-radius: 0;
        padding: 22px 17px;
        padding-bottom: 60px;
    }

    .custom-navigation .testimonial-prev {
        bottom: -50px;
        right: 45px;
    }

    .custom-navigation .testimonial-next {
        bottom: -50px;
        right: 20px;
    }

    .testimonial-heading h6 {
        font: normal normal bold 18px/32px Montserrat;
        margin-bottom: 0;
    }

    .testimonial-heading p {
        font: normal normal 300 15px/21px Poppins;
        margin-bottom: 20px;
    }

    .testimonial-form {
        padding: 56px 23px;
    }

    .form-heading h6 {
        font: normal normal 300 28px/42px Montserrat;
    }

    .form-group button {
        font-size: 16px;
    }

    .read-text p {
        margin-bottom: 0;
        text-align: left;
    }

}


/***** Recent-Post *****/
.recent-job{
    display: flex;
    justify-content: center;
    max-width: 280px;
}

.job-card {
    display: flex;
    flex-direction: column; /* Image উপরে, Content নিচে থাকবে */
    background: white;
    border-radius: 10px;
    overflow: hidden;
    margin-bottom: 10px;
    box-shadow: 0px 4px 20px #0000000D;
    align-items: center;
    padding: 10px; /* কমিয়ে দেওয়া হলো */
    width: fit-content; /* শুধুমাত্র content অনুযায়ী width নিবে */
    max-width: 100%; /* Responsive রাখবে */
}

.job-image-container {
    width: fit-content; /* শুধুমাত্র ইমেজের সাইজ অনুযায়ী থাকবে */
    display: flex;
    justify-content: center;
    max-height: 120px;
}

.job-image {
    max-width: 100%;
    object-fit: cover;
    border-radius: 8px;
}

.job-info {
    text-align: center;
    width: fit-content; /* শুধুমাত্র টেক্সট অনুযায়ী জায়গা নিবে */
    padding: 10px; /* অতিরিক্ত padding কমিয়ে দেওয়া হলো */
    font-size: 14px; /* Font size ছোট করা হলো যাতে space কম নেয় */
}



.apply-btn {
    border: 1px solid var(--primary-color);
    color: var(--primary-color);
}

.apply-btn:hover {
    background: var(--primary-color);
    border: 1px solid var(--secondary-color);
    color: var(--secondary-color);
}

/***** Recent-Post *****/


.client-testimonials {
    background: #FAFAFA 0% 0% no-repeat padding-box;
    padding-bottom: 100px;
}

.testimonial-form {
    border: 1px solid #D5D5D5;
    border-radius: 8px;
    background: #FFFFFF 0% 0% no-repeat padding-box;
    padding: 40px 23px;
}

.form-heading h6 {
    font: normal normal 300 28px/42px Montserrat;
    text-align: center;
    color: #C29774;
    margin-bottom: 42px;
}

.form-group input {
    border: 1px solid #D5D5D5;
    border-radius: 10px;
    width: 100%;
    padding: 10px 15px;
    margin-bottom: 28px;
    outline: none;
    color: var(--primary-color);
}

.form-group input::placeholder {
    color: #D5D5D5;
    font: normal normal 300 16px/42px Poppins;
}

.form-group input:focus {
    border: 1px solid var(--primary-color);
}

.form-group button {
    width: 100%;
    padding: 10px 15px;
    margin-bottom: 42px;
}

.read-text p {
    font: normal normal 300 16px/24px Poppins;
    color: #464646;
}

.read-text p a {
    text-decoration: none;
    color: #C29774;
}

.read-text p a:hover {
    color: #A57B5D;
}



.testimonial-heading h6 {
    text-align: center;
    font: normal normal bold 28px/60px Montserrat;
    color: #C29774;
    text-transform: uppercase;
    line-height: 1;
}

.testimonial-heading p {
    text-align: center;
    font: normal normal 300 18px/30px Poppins;
    color: #D5D5D5;
    line-height: 1;
    margin-bottom: 30px;
}

.review-item {
    background: #FFFFFF 0% 0% no-repeat padding-box;
    border-radius: 8px;
    padding: 20px 15px;
}

.review-item .designation p {
    text-align: center;
    font: normal normal medium 18px/24px Poppins;
    color: #464646;
    margin-bottom: 0;
}

.review-item .company h6 {
    text-align: center;
    font: normal normal bold 16px/24px Poppins;
    color: #363636;
}

.rating {
    display: flex;
    justify-content: center;
    margin-bottom: 24px;
}

.rating i {
    color: #f3b604;
}

.review-text p {
    text-align: center;
    font: normal normal normal 16px/24px Poppins;
    color: #464646;
}


.custom-navigation button {
    background-color: transparent;
    border: none;
    position: absolute;
    z-index: 99;
    color: #D5D5D5;
    font-size: 30px;
}

.custom-navigation button:hover {
    color: var(--primary-color);
}

.custom-navigation .testimonial-prev {
    bottom: -60px;
    right: 25px;
}

.custom-navigation .testimonial-next {
    bottom: -60px;
    right: 0;
}

@media screen and (max-width: 1399px) {
    .testimonial-form {
        padding: 55px 20px;
    }

    .form-heading h6 {
        font-size: 24px;
        line-height: 1.3;
    }
}

@media screen and (max-width: 1199px) {
    .testimonial-area {
        margin-left: 0;
        padding: 26px 10px;
    }

    .review-text p {
        font-size: 15px;
    }

    .custom-navigation .testimonial-prev {
        bottom: -50px;
        right: 25px;
    }

    .custom-navigation .testimonial-next {
        bottom: -50px;
        right: 0;
    }
}

@media screen and (max-width: 991px) {
    .testimonial-area {
        padding: 40px 20px;
        padding-bottom: 57px;
    }

    .testimonial-form {
        margin-top: 60px;
    }

    .read-text p {
        text-align: center;
    }

    .order-sm-1 {
        padding: 0 !important;
    }

    .form-group button {
        font-size: 16px;
    }
}

@media screen and (max-width: 575px) {

    .client-testimonials .row {
        display: flex !important;
        flex-direction: column;
    }

    .order-sm-2 {
        order: 2 !important;
        margin: 40px 10px 0 10px;
        width: 96%;
    }

    .order-sm-1 {
        order: 1 !important;
        padding: 0;
    }

    .testimonial-area {
        border-radius: 0;
        padding: 22px 17px;
        padding-bottom: 60px;
    }

    .custom-navigation .testimonial-prev {
        bottom: -50px;
        right: 45px;
    }

    .custom-navigation .testimonial-next {
        bottom: -50px;
        right: 20px;
    }

    .testimonial-heading h6 {
        font: normal normal bold 18px/32px Montserrat;
        margin-bottom: 0;
    }

    .testimonial-heading p {
        font: normal normal 300 15px/21px Poppins;
        margin-bottom: 20px;
    }

    .testimonial-form {
        padding: 56px 23px;
    }

    .form-heading h6 {
        font: normal normal 300 28px/42px Montserrat;
    }

    .form-group button {
        font-size: 16px;
    }

    .read-text p {
        margin-bottom: 0;
        text-align: left;
    }

}
</style>