<script setup>

</script>

<template>
    <div class="housekeeping-management">
        <div class="container">
            <div class="section-heading">
                <h2 class="title">HEALTH & SAFETY RISK MANAGEMENT</h2>
                <p class="description">Our Health & Safety Risk Management services ensure a safe environment through risk assessments, safety protocols, emergency plans, and ongoing training. We help maintain compliance with regulations, safeguard employees and guests, and foster a culture of preparedness, supporting smooth operations and guest satisfaction.</p>
            </div>

            <div class="housekeeping-items">

                <div class="item">
                    <div class="item-image">
                        <img src="@/assets/image/operations-management/hr-management/recruitment.png" alt="">
                    </div>

                    <div class="item-card-content">
                        <div class="item-title">
                            <h5>RISK ASSESSMENT & AUDITS</h5>
                        </div>

                        <div class="item-description">
                            <p>Conducting thorough assessments to identify potential hazards and implementing regular audits for a safe environment.</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="item-image">
                        <img src="@/assets/image/operations-management/hr-management/performance.png" alt="">
                    </div>

                    <div class="item-card-content">
                        <div class="item-title">
                            <h5>SAFETY TRAINING PROGRAMS</h5>
                        </div>

                        <div class="item-description">
                            <p>We provide training to educate employees on safety best practices and protocols. This empowers staff to identify hazards and respond effectively.</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="item-image">
                        <img src="@/assets/image/operations-management/hr-management/employee.png" alt="">
                    </div>

                    <div class="item-card-content">
                        <div class="item-title">
                            <h5>EMERGENCY RESPONSE PLANNING</h5>
                        </div>

                        <div class="item-description">
                            <p>Developing actionable plans and protocols to effectively handle emergencies while minimizing potential risks and ensuring safety for all involved.</p>
                        </div>
                    </div>
                </div>
 
                <div class="item">
                    <div class="item-image">
                        <img src="@/assets/image/operations-management/hr-management/training.png" alt="">
                    </div>

                    <div class="item-card-content">
                        <div class="item-title">
                            <h5>CONTINUOUS COMPLIANCE MONITORING</h5>
                        </div>

                        <div class="item-description">
                            <p>Ensuring all operations comply with local and national health and safety regulations is essential for protecting employee and guest well-being.</p>
                        </div>
    
                    </div>
                </div>

                <div class="item">
                    <div class="item-image">
                        <img src="@/assets/image/operations-management/hr-management/payroll.png" alt="">
                    </div>

                    <div class="item-card-content">
                        <div class="item-title">
                            <h5>INCIDENT REPORTING & ANALYSIS</h5>
                        </div>

                        <div class="item-description">
                            <p>Establishing clear processes for incident reporting, along with thorough analysis to prevent future occurrences.</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="item-image">
                        <img src="@/assets/image/operations-management/hr-management/workforce.png" alt="">
                    </div>

                    <div class="item-card-content">
                        <div class="item-title">
                            <h5>SAFETY EQUIPMENT MAINTENANCE</h5>
                        </div>

                        <div class="item-description">
                            <p>Regular inspection and maintenance of safety equipment to ensure it meets all operational standards and is ready for use in emergencies.</p>
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
.section-heading .description{
  text-align: center;
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
    gap: 2%;
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