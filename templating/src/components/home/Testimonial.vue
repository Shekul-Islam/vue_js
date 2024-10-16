<script>
 // import Swiper core and required modules
 import { Navigation, Pagination, Scrollbar, A11y } from 'swiper/modules';

// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from 'swiper/vue';

// Import Swiper styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/scrollbar';

// Import Swiper styles
export default {
  components: {
    Swiper,
    SwiperSlide,
  },
  setup() {
    const onSwiper = (swiper) => {
      console.log(swiper);
    };
    const onSlideChange = () => {
      console.log('slide change');
    };
    return {
      onSwiper,
      onSlideChange,
      modules: [Navigation, Pagination, Scrollbar, A11y],
    };
  },
};
</script>

<template>
  <div>
    <section class="section testimonial-part">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-heading">
              <h2>client's feedback</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="testimonial-slider slider-arrow">
              <swiper
              :modules="modules"
    :slides-per-view="2"
    :loop="true"
    :space-between="50"
    navigation
    :pagination="{ clickable: true }"
    :scrollbar="{ draggable: true }"
    @swiper="onSwiper"
    @slideChange="onSlideChange"
              >
                <swiper-slide>
                  <div class="testimonial-card">
                    <i class="fas fa-quote-left"></i>
                    <p>
                      Lorem ipsum dolor consectetur adipisicing elit neque earum
                      sapiente vitae obcaecati magnam doloribus magni provident
                      ipsam
                    </p>
                    <h5>mahmud hasan</h5>
                    <ul>
                      <li class="fas fa-star"></li>
                      <li class="fas fa-star"></li>
                      <li class="fas fa-star"></li>
                      <li class="fas fa-star"></li>
                      <li class="fas fa-star"></li>
                    </ul>
                    <img
                      src="@/assets/images/avatar/01.jpg"
                      alt="testimonial"
                    />
                  </div>
                </swiper-slide>
                <swiper-slide>
                  <div class="testimonial-card">
                    <i class="fas fa-quote-left"></i>
                    <p>
                      Lorem ipsum dolor consectetur adipisicing elit neque earum
                      sapiente vitae obcaecati magnam doloribus magni provident
                      ipsam
                    </p>
                    <h5>mahmud hasan</h5>
                    <ul>
                      <li class="fas fa-star"></li>
                      <li class="fas fa-star"></li>
                      <li class="fas fa-star"></li>
                      <li class="fas fa-star"></li>
                      <li class="fas fa-star"></li>
                    </ul>
                    <img
                      src="@/assets/images/avatar/02.jpg"
                      alt="testimonial"
                    />
                  </div>
                </swiper-slide>
                <swiper-slide>
                  <div class="testimonial-card">
                    <i class="fas fa-quote-left"></i>
                    <p>
                      Lorem ipsum dolor consectetur adipisicing elit neque earum
                      sapiente vitae obcaecati magnam doloribus magni provident
                      ipsam
                    </p>
                    <h5>mahmud hasan</h5>
                    <ul>
                      <li class="fas fa-star"></li>
                      <li class="fas fa-star"></li>
                      <li class="fas fa-star"></li>
                      <li class="fas fa-star"></li>
                      <li class="fas fa-star"></li>
                    </ul>
                    <img
                      src="@/assets/images/avatar/03.jpg"
                      alt="testimonial"
                    />
                  </div>
                </swiper-slide>
                <swiper-slide>
                  <div class="testimonial-card">
                    <i class="fas fa-quote-left"></i>
                    <p>
                      Lorem ipsum dolor consectetur adipisicing elit neque earum
                      sapiente vitae obcaecati magnam doloribus magni provident
                      ipsam
                    </p>
                    <h5>mahmud hasan</h5>
                    <ul>
                      <li class="fas fa-star"></li>
                      <li class="fas fa-star"></li>
                      <li class="fas fa-star"></li>
                      <li class="fas fa-star"></li>
                      <li class="fas fa-star"></li>
                    </ul>
                    <img
                      src="@/assets/images/avatar/04.jpg"
                      alt="testimonial"
                    />
                  </div>
                </swiper-slide>
                ...
              </swiper>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<style scoped>
</style>