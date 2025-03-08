<script setup>

</script>

<template>
    <div class="choose-us-section">
        <div class="container">
            <div class="heading-area">
                <h2>WHY CHOOSE US</h2>
                <p>We provide complete solutions</p>
            </div>

            <div class="content-area">
                <div class="content-image">
                    <img src="@/assets/image/about/why-choose-us/undraw_learning-sketchingsh.png" alt="">
                </div>

                <div class="text-content">
                    <div class="content">
                        <h6 class="title">Experienced Professionals</h6>
                        <p class="description">Our rigorously trained staff deliver expert operations management and staffing, ensuring consistent, high-quality service tailored to your needs.</p>
                    </div>

                    <div class="content">
                        <h6 class="title">Customizable Service Plans</h6>
                        <p class="description">We customize service plans to your needs, providing essential services that optimize costs while ensuring quality and adaptability.</p>
                    </div>

                    <div class="content">
                        <h6 class="title">Commitment To Hygiene And Safety</h6>
                        <p class="description">We ensure strict hygiene by following updated protocols, sanitizing high-touch surfaces, and maintaining an exceptionally clean environment.</p>
                    </div>

                    <div class="content">
                        <h6 class="title">Cost-Effective Solutions</h6>
                        <p class="description">Our adaptable packages offer premium quality at budget-friendly prices, delivering value-based solutions tailored to your needs.</p>
                    </div>

                    <div class="content">
                        <h6 class="title">Responsive and Reliable</h6>
                        <p class="description">We ensure seamless service with flexible scheduling, quick responses, and adaptability to meet your operational needs.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.choose-us-section{
    padding: 100px 0 70px 0;
}
.heading-area h2{
    text-align: center;
    font: normal normal bold 40px/60px Montserrat;
    color: #C29774;
    text-transform: uppercase;
    line-height: 1;
    margin-bottom: 14px;
}
.heading-area p{
    text-align: center;
    font: normal normal 300 20px/30px Poppins;
    color: #464646;
    margin: 0;
    margin-bottom: 36px;
}
.content-area{
    display: flex;
    align-items: center;
}
.content-image{
    margin-right: 50px;
}
.content-image img{
    width: 480px;
}
.content h6{
    text-align: left;
    font: normal normal bold 18px/27px Montserrat;
    color: #C29774;
    text-transform: capitalize;
    background: #FAFAFA 0% 0% no-repeat padding-box;
    border-radius: 8px;
    padding: 0 8px;
    display: inline-block;
}
.content p{
    text-align: left;
    font: normal normal normal 16px/24px Poppins;
    color: #464646;
}

@media screen and (max-width: 991px) {
    .choose-us-section{
        padding: 60px 0 50px 0;
    }
    .heading-area h2{
        font: normal normal bold 28px/42px Montserrat;
        margin-bottom: 0;
    }
    .heading-area p{
        font: normal normal 300 18px/30px Poppins;
        margin-bottom: 24px;
    }
    .content-image{
        margin-right: 30px;
    }
    .content-image img{
        width: 255px;
    }

    .content h6{
        font: normal normal bold 16px/24px Montserrat;
        padding: 0 4px;
    }
    .content p{
        font: normal normal normal 15px/21px Poppins;
    }
}
@media screen and (max-width: 767px) {
    .choose-us-section{
        padding: 40px 0;
    }
    .content-area{
        flex-direction: column;
    }
    .content-image img{
        width: 100%;
        margin-bottom: 20px;
    }
    .heading-area h2{
        font: normal normal bold 18px/27px Montserrat;
    }
    .heading-area p{
        font: normal normal 300 15px/21px Poppins;
    }
    .content h6{
        font: normal normal bold 15px/21px Montserrat;
    }
    .content p{
        font: normal normal normal 14px/21px Poppins;
    }
    .content-image{
        margin-right: 0;
        padding: 0 20px;
    }
}
</style>