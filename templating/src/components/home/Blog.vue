
<script setup>

import { ref } from 'vue'
// Import Swiper Vue.js components
import { Swiper, SwiperSlide, useSwiperSlide } from 'swiper/vue';
// Import Swiper styles
import 'swiper/css';
import 'swiper/css/pagination';

// import required modules
import { Pagination,Autoplay, Navigation } from 'swiper/modules'

const newSlide = ref([Navigation])
const modules = ref([Pagination,Autoplay]);

</script>

<template>
  <div>
    <section class="section blog-part">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="section-heading">
                      <h2>Read our articles</h2>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-12">
                  <div class="blog-slider slider-arrow">

                    <Swiper
                    
                    :slidesPerView="3"
                    :sliderPerGroup="1"
                    :loop="true"
                    :pagination="{
                      clickable: true,
                    }"
                    :autoplay="{
                      delay: 2000,
                    }"
                    :modules="modules"
                    class="mySwiper"
                    
                    
                    >
                        <SwiperSlide>
                            <div class="blog-card">
                                <div class="blog-media">
                                    <a class="blog-img" href="#">
                                        <img src="@/assets/images/blog/01.jpg" alt="blog">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <ul class="blog-meta">
                                        <li>
                                            <i class="fas fa-user"></i>
                                            <span>admin</span>
                                        </li>
                                        <li>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>february 02, 2021</span>
                                        </li>
                                    </ul>
                                    <h4 class="blog-title">
                                        <a href="blog-details.html">Voluptate blanditiis provident Lorem ipsum dolor sit amet</a>
                                    </h4>
                                    <p class="blog-desc">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias autem recusandae deleniti nam dignissimos sequi ...
                                    </p>
                                    <a class="blog-btn" href="#">
                                        <span>read more</span>
                                        <i class="icofont-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </SwiperSlide>

                        <SwiperSlide>
                            <div class="blog-card">
                                <div class="blog-media">
                                    <a class="blog-img" href="#">
                                        <img src="@/assets/images/blog/02.jpg" alt="blog">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <ul class="blog-meta">
                                        <li>
                                            <i class="fas fa-user"></i>
                                            <span>admin</span>
                                        </li>
                                        <li>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>february 02, 2021</span>
                                        </li>
                                    </ul>
                                    <h4 class="blog-title">
                                        <a href="blog-details.html">Voluptate blanditiis provident Lorem ipsum dolor sit amet</a>
                                    </h4>
                                    <p class="blog-desc">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias autem recusandae deleniti nam dignissimos sequi ...
                                    </p>
                                    <a class="blog-btn" href="#">
                                        <span>read more</span>
                                        <i class="icofont-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </SwiperSlide>

                        <SwiperSlide>
                            <div class="blog-card">
                                <div class="blog-media">
                                    <a class="blog-img" href="#">
                                        <img src="@/assets/images/blog/03.jpg" alt="blog">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <ul class="blog-meta">
                                        <li>
                                            <i class="fas fa-user"></i>
                                            <span>admin</span>
                                        </li>
                                        <li>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>february 02, 2021</span>
                                        </li>
                                    </ul>
                                    <h4 class="blog-title">
                                        <a href="blog-details.html">Voluptate blanditiis provident Lorem ipsum dolor sit amet</a>
                                    </h4>
                                    <p class="blog-desc">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias autem recusandae deleniti nam dignissimos sequi ...
                                    </p>
                                    <a class="blog-btn" href="#">
                                        <span>read more</span>
                                        <i class="icofont-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </SwiperSlide>
                        
                        <SwiperSlide>
                            <div class="blog-card">
                                <div class="blog-media">
                                    <a class="blog-img" href="#">
                                        <img src="@/assets/images/blog/04.jpg" alt="blog">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <ul class="blog-meta">
                                        <li>
                                            <i class="fas fa-user"></i>
                                            <span>admin</span>
                                        </li>
                                        <li>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>february 02, 2021</span>
                                        </li>
                                    </ul>
                                    <h4 class="blog-title">
                                        <a href="blog-details.html">Voluptate blanditiis provident Lorem ipsum dolor sit amet</a>
                                    </h4>
                                    <p class="blog-desc">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias autem recusandae deleniti nam dignissimos sequi ...
                                    </p>
                                    <a class="blog-btn" href="#">
                                        <span>read more</span>
                                        <i class="icofont-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </SwiperSlide>
                    </Swiper>
                     
                     
                      
                      
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-12">
                  <div class="section-btn-25">
                      <a href="blog-grid.html" class="btn btn-outline">
                          <i class="fas fa-eye"></i>
                          <span>view all blog</span>
                      </a>
                  </div>
              </div>
          </div>
      </div>
  </section>
  </div>
</template>

<style scoped>

</style>