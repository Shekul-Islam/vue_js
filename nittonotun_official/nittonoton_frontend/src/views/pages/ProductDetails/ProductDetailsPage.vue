<script setup>
// All Import File  Code Is Here......................................................................................................
import { ref, onMounted, watch } from "vue";
import { useRoute } from "vue-router";
import { useProduct, useCart, useNotification, useShop } from "@/stores";
import { storeToRefs } from "pinia";
import { CartSideBar, MobileMenu, BannerPart, ProductCard, ProductView, CategorySideBar, NavSideBar } from "@/components";
import BeatLoader from "vue-spinner/src/BeatLoader.vue";
import axiosInstance from "@/services/axiosService.js";
import VueMagnifier from "@websitebeaver/vue-magnifier";
import "@websitebeaver/vue-magnifier/styles.css";

// All Variable  Code Is Here.....................................................................................................
const product = useProduct();
const singleProduct = ref();
const { productById,  loading, productVariations } = storeToRefs(product);
const route = useRoute();
const shop = useShop();
const { products } = storeToRefs(shop);

const cart = useCart();
const { loadings } = storeToRefs(cart);
const isloadings = ref(loadings);
const notify = useNotification();
const price = ref();

const sizeId = ref();
const productPrices = ref();
const sizeName = ref();
const selectedSize = ref();

const isloading = ref(loading);
const color = "white";
const size = "8px";
const quantityInput = ref(1);
const categoryId = ref([]);
const playUtube = ref(false);


// social Icons start
const socialShares = ref("");
// social Icons end
// related product start
const relatedProducts = ref('');
// related product end

// product counter  start
const startDate = ref("");
const productTimer = ref(true);
const date = new Date();
const year = date.getFullYear();
const month = (date.getMonth() + 1).toString().padStart(2, '0');
const day = date.getDate().toString().padStart(2, '0');
const hours = date.getHours().toString().padStart(2, '0');
const minutes = date.getMinutes().toString().padStart(2, '0');
const seconds = date.getSeconds().toString().padStart(2, '0');

startDate.value = `${year}-${month}-${day} ${hours}:${minutes}:${seconds}`;
// product counter end

const thumbnailImage = ref(null);
const activeImage = ref(0);
const images = ref([]);
const changeImage = (img, index) => {
  thumbnailImage.value = img;
  activeImage.value = index;
  playUtube.value = false;
};

const productByid = async () => {
  const res = await product.productById(route.params.id);
  categoryId.value.push(res?.category_id);
  startCountdown(startDate.value, res.countdown_end_time);
};

const getPrices = async (sizeI, name) => {
  try {
    const res = await axiosInstance.get(`/products/${route.params.id}/${sizeI}`);
    selectedSize.value = sizeI;
    productPrices.value = res.data.result;
  } catch (error) {
    console.log(error);
  }
  sizeName.value = name;
};

function addToCart(tProduct) {
  console.log(tProduct);

  if (productPrices.value) {
    cart.addToCart({
      item_id: tProduct.id,
      name: tProduct.name,
      mrp: productPrices.value.mrp,
      offer_price: productPrices.value.offer_price,
      image: tProduct.image,
      size_id: productPrices.value.size_id,
      quantity: quantityInput.value,
      free_shipping: tProduct.free_shipping,
    });

    notify.Success(`${tProduct.name} Successfully Added Your Cart Item`);
  } else {
    cart.addToCart({
      item_id: tProduct.id,
      name: tProduct.name,
      mrp: tProduct.mrp,
      offer_price: tProduct.offer_price,
      image: tProduct.image,
      size_id: "",
      quantity: quantityInput.value,
      free_shipping: tProduct.free_shipping,
    });

    notify.Success(`${tProduct.name} Successfully Added Your Cart Item`);
  }
}

const incrementCartItem = () => {
  if (sizeId.value !== null) {
    quantityInput.value = parseInt(quantityInput.value) + 1;
  }
};
const decrementCartItem = () => {
  if (quantityInput.value != 1) {
    quantityInput.value = parseInt(quantityInput.value) - 1;
  }
};

// social media link  start

const socialMedia = async () => {
  try {
    const res = await axiosInstance.get("/social-medias");
    socialShares.value = res.data.result;
  } catch (error) {
    console.log(error);
  }
};

const socialIcons = (socialType) => {
  const iconMapping = {
    Facebook: "fab fa-facebook-f",
    Twitter: "fab fa-twitter",
    Whatsapp: "fab fa-whatsapp",
    Messenger: "fab fa-facebook-messenger",
    Linkedin: "fab fa-linkedin",
    Instagram: "fab fa-instagram",
    Phone: "fas fa-phone",
  };
  return iconMapping[socialType] || "default-icon-class";
};

const socialURL = (socialType, socialUrl) => {
  const iconMapping = {
    Facebook: `https://www.facebook.com/${socialUrl}/`,
    Twitter: `https://www.twitter.com/${socialUrl}/`,
    Whatsapp: `https://wa.me/+88${socialUrl}?text=Hello!`,
    Messenger: `https://www.messenger.com/t/${socialUrl}/`,
    Linkedin: `https://www.linkedin.com/${socialUrl}/`,
    Instagram: `https://www.instagram.com/${socialUrl}/`,
    Phone: `https://m.me/+88${socialUrl}`,
  };
  return iconMapping[socialType] || "default-icon-class";
};

// social media link  end

// Related product  start
const getRelatedProductData = async (catId) => {
  let type = "";
  let brand = [];
  let subCategory = [];
  let price = [];
  let search = "";
  let paginateSize = 8;
  const res = await shop.getData(type, brand, catId, subCategory, price, search, paginateSize);
  relatedProducts.value = res.data;
};

// product changes function 

const productChangesFunction = async() => {
  singleProduct.value = await product.productById(route.params.id);
}
// product detials changes start
watch(() => route.params.id, (newValue, oldValue) => {
  productChangesFunction();
});
// product detials changes end
watch(
  categoryId,
  (newValue, oldValue) => {
    getRelatedProductData(newValue);
  },
  { deep: true }
);

// Related product end


// video url setup start

const getEmbedUrl = (watchUrl) => {
  const videoIdMatch = watchUrl.match(/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/);
  const videoId = (videoIdMatch && videoIdMatch[1]) || '';
  
  return `https://www.youtube.com/embed/${videoId}`;
}

// video url setup end


// footer navbar Start

const testing = () => {
  const innerSection = document.querySelector('.inner-section');
  const mainFooterNavSection = document.querySelector('.main-footer-nav-section');

  window.addEventListener('scroll', () => {
    const scrollTopWindow = window.pageYOffset;
    if (scrollTopWindow > 80) {
      mainFooterNavSection.style.bottom = '0px';
      mainFooterNavSection.style.transition = 'all .5s ease';
      mainFooterNavSection.style.opacity = '1';
    }else{
      mainFooterNavSection.style.bottom = '-115px';
      mainFooterNavSection.style.transition = 'all .5s ease';
      mainFooterNavSection.style.opacity = '0';
    }
  });

  if (innerSection) {
    innerSection.addEventListener('scroll', () => {
      const scrollTopInnerSection = innerSection.scrollTop;
      if (scrollTopInnerSection > 80) {
        mainFooterNavSection.style.bottom = '0px';
        mainFooterNavSection.style.transition = 'all .5s ease';
        mainFooterNavSection.style.opacity = '1';
      }else{
        mainFooterNavSection.style.bottom = '-115px';
        mainFooterNavSection.style.transition = 'all .5s ease';
        mainFooterNavSection.style.opacity = '0';
      }
    });
  }
}


// product counter start

const time = {
  days: ref(0),
  hours: ref(0),
  minutes: ref(0),
  seconds: ref(0),
};

let timer = null;

const padSingleDigit = (num) => {
  return num < 10 ? `0${num}` : `${num}`;
}

// Function to parse startDate if it's in a non-standard format
const parseStartDate = (startDate) => {
  const parts = startDate.split(/[- :]/);
  return new Date(parts[0], parts[1] - 1, parts[2], parts[3], parts[4], parts[5]);
};


const startCountdown = (startDate, endDate) => {
    //end Date
  const targetDate = new Date(endDate).getTime();

    const parsedStartDate = parseStartDate(startDate);

    timer = setInterval(() => {
    //Start Date
    const now = new Date().getTime();
    const distance = targetDate - now;

     const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Update values with padded single digits without quotes
    time.days.value = padSingleDigit(days);
    time.hours.value = padSingleDigit(hours);
    time.minutes.value = padSingleDigit(minutes);
    time.seconds.value = padSingleDigit(seconds);

    if (distance < 0) {
      clearInterval(timer);
      time.days.value = '00';
      time.hours.value = '00';
      time.minutes.value = '00';
      time.seconds.value = '00';

       productTimer.value = false;
    }
  }, 1000);
};

// product counter end

// footer navbar End

onMounted(() => {
  testing()
  productChangesFunction();
  productByid();
  socialMedia();
  getPrices();
  $(document).ready(function () {
    $(".venobox").venobox();
  });
});

</script>

<template>
  <div>
    <!--=====================================
                CATEGORY SIDEBAR PART START
        =======================================-->
      <CategorySideBar />
    <!--=====================================
                CATEGORY SIDEBAR PART END
        =======================================-->

    <!--=====================================
                  NAV SIDEBAR PART START
        =======================================-->
    <NavSideBar />
    <!--=====================================
                  NAV SIDEBAR PART END
        =======================================-->
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
    <BannerPart :title="singleProduct?.name" />
    <!--=====================================
                    BANNER PART END
        =======================================-->

    <!--=====================================
                  CART SIDEBAR PART START
        =======================================-->
    <CartSideBar />
    <!--=====================================
                    CART SIDEBAR PART END
        =======================================-->

        <!--=====================================
                    PRODUCT VIEW START
        =======================================-->
    <ProductView />
    <!--=====================================
                    PRODUCT VIEW END
        =======================================-->

    <!--=====================================
                PRODUCT DETAILS PART START
        =======================================-->
    <section class="inner-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="details-gallery">
              <div class="details-label-group">
                <label class="details-label new" v-if="!playUtube">{{ singleProduct?.type }}</label>
                <label class="details-label off" v-if="!playUtube">{{ singleProduct?.discount }}%</label>
              </div>
              <!-- card left -->
              <div class="product-imgs">
                <div class="img-display">
                  <div :class="playUtube ? 'img-utube-video' : 'img-showcase'">
                    <!-- {{ singleProduct?.images }} -->

                    <!-- <VueMagnifier
                      :src="singleProduct?.image"
                      width="100%"
                      mgShape="square"
                      height="auto"
                      mgWidth="300"
                      mgHeight="300"
                      className="border-radius"
                      alt="shoe image"
                      v-if="thumbnailImage == null"
                    />
                    <VueMagnifier
                      :src="thumbnailImage"
                      width="100%"
                      height="auto"
                      mgShape="square"
                      mgWidth="300"
                      mgHeight="300"
                      alt="shoe image"
                      v-else
                    /> -->

                    <span v-if="playUtube">
                      <div class="videoHW">
                        <iframe class="mt-5" :src="getEmbedUrl(singleProduct?.video_url)" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>              
                      </div>
                    </span>
                    <span v-else>
                      <img :src="singleProduct?.image" alt="shoe image" v-if="thumbnailImage == null" />
                      <img :src="thumbnailImage" alt="shoe image" v-else />
                    </span>
                  </div>
                </div>
                <div class="img-select">
                  <div class="img-item" v-for="(img, index) in singleProduct?.images" :key="index" :class="[activeImage == index ? 'active-thumb' : '']" >
                    <img :src="img.image" alt="shoe image" @click.prevent="changeImage(img.image, index)" />
                  </div>
                  <div class="img-item d-flex align-items-center p-3" v-if="singleProduct?.video_url">
                    <img src="@/assets/images/utubeplaybtn.png" alt="shoe image" @click.prevent="playUtube =! playUtube"/>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12 mt-3">
            <div class="details-content">
              <h3 class="details-name"><a href="#">{{ singleProduct?.name }}</a></h3>
              <div class="details-meta">
                <p v-if="singleProduct?.sku">
                  SKU:<span>{{ singleProduct?.sku }}</span>
                </p>
                <p>
                  BRAND:<a href="#">{{ singleProduct?.brand }}</a>
                </p>
              </div>
              <template v-if="singleProduct?.product_prices.length > 0">
                <h3 class="details-price" v-if="!productPrices">
                  <span v-for="(productsPrice, index) in singleProduct?.product_prices" :key="index">
                    <span v-if="productsPrice.is_default == 1">
                      <span v-html="$filters.productPrice(productsPrice)"></span>
                    </span>
                  </span>
                </h3>
                <h3 class="details-price" v-else>
                  <span v-html="$filters.productPrice(productPrices)"></span><span class="productPerPis" v-if="productPrices?.offer_price != 0">ডিসকাউন্ট পাচ্ছেন {{ Math.round(productPrices?.mrp - productPrices?.offer_price) }} TK </span>
                </h3>
              </template>
              <template v-else>
                <h3 class="details-price" v-if="singleProduct?.offer_price == 0">
                  <span>{{ $filters.currencySymbol(singleProduct?.mrp) }}</span>
                </h3>
                <h3 class="details-price" v-else>
                  <del>{{ $filters.currencySymbol(singleProduct?.mrp) }}</del> <span>{{ $filters.currencySymbol(singleProduct?.offer_price) }}</span>
                </h3>
              </template>
              <div class="details-list-group mt-3">
                <label class="details-list-title" v-show="singleProduct?.product_prices.length > 0"
                  >Quantity :</label
                >
                <ul class="details-tag-list">
                  <li v-for="(size, index) in singleProduct?.product_prices" :key="index" id="main">
                    <a
                      :class="{ selectedSizeColor: size.size_id === selectedSize }"
                      href="#"
                      @click.prevent="getPrices(size.size_id, size.name)"
                      >{{ size.name }}</a
                    >
                  </li>
                </ul>
              </div>
              <div class="d-md-flex align-items-center m-auto mt-3 mt-lg-0" data-countdown="2021/12/31" v-if="productTimer">
                  <span class="couter-span-tag d-flex justify-content-center">এই অফারটি শেষ হতে বাকী আর মাত্র  </span>
                    <div class="d-flex justify-content-center my-4">
                      <span class="countdown-time"><span>{{ time.days.value }}</span><small>দিন</small></span>
                      <span class="countdown-time"><span>{{ time.hours.value }}</span><small>ঘন্টা</small></span>
                      <span class="countdown-time"><span>{{ time.minutes.value }}</span><small>মিনিট</small></span>
                      <span class="countdown-time"><span>{{ time.seconds.value }}</span><small>সেকেন্ড</small></span>
                    </div>
              </div>
              <!-- <div class="details-list-group">
                <label class="details-list-title" v-show="socialShares.length > 0"
                  >Share:</label
                >
                <ul class="details-share-list">
                  <li v-for="(socialShare, index) in socialShares" :key="index">
                    <a :href="socialURL(socialShare.type, socialShare.contact)" target="_blank" title=""
                      ><i :class="socialIcons(socialShare.type)"></i
                    ></a>
                  </li>
                </ul>
              </div> -->
              <template v-if="singleProduct?.short_description">
                <p class="details-desc" v-html="singleProduct?.short_description"></p>
              </template>
              
              <div class="details-add-group" v-if="singleProduct?.product_prices.length > 0">
                <div class="row">
                  <span
                    class="row d-block text-center text-danger"
                    v-if="productPrices == null"
                    >প্রথমে কোয়ানটিটি সিলেক্ট করুন তারপর<span class="fw-bold">অর্ডার করুন</span> বাটনে ক্লিক করুন অথবা<span class="fw-bold">কার্টে যোগ করুন</span>বাটনে ক্লিক করুন </span
                  >
                  <div class="col-md-6 mt-2">
                    <div class="quentyDefaultClass">
                      <button
                        class="action-minus"
                        :disabled="productPrices == null ? true : false"
                        @click.prevent="decrementCartItem"
                        title="Quantity Minus"
                      >
                        <i class="icofont-minus"></i>
                      </button>
                      <input
                        class="action-input text-center"
                        :class="selectedSize == null ? 'disabled' : ''"
                        title="Quantity Number"
                        type="text"
                        name="quantity"
                        v-model="quantityInput"
                      />
                      <button
                        class="action-plus"
                        :disabled="productPrices == null ? true : false"
                        @click.prevent="incrementCartItem"
                        title="Quantity Plus"
                      >
                        <i class="icofont-plus"></i>
                      </button>
                    </div>
                  </div>
                  <div class="col-md-6 mt-2" v-if="selectedSize">
                    <router-link
                      :to="{ name: 'checkoutPage' }"
                      :disabled="productPrices == null ? true : false"
                      class="product-add bg-warning text-dark main-order-btn"
                      @click.prevent="addToCart(singleProduct)"
                      :class="selectedSize == null ? 'disabled' : ''"
                    >
                      <i class="fas fa-shopping-basket fs-4"></i>
                      <span class="order-btn">অর্ডার করুন</span>
                    </router-link>
                  </div>
                  <div class="col-md-6 mt-2" v-else>
                    <a :disabled="productPrices == null ? true : false"
                      class="product-add bg-warning text-dark main-order-btn"
                      :class="selectedSize == null ? 'disabled' : ''"
                    >
                      <i class="fas fa-shopping-basket fs-4"></i>
                      <span class="order-btn">অর্ডার করুন</span>
                    </a>
                  </div>
                </div>
                
                <div class="row mt-lg-3 mt-0">
                  <div class="col-md-6 mt-2">
                    <button
                      class="product-add"
                      title="Add to Cart"
                      :disabled="productPrices == null ? true : false"
                      :class="selectedSize == null ? 'disabled' : ''"
                      @click.prevent="addToCart(singleProduct)"
                    >
                      <template v-if="isloading">
                        <beat-loader
                          :loading="loading"
                          :color="color"
                          :size="size"
                        ></beat-loader>
                      </template>
                      <template v-else><i class="fas fa-shopping-basket"></i></template>
                      <span>কার্টে যোগ করুন</span>
                    </button>
                  </div>
                  <div class="col-md-6 mt-2">
                    <a href="tel:+8801886096958" class="product-add bg-success"><span>যে কোন প্রয়োজনে হট লাইন নাম্বারে কল করুন : <span class="fw-bold"><i class="fas fa-phone-alt"></i> 01886096958</span></span></a>
                  </div>
                </div>
              </div>

              <div class="details-add-group" v-else>
                <div class="row">
                  <div class="col-md-6 mt-2">
                    <div class="quentyDefaultClass">
                      <button
                        class="action-minus"
                        @click.prevent="decrementCartItem"
                        title="Quantity Minus"
                      >
                        <i class="icofont-minus"></i>
                      </button>
                      <input
                        class="action-input text-center"
                        title="Quantity Number"
                        type="text"
                        name="quantity"
                        v-model="quantityInput"
                      />
                      <button
                        class="action-plus"
                        @click.prevent="incrementCartItem"
                        title="Quantity Plus"
                      >
                        <i class="icofont-plus"></i>
                      </button>
                    </div>
                  </div>

                  <div class="col-md-6 mt-2">
                    <router-link
                      :to="{ name: 'checkoutPage' }"
                      class="product-add bg-warning text-dark main-order-btn"
                      title="Add to Cart"
                      @click.prevent="addToCart(singleProduct)"
                    >
                      <i class="fas fa-shopping-basket"></i>
                      <span class="order-btn">অর্ডার করুন</span>
                    </router-link>
                  </div>
                </div>

                <div class="row mt-2">
                  <div class="col-md-6 mt-2">
                    <button
                      class="product-add"
                      title="Add to Cart"
                      @click.prevent="addToCart(singleProduct)"
                    >
                      <template v-if="isloading">
                        <beat-loader
                          :loading="loading"
                          :color="color"
                          :size="size"
                        ></beat-loader>
                      </template>
                      <template v-else><i class="fas fa-shopping-basket"></i></template>
                      <span>কার্টে যোগ করুন</span>
                    </button>
                  </div>
                  <div class="col-md-6 mt-2">
                    <a href="tel:+8801886096958" class="product-add bg-success"><span>যে কোন প্রয়োজনে হট লাইন নাম্বারে কল করুন : <span class="fw-bold"><i class="fas fa-phone-alt"></i> 01886096958</span></span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=====================================
                PRODUCT DETAILS PART END
        =======================================-->

    <!--=====================================
                  PRODUCT TAB PART START
        =======================================-->
    <section class="inner-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <ul class="nav nav-tabs">
              <li v-if="singleProduct?.description">
                <a href="#tab-desc" class="tab-link active" data-bs-toggle="tab"
                  >descriptions</a
                >
              </li>
              <li>
                <a href="#tab-spec" class="tab-link" data-bs-toggle="tab"
                  >Specifications</a
                >
              </li>
            </ul>
          </div>
        </div>
        <div class="tab-pane fade show active" id="tab-desc">
          <div class="row">
            <div class="col-lg-12 order-lg-1 order-2" v-if="singleProduct?.description">
              <div class="product-details-frame">
                <div class="tab-descrip text-dark" v-html="singleProduct?.description"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="tab-spec">
          <div class="row">
            <div class="col-lg-12">
              <div class="product-details-frame">
                <table class="table table-bordered">
                  <tbody>
                    <tr v-if="singleProduct?.sku">
                      <th scope="row">Product code</th>
                      <td>SKU: {{ singleProduct?.sku }}</td>
                    </tr>
                    <tr v-if="singleProduct?.category">
                      <th scope="row">Category</th>
                      <td>{{ singleProduct?.category }}</td>
                    </tr>
                    <tr v-if="singleProduct?.brand">
                      <th scope="row">Brand</th>
                      <td>{{ singleProduct?.brand }}</td>
                    </tr>
                    <tr v-if="singleProduct?.type">
                      <th scope="row">Type</th>
                      <td>{{ singleProduct?.type }}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=====================================
                    PRODUCT TAB PART END
        =======================================-->

        <div class="main-footer-nav-section">
          <div class="container">
              <div class="row">
              <div class="col-lg-7 col-md-6">
                <div class="footer-nav-left">
                  <img :src="singleProduct?.image" alt="">
                  <p>{{ singleProduct?.name }}</p>
                </div>
              </div>
              <div class="col-lg-5 col-md-6 d-flex align-center main-nav-footer">
                <div class="footer-nav-right">
                  <div class="price me-2" v-if="singleProduct?.product_prices.length > 0">
                    <template v-if="!productPrices">
                      <span v-for="(productPrice, index) in singleProduct?.product_prices" :key="index">
                        <span v-if="productPrice?.is_default==1">
                          <del class="text-danger" style="font-size: 16px;" v-if="productPrice?.offer_price != 0">{{ $filters.currencySymbol(productPrice?.mrp * quantityInput) }}</del><span class="text-danger" >{{  $filters.currencySymbol(productPrice?.offer_price ? productPrice?.offer_price * quantityInput :  productPrice?.mrp * quantityInput) }}</span>
                        </span>
                      </span>
                    </template>
                    <template v-else>
                      <span v-html="$filters.productPrice(productPrices)"></span>
                    </template>
    
                  </div>
                  <div class="price me-2" v-else>
                    <h3 class="text-danger" v-if="singleProduct?.offer_price != 0">
                      <del class="text-danger">{{ $filters.currencySymbol(singleProduct?.mrp * quantityInput) }}</del>
                      {{ $filters.currencySymbol(singleProduct?.offer_price ? singleProduct?.offer_price * quantityInput : singleProduct?.mrp * quantityInput) }}
                    </h3>
                    <h3 class="text-danger" v-else>
                      {{ $filters.currencySymbol(singleProduct?.mrp * quantityInput) }}
                    </h3>
                  </div>
                  <div class="footer-nav-cart" v-if="singleProduct?.product_prices.length > 0 ">
                    <button type="button" @click.prevent="decrementCartItem()" id="decrement">-</button>
                    <input  type="number" v-model="quantityInput" :class="productPrices == null?'disabled':''" id="quantity" class="mx-2">
                    <button type="button" @click.prevent="incrementCartItem()" id="increment" >+</button>
                    <router-link :to="{ name: 'checkoutPage' }" @click.prevent="addToCart(singleProduct)" :class="productPrices == null?'disabled':''" type="button" class="mx-2 btnColor" v-if="selectedSize">অর্ডার করুন</router-link>
                    <a :class="productPrices == null?'disabled':''" type="button" class="mx-2 btnColor" v-else>অর্ডার করুন</a>
                 </div>
                  <div class="footer-nav-cart" v-else>
                      <button type="button" @click.prevent="decrementCartItem()" id="decrement">-</button>
                      <input  type="number" v-model="quantityInput" :class="{ 'disabled': productPrices == null}" id="quantity" class="mx-2">
                      <button type="button" @click.prevent="incrementCartItem()" id="increment" >+</button>
                      <router-link :to="{ name: 'checkoutPage' }" @click.prevent="addToCart(singleProduct)"  type="button" class="mx-2 btnColor">অর্ডার করুন</router-link>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


    <!--=====================================
                 PRODUCT Up Sale Product PART START
        =======================================-->
    <section class="inner-section" v-if="singleProduct?.up_sell_products.length > 0">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="section-heading">
              <h2>Up Sell Products</h2>
            </div>
          </div>
        </div>
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4">
          <div
            class="col"
            v-for="(upSellProducts, index) in singleProduct?.up_sell_products"
            :key="index"
          >
            <ProductCard :product="upSellProducts" />
          </div>
        </div>
      </div>
    </section>
    <!--=====================================
                 PRODUCT Up Sale Product PART END
        =======================================-->
    <!--=====================================
                 PRODUCT RELATED PART START
        =======================================-->
    <section class="inner-section" v-if="relatedProducts.length > 0">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="section-heading">
              <h2>Related Products</h2>
            </div>
          </div>
        </div>
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4">
          <div
            class="col"
            v-for="(relatedProduct, index) in relatedProducts"
            :key="index"
          >
            <ProductCard :product="relatedProduct" />
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="section-btn-25">
              <router-link
                :to="{ name: 'shopPage', query: { category: categoryId } }"
                class="btn btn-outline"
              >
                <i class="fas fa-eye"></i>
                <span>view all related</span>
              </router-link>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=====================================
                 PRODUCT RELATED PART END
        =======================================-->
  </div>
</template>

<style scoped>
@import "@/assets/css/product-details.css";

.order-btn{
  font-size: 25px !important;
  font-weight: 700 !important;
}

.couter-span-tag{
      padding: 15px;
      border-radius: 51px;
      font-size: 26px;
      background-color: #ff0000;
      color: white;
  }

.productPerPis {
  color: #fff !important;
  font-size: 16px;
  background-color: var(--secend-primary-color);
  border-radius: 5px;
  padding: 5px;
  margin-left: 7px;
}

/* video section start */
.videoHW iframe{
  width: 633px !important;
  height: 393px !important;
}

.img-utube-video{
  text-align: center;
}

/* video section end */


.singlePGAddbtn{
  background-color: #000000;
  color: white;
  padding: 10px 74px;
  border-radius: 5px;
}

.singlePGOrderbtn{
  background-color: #ff0000;
  color: white;
  padding: 10px 74px;
  border-radius: 5px;
}

.product-add, .action-input{
  width: 100% !important;
}


.disabled {
  background: #6fa38d !important;
}

.border-radius {
  border-radius: 12px;
}

img {
  width: 140%;
  display: block;
}

.img-item img{
  width: 100%;
}
.img-display {
  overflow: hidden;
}

.img-showcase {
  display: flex;
  width: 85%;
  transition: all 0.5s ease;
  justify-content: center;
}

.img-showcase img {
  min-width: 35%;
}

.img-select {
  display: grid;
  grid-template-columns: 25% 25% 25% 25%;
  justify-content: center;
  width: 50%;
  margin: auto;
}

.img-item {
  margin: 4px;
  border: 1px solid #d5d5d5;
  box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
}



.img-item:hover {
  opacity: 0.8;
}

.active-thumb {
  border: 2px solid #2f5597;
}


.img-select {
  margin-top: 14px;
}

.selectedSizeColor {
  color: var(--black) !important;
  background-color: var(--secend-primary-color) !important;
}

.quentyDefaultClass {
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.quentyDefaultClass button {
  font-size: 28px;
}

.quentyDefaultClass input {
  margin: 0px 8px;
  border-radius: 5px;
}




/* footer nav */

.btnColor{
  background-color: #198754;
  color: rgb(255, 255, 255);
  padding: 9px 32px;
  border-radius: 5px;
}

input[type="number"] {
      width: 40px;
      text-align: center;
    }

    /* Style the increment and decrement arrows */
    input[type="number"]::-webkit-inner-spin-button,
    input[type="number"]::-webkit-outer-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    input[type="number"] {
      -moz-appearance: textfield;
    }

    

.main-footer-nav-section{
  background-color: #ffffff;
  padding: 20px;
  box-shadow: 0px -7px 16px -4px rgba(0,0,0,0.69);
  -webkit-box-shadow: 8px -9px 24px -12px rgba(5,19,3,0.69);
  -moz-box-shadow: 0px -7px 16px -4px rgba(0,0,0,0.69);
  position: fixed;
  bottom: -115px;
  transition: all .5s ease;
  width: 100%;
  z-index: 9999;
}

.main-nav-footer{
  justify-content: end;
}

/* right */

.footer-nav-right{
  display: flex;
  align-items: center;
}
.price{
  display: flex;
}
.price h3{
  font-size: 22px;
  margin-right: 5px;

}

.footer-nav-cart{
  display: flex;
  align-items: center;
}
.footer-nav-cart input{
    /* width: 57px; */
    border: 1px solid #494B51;
    height: 40px;
    padding: 9px;
    margin-right: 10px;
}
.footer-nav-cart button{
  padding: 6px 9px;
  border: 1px solid var(--primary-color);
  background-color: var(--primary-color);
  color: white;
  border-radius: 5px;
}


/* left */
.footer-nav-left{
  display: flex;
  align-items: center;
  
}
.footer-nav-left img{
  width: 50px;
  margin-right: 10px;
}
.footer-nav-left p{
  font-size: 20px;
  align-items: center;
  margin: 0;
}

input[type=number]::-webkit-inner-spin-button {
  color: #8bc4a1;
}

.sometimes {
  position: sticky;
  top: 0; 
}

@media (max-width: 1399px) {
  .details-label-group{
    top: 17px;
    left: 19rem;
 }
  img {
    width: 50%;
    display: block;
  }


  .banner-category-list {
    width: 14%;
  }
}

@media (max-width: 1199px) {
  .details-label-group{
    top: 17px;
    left: 15rem;
 }

 .couter-span-tag[data-v-c230a133] {
    font-size: 15px;
  }
}


@media (max-width: 1024px) {

  .img-showcase {
    width: 99%;
  }

  .img-showcase img{
    width: 103%;
  }

  .videoHW iframe {
    width: 466px !important;
    height: 322px !important;
}
  
  .details-label-group{
    top: 17px;
    left: 12rem;
  }
  
  .main-footer-nav-section{
    padding: 15px;
  }

  .footer-nav-left p {
    font-size: 20px;
    line-height: 27px;
  }

  .price{
    display: flex;
    flex-direction: column;
  }
  .price h3 {
    font-size: 17px;
}


  .footer-nav-cart button {
    padding: 6px 7px;
  }


  .btnColor{
      padding: 9px 5px;
  }

  .couter-span-tag {
    font-size: 19px;
  }


}

@media (max-width: 991px){
  .countdown-time {
    padding: 5px 5px;
  }
  .couter-span-tag{
    font-size: 17px;
}
}


@media (max-width: 768px) {

  .videoHW iframe{
    width: 519px !important;
    height: 400px !important;
  }

  .img-showcase {
    width: 90%;
  }

  .img-showcase img{
    width: 117%;
  }
  
  .img-select{
    width: 76%;
  }
  
  
  .details-label-group{
    top: 17px;
    left: 6rem;
  }
  
  .footer-nav-left img{
    display: none;
  }
  .main-footer-nav-section{
    padding: 15px;
  }

  .footer-nav-left p {
    font-size: 20px;
    line-height: 27px;
  }

  .price{
    display: flex;
    flex-direction: column;
  }
  .price h3 {
    font-size: 17px;
}

#increment , #decrement{
    background-color: rebeccapurple; 
    display: none;
  }

  .footer-nav-cart button {
    padding: 6px 12px;
  }

.footer-nav-cart input {
    border: 1px solid #494B51;
    height: 40px;
    padding: 9px;
}

.btnColor {
    padding: 9px 6px;
}

  .couter-span-tag{
    font-size: 16px;
  }

  .countdown-time{
    padding: 5px 7px;
  }

  


}




@media (max-width: 425px) {
  .main-order-btn{
    width: 80% !important;
    margin: auto;
    font-size: 25px;
    font-weight: 700;
  }


  .videoHW iframe{
    width: 355px !important;
    height: 220px !important;
  }

  .quentyDefaultClass {
    margin: 16px 0px;
  }

  .quentyDefaultClass input {
    width: 260px;
  }

  img {
    width: 100%;
    display: block;
  }

  .img-item{
    margin-right: 10px !important;
  }
  
  .img-select{
    width: 100%;
  }

  .details-label-group{
    top: 17px;
    left: 1rem;
 }

  .footer-nav-left{
    display: none;
  }

  .price{
    display: none;
  }
  .footer-nav-cart{
    display: flex;
    justify-content: space-between;
  }
  
  .footer-nav-cart button {
    padding: 6px 80px;
  }

  .main-nav-footer{
    justify-content: space-around;
  }

  .couter-span-tag{
    font-size: 20px;
  }

  .countdown-time{
    padding: 5px 7px;
  }
}

@media (max-width: 375px) {

  .videoHW iframe{
    width: 305px !important;
    height: 170px !important;
  }

  .quentyDefaultClass {
    margin: 16px 0px;
  }

  .quentyDefaultClass input {
    width: 200px;
  }

  .footer-nav-cart button {
    padding: 6px 55px;
  }
  .couter-span-tag {
    font-size: 17px;
  }
}

@media (max-width: 320px) {

  .videoHW iframe{
    width: 251px !important;
    height: 150px !important;
  }
  .quentyDefaultClass {
    margin: 16px 0px;
  }

  .quentyDefaultClass input {
    width: 150px;
  }

  .footer-nav-cart button {
    padding: 6px 29px;
  }
  .couter-span-tag {
    font-size: 14px !important;
  }
}

</style>
