<script setup>
// All Import File  Code Is Here......................................................................................................
import { useAuth, useNotification, useCategory, useFlashDeal } from '@/stores';
import {CategorySkeleton} from '@/components/skeleton'
import { useRouter, useRoute } from "vue-router";
import { storeToRefs } from 'pinia';
import { ref, onMounted } from 'vue';
import axiosInstance from "@/services/axiosService.js";
// All Variable  Code Is Here.....................................................................................................
const flashDeals = useFlashDeal()
const auth = useAuth()
const router = useRouter();
const {user, loading} =  storeToRefs(auth)
const {campaignProduct} =  storeToRefs(flashDeals)
const notify = useNotification();
const category = useCategory();
const {categories} = storeToRefs(category)
const campaignDataShowing = ref('');
// API Calling Code Is Here.....................................................................................................

// All Function  Code Is Here.....................................................................................................

const logout = async () => {
    const res = await auth.logout();
    if (res.success) {
        router.push({ name: "homePage"});
        notify.Success("Logout Successfully Done");
    }
}

const campaignData = async () => {
    const res = await flashDeals.index();
    campaignDataShowing.value = res
    
}

onMounted(() => {
    campaignData();
    category.getData();
})


</script>

<template lang="">
  <div>
    <!--=====================================
                    NAVBAR PART START
        =======================================-->
        <nav class="navbar-part">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-3">
                        <div class="banner-category">
                            <div class="banner-category-head">
                              <i class="fas fa-bars"></i>
                              <span>top categories</span>
                            </div>
                            <ul class="banner-category-list">
                              <template v-if="!categories.result">
                                <CategorySkeleton />
                              </template>
                              <template v-else>
                                <li class="banner-category-item" v-for="(category, index) in categories.result" :key="index">
                                  <router-link :to="{ name: 'shopPage', query: { category: category.id }}">
                                    <i class="flaticon-vegetable"></i>
                                    <span>{{ category.name }}</span>
                                    <i class="fa-solid fa-arrow-right ms-auto fs-6" @click.prevent="toggleDropdown(index, category)" v-if="category.sub_category.length > 0"></i>
                                  </router-link>
                                </li>
                              </template>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-3"></div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="navbar-content">
                            <ul class="navbar-list">
                                <li class="navbar-item dropdown">
                                    <router-link :to="{ name: 'homePage' }" class="navbar-link" :class="{ 'text-warning': $route.name === 'homePage' }">Home</router-link>
                                </li>
                                <li class="navbar-item dropdown-megamenu">
                                    <router-link :to="{ name: 'shopPage' }" class="navbar-link" :class="{ 'text-warning': $route.name === 'shopPage' }">Shop</router-link>
                                </li>
                                <li class="navbar-item">
                                    <router-link :to="{ name: 'aboutPage' }" class="navbar-link" :class="{ 'text-warning': $route.name === 'aboutPage' }">About Us</router-link>
                                </li>
                                <li class="navbar-item">
                                     <router-link :to="{ name: 'contactPage' }" class="navbar-link" :class="{ 'text-warning': $route.name === 'contactPage' }">Contact Us</router-link>
                                </li>
                                <li class="navbar-item" v-if="campaignDataShowing == 'flashdeal'">
                                     <router-link :to="{ name: 'flashDealPage' }" class="navbar-link" :class="{ 'text-warning': $route.name === 'flashDealPage' }">Flash Deal</router-link>
                                </li>
                                <li class="navbar-item" v-if="campaignDataShowing == 'campaign'">
                                     <router-link :to="{ name: 'campaignPage' }" class="navbar-link" :class="{ 'text-warning': $route.name === 'campaignPage' }">Campaign Page</router-link>
                                </li>
                                <li class="navbar-item">
                                     <router-link :to="{ name: 'blogPage' }" class="navbar-link" :class="{ 'text-warning': $route.name === 'blogPage' }">Blog</router-link>
                                </li>
                                <!-- <li class="navbar-item dropdown">
                                    <a class="navbar-link dropdown-arrow" href="#">authentic</a>
                                    <ul class="dropdown-position-list" v-if="user.user">
                                        <li><router-link :to="{name: 'Profile'}">Profile</router-link></li>
                                        <li><router-link :to="{name: 'OrderList'}">My Order</router-link></li>
                                        <li ><a href="" @click.prevent="logout()">Logout<span v-show="loading" class="spinner-border spinner-border-sm mr-1"></span></a></li>
                                    </ul>
                                    <ul class="dropdown-position-list" v-else>
                                        <li><router-link :to="{name:'Login'}">login</router-link></li>
                                        <li><router-link :to="{name: 'Registration'}">register</router-link></li>
                                    </ul>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!--=====================================
                    NAVBAR PART END
        =======================================-->
  </div>
</template>

<style>

</style>
