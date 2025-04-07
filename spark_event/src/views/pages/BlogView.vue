<script setup>
import { Pagination, Navigation, Autoplay } from "swiper/modules";
import { Swiper, SwiperSlide } from 'swiper/vue';
import { ref } from "vue";

import "swiper/css";
import "swiper/css/pagination";
import "swiper/css/navigation";

</script>

<template>



    <div class="client-blogs">
        <div class="container">
            <div class="row">

                <div class="col-xl-9 col-lg-8 ">
                    <div class="order-lg-1 order-sm-2">
                        <div class="blog-area">
                            <img class="blog-image" src="https://cdn.pixabay.com/photo/2016/07/14/08/25/office-1516329_960_720.jpg" alt="">
                            <div class="blog-item">
                                <div class="blog-heading">
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

                <div class="col-xl-3 col-lg-4 side-blog">
                    <div class="order-lg-2 order-sm-1 blog-form">
                        <div class="form-heading">
                            <h6>Find Blogs</h6>
                        </div>

                        <div>
                            <input type="text" class="search-input" placeholder="Search...">
                            <button class="blog-search">Search</button>
                        </div>

                    </div>

                    <div class="order-lg-2 order-sm-1 blog-form">
                        <div class="form-heading">
                            <h6>Categories</h6>
                        </div>

                    </div>

                    <div class="order-lg-2 order-sm-1 blog-form">
                        <div class="form-heading">
                            <h6>Archives</h6>
                        </div>

                    </div>


                </div>

            </div>

            <div class="row">
                <div class="col-xl-9 col-lg-8">
                    <div class=" nav-links">
                <div class="nav-previous"><a title="How to Find Good Hosting? (Hosting Configuration Factors)" href="" rel="prev"><span
                            class="ast-left-arrow">←</span> Previous Post</a></div>
                <div class="nav-next"><a title="Best Digital Marketing Agency in Bangladesh" href="" rel="next">Next Post <span
                            class="ast-right-arrow">→</span></a></div>
            </div>
                </div>
           </div>

        </div>
    </div>

    

    <!-- Recent-Post -->
    <!-- Recent-Post -->


    <div class="client-blogs">
        <div class="container">
            <div class="row">

                <div class="col-xl-9 col-lg-8">
                    <div class="blog-heading">
                        <h6>Recent Job Post</h6>

                    </div>
                    <div class="recent-jobpost"
                        :style="{ background: `linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(/src/assets/image/home/blog/blog-bg.png) no-repeat center center/cover` }">

                        <div>
                            <swiper :slidesPerView="4" :spaceBetween="20" :loop="true" :autoplay="{ delay: 5000 }" :navigation="{ nextEl: '.blog-next', prevEl: '.blog-prev' }"
                                :modules="[Pagination, Navigation, Autoplay]" class="mySwiper" :breakpoints="{
                                    300: { slidesPerView: 2, spaceBetween: 10 },
                                    575: { slidesPerView: 4, spaceBetween: 10 },
                                    1199: { slidesPerView: 4, spaceBetween: 10 },
                                    1399: { slidesPerView: 4, spaceBetween: 20 },
                                }">

                                <swiper-slide>
                                    <div class="recent-job">
                                        <div class="row job-card">
                                            <div class="job-image-container col-lg-3 col-md-3 col-sm-6">
                                                <img src="https://cdn.pixabay.com/photo/2023/03/14/20/22/office-7853103_1280.jpg" alt="Housekeeping Job" class="job-image" />
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 job-info">
                                                <h3 class="job-title">Floor Supervisor</h3>
                                                <p class="job-location">
                                                    <small>NOVOTEL LONDON EXCEL - 1049</small> <br />
                                                </p>
                                                <router-link :to="{ name: 'career-job-details' }" class="btn apply-btn">Details / Apply</router-link>
                                            </div>
                                        </div>
                                    </div>
                                </swiper-slide>

                                <swiper-slide>
                                    <div class="recent-job">
                                        <div class="row job-card">
                                            <div class="job-image-container col-lg-3 col-md-3 col-sm-6">
                                                <img src="https://cdn.pixabay.com/photo/2024/01/26/22/56/ai-generated-8534841_1280.png" alt="Housekeeping Job" class="job-image" />
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 job-info">
                                                <h3 class="job-title">Floor Supervisor</h3>
                                                <p class="job-location">
                                                    <small>NOVOTEL LONDON EXCEL - 1049</small> <br />
                                                </p>
                                                <router-link :to="{ name: 'career-job-details' }" class="btn apply-btn">Details / Apply</router-link>
                                            </div>
                                        </div>
                                    </div>
                                </swiper-slide>


                                <swiper-slide>
                                    <div class="recent-job">
                                        <div class="row job-card">
                                            <div class="job-image-container col-lg-3 col-md-3 col-sm-6">
                                                <img src="https://cdn.pixabay.com/photo/2024/08/03/10/09/business-8941842_1280.jpg" alt="Housekeeping Job" class="job-image" />
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 job-info">
                                                <h3 class="job-title">Floor Supervisor</h3>
                                                <p class="job-location">
                                                    <small>NOVOTEL LONDON EXCEL - 1049</small> <br />
                                                </p>
                                                <router-link :to="{ name: 'career-job-details' }" class="btn apply-btn">Details / Apply</router-link>
                                            </div>
                                        </div>
                                    </div>
                                </swiper-slide>

                                <swiper-slide>
                                    <div class="recent-job">
                                        <div class="row job-card">
                                            <div class="job-image-container col-lg-3 col-md-3 col-sm-6">
                                                <img src="https://cdn.pixabay.com/photo/2023/03/14/20/22/office-7853103_1280.jpg" alt="Housekeeping Job" class="job-image" />
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 job-info">
                                                <h3 class="job-title">Floor Supervisor</h3>
                                                <p class="job-location">
                                                    <small>NOVOTEL LONDON EXCEL - 1049</small> <br />
                                                </p>
                                                <router-link :to="{ name: 'career-job-details' }" class="btn apply-btn">Details / Apply</router-link>
                                            </div>
                                        </div>
                                    </div>
                                </swiper-slide>

                                <swiper-slide>
                                    <div class="recent-job">
                                        <div class="row job-card">
                                            <div class="job-image-container col-lg-3 col-md-3 col-sm-6">
                                                <img src="https://cdn.pixabay.com/photo/2024/06/03/05/28/ai-generated-8805518_1280.png" alt="Housekeeping Job" class="job-image" />
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 job-info">
                                                <h3 class="job-title">Floor Supervisor</h3>
                                                <p class="job-location">
                                                    <small>NOVOTEL LONDON EXCEL - 1049</small> <br />
                                                </p>
                                                <router-link :to="{ name: 'career-job-details' }" class="btn apply-btn">Details / Apply</router-link>
                                            </div>
                                        </div>
                                    </div>
                                </swiper-slide>

                                <swiper-slide>
                                    <div class="recent-job">
                                        <div class="row job-card">
                                            <div class="job-image-container col-lg-3 col-md-3 col-sm-6">
                                                <img src="https://cdn.pixabay.com/photo/2024/08/03/10/09/business-8941885_1280.jpg" alt="Housekeeping Job" class="job-image" />
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 job-info">
                                                <h3 class="job-title">Floor Supervisor</h3>
                                                <p class="job-location">
                                                    <small>NOVOTEL LONDON EXCEL - 1049</small> <br />
                                                </p>
                                                <router-link :to="{ name: 'career-job-details' }" class="btn apply-btn">Details / Apply</router-link>
                                            </div>
                                        </div>
                                    </div>
                                </swiper-slide>

                            </swiper>

                            <!-- <div class="custom-navigation">
                                <button class="blog-prev">
                                    <i class="fa-solid fa-chevron-left"></i>
                                </button>

                                <button class="blog-next">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </button>
                            </div> -->

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="blog-comment">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8 ">
                    <div class="order-lg-1 order-sm-2">
                        <div class="comment-area">
                            <div class="review-item">
                                <h4>Leave a comment</h4>
                                <p>Your email address will not be published. Required fields are marked *</p>

                                <textarea class="comment-field input-field" id="comment" name="comment" placeholder="Type here.." cols="45" rows="8" aria-required="true"></textarea>

                                <div class="user-text">
                                    <input class="user-info input-field" type="text" placeholder="Name*">
                                    <input class="user-info input-field" type="text" placeholder="Email*">
                                    <input class="user-info input-field" type="text" placeholder="Website">
                                </div>

                                <div class="check-mark">
                                    <input type="checkbox">
                                    <p>Save my name, email, and website in this browser for the next time I comment.</p>
                                </div>
                                <button type="submit" class="btn-comment">Post Comment</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.blog-image {
    max-width: 100%;
}


.blog-search {
    padding: 5px 8px;
    border-radius: 5px;
    background: var(--secondary-color);
    color: var(--primary-color);
    border: 1px solid var(--primary-color);
}


.blog-search:hover {
    background: var(--primary-color);
    color: var(--secondary-color);
    box-shadow: 0px 4px 20px #0000000D;
}

.search-input {
    padding: 5px 8px;
    border-radius: 5px;
    margin-right: 3px;
    background: var(--secondary-color);
    color: var(--primary-color);
    border: 1px solid var(--primary-color);
}

.search-input:focus {
    border-color: rgb(179, 179, 179) !important;
    box-shadow: 0 0 1px rgba(119, 119, 119, 0.979) !important;
    outline: none !important;
}

.side-blog {
    margin-top: 40px;
}

.blog {
    padding: 100px 0;
    background-color: #fafafa;
}

.blog-form {
    display: grid;
    justify-content: center;
    border: 1px solid #D5D5D5;
    border-radius: 8px;
    background: #FFFFFF 0% 0% no-repeat padding-box;
    padding: 20px 13px 40px 13px;
    margin-top: 40px;
}

.form-heading h6 {
    font: normal normal 300 28px/42px Montserrat;
    text-align: center;
    color: #C29774;
    margin-bottom: 15px;
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

.blog-area {
    padding: 80px 0px 40px 0px;
    height: 75%;
    border-radius: 8px;
}

.blog-heading h6 {
    text-align: center;
    font: normal normal bold 28px/60px Montserrat;
    color: #C29774;
    text-transform: uppercase;
    line-height: 1;
    margin: 40px 0 30px 0;
}


.review-item {
    background: #FFFFFF 0% 0% no-repeat padding-box;
    border-radius: 8px;
    padding: 30px 25px;
    margin-top: 70px;
}

.review-item p {
    padding: 25px 0px 10px 0px;
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

.custom-navigation .blog-prev {
    bottom: -60px;
    right: 25px;
}

.custom-navigation .blog-next {
    bottom: -60px;
    right: 0;
}

/* Previous-Next */

.nav-links {
    width: 100%;
    display: flex;
    justify-content: space-between;
}

/* Previous-Next */


/***** Recent-Post *****/


.swiper-pagination {
    display: none !important;
}

.recent-jobpost {
    padding: 30px 20px;
    height: 79%;
    border-radius: 8px;
}

.recent-job {
    display: flex;
    justify-content: center;
    max-width: 280px;
}

.job-card {
    display: flex;
    flex-direction: column;
    background: white;
    border-radius: 10px;
    overflow: hidden;
    margin-bottom: 10px;
    box-shadow: 0px 4px 20px #0000000D;
    align-items: center;
    padding: 10px;
    width: fit-content;
    max-width: 100%;
    height: 330px;
}

.job-image-container {
    width: fit-content;
    display: flex;
    justify-content: center;
    max-height: 120px;
}

.job-image {
    max-width: 100%;
    object-fit: cover;
    border-radius: 8px;
}

.job-title {
    font: normal normal 500 20px/32px Poppins;
}

.job-location {
    font: normal normal 500 15px/27px Poppins;
}

.job-info {
    text-align: center;
    width: fit-content;
    padding: 10px;
    font-size: 14px;
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


.client-blogs {
    background: #FAFAFA 0% 0% no-repeat padding-box;
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

.custom-navigation .blog-prev {
    bottom: -60px;
    right: 25px;
}

.custom-navigation .blog-next {
    bottom: -60px;
    right: 0;
}


/***** Blog-comment *****/
/***** Blog-comment *****/

.comment-area {
    margin-bottom: 80px;
    height: 75%;
    border-radius: 8px;
    box-shadow: 0px 4px 20px #0000000D;

}

.blog-comment {
    background: #FAFAFA 0% 0% no-repeat padding-box;
}

.comment-field {
    width: 100%;
    padding: 20px;
    border-radius: 0;
    vertical-align: middle;
    margin-bottom: 10px;
}


.review-text {
    display: flex;
    justify-content: space-between;

}

.user-text {
    display: flex;
    margin: 20px 0px;
    justify-content: space-between;
}

.user-info {
    padding: 10px 5px;
    width: 32%;
    gap: 5px;
}

.input-field {
    background: var(--secondary-color);
    color: var(--primary-color);
    border: 1px solid rgb(179, 179, 179);
    border-radius: 2px;
}

.input-field:focus {
    border-color: var(--primary-color) !important;
    box-shadow: 0 0 1px rgba(201, 142, 65, 0.979) !important;
    outline: none !important;
}

.check-mark {
    display: flex;
    align-items: center;
    text-align: center;
    gap: 10px;
}

.btn-comment {
    padding: 10px 8px;
    border-radius: 3px;
    color: #ffffff;
    background-color: #A57B5D;
    border: 1px solid var(--primary-color);
    font: normal normal normal 16px / 24px Poppins;
    box-shadow: 0 0 1px rgba(201, 142, 65, 0.979) !important;

}

.btn-comment:hover {
    border: 1px solid var(--primary-color);
    background-color: var(--primary-color);
    box-shadow: 0 0 1px rgba(201, 142, 65, 0.979) !important;

}




@media screen and (max-width: 1399px) {
    .blog-form {
        padding: 55px 20px;
    }

    .form-heading h6 {
        font-size: 24px;
        line-height: 1.3;
    }
}

@media screen and (max-width: 1199px) {
    .blog-area {
        margin-left: 0;
        padding: 26px 10px;
    }

    .review-text p {
        font-size: 15px;
    }

    .custom-navigation .blog-prev {
        bottom: -50px;
        right: 25px;
    }

    .custom-navigation .blog-next {
        bottom: -50px;
        right: 0;
    }
}

@media screen and (max-width: 991px) {
    .blog-area {
        padding: 40px 20px;
        padding-bottom: 57px;
    }

    .blog-form {
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

    .client-blogs .row {
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

    .blog-area {
        border-radius: 0;
        padding: 22px 17px;
    }

    .custom-navigation .blog-prev {
        bottom: -50px;
        right: 45px;
    }

    .custom-navigation .blog-next {
        bottom: -50px;
        right: 20px;
    }

    .blog-heading h6 {
        font: normal normal bold 18px/32px Montserrat;
        margin-bottom: 0;
    }

    .blog-heading p {
        font: normal normal 300 15px/21px Poppins;
        margin-bottom: 20px;
    }

    .blog-form {
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

@media screen and (max-width: 320px) {

    .side-blog {
    margin-top: 0px;
}


}


</style>