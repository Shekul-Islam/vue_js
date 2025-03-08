<script setup>

</script>

<template>
    <div class="housekeeping-management">
        <div class="container">
            <div class="section-heading">
                <h2 class="title">PROJECT MANAGEMENT</h2>
                <p class="description">Our Project Management services are structured to streamline workflows and achieve project objectives efficiently. We handle project planning, resource allocation, timeline management, and risk assessment, ensuring adherence to industry standards while fostering a collaborative work environment. By incorporating focused training and retention efforts, we boost team performance and maintain high-quality project execution. From establishing project guidelines to overseeing deliverables, our solutions offer end-to-end project support, driving operational efficiency and ensuring that your projects progress smoothly with a dedicated, skilled team.</p>
            </div>

            <div class="housekeeping-items">

                <div class="item">
                    <div class="item-image">
                        <img src="@/assets/image/project-management/room-cleaning.png" alt="">
                    </div>

                    <div class="item-card-content">
                        <div class="item-title">
                            <h5>ROOM CLEANING</h5>
                        </div>

                        <div class="item-description">
                            <p>Developing detailed project plans, including timelines, budgets, and resource allocation to ensure smooth execution.</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="item-image">
                        <img src="@/assets/image/project-management/room-cleaning1.png" alt="">
                    </div>

                    <div class="item-card-content">
                        <div class="item-title">
                            <h5>LINEN MANAGEMENT</h5>
                        </div>

                        <div class="item-description">
                            <p>Identifying potential risks and developing mitigation strategies to minimize impacts on project outcomes.</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="item-image">
                        <img src="@/assets/image/project-management/room-cleaning1.png" alt="">
                    </div>

                    <div class="item-card-content">
                        <div class="item-title">
                            <h5>ROOM CLEANING</h5>
                        </div>

                        <div class="item-description">
                            <p>Regularly tracking project milestones and deliverables, providing updates to stakeholders to ensure alignment.</p>
                        </div>
    
                    </div>
                </div>
 
                <div class="item">
                    <div class="item-image">
                        <img src="@/assets/image/project-management/room-cleaning1.png" alt="">
                    </div>

                    <div class="item-card-content">
                        <div class="item-title">
                            <h5>ROOM CLEANING</h5>
                        </div>

                        <div class="item-description">
                            <p>Implementing quality control processes to ensure project outputs meet established standards and client expectations.</p>
                        </div>
    
                    </div>
                </div>

                <div class="item">
                    <div class="item-image">
                        <img src="@/assets/image/project-management/room-cleaning1.png" alt="">
                    </div>

                    <div class="item-card-content">
                        <div class="item-title">
                            <h5>LINEN MANAGEMENT</h5>
                        </div>

                        <div class="item-description">
                            <p>Facilitating timely communication with stakeholders, providing updates and addressing concerns to maintain transparency throughout the project.</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="item-image">
                        <img src="@/assets/image/project-management/room-cleaning1.png" alt="">
                    </div>

                    <div class="item-card-content">
                        <div class="item-title">
                            <h5>ROOM CLEANING</h5>
                        </div>

                        <div class="item-description">
                            <p>Our room cleaning service ensures spotless rooms, sanitized surfaces, fresh linens, and a lasting impression of comfort and order.</p>
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