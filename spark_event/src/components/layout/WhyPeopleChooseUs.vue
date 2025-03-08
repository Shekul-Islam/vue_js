<script setup>
</script>

<template>
    <div class="why-choose-us">
        <div class="main-section container">
            <div class="heading-section">
                <h1>Reasons Why People Choose US</h1>
            </div>
            <div class="body-section">
                <div class="card-section">
                    <div class="image-section">
                        <img src="@/assets/icon/home/why-choose-us/monthly.png" alt="Placeholder Image" />
                    </div>
                    <div class="content-section">
                        <h6>Monthly</h6>
                        <p>600 Cleans</p>
                    </div>
                </div>
                <div class="card-section">
                    <div class="image-section">
                        <img src="@/assets/icon/home/why-choose-us/echo.png" alt="Placeholder Image" />
                    </div>
                    <div class="content-section">
                        <h6>Eco-Friendly</h6>
                        <p>Cleaning Products</p>
                    </div>
                </div>
                <div class="card-section">
                    <div class="image-section">
                        <img src="@/assets/icon/home/why-choose-us/saves.png" alt="Placeholder Image" />
                    </div>
                    <div class="content-section">
                        <h6>Saves</h6>
                        <p>You Time</p>
                    </div>
                </div>
                <div class="card-section">
                    <div class="image-section">
                        <img src="@/assets/icon/home/why-choose-us/seamless.png" alt="Placeholder Image" />
                    </div>
                    <div class="content-section">
                        <h6>Seamless</h6>
                        <p>Communication</p>
                    </div>
                </div>
                <div class="card-section">
                    <div class="image-section">
                        <img src="@/assets/icon/home/why-choose-us/easy.png" alt="Placeholder Image" />
                    </div>
                    <div class="content-section">
                        <h6>Easy to</h6>
                        <p>Get Help</p>
                    </div>
                </div>
                <div class="card-section">
                    <div class="image-section">
                        <img src="@/assets/icon/home/why-choose-us/safety.png" alt="Placeholder Image" />
                    </div>
                    <div class="content-section">
                        <h6>Safety</h6>
                        <p>Priority</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.why-choose-us{
    background-color: #A57B5D;
    padding: 55px 0;
}

.why-choose-us .heading-section h1{
    color: white;
    font-size: 36px;
    line-height: 38px;
    text-align: center;
    font: normal normal 600 36px/38px Montserrat;
    letter-spacing: 0px;
    color: #FFFFFF;
    text-transform: capitalize;
    opacity: 1;
    margin-bottom: 50px;
}

.why-choose-us .body-section .image-section {
    margin-bottom: 15px;
}

.why-choose-us .body-section {
    display: grid;
    grid-template-columns: auto auto auto auto auto auto;
}

.why-choose-us .body-section .card-section {
    color: white;
    text-align: center;
    padding: 10px;
}

.why-choose-us .body-section .card-section .content-section {
    border-right: 1px solid;
}

.why-choose-us .body-section .card-section:last-child .content-section {
    border-right: none; 
}

.why-choose-us .body-section .content-section h6{
    font-size: 24px;
    font: normal normal medium 24px/30px Poppins;
    line-height: 30px;
}

.why-choose-us .body-section .content-section p{
    font-size: 24px;
    font: normal normal 200 24px/30px Poppins;
    line-height: 30px;
}

@media (max-width: 1199px) {
.why-choose-us{
    padding: 45px 0;
}

.why-choose-us .heading-section h1{
    font-size: 28px;
    line-height: 38px;
    margin-bottom: 40px;
}

.why-choose-us .body-section {
    display: grid;
    grid-template-columns: auto auto auto;
}

.why-choose-us .body-section .card-section:nth-child(3) .content-section {
    border-right: none; 
}

}


@media (max-width: 767px) {
.why-choose-us{
    padding: 40px 0;
}

.why-choose-us .heading-section h1{
    font-size: 24px;
    margin-bottom: 35px;
}

.why-choose-us .body-section {
    display: grid;
    grid-template-columns: auto auto;
}

.why-choose-us .body-section .content-section h6{
    font-size: 18px;
    line-height: 27px;
}

.why-choose-us .body-section .content-section p{
    font-size: 18px;
    line-height: 27px;
}

.why-choose-us .body-section .card-section .content-section {
    position: relative;
    border-right: none;
}
.why-choose-us .body-section .card-section .content-section::after {
    content: '';
    position: absolute;
    bottom: -20%; /* বর্ডার নিচে থাকবে */
    left: 50%; /* এলিমেন্টের মাঝখানে শুরু */
    transform: translateX(-50%); /* মাঝখানে অ্যালাইন */
    width: 40%; /* বর্ডারের প্রস্থ */
    height: 1px; /* বর্ডারের উচ্চতা */
    background-color: white; /* বর্ডারের রঙ */
}

.why-choose-us .body-section .card-section:nth-last-child(-n+2) .content-section::after {
    content: none; /* শেষ দুইটির বর্ডার সরিয়ে দিচ্ছে */
}

}

@media (max-width: 575px) {


}

@media (max-width: 350px) and (min-width: 320px) {


}

</style>