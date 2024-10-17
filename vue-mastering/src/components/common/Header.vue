<script setup>
function search() {
  $(".header-form").toggleClass("active"),
    $(this).children(".fa-search").toggleClass("fa-times");
}


function menu() {
    $("body").css("overflow", "hidden"),
      $(".nav-sidebar").addClass("active");
   
}



</script>

<template>
  <div>
    <header class="header-part">
      <div class="container">
        <div class="header-content">
          <div class="header-media-group">
            <button class="header-user" @click="menu">
              <img src="@/assets/images/menu.png" alt="user" /></button
            ><a href="index.html"
              ><img src="@/assets/images/logo.png" alt="logo" /></a
            ><button class="header-src" @click="search">
              <i class="fas fa-search"></i>
            </button>
          </div>
          <a href="index.html" class="header-logo"
            ><img src="@/assets/images/logo.png" alt="logo"
          /></a>

          <form class="header-form">
            <input type="text" placeholder="Search anything..." /><button>
              <i class="fas fa-search"></i>
            </button>
          </form>
          <div class="header-widget-group">
            <li class="nav-item dropdown">
              <a
                class="nav-link header-widget"
                href="#"
                data-bs-toggle="dropdown"
                ><i class="fas fa-user"></i
              ></a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a href="login.html" class="dropdown-item"> Login</a></li>
                <li>
                  <a href="register.html" class="dropdown-item"> Register</a>
                </li>
              </ul>
            </li>

            <a href="wishlist.html" class="header-widget" title="Wishlist"
              ><i class="fas fa-heart"></i><sup>0</sup></a
            ><button class="header-widget header-cart" title="Cartlist">
              <i class="fas fa-shopping-basket"></i><sup>9+</sup
              ><span>total price<small>$345.00</small></span>
            </button>
          </div>
        </div>
      </div>
    </header>
  </div>
</template>


<style scoped>
</style>