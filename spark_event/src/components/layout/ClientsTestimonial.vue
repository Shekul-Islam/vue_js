<script setup>
import { Pagination, Navigation, Autoplay } from "swiper/modules";
import { Swiper, SwiperSlide } from 'swiper/vue';
import { ref } from "vue";

import "swiper/css";
import "swiper/css/pagination";
import "swiper/css/navigation";

const bgImg = ref(import.meta.env.VITE_APP_URL);
</script>

<template>
    <div class="client-testimonials">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 order-lg-1 order-sm-2 testimonial-form">
                    <div class="form-heading">
                        <h6>Get Our Latest Updates and Offers!</h6>
                    </div>

                    <div class="form-group">
                        <input type="text" placeholder="Your name here">
                    </div>
                    
                    <div class="form-group">
                        <input type="text" placeholder="Your email here">
                    </div>

                    <div class="form-group">
                        <button class="primary-button1">Subscribe</button>
                    </div>

                    <div class="read-text">
                        <p>We care about your data. Read our 
                            <a href="">privacy policy.</a>
                        </p>
                    </div>
                </div>

                <div class="col-xl-9 col-lg-8 order-lg-2 order-sm-1">
                    <div class="testimonial-area" :style="{ background: `linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(${bgImg}/src/assets/image/home/testimonial/testimonial-bg.png) no-repeat center center/cover`}">
                        <div class="testimonial-heading">
                            <h6>CLIENT'S TESTIMONIAL</h6>
                            <p>What our clients say about us</p>
                        </div>

                        <div class="client-reviews">
                            <swiper 
                                :slidesPerView="2"
                                :spaceBetween="20"
                                :loop="true" 
                                :autoplay="{ delay: 5000 }" 
                                :pagination="{ clickable: true }"
                                :navigation="{ nextEl: '.testimonial-next', prevEl: '.testimonial-prev' }"
                                :modules="[Pagination, Navigation, Autoplay]" class="mySwiper"
                                :breakpoints="{
                                    300 : { slidesPerView: 1, spaceBetween: 10},
                                    575 : { slidesPerView: 2, spaceBetween: 10},
                                    1199 : { slidesPerView: 2, spaceBetween: 10 },
                                    1399 : { slidesPerView: 2, spaceBetween: 20 },
                                }"
                            >
                        
                                <swiper-slide>
                                    <div class="review-item">
                                        <div class="designation">
                                            <p>General Manager</p>
                                        </div>

                                        <div class="company">
                                            <h6>Hilton London</h6>
                                        </div>

                                        <div class="rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star-half-stroke"></i>
                                            <i class="fa-regular fa-star"></i>
                                        </div>

                                        <div class="review-text">
                                            <p>Spark Event Solutions Ltd has provided us with cost-effective housekeeping and kitchen staff. Their quick response and commitment to maintaining health and safety guidelines ensure our guests always have a pleasant experience. Highly recommended!</p>
                                        </div>
                                    </div>
                                </swiper-slide>
                                <swiper-slide>
                                    <div class="review-item">
                                        <div class="designation">
                                            <p>General Manager</p>
                                        </div>

                                        <div class="company">
                                            <h6>Hilton London</h6>
                                        </div>

                                        <div class="rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star-half-stroke"></i>
                                            <i class="fa-regular fa-star"></i>
                                        </div>

                                        <div class="review-text">
                                            <p>Spark Event Solutions Ltd has provided us with cost-effective housekeeping and kitchen staff. Their quick response and commitment to maintaining health and safety guidelines ensure our guests always have a pleasant experience. Highly recommended!</p>
                                        </div>
                                    </div>
                                </swiper-slide>

                                <swiper-slide>
                                    <div class="review-item">
                                        <div class="designation">
                                            <p>General Manager</p>
                                        </div>

                                        <div class="company">
                                            <h6>Hilton London</h6>
                                        </div>

                                        <div class="rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star-half-stroke"></i>
                                            <i class="fa-regular fa-star"></i>
                                        </div>

                                        <div class="review-text">
                                            <p>Spark Event Solutions Ltd has provided us with cost-effective housekeeping and kitchen staff. Their quick response and commitment to maintaining health and safety guidelines ensure our guests always have a pleasant experience. Highly recommended!</p>
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
.client-testimonials{
    background: #FAFAFA 0% 0% no-repeat padding-box;
    padding-bottom: 100px;
}
.testimonial-form{
    border: 1px solid #D5D5D5;
    border-radius: 8px;
    background: #FFFFFF 0% 0% no-repeat padding-box;
    padding: 40px 23px;
}
.form-heading h6{
    font: normal normal 300 28px/42px Montserrat;
    text-align: center;
    color: #C29774;
    margin-bottom: 42px;
}
.form-group input{
    border: 1px solid #D5D5D5;
    border-radius: 10px;
    width: 100%;
    padding: 10px 15px;
    margin-bottom: 28px;
    outline: none;
    color: var(--primary-color);
}
.form-group input::placeholder{
    color: #D5D5D5;
    font: normal normal 300 16px/42px Poppins;
}
.form-group input:focus{
    border: 1px solid var(--primary-color);
}
.form-group button{
    width: 100%;
    padding: 10px 15px;
    margin-bottom: 42px;
}
.read-text p{
    font: normal normal 300 16px/24px Poppins;
    color: #464646;
}
.read-text p a{
    text-decoration: none;
    color: #C29774;
}
.read-text p a:hover{
    color: #A57B5D;
}
.testimonial-area{
    padding: 46px 20px;
    height: 100%;
    border-radius: 8px;
    margin-left: 20px;
}
.testimonial-heading h6{
    text-align: center;
    font: normal normal bold 28px/60px Montserrat;
    color: #C29774;
    text-transform: uppercase;
    line-height: 1;
}
.testimonial-heading p{
    text-align: center;
    font: normal normal 300 18px/30px Poppins;
    color: #D5D5D5;
    line-height: 1;
    margin-bottom: 30px;
}
.review-item{
    background: #FFFFFF 0% 0% no-repeat padding-box;
    border-radius: 8px;
    padding: 20px 15px;
}
.review-item .designation p{
    text-align: center;
    font: normal normal medium 18px/24px Poppins;
    color: #464646;
    margin-bottom: 0;
}
.review-item .company h6{
    text-align: center;
    font: normal normal bold 16px/24px Poppins;
    color: #363636;
}
.rating{
    display: flex;
    justify-content: center;
    margin-bottom: 24px;
}
.rating i{
    color: #f3b604;
}

.review-text p{
    text-align: center;
    font: normal normal normal 16px/24px Poppins;
    color: #464646;
}

/* Swiper js navigation design */
.client-reviews{
    position: relative;
}
.custom-navigation button{
    background-color: transparent;
    border: none;
    position: absolute;
    z-index: 99;
    color: #D5D5D5;
    font-size: 30px;
}

.custom-navigation button:hover{
    color: var(--primary-color);
}

.custom-navigation .testimonial-prev{
    bottom: -60px;
    right: 25px;
}

.custom-navigation .testimonial-next{
    bottom: -60px;
    right: 0;
}

@media screen and (max-width: 1399px) {
    .testimonial-form{
        padding: 55px 20px;
    }
    .form-heading h6{
        font-size: 24px;
        line-height: 1.3;
    }
}

@media screen and (max-width: 1199px) {
    .testimonial-area{
        margin-left: 0;
        padding: 26px 10px;
    }

    .review-text p{
        font-size: 15px;
    }

    .custom-navigation .testimonial-prev{
        bottom: -50px;
        right: 25px;
    }
    
    .custom-navigation .testimonial-next{
        bottom: -50px;
        right: 0;
    }
}

@media screen and (max-width: 991px) {
    .testimonial-area{
        padding: 40px 20px;
        padding-bottom: 57px;
    }
    .testimonial-form{
        margin-top: 60px;
    }
    .read-text p{
        text-align: center;
    }
    .order-sm-1{
        padding: 0 !important;
    }
    .form-group button{
        font-size: 16px;
    }
}

@media screen and (max-width: 575px) {
    
    .client-testimonials .row{
        display: flex !important;
        flex-direction: column;
    }

    .order-sm-2{
        order: 2 !important;
        margin: 40px 10px 0 10px;
        width: 96%;
    }
    .order-sm-1{
        order: 1 !important;
        padding: 0;
    }

    .testimonial-area{
        border-radius: 0;
        padding: 22px 17px;
        padding-bottom: 60px;
    }

    .custom-navigation .testimonial-prev{
        bottom: -50px;
        right: 45px;
    }
    
    .custom-navigation .testimonial-next{
        bottom: -50px;
        right: 20px;
    }
    .testimonial-heading h6{
        font: normal normal bold 18px/32px Montserrat;
        margin-bottom: 0;
    }

    .testimonial-heading p{
        font: normal normal 300 15px/21px Poppins;
        margin-bottom: 20px;
    }

    .testimonial-form{
        padding: 56px 23px;
    }

    .form-heading h6{
        font: normal normal 300 28px/42px Montserrat;
    }

    .form-group button{
        font-size: 16px;
    }
    .read-text p{
        margin-bottom: 0;
        text-align: left;
    }

}
</style>