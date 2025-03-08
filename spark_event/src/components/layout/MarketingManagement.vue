<script setup>

</script>

<template>
    <div class="housekeeping-management">
        <div class="container">
            <div class="section-heading">
                <h2 class="title">MARKETING MANAGEMENT</h2>
                <p class="description">Our Marketing Management services enhance brand presence and drive growth through market research, campaign planning, digital strategy, and content creation. We craft tailored promotions, analyze customer behavior, and optimize ROI, ensuring your hotel reaches the right audience and builds lasting relationships.</p>
            </div>

            <div class="housekeeping-items">

                <div class="item">
                    <div class="item-image">
                        <img src="@/assets/image/operations-management/marketing-management/marketinga.png" alt="">
                    </div>

                    <div class="item-card-content">
                        <div class="item-title">
                            <h5>BRAND STRATEGY & POSITIONING</h5>
                        </div>

                        <div class="item-description">
                            <p>We develop strong brand strategies to position your hotel effectively, ensuring market differentiation, visibility, and lasting customer connections.</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="item-image">
                        <img src="@/assets/image/operations-management/marketing-management/marketingb.png" alt="">
                    </div>

                    <div class="item-card-content">
                        <div class="item-title">
                            <h5>DIGITAL MARKETING</h5>
                        </div>

                        <div class="item-description">
                            <p>We enhance your digital presence with targeted marketing, SEO, social media, and online campaigns to boost engagement and brand visibility.</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="item-image">
                        <img src="@/assets/image/operations-management/marketing-management/marketingc.png" alt="">
                    </div>

                    <div class="item-card-content">
                        <div class="item-title">
                            <h5>CONTENT CREATION & STORYTELLING</h5>
                        </div>

                        <div class="item-description">
                            <p>We craft compelling content and stories that resonate with your audience, strengthening brand identity and engagement.</p>
                        </div>
                    </div>
                </div>
 
                <div class="item">
                    <div class="item-image">
                        <img src="@/assets/image/operations-management/marketing-management/marketingd.png" alt="">
                    </div>

                    <div class="item-card-content">
                        <div class="item-title">
                            <h5>MARKET RESEARCH & INSIGHTS</h5>
                        </div>

                        <div class="item-description">
                            <p>We analyze market trends and customer behavior to provide data-driven insights that enhance strategy and decision-making.</p>
                        </div>
    
                    </div>
                </div>

                <div class="item">
                    <div class="item-image">
                        <img src="@/assets/image/operations-management/marketing-management/marketinge.png" alt="">
                    </div>

                    <div class="item-card-content">
                        <div class="item-title">
                            <h5>CAMPAIGN PLANNING & EXECUTION</h5>
                        </div>

                        <div class="item-description">
                            <p>We design and execute targeted campaigns to maximize brand reach, engagement, and conversions.</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="item-image">
                        <img src="@/assets/image/operations-management/marketing-management/marketingf.png" alt="">
                    </div>

                    <div class="item-card-content">
                        <div class="item-title">
                            <h5>CUSTOMER ENGAGEMENT & LOYALTY</h5>
                        </div>

                        <div class="item-description">
                            <p>We enhance guest engagement and loyalty through personalized marketing and rewards.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>

<style scoped>
.housekeeping-management{
    padding: 100px 0;
}
.section-heading h2{
    text-align: center;
    font: normal normal bold 40px/60px Montserrat;
    color: #C29774;
    text-transform: uppercase;
}
.section-heading P{
    text-align: left;
    font: normal normal normal 16px/24px Poppins;
    color: #363636;
}

.housekeeping-items{
    display: flex;
    flex-wrap: wrap;
    gap: 1%;
    row-gap: 24px;
    margin-top: 35px;
}
.housekeeping-items .item{
    width: 32%;
    background: #FFFFFF 0% 0% no-repeat padding-box;
    box-shadow: 0px 3px 6px #00000029;
    border-radius: 8px;
    overflow: hidden;
}
.housekeeping-items .item .item-image{
    width: 100%;
    overflow: hidden;
}
.housekeeping-items .item .item-image img{
    width: 100%;
    transition: 0.5s;
}
.housekeeping-items .item:hover .item-image img{
    transform: scale(1.1);
    transition: all 0.5s;
}
.item-card-content .item-title{
    background: #C29774 0% 0% no-repeat padding-box;
    padding: 16px;
}
.item-card-content .item-title h5{
    font: normal normal bold 20px/30px Montserrat;
    color: #FFFFFF;
    text-transform: uppercase;
    margin-bottom: 0;
}
.item-card-content .item-description p{
    font: normal normal normal 16px/24px Poppins;
    color: #363636;
    padding: 24px 15px;
    margin-bottom: 0;
}


@media screen and (max-width: 991px) {
    .housekeeping-management{
        padding: 60px 0;
    }
    .section-heading h2{
        font: normal normal bold 28px/42px Montserrat;
    }
    .section-heading P{
        margin: auto;
    }
    .item-card-content .item-title{
        padding: 12px 8px;
    }
    .item-card-content .item-title h5{
        font: normal normal bold 15px/21px Montserrat;
    }
    .item-card-content .item-description p{
        font: normal normal normal 15px/21px Poppins;
        padding: 15px 8px;
    }
}

@media screen and (max-width: 767px) {
    .housekeeping-management{
        padding: 40px 0;
    }
    .section-heading h2{
        font: normal normal bold 18px/27px Montserrat;
    }
    .section-heading P{
        width: 100%;
        font: normal normal normal 14px/21px Poppins;
    }
    .housekeeping-items{
        margin-top: 20px;
        gap: 2%;
        row-gap: 14px;
    }
    .housekeeping-items .item{
        width: 49%;
    }
    .item-card-content .item-title h5{
        font: normal normal bold 14px/21px Montserrat;
    }
    .item-card-content .item-description p{
        font: normal normal normal 14px/21px Poppins;
        margin-bottom: 10px;
    }
}

</style>