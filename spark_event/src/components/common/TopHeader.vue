<script setup>

</script>

<template>
    <div class="top-header">
        <div class="container">
            <div class="top-header-content">

                <div class="top-header-left">
                    <div class="icon">
                        <img src="@/assets/icon/home/top-header/gift-icon.png" alt="">
                    </div>
                    <div class="content">
                        <p>Get 10% Cash Back on Our Staffing Services</p>
                    </div>
                </div>
    
                <div class="top-header-right">
                    <ul>
                        <li class="email">
                            <div class="email-icon">
                                <img src="@/assets/icon/home/top-header/envelope-1.png" alt="">
                            </div>
                            <a href="">info@sparkeventsolutions.com</a>
                        </li>

                        <li class="phone">
                            <div class="phone-icon">
                                <img src="@/assets/icon/home/top-header/phone.png" alt="">
                            </div>
                            <a href="">020 8058 0821</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.top-header{
    height: 56px;
    width: 100%;
    background-color: #C29774;
    display: flex;
    align-items: center;
}

.top-header-content{
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.top-header-left{
    display: flex;
    align-items: center;
}

.top-header-left .icon img{
    width: 16px;
    height: 16px;
    vertical-align: baseline;
}

.top-header-left .content p{
    padding: 0;
    margin: 0;
    padding-left: 8px;
    color: var(--secondary-color);
    font: normal normal normal 16px/24px Poppins;
}

ul{
    padding: 0;
    margin: 0;
    display: flex;
    align-items: center;
}

ul li{
    margin-left: 56px;
}
.top-header-right{
    display: flex;
    align-items: center;
}

.top-header-right .email,
.top-header-right .phone{
    display: flex;
    align-items: center;
}

.top-header-right .email .email-icon,
.top-header-right .phone .phone-icon{
    width: 24px;
    height: 24px;
    border: 1px solid #FFFFFF;
    border-radius: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 8px;
}

.top-header-right a{
    text-decoration: none;
    color: var(--secondary-color);
    font: normal normal normal 16px/24px Poppins;
}

.top-header-right a:hover{
    color: #D5D5D5;
}

@media screen and (max-width: 991px) {
    .top-header{
        height: 80px;
    }

    ul{
        flex-direction: column;
        align-items: start;
        gap: 8px;
    }

    .top-header-left .content p{
        font-size: 15px;
    }

    .top-header-right .email .email-icon, .top-header-right .phone .phone-icon{
        height: 22px;
        width: 22px;
    }

    .top-header-right a{
        font-size: 15px;
    }
}

@media screen and (max-width: 767px) {
    .top-header{
        height: 78px;
    }

    .top-header-content{
        display: flex;
        flex-direction: column;
    }

    ul{
        flex-direction: row;
        gap: 10px;
    }

    ul li{
        margin: 0;
        
    }

    .top-header-left{
        margin-bottom: 10px;
    }

    .top-header-left .icon img{
        height: 14px;
        width: 14px;
    }

    .top-header-left .content p{
        font-size: 13px;
    }

    .top-header-right .email .email-icon,
    .top-header-right .phone .phone-icon{
        height: 20px;
        width: 20px; 
        margin-right: 3px;
    }

    .top-header-right a{
        font-size: 13px;
    }

}

@media screen and (max-width: 370px) {
    .top-header-left{
        margin-bottom: 0;
    }

    ul{
        flex-direction: column;
        gap: 0;
        align-items: center;
    }

    .top-header-left .content p{
        font-size: 11px;
        padding-left: 3px;
    }
    .top-header-left .icon img{
        height: 11px;
        width: 11px;
    }

    .top-header-right .email .email-icon,
    .top-header-right .phone .phone-icon{
        height: 16px;
        width: 16px;
    }
    
    .top-header-right .email .email-icon img,
    .top-header-right .phone .phone-icon img{
        width: 8px;
    }
    .top-header-right a{
        font-size: 11px;
    }

}


</style>