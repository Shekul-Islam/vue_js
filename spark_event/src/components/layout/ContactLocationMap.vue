<script setup>

</script>

<template>
    <div class="contact-map">
        <div class="container">
            <div class="contact-map-area">
                <div class="">
                    <div class="contact-heading">
                        <h6>SPARK EVENT SOLUTIONS LTD</h6>
                    </div>

                    <div class="contact-info">
                        <ul>
                            <li>
                                <a href="">
                                    <div class="img">
                                        <img src="@/assets/icon/home/footer/navigation.png" alt="">
                                    </div>
                                    <span>44 Broadway, London E15 1XE, <br/> United Kingdom</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div class="img">
                                        <img src="@/assets/icon/home/footer/phone.png" alt="">
                                    </div>
                                    <span>020 8058 0821</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div class="img">
                                        <img src="@/assets/icon/home/footer/envelope-1.png" alt="">
                                    </div>
                                    <span>info@sparkeventsolutions.com</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="contact-social-icon">
                        <a class="icon">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a class="icon">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                        <a class="icon">
                            <i class="fa-brands fa-square-instagram"></i>
                        </a>
                    </div>
                </div>
    
                <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2481.489854037905!2d-0.0015283226650482412!3d51.540916071820924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a78a1be1c74b%3A0x36aa7482634012da!2s44%20Broadway%2C%20London%20E15%201XE%2C%20UK!5e0!3m2!1sen!2sbd!4v1737960056096!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.contact-map{
    padding: 150px 0;
}
.contact-map-area{
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.contact-heading h6{
    text-decoration: underline;
    font: normal normal bold 20px/24px Montserrat;
    color: #C29774;
    text-transform: uppercase;
}

.contact-info ul{
    padding: 0;
    margin: 0;
}
.contact-info ul li a{
    text-decoration: none;
    color: #363636;
    margin-bottom: 16px;
    display: flex;
    align-items: center;
    font: normal normal normal 16px/25px Poppins;
}
.contact-info ul li a .img{
    width: 24px;
    height: 24px;
    border-radius: 50%;
    border: 1px solid #C29774;
    margin-right: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.contact-social-icon{
    display: flex;
}
.contact-social-icon .icon{
    width: 45px;
    height: 45px;
    line-height: 45px;
    text-align: center;
    border: 2px solid #C29774;
    background: #FFFFFF;
    color: #464646;
    border-radius: 50%;
    margin-right: 20px;
    cursor: pointer;
}
.contact-social-icon .icon:hover{
    background-color: #C29774;
    color: #ffffff;
}
.contact-social-icon .icon i{
    font-size: 24px;
}
.google-map iframe{
    width:850px;
    height:415px;
}

@media screen and (max-width: 1399px) {
    .google-map iframe{
        width:750px;
        height:415px;
    }
}
@media screen and (max-width: 1199px) {
    .google-map iframe{
        width:450px;
        height:238px;
    }
}
@media screen and (max-width: 991px) {
    .contact-map{
        padding: 90px 0;
    }
    .contact-heading h6{
        font: normal normal bold 16px/24px Montserrat;
    }
    .contact-info ul li a{
        font: normal normal normal 15px/23px Poppins;
    }
    .google-map iframe{
        width:392px;
        height:218px;
    }
}
@media screen and (max-width: 767px) {
    .contact-map{
        padding: 48px 0;
    }
    .contact-map-area{
        flex-direction: column;
        align-items: start;
    }
    .google-map{
        width: 100%;
    }
    .google-map iframe{
        width:100%;
        height:100%;
    }
    .contact-social-icon{
        margin-bottom: 30px;
    }
}
</style>