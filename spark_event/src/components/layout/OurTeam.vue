<script setup>
const props = defineProps({
 type: String
});

</script>

<template>
    <div class="our-team">
        <div class="container">
            <div class="heading-section">
                <h1>OUR TEAM</h1>
                <p>Meet our excellent team members</p>
            </div>
            <div class="body-section">
                <div class="card-section">
                    <div class="image-section">
                        <img src="/src/assets/image/home/our-team/Team-1.png" alt="">
                    </div>
                    <div class="content-section">
                        <h4>Syed Taha Hossain</h4>
                        <p>Owner & Chairman</p>
                    </div>
                    <div class="social-media-content">
                        <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                        <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
                <div class="card-section">
                    <div class="image-section">
                        <img src="/src/assets/image/home/our-team/Team-2.png" alt="">
                    </div>
                    <div class="content-section">
                        <h4>Syed Taha Hossain</h4>
                        <p>Owner & Chairman</p>
                    </div>
                    <div class="social-media-content">
                        <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                        <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
                <div class="card-section">
                    <div class="image-section">
                        <img src="/src/assets/image/home/our-team/Team-3.png" alt="">
                    </div>
                    <div class="content-section">
                        <h4>Syed Taha Hossain</h4>
                        <p>Owner & Chairman</p>
                    </div>
                    <div class="social-media-content">
                        <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                        <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
                <div class="card-section" v-if="type == 'about'">
                    <div class="image-section">
                        <img src="/src/assets/image/home/our-team/Team-1.png" alt="">
                    </div>
                    <div class="content-section">
                        <h4>Syed Taha Hossain</h4>
                        <p>Owner & Chairman</p>
                    </div>
                    <div class="social-media-content">
                        <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                        <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
                <div class="card-section" v-if="type == 'about'">
                    <div class="image-section">
                        <img src="/src/assets/image/home/our-team/Team-2.png" alt="">
                    </div>
                    <div class="content-section">
                        <h4>Syed Taha Hossain</h4>
                        <p>Owner & Chairman</p>
                    </div>
                    <div class="social-media-content">
                        <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                        <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
                <div class="card-section" v-if="type == 'about'">
                    <div class="image-section">
                        <img src="/src/assets/image/home/our-team/Team-3.png" alt="">
                    </div>
                    <div class="content-section">
                        <h4>Syed Taha Hossain</h4>
                        <p>Owner & Chairman</p>
                    </div>
                    <div class="social-media-content">
                        <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                        <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-section">
                <div class="button-section">
                    <button class="primary-button">Learn More</button>
                </div>
            </div>
        </div>        
    </div>
</template>

<style scoped>

.our-team{
    padding: 138px 0;
    background: #FAFAFA;
}

.our-team .heading-section h1{
    text-align: center;
    color: var(--primary-color);
    margin-bottom: 14px;
    font: normal normal bold 40px/60px Montserrat;
    line-height: 60px;
}

.our-team .heading-section p{
    text-align: center;
    color: #464646;
    margin-bottom: 36px;
    font: normal normal 300 20px/30px Poppins;
    line-height: 30px;
}

.our-team .body-section{
    display: grid;
    grid-template-columns: auto auto auto;
    grid-gap: 30px;
}

.our-team .body-section .card-section{
    background-color: white;
    border-radius: 8px;
    padding: 20px;
    text-align: center;
}

.our-team .body-section .card-section .image-section {
    width: 200px; 
    height: 200px; 
    border-radius: 50%; 
    overflow: hidden; 
    position: relative; /* প্যারেন্টে পজিশন রিলেটিভ */
    margin: 0 auto 25px auto;
}

.our-team .body-section .card-section .image-section img {
    width: 100%; /* ইমেজ পুরো প্যারেন্ট কভার করবে */
    height: 100%;
    object-fit: cover; /* ইমেজ যেন সঠিকভাবে ফিট করে */
    transform: scale(1); /* ডিফল্ট স্কেল */
    transition: transform 0.3s ease; /* স্মুথ ট্রানজিশন */
}

.our-team .body-section .card-section .image-section img:hover {
    transform: scale(1.1); /* জুমিং এফেক্ট */
}

.our-team .body-section .card-section .content-section h4{
    color: var(--primary-color);
    text-align: center;
    font: normal normal 600 20px/24px Poppins;
    letter-spacing: 0px;
    opacity: 1;
    margin-bottom: 8px;
}

.our-team .body-section .card-section .content-section p{
    text-align: center;
    font: normal normal normal 16px/24px Poppins;
    letter-spacing: 0px;
    color: #363636;
    opacity: 1;
    margin-bottom: 28px;

}

.our-team .body-section .card-section .social-media-content a {
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 40px; 
    height: 40px; 
    border: 1px solid var(--primary-color); 
    color: #464646; 
    border-radius: 50%; 
    text-align: center; 
    font-size: 16px; 
    margin-right: 20px;
    transition: all 0.3s ease;
}

.our-team .body-section .card-section .social-media-content a:hover { 
    color: white; 
    background-color: var(--primary-color);
}

.our-team .footer-section .button-section {
    text-align: center;
    margin-top: 36px;
}


@media (max-width: 991px) {

.our-team{
   padding: 60px 0;
}

.our-team .heading-section h1{
    font: normal normal bold 28px/42px Montserrat;
    line-height: 42px;
}

.our-team .heading-section p{
    font: normal normal 300 18px/32px Poppins;
    line-height: 32px;
}

.our-team .body-section{
    gap: 10px;
}

.our-team .body-section .card-section{
    padding: 15px;
}

.our-team .body-section .card-section .image-section{
    width: 145px;
    height: 145px;
}

.our-team .body-section .card-section .image-section img{
    margin-bottom: 0px;
}

}


@media (max-width: 767px) {
.our-team{
   padding: 65px 0;
}

.our-team .heading-section h1{
    font: normal normal bold 18px/32px Montserrat;
    line-height: 42px;
    margin-bottom: 10px;
}

.our-team .heading-section p{
    font: normal normal 300 15px/21px Poppins;
    line-height: 21px;
    margin-bottom: 18px;
}

.our-team .body-section{
    display: grid;
    grid-template-columns: auto auto;
    grid-gap: 10px;
}

.our-team .body-section .card-section{
    padding: 25px 5px;
}

.our-team .body-section .card-section .image-section{
    width: 100px;
    height: 100px;
}

.our-team .body-section .card-section .image-section img{
    margin-bottom: 0px;
}

.our-team .body-section .card-section .content-section h4{
    font: normal normal 600 16px/24px Poppins;
}

.our-team .body-section .card-section .content-section p{
    font: normal normal normal 14px/21px Poppins;
}

.our-team .body-section .card-section .social-media-content a {
    margin-right: 10px;
}

.primary-button{
    font-size: 16px;
    padding: 9px 16px;
}

}

@media (max-width: 575px) {


}

@media (max-width: 350px) and (min-width: 320px) {
.our-team{
   padding: 40px 0;
}

.our-team .heading-section h1{
    font: normal normal bold 18px/32px Montserrat;
    line-height: 32px;
    margin-bottom: 10px;
}

.our-team .heading-section p{
    font: normal normal 300 15px/21px Poppins;
    line-height: 21px;
    margin-bottom: 18px;
}

.our-team .body-section .card-section .social-media-content a {
    margin-right: 5px;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 35px;
    height: 35px;
    border: 1px solid var(--primary-color);
    color: #464646;
    border-radius: 50%;
    text-align: center;
    font-size: 16px;
    }

}

</style>