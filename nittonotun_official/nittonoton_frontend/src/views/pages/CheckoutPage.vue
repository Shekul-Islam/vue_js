<script setup>
import { CartSideBar, MobileMenu, BannerPart, ProductView } from "@/components";
import axiosInstance from "@/services/axiosService.js";
import { useCart, useOrder, useAuth, useModal } from "@/stores";
import { storeToRefs } from "pinia";
import { onMounted, ref } from "vue";
// validation error
import { Form, Field } from "vee-validate";
import * as yup from "yup";

// All Variable  Code Is Here.....................................................................................................
const modal =  useModal()
const auth = useAuth();
const { isOrder } = storeToRefs(auth);
const cart = useCart();
const { cartItem, totalPrice, campaignId } = storeToRefs(cart);
const order = useOrder();
const { storeOrder, backendErrors } = storeToRefs(order);

const name                = ref(auth?.user?.user?.name);
const phoneNumber         = ref(auth?.user?.user?.phone_number);
const district            = ref("");
const address             = ref("");
const payment_gateway_id  = ref(12);
const delivery_gateway_id = ref();
const deliverCharge       = ref();
const deliveryInfo        = ref([]);
const payment_gateways    = ref([]);
const orderNote           = ref("");

// coupon
const showCouponForm       = ref(false);
const couponDiscountAmount = ref();
const coupon               = ref('');
const couponErrorMessage   = ref();
const couponId             = ref();
const isOpen               = ref(false);

const isOpenCoupon = () =>{
  isOpen.value = !isOpen.value;
}

const getDeliveryGateway = async () => {
  try {
    const res = await axiosInstance.get("/delivery-gateway");
    deliveryInfo.value = res.data.result;

    if (cartItem.value.some((item) => item.free_shipping === 1)) {
      delivery_gateway_id.value = 0;
      deliverCharge.value = 0;
    } else {
      delivery_gateway_id.value = res.data.result[0].id;
      deliverCharge.value = res.data.result[0].delivery_fee;
    }
  } catch (error) {
    console.log(error);
  }
};

const getDeliveryAmount = async () => {
  try {
    const res = await axiosInstance.get(
      `/delivery-gateway/price/${delivery_gateway_id.value}`
    );
    deliverCharge.value = res.data.result.delivery_fee;
  } catch (error) {
    console.log(error);
  }
};

const getPaymentGetway = async () => {
  try {
    const res = await axiosInstance.get(`/payment-gateway`);
    payment_gateways.value = res.data.result;
  } catch (error) { }
};

// order work start here 

const orderSubmited = async () => {
  await order.storeOrder({
      name               : name.value,
      phoneNumber        : phoneNumber.value,
      district           : district.value,
      address            : address.value,
      orderNote          : orderNote.value ? orderNote.value : '',
      items              : cartItem.value,
      coupon_id          : couponId.value,
      totalPrice         : totalPrice.value,
      payment_gateway_id : payment_gateway_id.value,
      delivery_gateway_id: delivery_gateway_id.value == 0 ? null    : delivery_gateway_id.value,
      deliverCharge      : deliverCharge.value ? deliverCharge.value: null,
      // campaign_id: campaignId.value,
    });
    
}


const placeOrder = async() => {
  scrollToErrorField();
  
  if (formHasNoErrors()) {
    await orderSubmited();
  }

  orderSubmited();

  // if (Object.keys(auth.user).length > 0) {
  // }else{
  //   const res = await auth.login({phone_number: phoneNumber.value, name: name.value});
  //   if (res?.status == 200) {
  //     modal.toggleModal() 
  //   }
  // }

};

const formHasNoErrors = () => {
  return name.value && phoneNumber.value  && address.value && delivery_gateway_id.value && payment_gateway_id.value;
}

const handleOrderSubmitted = () => {
  orderSubmited(); 
}

// Scroll to the first error field
const scrollToErrorField = () => {
  if (!name.value) {
    const nameField = document.querySelector('input[name="name"]');
    nameField.scrollIntoView({ behavior: "smooth", block: "center" });
  }
  if (!phoneNumber.value || backendErrors.value) {
    const phoneNumberField =  document.querySelector('input[name="phone"]');    
    phoneNumberField.scrollIntoView({ behavior: "smooth", block: "center" });
  }
  if (!address.value) {
    const addressField = document.querySelector('input[name="address"]');
    addressField.scrollIntoView({ behavior: "smooth", block: "center" });
  }
  if (!delivery_gateway_id.value) {
    const delivery_gateway_idField = document.querySelector('input[name="delivery_gateway_id"]');
    delivery_gateway_idField.scrollIntoView({ behavior: "smooth", block: "center" });
  }
  if (!payment_gateway_id.value) {
    const payment_gateway_idField =  document.querySelector('input[name="payment_gateway_id"]');
    payment_gateway_idField.scrollIntoView({ behavior: "smooth", block: "center" });
  }
};

// order work end here 


// cart delete 

const deleteCart = (index) => {
  cart.destroy(index);
};

const cartIncrement = (index) => {
  cart.increment(index);
};

const cartDecrement = (index) => {
  cart.decrement(index);
};

// coupon 


const couponCalculate = async() => {
  const res = await axiosInstance.get(`/coupons/check?coupon_code=${coupon.value}&cart_total_amount=${totalPrice.value}`); 
  if (res.status == 200) {
    couponDiscountAmount.value = res.data.result.discount_amount;
    couponId.value = res.data.result.coupon_id;
    isOpen.value = false
  }else{
    couponErrorMessage.value = res.data.message 
  }
}


// validation error
const schema = yup.object({
  name: yup.string().required("আপনার নাম IS REQUIRED"),
  phone: yup.string().required("আপনার মোবাইল নাম্বার IS REQUIRED"),
  district: yup.string().required("District Feild Is Required"),
  address: yup.string().required("আপনার সম্পূর্ণ ঠিকানা IS REQUIRED"),
  delivery_gateway_id: yup.string().required("Delivery Gateway Feild Is Required"),
  payment_gateway_id: yup.string().required("Payment Gateway Feild Is Required"),

});

// has free shipping function 
const hasFreeShipping = () => {
      return cartItem.value.some(item => item.free_shipping === 1);
}



onMounted(() => {
  getDeliveryGateway();
  getPaymentGetway();
  modal.Modalclose();
});
</script>

<template>
  <div>
    <!--=====================================
                    MOBILE-MENU PART START
        =======================================-->
    <MobileMenu />
    <!--=====================================
                    MOBILE-MENU PART END
        =======================================-->

    <!--=====================================
                    BANNER PART START
        =======================================-->
    <BannerPart :title="'Checkout Page'" :sub_title="'Home'" />
    <!--=====================================
                    BANNER PART END
        =======================================-->

    <CartSideBar />

    <!--=====================================
                    CHECKOUT PART START
        =======================================-->
    
     <ProductView @orderSubmitted="handleOrderSubmitted"/>

    <div class="container my-5 checkoutBorder">
        <div class="row">
            <div class="col-lg-8">
                <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col" class="hideElementInPhoneVersion">SL</th>
                        <th scope="col">Image</th>
                        <th scope="col">Product</th>
                        <th scope="col" class="hideElementInPhoneVersion">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(product, index) in cartItem" :key="index">
                          <th scope="row" class="hideElementInPhoneVersion">{{ 1 + index }}</th>
                          <td><router-link :to="{  name: 'productDetailsPage', params: { id: product?.id , slug: product?.slug  }, }" class="img"><img :src="product.image" class="" alt=""></router-link></td>
                          <td class="text-wrap">{{ product.name }}</td>
                          <td class="hideElementInPhoneVersion">{{ Math.round(product.offer_price == 0 ? product.mrp : product.offer_price) }}</td>
                          <td class="w-25">
                            <div class="checkout-page-action">
                                <button
                                  class="quantity-minus-btn"
                                  title="Quantity Minus"
                                  @click.prevent="cartDecrement(index)"
                                >
                                  <i class="icofont-minus"></i>
                                </button>
                                <input
                                  class=""
                                  title="Quantity Number"
                                  type="text"
                                  name="quantity"
                                  :disabled="product.quantity === 1 ? true : false"
                                  :value="product.quantity"
                                />
                                <button
                                  class=""
                                  title="quantity-plus-btn"
                                  @click.prevent="cartIncrement(index)"
                                >
                                  <i class="icofont-plus"></i>
                                </button>
                            </div>
                          </td>
                          <td>{{ (Math.round(product.offer_price == 0 ? product.mrp : product.offer_price)) * product.quantity }}</td>
                          <td>
                            <button class="cart-delete" @click.prevent="deleteCart(index)">
                              <i class="far fa-trash-alt text-danger"></i>
                            </button>
                          </td>
                        </tr>
                    </tbody>
                    </table>
                    <div class="left my-3 p-0">
                      <div class="d-flex justify-content-between is-coupon" @click="isOpenCoupon">
                        <h6>Do you have any coupon ?</h6>
                        <button class="btn-danger btn-sm"><i class="fas fa-chevron-down " :class="{'isRoted' : isOpen}"></i></button>
                      </div>
                      <div class="input-group p-3" :class="{'d-none' : !isOpen}">
                        <input type="text" class="form-control" placeholder="Apply Your Coupon Here" aria-label="Input group example" aria-describedby="btnGroupAddon" v-model="coupon">
                        <div class="input-group-text btn-danger" id="btnGroupAddon" @click.prevent="couponCalculate()">Apply</div>
                      </div>
                      <span v-if="couponErrorMessage" class="text-danger ps-3">{{ couponErrorMessage }}</span>
                  </div>

                </div>
            </div>
            <div class="col-lg-4">
              <Form
                @submit.prevent="placeOrder"
                :validation-schema="schema"
                v-slot="{ errors, isSubmitting }"
              >
                <div class="left">
                    <h5 class="text-wrap text-center">অর্ডার কনফার্ম করতে আপনার নাম, মোবাইল নাম্বর, ঠিকানা লিখে অর্ডার করুন" বাটনে ক্লিক করুন।</h5>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="fw-bold text-dark">নামঃ</label>
                        <Field
                          id="name"
                          name="name"
                          type="text"
                          v-model="name"
                          class="form-control"
                          placeholder="এখানে লিখুন....."
                          :class="{ 'is-invalid': errors.name }"
                        />
                      <span class="text-danger" v-if="errors.name">{{ errors.name }}</span>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" class="fw-bold text-dark">মোবাইল নম্বরঃ</label>
                        <Field
                          id="phoneNumber"
                          name="phone"
                          type="text"
                          v-model="phoneNumber"
                          class="form-control"
                          placeholder="এখানে লিখুন....."
                          :class="{ 'is-invalid': errors.phone }"
                        />
                      <!-- <span class="text-danger" v-if="errors.phone">{{ errors.phone }}</span> -->
                      <span class="text-danger" v-if="backendErrors?.phone_number">{{ backendErrors.phone_number[0] }}</span>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1" class="fw-bold text-dark">ঠিকানা:</label>
                        <Field
                        id="address"
                        name="address"
                        type="text"
                        v-model="address"
                        class="form-control PlaceHolderColorChange"
                        placeholder="বাসা নং, রোড নং, থানা/উপজেলা, জেলা"
                        :class="{ 'is-invalid': errors.address }"
                      />
                      <span class="text-danger" v-if="errors.address">{{ errors.address }}</span>
                    </div>
                    <h6 class="delivary-charge text-center mb-3" >ডেলিভারি চার্জ</h6>
                    <div class="formRadioControl" v-for="(delivery, index) in deliveryInfo" :key="index">
                      <input
                        class="form-check-input me-2"
                        type="radio"
                        :id="'deliveryGateway_' + index"
                        name="delivery_gateway_id"
                        :value="delivery.id"
                        v-model="delivery_gateway_id"
                        @change="getDeliveryAmount"
                      >
                      <label class="form-check-label" :for="'deliveryGateway_' + index">{{ delivery.name + ' - ' + Number(delivery.delivery_fee) }} টাকা </label>
                    </div>
                </div>
                <div class="secend-box border p-2 bg-light mt-3">
                  <div class="d-flex justify-content-between">
                    <div class="left-text"><h5 class="text-wrap">পেমেন্ট মেথড সিলেক্ট করুন</h5></div>
                  </div>
                  <div class="formRadioControl" v-for="(payment_gateway, index) in payment_gateways" :key="index">
                    <input
                      class="form-check-input me-2"
                      type="radio"
                      :id="'paymentGateway_' + index"
                      name="payment_gateway_id"
                      :value="payment_gateway.id"
                      v-model="payment_gateway_id"
                    >
                    <label class="form-check-label" :for="'paymentGateway_' + index">{{ payment_gateway.name }}</label>
                  </div>
                </div>
                <div class="wrap">
                  <button type="submit" :disabled="isSubmitting" class="text-center button buttonorder mt-4 w-100" @click="placeOrder()"><span v-show="isSubmitting" class="spinner-border spinner-border-sm mr-1"></span>Place Order</button>
              </div>
                <!-- <button type="submit" :disabled="isSubmitting" class="text-center orderBTN mt-4 w-100" @click="placeOrder()"><span v-show="isSubmitting" class="spinner-border spinner-border-sm mr-1"></span>Place Order</button> -->
                <div class="left my-3">
                  <h5 class="text-wrap">Order Summery</h5>
                  <div class="d-flex justify-content-between my-2">
                    <p class="text-danger">Sub Total</p>
                    <p class="text-danger">{{ cart.totalPrice }} <span class="font-weight-bold">TK</span></p>
                  </div>
                  <div class="d-flex justify-content-between my-2">
                    <p class="text-danger">Delivary Charge</p>
                    <p class="text-danger">{{ deliverCharge }}<span class="font-weight-bold">TK</span></p>
                  </div>
                  <div class="d-flex justify-content-between my-2" v-if="couponDiscountAmount">
                    <p class="text-danger">Coupon Discount</p>
                    <p class="text-danger"> -({{ couponDiscountAmount ?  cart.totalPrice - couponDiscountAmount : 0 }})<span class="font-weight-bold">TK</span></p>
                  </div>
                  <div class="line"></div>
                  <div class="d-flex justify-content-between my-2">
                    <p class="text-danger">Total</p>
                    <p class="text-danger"><span class="flag-discount mr-4">30% Save</span> {{ couponDiscountAmount ?  Number(deliverCharge) + couponDiscountAmount : cart.totalPrice + Number(deliverCharge) }}  <span class="font-weight-bold">TK</span></p>
                  </div>
                </div>
              </Form>
            </div>
        </div>
    </div>


    <!--=====================================
                    CHECKOUT PART END
        =======================================-->
  </div>
</template>


<style scope>
@import "@/assets/css/checkout.css";



.wrap{
  padding:2.5em;
  text-align:center;
}

.button{
 
  
  
  font-family:Gill Sans, "Gill Sans", sans-serif;
  letter-spacing:-1px;
  text-transform:uppercase;
  text-decoration:none;
  animation-iteration-count: infinite;


  background-color: #f7941d;  
  border-top: 3px solid #f7941d;
  border-left: 3px solid #f7941d;
  border-bottom: 3px solid #f7941d;
  border-right: 3px solid #f7941d;
  color: #ffffff;
  padding: 10px;
  border-top-left-radius: 20px !important;
  border-bottom-right-radius: 20px !important;
  transition:  0.3s ease-in-out;
  font-weight: 500;
  font-size: 26px;
  
  &:hover{
    animation:none;
   
    background-color: var(--primary-color);
    color: #fff;
    border-top: 3px solid var(--primary-color) !important;
    border-left: 3px solid var(--primary-color) !important;
    border-bottom: 3px solid var(--primary-color) !important;
    border-right: 3px solid var(--primary-color) !important;
    font-weight: 500;
    transition:  0.3s ease-in-out;
  }
}

.buttonorder {
  animation-duration: 2s;
   animation-name: shrink;

}

@keyframes shrink {
  0% {
    transform: scaleY(1);
  }

  49% {
    transform: scale(1.17, 01.17);
  }

 100% {
    transform: scaleY(1);
  }

}




.checkoutBorder{
  padding: 20px;
  border: 1px solid var(--primary-color);
  border-top: 7px solid var(--primary-color);
  border-bottom: 7px solid var(--primary-color);
  border-radius: 15px;
}

.formRadioControl{
  border: 1px solid rgb(192, 192, 192);
  border-radius: 5px;
  padding: 5px 10px;
  margin: 10px 0;
}

.text-note textarea {
    border-color: var(--primary-color);
    border-radius: 5px;
}

.form-control.PlaceHolderColorChange::placeholder {
    color: var(--primary-color) !important;
}

.orderBTN {
  background-color: #f7941d;  
  border-top: 3px solid #f7941d;
  border-left: 3px solid #f7941d;
  border-bottom: 3px solid #f7941d;
  border-right: 3px solid #f7941d;
  color: #ffffff;
  padding: 10px;
  border-top-left-radius: 20px !important;
  border-bottom-right-radius: 20px !important;
  transition:  0.3s ease-in-out;
  font-weight: 500;
  font-size: 26px;
}
.orderBTN:hover{
  background-color: var(--primary-color);
  color: #fff;
  border-top: 3px solid var(--primary-color) !important;
  border-left: 3px solid var(--primary-color) !important;
  border-bottom: 3px solid var(--primary-color) !important;
  border-right: 3px solid var(--primary-color) !important;
  font-weight: 500;
  transition:  0.3s ease-in-out;
}

.img{
    width: 50px;
}
.img img{
    border-radius: 0% !important;
}

.left {
  border: 1px solid var(--primary-color);
  padding: 15px;
  border-top: 4px solid var(--primary-color) !important;
  border-left: 4px solid var(--primary-color)!important;
  border-bottom: 1px solid var(--primary-color)!important;
  border-right: 2px solid var(--primary-color)!important;
  border-top-left-radius: 20px !important;
  border-bottom-right-radius: 20px !important;
}

.delivary-charge {
    padding: 7px 0px;
    border: 1px solid black;
    color:  var(--primary-color);

}
.left-text h5{
  font-weight: 800;
  font-size: 15px;
}

.line{
  border-bottom: 2px solid var(--primary-color);
}

.secend-box {
  box-shadow: 3px 5px 9px -3px rgba(0,0,0,0.7);
  -webkit-box-shadow: 3px 5px 9px -3px rgba(0,0,0,0.7);
  -moz-box-shadow: 3px 5px 9px -3px rgba(0,0,0,0.7);
  border: 1px solid var(--primary-color);
  border-top: 7px solid var(--primary-color);
  border-bottom: 7px solid var(--primary-color);
  border-radius: 15px;
}

.right-text i {
  margin: 0px 5px;
  border: 1px solid var(--primary-color);
  padding: 5px;
  border-radius: 50%;
  background-color: var(--primary-color);
  color: white;
}
.payment-text i {
  border: 1px solid var(--primary-color);
  padding: 2px;
  border-radius: 50%;
  background-color: var(--primary-color);
  color: white;
  font-size: 12px;
  margin-right: 6px;
}

.flag-discount {
    border-radius: 6px 0 0 6px;
    color: #fff;
    display: block;
    float: left;
    padding: 0px 5px;
    background: var(--primary-color);
    font-size: 15px;
    font-weight: 400;
    position: relative;
    margin-right: 20px;
}
.flag-discount::before,
.flag-discount::after {
    content: "";
    position: absolute;
    left: 100%;
    width: 0;
    height: 0;
    border-style: solid;
    display: block;
}
.flag-discount::before {
    top: 0;
    border-width: 22px 15px 0 0;
    border-color: var(--primary-color) transparent transparent transparent;
}
.flag-discount::after {
    bottom: 0;
    border-width: 0 15px 22px 0;
    border-color: transparent transparent var(--primary-color) transparent;
}


/* input quantity start */


.checkout-page-action{
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}

.checkout-page-action button i {
  width: 35px;
  height: 35px;
  font-size: 14px;
  line-height: 35px;
  border-radius: 6px;
  text-align: center;
  display: inline-block;
  color: var(--text);
  background: var(--chalk);
  text-shadow: var(--primary-tshadow);
  transition: all linear .3s;
  -webkit-transition: all linear .3s;
  -moz-transition: all linear .3s;
  -ms-transition: all linear .3s;
  -o-transition: all linear .3s;
}

.checkout-page-action button i:hover {
  color: var(--white);
  background: var(--primary-color);
}

.checkout-page-action input {
  width: 17% !important;
  font-size: 15px;
  margin: 0px 5px;
  padding: 6px 0px;
  border-radius: 6px;
  text-align: center;
  color: var(--white);
  background: var(--primary-color);
  text-shadow: var(--primary-tshadow);
}

/* input quantity end */



.is-coupon{
  padding: 10px;
}
.isRoted{
  transform: rotate(180deg);
  transition: all 0.5s;
}
.fa-chevron-down{
  transition: all 0.5s;
}

#btnGroupAddon{
  cursor: pointer;
}

@media (max-width: 425px) {
  .hideElementInPhoneVersion{
    display: none;
  }

  .checkout-page-action input{
    width: 40%;
    color: #000000;
    background: #f5f6f7;
  }

  .table-hover>tbody>tr:hover .checkout-page-action input{
    background: #e3e4e5;
  }

  .quantity-plus-btn, .quantity-minus-btn{
    width: 30%;
  }

  .checkout-page-action button i{
    width: 24px;
  }

}

</style>