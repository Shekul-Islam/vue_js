<script setup>
import { useRoute } from "vue-router";
import { onMounted, ref } from "vue";
import { storeToRefs } from 'pinia';
import {useSetting} from '@/stores'

const route        = useRoute();
const orderInfo    = JSON.parse(route.query.orderInfo);
const setting      = useSetting();
const { settings } = storeToRefs(setting);
const text1        = ref('');
const text2        = ref('');
const text3        = ref('');

const getSettingsData = async() => {
  const settingData = await setting.getData();
  settingData.map((ele)=> {
    if (ele.key == "thankyoupage-text1" ) {
      text1.value = ele
    }  
    if (ele.key == "thankyoupage-text2" ) {
      text2.value = ele
    }  
    if (ele.key == "thankyoupage-text3" ) {
      text3.value = ele
    }  
  })
}

onMounted(() => {
    getSettingsData();
})

</script>
<template>
  <div>
    <section class="inner-section single-banner bg-danger">
      <div class="container">
        <h1 class="text-light">{{ text1.value }}</h1>
        <h4 class="text-light">{{ text2.value }}</h4>
        <p class="text-light">{{ text3.value }}</p>
      </div>
    </section>

    <section>
      <div class="col-lg-12">
              <div class="account-card">
                <div class="account-content">
                  <div class="checkout-charge pt-4">
                  <h4>Your Order Has Been Received</h4>
                    <ul>
                      <li>
                        <span>Date and Time</span>
                        <span>{{ new Date().toLocaleDateString() }}</span>
                      </li>
                      <li>
                        <span>Phone Number</span>
                        <span>{{ orderInfo.phoneNumber }}</span>
                      </li>
                      <li>
                        <span>Customer Name</span>
                        <span>{{ orderInfo.name }}</span>
                      </li>
                      <li>
                        <span>Customer Adress</span>
                        <span>{{ orderInfo.address }}</span>
                      </li>
                    </ul>
                  </div>
                  <div class="checkout-charge mt-5">
                    <p>Pay with cash upon delivery.</p>
                    <ul>
                      <h3 class="mt-3">Order Details</h3>
                      <li>
                        <span>Payment Method</span>
                        <span v-if="orderInfo.payment_gateway_id == 1">Cash On Delivery</span>
                        <span v-else>Other Transition</span>
                      </li>
                      <li>
                        <span>Delivery Address</span>
                        <span v-if="orderInfo.delivery_gateway_id == 1">ঢাকার মধ্যে - {{ Number(orderInfo.deliverCharge) }} টাকা</span>
                        <span v-else>ঢাকার বাইরে - {{  Number(orderInfo.deliverCharge) }} টাকা</span>
                      </li>
                      <li>
                        <span>Total<small>(Incl. VAT)</small></span>
                        <span>{{ orderInfo.totalPrice + Number(orderInfo.deliverCharge) }}tk</span>
                      </li>
                    </ul>
                    <router-link :to="{name: 'homePage'}" class="btn btn-danger">Go To Home Page</router-link >
                  </div>
                </div>
              </div>
            </div>
    </section>
  </div>
</template>
<style scope>

</style>
