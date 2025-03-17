<script setup>
import { onMounted, onUnmounted, ref } from "vue";
import { useRoute, useRouter } from "vue-router";

const router     = useRouter();
const route      = useRoute();
const isMenuOpen = ref(false);
const isSticky   = ref('');

const handleScroll = () => {
    isSticky.value = window.scrollY > 56;
};

onMounted(() => {
    window.addEventListener("scroll", handleScroll);
});

onUnmounted(() => {
    window.removeEventListener("scroll", handleScroll);
});
</script>

<template>
    <div class="main-header" :class="['main-header', { sticky: isSticky }]">
        <div class="container">
            <div class="main-header-content">

                <div class="logo-area">
                    <router-link :to="{name: 'home'}">
                        <img src="@/assets/image/home/main-header/logo.svg" alt="">
                    </router-link>
                </div>

                <div class="navbar-area" :class="{'active' : isMenuOpen}">
                    <ul>
                        <li>
                            <router-link :to="{name: 'home'}" :class="{'active' : route.name == 'home'}">Home</router-link>
                        </li>
                        <li>
                            <router-link :to="{name : 'about-us'}" :class="{'active' : route.name == 'about-us'}" href="">About Us</router-link>
                        </li>
                        <li>
                            <a :class="{'active' : route.name == 'services'}" href="javascript:void(0)">Services <i class="fa-solid fa-caret-down"></i></a>

                            <div class="mega-menu">
                                <div class="row">

                                    <div class="col-lg-9">
                                        <div class="mega-heading">
                                            <h6>OPERATIONS MANAGEMENT</h6>
                                        </div>

                                        <div class="mega-menu-item">

                                            <div class="item" @click="router.push({name : 'housekeeping-management'})">
                                                <img src="@/assets/icon/home/main-header/cleaning_995053.png" alt="">
                                                <span>Housekeeping Management</span>
                                            </div>

                                            <div class="item" @click="router.push({name : 'cleaning-management'})">
                                                <img src="@/assets/icon/home/main-header/cleaning_995053.png" alt="">
                                                <span>Cleaning Management</span>
                                            </div>

                                            <div class="item" @click="router.push({name : 'facility-management'})">
                                                <img src="@/assets/icon/home/main-header/cleaning_995053.png" alt="">
                                                <span>Facility Management</span>
                                            </div>

                                            <div class="item" @click="router.push({name : 'it-management'})">
                                                <img src="@/assets/icon/home/main-header/cleaning_995053.png" alt="">
                                                <span>IT Management</span>
                                            </div>

                                            <div class="item" @click="router.push({name : 'human-resource-management'})">
                                                <img src="@/assets/icon/home/main-header/cleaning_995053.png" alt="">
                                                <span>Human Resource Management</span>
                                            </div>

                                            <div class="item" @click="router.push({name : 'laser-spa-management'})">
                                                <img src="@/assets/icon/home/main-header/cleaning_995053.png" alt="">
                                                <span>Laser & Spa Management</span>
                                            </div>

                                            <div class="item" @click="router.push({name : 'maintenance-management'})">
                                                <img src="@/assets/icon/home/main-header/cleaning_995053.png" alt="">
                                                <span>Maintenance Management</span>
                                            </div>

                                            <div class="item"  @click="router.push({name : 'hospitality-operation-management'})">
                                                <img src="@/assets/icon/home/main-header/cleaning_995053.png" alt="">
                                                <span>Hospitality Operations Management</span>
                                            </div>

                                            <div class="item"  @click="router.push({name : 'health-safety-management'})">
                                                <img src="@/assets/icon/home/main-header/cleaning_995053.png" alt="">
                                                <span>Health & Safety Management</span>
                                            </div>

                                            <div class="item" @click="router.push({name : 'marketing-management'})">
                                                <img src="@/assets/icon/home/main-header/cleaning_995053.png" alt="">
                                                <span>Marketing Management</span>
                                            </div>

                                            <div class="item" @click="router.push({name : 'food-bevarage-management'})">
                                                <img src="@/assets/icon/home/main-header/cleaning_995053.png" alt="">
                                                <span>Food & Beverage Management</span>
                                            </div>

                                            <div class="item" @click="router.push({name : 'revenue-yield-management'})">
                                                <img src="@/assets/icon/home/main-header/cleaning_995053.png" alt="">
                                                <span>Revenue & Yield Management</span>
                                            </div>

                                            <div class="item"  @click="router.push({name : 'kitchen-management'})">
                                                <img src="@/assets/icon/home/main-header/cleaning_995053.png" alt="">
                                                <span>Kitchen Management</span>
                                            </div>

                                            <div class="item" @click="router.push({name : 'project-management'})">
                                                <img src="@/assets/icon/home/main-header/cleaning_995053.png" alt="">
                                                <span>Project Management</span>
                                            </div>

                                            <div class="item" @click="router.push({name : 'front-desk-management'})">
                                                <img src="@/assets/icon/home/main-header/cleaning_995053.png" alt="">
                                                <span>Front Desk Management</span>
                                            </div>

                                            <div class="item" @click="router.push({name : 'hospitality-investment-feasibility'})">
                                                <img src="@/assets/icon/home/main-header/cleaning_995053.png" alt="">
                                                <span>Hospitality Investment Feasibility</span>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="mega-heading">
                                            <h6>BESPOKE STAFFING</h6>
                                        </div>

                                        <div class="mega-bespoke">
                                            
                                            <div class="item">
                                                <img src="@/assets/icon/home/main-header/cleaning_995053.png" alt="">
                                                <span>Housekeeper</span>
                                            </div>

                                            <div class="item">
                                                <img src="@/assets/icon/home/main-header/cleaning_995053.png" alt="">
                                                <span>Bartender</span>
                                            </div>

                                            <div class="item">
                                                <img src="@/assets/icon/home/main-header/cleaning_995053.png" alt="">
                                                <span>Cleaner</span>
                                            </div>

                                            <div class="item">
                                                <img src="@/assets/icon/home/main-header/cleaning_995053.png" alt="">
                                                <span>Food & Beverage Staff</span>
                                            </div>

                                            <div class="item">
                                                <img src="@/assets/icon/home/main-header/cleaning_995053.png" alt="">
                                                <span>Kitchen Porter</span>
                                            </div>

                                            <div class="item">
                                                <img src="@/assets/icon/home/main-header/cleaning_995053.png" alt="">
                                                <span>Plumber</span>
                                            </div>

                                            <div class="item">
                                                <img src="@/assets/icon/home/main-header/cleaning_995053.png" alt="">
                                                <span>Chefs</span>
                                            </div>

                                            <div class="item view-all">
                                                <i class="fa-solid fa-arrow-right-long"></i>
                                                <span>View All</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <router-link :to="{name: 'projects'}" :class="{'active' : route.name == 'projects'}">Projects</router-link>
                        </li>
                        <li>
                            <router-link :to="{name: 'blog'}" :class="{'active' : route.name == 'blog'}">Blog</router-link>
                        </li>
                        <li>
                            <router-link :to="{name: 'career-management'}" :class="{'active' : route.name == 'job-vacancy'}">Job Vacancy</router-link>
                        </li>
                        <li>
                            <router-link :to="{name: 'contact-us'}" :class="{'active' : route.name == 'contact-us'}">Contact Us</router-link>
                        </li>
                    </ul>
                </div>

                <div class="action-area">
                    <button class="primary-button me" @click="router.push('apply-form')">Apply Now</button>
                    <button class="primary-button1"> Staff Log In </button>
                </div>

                <div class="navigation-icon">
                    <img src="@/assets/image/home/main-header/menu.png" @click="isMenuOpen = !isMenuOpen" alt="">
                </div>

            </div>
        </div>
    </div>
</template>

<style scoped>
.main-header{
    background-color: #363636;
    position: relative;
}

.main-header-content{
    height: 94px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo-area img{
    width: 80px;
    height: 80px;
}

.navbar-area ul{
    padding: 0;
    margin: 0;
}

.navbar-area ul li{
    display: inline-block;
}

.navbar-area ul li a{
    text-decoration: none;
    color: #ffffff;
    padding: 0 15px;
    font: normal normal normal 16px/24px Poppins;
}

.navbar-area ul li a.active,
.navbar-area ul li a:hover{
    color: var(--primary-color);
}
.navbar-area ul li a:hover{
    padding: 36px 15px;
}
.primary-button.me{
    margin-right: 54px;
}
.navigation-icon{
    display: none;
}
.navigation-icon img{
    width: 30px;
    cursor: pointer;
}

.main-header.sticky {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 999;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease-in-out;
}

/*Mega Menu Style Code Here*/
.main-header-content{
    position: relative;
}
.mega-menu{
    visibility: hidden;
    position: absolute;
    top: 94px;
    left: 50%;
    transform: translateX(-50%);
    width: 1034px;
    border-top: 5px solid var(--primary-color);
    padding: 30px 60px;
    border-radius: 0px 0px 8px 8px;
    box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
    z-index: 9;
    background-color: #ffffff;
}
.navbar-area ul li:hover .mega-menu{
    visibility: visible;
}
.mega-heading h6{
    font-size: 20px;
    color: #C29774;
    font: normal normal bold 20px/24px Montserrat;
    text-transform: uppercase;
    margin-bottom: 20px;
}
.mega-menu-item{
    display: grid;
    grid-template-columns: 50% 50%;
}
.mega-menu-item .item,
.mega-bespoke .item{
    margin-bottom: 13px;
    display: flex;
    cursor: pointer;
    align-items: center;
}
.mega-menu-item .item img,
.mega-bespoke .item img{
    width: 24px;
    height: 24px;
}
.mega-menu-item .item span,
.mega-bespoke .item span{
    font: normal normal normal 16px/24px Poppins;
    color: #363636;
    padding-left: 5px;
}
.mega-menu-item .item:hover>span,
.mega-bespoke .item:hover>span{
    color: #C29774;
}

.view-all,
.view-all span{
    color: var(--primary-color) !important;
    padding-left: 5px;
}

@media screen and (max-width: 1199px) {
    .logo-area img{
        width: 70px;
    }
    .navbar-area ul li a{
        padding: 0 8px;
        font-size: 15px;
    }

    .primary-button.me{
        margin-right: 20px;
    }

}

@media screen and (max-width: 991px) {
    .primary-button,
    .primary-button1{
      font-size: 15px !important;
      padding: 3px 15px !important;
    }
    .main-header-content{
        position: inherit;
    }
    .navbar-area{
        display: flex;
        justify-content: center;
        align-items: center;
        position: absolute;
        top: 94px;
        left: 0;
        background-color: #363636;
        height: 0;
        width: 100%;
        border-top: 1px solid #535353;
        transition: 0.5s;
        overflow: hidden;
    }

    .logo-area img{
        width: 80px;
    }

    .navbar-area.active{
        height: 58px;
        transition: 0.5s;
        overflow: visible;
    }

    .navbar-area ul li a{
        padding: 0 10px;
    }

    .navigation-icon{
        display: block;
    }

    .primary-button.me{
        margin-right: 54px;
    }

    .mega-menu{
        top: 57px;
        width: 100%;
        border-width: 3px;
    }
    .mega-heading h6{
        font-size: 18px;
        margin-bottom: 16px;
    }

    .mega-menu-item .item span,
    .mega-bespoke .item span{
        font-size: 15px;
    }

    .mega-bespoke{
        display: flex;
        flex-wrap: wrap;
        column-gap: 20px;
    }
}

@media screen and (max-width: 768px) {
    .primary-button,
    .primary-button1{
      font-size: 8px !important;
      padding: 3px 10px !important;
    }
    .navbar-area{
        top: 90px;
    }
    .logo-area img{
        width: 66px;
        height: 66px;
    }
    .main-header-content{
        height: 90px;
    }

    .primary-button.me{
        margin-right: 13px;
    }

    .navbar-area ul li a{
        font-size: 13px;
    }

    .mega-menu{
        padding: 18px 30px;
    }
    .mega-heading h6{
        margin-bottom: 15px;
    }
}

@media screen and (max-width: 575px) {
    .mega-menu-item .item span,
    .mega-bespoke .item span{
        font-size: 11px;
        line-height: 1;
    }
}

</style>