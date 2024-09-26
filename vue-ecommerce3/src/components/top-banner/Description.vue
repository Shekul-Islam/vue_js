<script setup>
import "skeleton-screen-css";
import DescriptionSkeleton from "../skeleton/DescriptionSkeleton.vue";

// var descript = { name: "This is Description" };
</script>

<template>
  <div>
    <template v-if="descript?.name">
      <div data-v-85ff549d="" class="details-content">
        <h3 data-v-85ff549d="" class="details-name">
          <a data-v-85ff549d="" href="#"
            >Special Men's Footware Shoes || স্পেশাল </a
          >
        </h3>
        <div data-v-85ff549d="" class="details-meta">
          <!---->
          <p data-v-85ff549d="">
            BRAND:<a data-v-85ff549d="" href="#">Men's Shoe</a>
          </p>
        </div>
        <h3 data-v-85ff549d="" class="details-price">
          <span data-v-85ff549d=""><!----></span
          ><span data-v-85ff549d=""><!----></span>
        </h3>
        <div data-v-85ff549d="" class="details-list-group">
          <label data-v-85ff549d="" class="details-list-title" style=""
            >Size:</label
          >
          <ul data-v-85ff549d="" class="details-tag-list">
            <li data-v-85ff549d="" id="main">
              <a data-v-85ff549d="" class="" href="#">40</a>
            </li>
            <li data-v-85ff549d="" id="main">
              <a data-v-85ff549d="" class="" href="#">44</a>
            </li>
          </ul>
        </div>
        <div data-v-85ff549d="" class="details-list-group">
          <label data-v-85ff549d="" class="details-list-title" style=""
            >Share:</label
          >
          <ul data-v-85ff549d="" class="details-share-list">
            <li data-v-85ff549d="">
              <a
                data-v-85ff549d=""
                href="https://www.instagram.com/maxfitfood1/"
                target="_blank"
                title=""
                ><i data-v-85ff549d="" class="fab fa-instagram"></i
              ></a>
            </li>
            <li data-v-85ff549d="">
              <a
                data-v-85ff549d=""
                href="https://www.facebook.com/maxfitfood1/"
                target="_blank"
                title=""
                ><i data-v-85ff549d="" class="fab fa-facebook-f"></i
              ></a>
            </li>
          </ul>
        </div>
        <!---->
        <div data-v-85ff549d="" class="details-add-group">
          <div data-v-85ff549d="" class="row">
            <span data-v-85ff549d="" class="row d-block text-center text-danger"
              >প্রথমে ওয়েট সিলেক্ট করুন তারপর<span
                data-v-85ff549d=""
                class="fw-bold"
                >অর্ডার করুন</span
              >
              বাটনে ক্লিক করুন অথবা<span data-v-85ff549d="" class="fw-bold"
                >কার্টে যোগ করুন</span
              >বাটনে ক্লিক করুন
            </span>
            <div data-v-85ff549d="" class="col-md-12">
              <div data-v-85ff549d="" class="quentyDefaultClass">
                <button
                  data-v-85ff549d=""
                  class="action-minus"
                  disabled=""
                  title="Quantity Minus"
                >
                  <i data-v-85ff549d="" class="icofont-minus"></i></button
                ><input
                  data-v-85ff549d=""
                  class="action-input text-center disabled"
                  title="Quantity Number"
                  type="text"
                  name="quantity"
                /><button
                  data-v-85ff549d=""
                  class="action-plus"
                  disabled=""
                  title="Quantity Plus"
                >
                  <i data-v-85ff549d="" class="icofont-plus"></i>
                </button>
              </div>
            </div>
          </div>
          <div data-v-85ff549d="" class="row mt-lg-3 mt-0">
            <!---->
            <div data-v-85ff549d="" class="col-md-6 mt-2">
              <button
                data-v-85ff549d=""
                class="product-add disabled"
                title="Add to Cart"
                disabled=""
              >
                <i data-v-85ff549d="" class="fas fa-shopping-basket"></i
                ><span data-v-85ff549d="">কার্টে যোগ করুন</span>
              </button>
            </div>
          </div>
        </div>
        <div data-v-85ff549d="" class="row mt-2">
          <div data-v-85ff549d="" class="col-md-6 mt-2">
            <a
              data-v-85ff549d=""
              href="https://wa.me/+8801791580400?text=Product%20Details%0A%0AWebsite:%20https://maxfitfood.com.bd/single-product/156%0AProduct%20Name:%20Special Saffron Honey Nuts || স্পেশাল জাফরান হানিনাটস%0AProduct%20Size:%20undefined%0AOffer%20Price:%200.00৳%0ARegular%20Price:%200.00৳"
              class="product-add bg-success"
              target="_blank"
              ><i data-v-85ff549d="" class="fab fa-whatsapp"></i
              ><span data-v-85ff549d="">হোয়াটসঅ্যাপ</span></a
            >
          </div>
          <div data-v-85ff549d="" class="col-md-6 mt-2">
            <a
              data-v-85ff549d=""
              href="tel:+8801791580400"
              class="product-add bg-success"
              ><i data-v-85ff549d="" class="fas fa-phone-alt"></i
              ><span data-v-85ff549d="">ফোন করুন</span></a
            >
          </div>
        </div>
      </div>
    </template>

    <template v-else>
      <div>
        <DescriptionSkeleton />
      </div>
    </template>
  </div>
</template>

<style scoped></style>
