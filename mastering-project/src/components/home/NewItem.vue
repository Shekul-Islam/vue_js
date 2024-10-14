
<script setup>
import { ref } from "vue";
// Import Swiper Vue.js components
import { Swiper, SwiperSlide, useSwiperSlide } from "swiper/vue";
// Import Swiper styles
import "swiper/css";
import "swiper/css/pagination";

// import required modules
import { Pagination, Autoplay, Navigation } from "swiper/modules";

const newSlide = ref([Navigation]);
const modules = ref([Pagination, Autoplay]);
</script>

<template>
  <div>
    <section class="section newitem-part">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="section-heading">
              <h2>collected new items</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <ul class="new-slider slider-arrow">
              <Swiper
                :slidesPerView="4"
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
                  <li>
                    <div class="product-card">
                      <div class="product-media">
                        <div class="product-label">
                          <label class="label-text new">new</label>
                        </div>
                        <button class="product-wish wish">
                          <i class="fas fa-heart"></i>
                        </button>
                        <a class="product-image" href="product-video.html">
                          <img
                            src="@/assets/images/product/15.jpg"
                            alt="product"
                          />
                        </a>
                        <div class="product-widget">
                          <a
                            title="Product Compare"
                            href="compare.html"
                            class="fas fa-random"
                          ></a>
                          <a
                            title="Product Video"
                            href="https://youtu.be/9xzcVxSBbG8"
                            class="venobox fas fa-play"
                            data-autoplay="true"
                            data-vbtype="video"
                          ></a>
                          <a
                            title="Product View"
                            href="#"
                            class="fas fa-eye"
                            data-bs-toggle="modal"
                            data-bs-target="#product-view"
                          ></a>
                        </div>
                      </div>
                      <div class="product-content">
                        <div class="product-rating">
                          <i class="active icofont-star"></i>
                          <i class="active icofont-star"></i>
                          <i class="active icofont-star"></i>
                          <i class="active icofont-star"></i>
                          <i class="icofont-star"></i>
                          <a href="product-video.html">(3)</a>
                        </div>
                        <h6 class="product-name">
                          <a href="product-video.html">fresh green chilis</a>
                        </h6>
                        <h6 class="product-price">
                          <del>$34</del>
                          <span>$28<small>/piece</small></span>
                        </h6>
                        <button class="product-add" title="Add to Cart">
                          <i class="fas fa-shopping-basket"></i>
                          <span>add</span>
                        </button>
                        <div class="product-action">
                          <button class="action-minus" title="Quantity Minus">
                            <i class="icofont-minus"></i>
                          </button>
                          <input
                            class="action-input"
                            title="Quantity Number"
                            type="text"
                            name="quantity"
                            value="1"
                          />
                          <button class="action-plus" title="Quantity Plus">
                            <i class="icofont-plus"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </li>
                </SwiperSlide>

                <SwiperSlide>
                  <li>
                    <div class="product-card">
                      <div class="product-media">
                        <div class="product-label">
                          <label class="label-text new">new</label>
                        </div>
                        <button class="product-wish wish">
                          <i class="fas fa-heart"></i>
                        </button>
                        <a class="product-image" href="product-video.html">
                          <img
                            src="@/assets/images/product/16.jpg"
                            alt="product"
                          />
                        </a>
                        <div class="product-widget">
                          <a
                            title="Product Compare"
                            href="compare.html"
                            class="fas fa-random"
                          ></a>
                          <a
                            title="Product Video"
                            href="https://youtu.be/9xzcVxSBbG8"
                            class="venobox fas fa-play"
                            data-autoplay="true"
                            data-vbtype="video"
                          ></a>
                          <a
                            title="Product View"
                            href="#"
                            class="fas fa-eye"
                            data-bs-toggle="modal"
                            data-bs-target="#product-view"
                          ></a>
                        </div>
                      </div>
                      <div class="product-content">
                        <div class="product-rating">
                          <i class="active icofont-star"></i>
                          <i class="active icofont-star"></i>
                          <i class="active icofont-star"></i>
                          <i class="active icofont-star"></i>
                          <i class="icofont-star"></i>
                          <a href="product-video.html">(3)</a>
                        </div>
                        <h6 class="product-name">
                          <a href="product-video.html">fresh green chilis</a>
                        </h6>
                        <h6 class="product-price">
                          <del>$34</del>
                          <span>$28<small>/piece</small></span>
                        </h6>
                        <button class="product-add" title="Add to Cart">
                          <i class="fas fa-shopping-basket"></i>
                          <span>add</span>
                        </button>
                        <div class="product-action">
                          <button class="action-minus" title="Quantity Minus">
                            <i class="icofont-minus"></i>
                          </button>
                          <input
                            class="action-input"
                            title="Quantity Number"
                            type="text"
                            name="quantity"
                            value="1"
                          />
                          <button class="action-plus" title="Quantity Plus">
                            <i class="icofont-plus"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </li>
                </SwiperSlide>

                <SwiperSlide>
                  <li>
                    <div class="product-card">
                      <div class="product-media">
                        <div class="product-label">
                          <label class="label-text new">new</label>
                        </div>
                        <button class="product-wish wish">
                          <i class="fas fa-heart"></i>
                        </button>
                        <a class="product-image" href="product-video.html">
                          <img
                            src="@/assets/images/product/18.jpg"
                            alt="product"
                          />
                        </a>
                        <div class="product-widget">
                          <a
                            title="Product Compare"
                            href="compare.html"
                            class="fas fa-random"
                          ></a>
                          <a
                            title="Product Video"
                            href="https://youtu.be/9xzcVxSBbG8"
                            class="venobox fas fa-play"
                            data-autoplay="true"
                            data-vbtype="video"
                          ></a>
                          <a
                            title="Product View"
                            href="#"
                            class="fas fa-eye"
                            data-bs-toggle="modal"
                            data-bs-target="#product-view"
                          ></a>
                        </div>
                      </div>
                      <div class="product-content">
                        <div class="product-rating">
                          <i class="active icofont-star"></i>
                          <i class="active icofont-star"></i>
                          <i class="active icofont-star"></i>
                          <i class="active icofont-star"></i>
                          <i class="icofont-star"></i>
                          <a href="product-video.html">(3)</a>
                        </div>
                        <h6 class="product-name">
                          <a href="product-video.html">fresh green chilis</a>
                        </h6>
                        <h6 class="product-price">
                          <del>$34</del>
                          <span>$28<small>/piece</small></span>
                        </h6>
                        <button class="product-add" title="Add to Cart">
                          <i class="fas fa-shopping-basket"></i>
                          <span>add</span>
                        </button>
                        <div class="product-action">
                          <button class="action-minus" title="Quantity Minus">
                            <i class="icofont-minus"></i>
                          </button>
                          <input
                            class="action-input"
                            title="Quantity Number"
                            type="text"
                            name="quantity"
                            value="1"
                          />
                          <button class="action-plus" title="Quantity Plus">
                            <i class="icofont-plus"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </li>
                </SwiperSlide>

                <SwiperSlide>
                  <li>
                    <div class="product-card">
                      <div class="product-media">
                        <div class="product-label">
                          <label class="label-text new">new</label>
                        </div>
                        <button class="product-wish wish">
                          <i class="fas fa-heart"></i>
                        </button>
                        <a class="product-image" href="product-video.html">
                          <img
                            src="@/assets/images/product/19.jpg"
                            alt="product"
                          />
                        </a>
                        <div class="product-widget">
                          <a
                            title="Product Compare"
                            href="compare.html"
                            class="fas fa-random"
                          ></a>
                          <a
                            title="Product Video"
                            href="https://youtu.be/9xzcVxSBbG8"
                            class="venobox fas fa-play"
                            data-autoplay="true"
                            data-vbtype="video"
                          ></a>
                          <a
                            title="Product View"
                            href="#"
                            class="fas fa-eye"
                            data-bs-toggle="modal"
                            data-bs-target="#product-view"
                          ></a>
                        </div>
                      </div>
                      <div class="product-content">
                        <div class="product-rating">
                          <i class="active icofont-star"></i>
                          <i class="active icofont-star"></i>
                          <i class="active icofont-star"></i>
                          <i class="active icofont-star"></i>
                          <i class="icofont-star"></i>
                          <a href="product-video.html">(3)</a>
                        </div>
                        <h6 class="product-name">
                          <a href="product-video.html">fresh green chilis</a>
                        </h6>
                        <h6 class="product-price">
                          <del>$34</del>
                          <span>$28<small>/piece</small></span>
                        </h6>
                        <button class="product-add" title="Add to Cart">
                          <i class="fas fa-shopping-basket"></i>
                          <span>add</span>
                        </button>
                        <div class="product-action">
                          <button class="action-minus" title="Quantity Minus">
                            <i class="icofont-minus"></i>
                          </button>
                          <input
                            class="action-input"
                            title="Quantity Number"
                            type="text"
                            name="quantity"
                            value="1"
                          />
                          <button class="action-plus" title="Quantity Plus">
                            <i class="icofont-plus"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </li>
                </SwiperSlide>

                <SwiperSlide>
                  <li>
                    <div class="product-card">
                      <div class="product-media">
                        <div class="product-label">
                          <label class="label-text new">new</label>
                        </div>
                        <button class="product-wish wish">
                          <i class="fas fa-heart"></i>
                        </button>
                        <a class="product-image" href="product-video.html">
                          <img
                            src="@/assets/images/product/20.jpg"
                            alt="product"
                          />
                        </a>
                        <div class="product-widget">
                          <a
                            title="Product Compare"
                            href="compare.html"
                            class="fas fa-random"
                          ></a>
                          <a
                            title="Product Video"
                            href="https://youtu.be/9xzcVxSBbG8"
                            class="venobox fas fa-play"
                            data-autoplay="true"
                            data-vbtype="video"
                          ></a>
                          <a
                            title="Product View"
                            href="#"
                            class="fas fa-eye"
                            data-bs-toggle="modal"
                            data-bs-target="#product-view"
                          ></a>
                        </div>
                      </div>
                      <div class="product-content">
                        <div class="product-rating">
                          <i class="active icofont-star"></i>
                          <i class="active icofont-star"></i>
                          <i class="active icofont-star"></i>
                          <i class="active icofont-star"></i>
                          <i class="icofont-star"></i>
                          <a href="product-video.html">(3)</a>
                        </div>
                        <h6 class="product-name">
                          <a href="product-video.html">fresh green chilis</a>
                        </h6>
                        <h6 class="product-price">
                          <del>$34</del>
                          <span>$28<small>/piece</small></span>
                        </h6>
                        <button class="product-add" title="Add to Cart">
                          <i class="fas fa-shopping-basket"></i>
                          <span>add</span>
                        </button>
                        <div class="product-action">
                          <button class="action-minus" title="Quantity Minus">
                            <i class="icofont-minus"></i>
                          </button>
                          <input
                            class="action-input"
                            title="Quantity Number"
                            type="text"
                            name="quantity"
                            value="1"
                          />
                          <button class="action-plus" title="Quantity Plus">
                            <i class="icofont-plus"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </li>
                </SwiperSlide>
              </Swiper>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="section-btn-25">
              <a href="shop-4column.html" class="btn btn-outline">
                <i class="fas fa-eye"></i>
                <span>show more</span>
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