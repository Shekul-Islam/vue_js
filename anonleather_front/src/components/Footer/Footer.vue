<script setup>
// All Import File  Code Is Here......................................................................................................
import { onMounted, ref, watch  } from "vue";
import { storeToRefs } from 'pinia';
import {useSetting} from '@/stores'
import axiosInstance from "@/services/axiosService.js";
// All Variable  Code Is Here.....................................................................................................
const setting      = useSetting();
const { settings } = storeToRefs(setting);
const email        = ref()
const logo         = ref()
const address      = ref()
const phone        = ref()
const description  = ref()
const facebook     = ref()
const whatsapp     = ref()
const title        = ref()
const fbPageUrl    = ref('https://www.facebook.com/servicekeybd')
const socialShares = ref("");

const getSettingsData = () => {
  if (!settings.value.data || !Array.isArray(settings.value.data)) {
    console.warn("Settings data is not available yet.");
    return;
  }

  settings.value.data.forEach((ele) => {
    if (ele.key === "footer_email") {
      email.value = ele;
    }
    if (ele.key === "facebook_id") {
      facebook.value = ele;
      fbPageUrl.value = ele.value;
    }
    if (ele.key === "footer_address") {
      address.value = ele;
    }
    if (ele.key === "phone_number") {
      phone.value = ele;
    }
    if (ele.key === "footer_description") {
      description.value = ele;
    }
    if (ele.key === "footer_logo") {
      logo.value = ele;
    }
    if (ele.key === "whatsapp_number") {
      whatsapp.value = ele;
    }
    if (ele.key === "title") {
      title.value = ele;
    }
  });
};

watch(
  () => settings.value.data,
  (newData) => {
    if (newData && Array.isArray(newData)) {
      getSettingsData();
    }
  },
  { immediate: true }
);

const getLogo = async () => {
  const settingData = await setting.getData('key', 'footer_logo');
  logo.value = settingData.data[0];  
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



onMounted(() => {
    getSettingsData(); 
    getLogo();
    // socialMedia();
    // Load the Facebook SDK script here
    const script = document.createElement('script');
        script.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v18.0';
        script.async = true;
        script.defer = true;
        script.crossOrigin = 'anonymous';
        script.nonce = 'isN1HXTF';

        // Append the script to the document's body
        document.body.appendChild(script);
})
</script>

<template>
  <div>
    <footer class="pt-5 main-section-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-xl-3">
            <div class="footer-widget">
              <router-link :to="{ name: 'homePage'}" class="footer-logo">
                <img :src="logo?.value" alt="logo" />
              </router-link>
              <p class="footer-desc text-light">{{ description?.value }}</p>
              <ul class="footer-social" v-show="socialShares?.data?.length > 0">
                <li v-for="(socialShare, index) in socialShares?.data" :key="index">
                  <a :href="socialURL(socialShare.title, socialShare.link)" target="_blank" title="">
                    <i :class="socialIcons(socialShare.title)"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="footer-widget contact">
              <h3 class="footer-title text-light">contact us</h3>
              <ul class="footer-contact text-light">
                <li>
                  <i class="icofont-ui-email"></i>
                  <p>
                    <span>{{ email?.value }}</span>
                  </p>
                </li>
                <li>
                  <i class="icofont-ui-touch-phone"></i>
                  <p>
                    <span>+88{{ phone?.value }}</span>
                  </p>
                </li>
                <li>
                  <i class="icofont-phone-circle"></i>
                  <p>
                    <span>+88{{ whatsapp?.value }}</span>
                  </p>
                </li>
                <li>
                  <i class="icofont-location-pin"></i>
                  <p>{{ address?.value }}</p>
                </li>
              </ul>
            </div>
          </div>

          <div class="col-sm-6 col-xl-3">
            <div class="footer-widget">
                <h3 class="footer-title text-light">quick Links</h3>
                <div class="footer-links">
                    <ul>
                        <li><router-link :to="{ name: 'TermsConditions' }" class="text-light">Terms & Conditions</router-link></li>
                        <li><router-link :to="{ name: 'aboutPage' }" class="text-light">About us</router-link></li>
                        <li><router-link :to="{ name: 'PrivacyPolicy' }" class="text-light">privacy policy</router-link></li>
                        <li><router-link :to="{ name: 'ReturnRefund' }" class="text-light">Return & Refund</router-link></li>
                    </ul>
                    <ul>
                        <li><a :href="`https://www.facebook.com/${fbPageUrl}`" target="_blank" class="text-light">Facebook</a></li>
                        <li><router-link :to="{ name: 'contactPage' }" class="text-light">contact us</router-link></li>
                        <li><router-link :to="{ name: 'shopPage' }" class="text-light">Shop page</router-link></li>
                        <li><router-link :to="{ name: 'shopPage', query: {top: 'top-product'}}" class="text-light">Top product</router-link></li>
                        <li><router-link :to="{ name: 'shopPage', query: {recent: 'recent-product'}}" class="text-light">New Arrivals</router-link></li>
                    </ul>
                </div>
            </div>
        </div>
          
          <div class="col-sm-6 col-xl-3">
            <div class="footer-widget">
                <h3 class="footer-title text-light">Let's Connect</h3>
                <p class="footer-desc">
                    <div id="fb-root"></div>
                    <div class="fb-page" :data-href="fbPageUrl" data-tabs="timeline" data-width="" data-height="130" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                        <blockquote :cite="fbPageUrl" class="fb-xfbml-parse-ignore">
                        <a :href="fbPageUrl" target="_blank">{{ title?.value }}</a>
                        </blockquote>
                    </div>
                </p>
            </div>
          </div>
          <div class="row">
              <div class="col-12">
                  <div class="footer-bottom">
                      <p class="text-center footer-copytext">&copy;  2024 {{ title?.value }} </p>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
</template>

<style>

.main-section-footer{
  background-color: var(--primary);
}

.footer-part{
  background-color: #2c150f;
}


.footer-logo img {
    width: 100px !important;
}

.footer-copytext a {
    color: #000000 !important;
}


@media (max-width: 767px){
.footer-bottom {
  padding: 13px 2px 11px 15px;
 }
}
@media (max-width: 425px){
  .footer-widget {
     margin-bottom: 2px; 
}
}

</style>
