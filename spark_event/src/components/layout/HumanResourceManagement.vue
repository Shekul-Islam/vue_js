<script setup>

</script>

<template>
    <div class="housekeeping-management">
        <div class="container">
            <div class="section-heading">
                <h2 class="title">HUMAN RESOURCE MANAGEMENT</h2>
                <p class="description">Our Human Resource Management services optimize staffing and align talent with goals. We handle recruitment, onboarding, performance management, and employee relations, ensuring compliance and a positive culture. By implementing training and retention strategies, we enhance staff satisfaction and service quality, streamlining workforce management for efficient hotel operations.</p>
            </div>

            <div class="housekeeping-items">

                <div class="item">
                    <div class="item-image">
                        <img src="@/assets/image/operations-management/hr-management/recruitment.png" alt="">
                    </div>

                    <div class="item-card-content">
                        <div class="item-title">
                            <h5>RECRUITMENT & ONBOARDING</h5>
                        </div>

                        <div class="item-description">
                            <p>We manage the entire hiring process, from sourcing candidates to onboarding, ensuring your team is skilled and prepared.</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="item-image">
                        <img src="@/assets/image/operations-management/hr-management/performance.png" alt="">
                    </div>

                    <div class="item-card-content">
                        <div class="item-title">
                            <h5>PERFORMANCE MANAGEMENT</h5>
                        </div>

                        <div class="item-description">
                            <p>Regular evaluations, goal setting, and feedback processes to boost productivity and align with business objectives.</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="item-image">
                        <img src="@/assets/image/operations-management/hr-management/employee.png" alt="">
                    </div>

                    <div class="item-card-content">
                        <div class="item-title">
                            <h5>EMPLOYEE RELATIONS & COMPLIANCE</h5>
                        </div>

                        <div class="item-description">
                            <p>We handle employee issues and ensure adherence to all labor regulations, fostering a positive workplace environment.</p>
                        </div>
                    </div>
                </div>
 
                <div class="item">
                    <div class="item-image">
                        <img src="@/assets/image/operations-management/hr-management/training.png" alt="">
                    </div>

                    <div class="item-card-content">
                        <div class="item-title">
                            <h5>TRAINING & DEVELOPMENT</h5>
                        </div>

                        <div class="item-description">
                            <p>Creating tailored training programs to enhance employee skills and support career growth, ensuring the team stays engaged and productive.</p>
                        </div>
    
                    </div>
                </div>

                <div class="item">
                    <div class="item-image">
                        <img src="@/assets/image/operations-management/hr-management/payroll.png" alt="">
                    </div>

                    <div class="item-card-content">
                        <div class="item-title">
                            <h5>PAYROLL & BENEFITS ADMINISTRATION</h5>
                        </div>

                        <div class="item-description">
                            <p>Efficient payroll processing and benefits management, providing employees with timely, accurate compensation and support.</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="item-image">
                        <img src="@/assets/image/operations-management/hr-management/workforce.png" alt="">
                    </div>

                    <div class="item-card-content">
                        <div class="item-title">
                            <h5>WORKFORCE PLANNING & ANALYTICS</h5>
                        </div>

                        <div class="item-description">
                            <p>Strategic workforce planning and data insights optimize staffing, anticipate future needs, and position the organization for growth.</p>
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
    text-align: center;
    padding: 0 20px;
}

.housekeeping-items{
    display: flex;
    flex-wrap: wrap;
    gap: 1.5%;
    row-gap: 24px;
    margin-top: 35px;
    justify-content: center;
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