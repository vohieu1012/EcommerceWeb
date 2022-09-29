<template>
  <div class="headerPage">
    <div id="top-header">
      <header>
        <div class="container">
          <ul class="header-links pull-left">
            <li>
              <a href="#"
                ><font-awesome-icon icon="fa-solid fa-phone" />0999-999-999</a
              >
            </li>
            <li>
              <a href="#"
                ><font-awesome-icon icon="fa-solid fa-envelope" />
                email@email.com</a
              >
            </li>
            <li>
              <a href="#">
                <font-awesome-icon
                  icon="fa-solid fa-location-dot"
                />HaNoi-VietNam</a
              >
            </li>
          </ul>
          <ul class="header-links pull-right" style="margin-right: -30px">
            <li>
              <a href="#"
                ><font-awesome-icon icon="fa-solid fa-dollar-sign" /> USD</a
              >
              <a href="" style="padding-left: 14px"
                ><font-awesome-icon icon="fa-solid fa-user"
              /></a>
            </li>
            <li>
              <!-- <a href="#"
                ><font-awesome-icon icon="fa-solid fa-user" /> My Account</a
              > -->
            </li>
            <nav class="dropdown_logout">
              <menu>
                <menuitem id="demo1">
                  <a>{{ this.user_name }}</a>
                  <menu>
                    <menuitem
                      ><button class="logout" @click="getLogout">
                        LogOut
                      </button></menuitem
                    >
                  </menu>
                </menuitem>
              </menu>
            </nav>
          </ul>
        </div>
      </header>
    </div>
    <!-- /TOP HEADER -->

    <!-- MAIN HEADER -->
    <div id="header">
      <!-- container -->
      <div class="container">
        <!-- row -->
        <div class="row">
          <!-- LOGO -->
          <div class="col-md-3">
            <div class="header-logo">
              <!-- <a href="#" class="logo">
                <img :src="img" alt="" />
              </a> -->
              <p>XHIEU STORE</p>
            </div>
          </div>
          <!-- /LOGO -->

          <!-- SEARCH BAR -->
          <div class="col-md-6">
            <div class="header-search">
              <select class="input-select">
                <option value="0">All Categories</option>
                <option value="1">Category 01</option>
                <option value="1">Category 02</option>
              </select>
              <input
                v-model="valueProduct"
                class="input"
                placeholder="Search here"
              />
              <button class="search-btn" @click="searchProduct">Search</button>
            </div>
          </div>
          <!-- /SEARCH BAR -->

          <!-- ACCOUNT -->
          <div class="col-md-3 clearfix">
            <div class="header-ctn">
              <!-- Wishlist -->
              <div>
                <a href="#">
                  <font-awesome-icon icon="fa-solid fa-heart" />

                  <span>Your Wishlist</span>
                  <div class="qty">2</div>
                </a>
              </div>
              <!-- /Wishlist -->

              <!-- Cart -->
              <div class="dropdown">
                <a
                  class="dropdown-toggle"
                  data-toggle="dropdown"
                  aria-expanded="true"
                >
                  <font-awesome-icon icon="fa-solid fa-cart-shopping" />
                  <span>Your Cart</span>
                  <div class="qty">3</div>
                </a>
                <div class="cart-dropdown">
                  <div class="cart-list">
                    <div class="product-widget">
                      <div class="product-img">
                        <img src="../assets/img/product01.png" alt="" />
                      </div>
                      <div class="product-body">
                        <h3 class="product-name">
                          <a href="#">product name goes here</a>
                        </h3>
                        <h4 class="product-price">
                          <span class="qty">1x</span>$980.00
                        </h4>
                      </div>
                      <button class="delete">
                        <font-awesome-icon icon="fa-solid fa-circle-xmark" />
                      </button>
                    </div>

                    <div class="product-widget">
                      <div class="product-img">
                        <img src="../assets/img/product02.png" alt="" />
                      </div>
                      <div class="product-body">
                        <h3 class="product-name">
                          <a href="#">product name goes here</a>
                        </h3>
                        <h4 class="product-price">
                          <span class="qty">3x</span>$980.00
                        </h4>
                      </div>
                      <button class="delete">
                        <font-awesome-icon icon="fa-solid fa-circle-xmark" />
                      </button>
                    </div>
                  </div>
                  <div class="cart-summary">
                    <small>3 Item(s) selected</small>
                    <h5>SUBTOTAL: $2940.00</h5>
                  </div>
                  <div class="cart-btns">
                    <a href="#">View Cart</a>
                    <a href="./checkout.html"
                      >Checkout <i class="fa fa-arrow-circle-right"></i
                    ></a>
                  </div>
                </div>
              </div>
              <!-- /Cart -->

              <!-- Menu Toogle -->
              <div class="menu-toggle">
                <a href="#">
                  <i class="fa fa-bars"></i>
                  <span>Menu</span>
                </a>
              </div>
              <!-- /Menu Toogle -->
            </div>
          </div>
          <!-- /ACCOUNT -->
        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </div>
    <div :class="{ active: isActive }" style="display:block margin:auto">
      <div class="row">
        <div class="products-tabs">
          <!-- tab -->
          <div id="tab1" class="tab-pane active">
            <div class="products-slick row" data-nav="#slick-nav-1">
              <!-- product -->
              <div
                class="product col-3"
                v-for="dataProduct in dataProducts"
                :key="dataProduct.id"
              >
                <div class="product-img">
                  <img
                    v-bind:src="
                      'http://127.0.0.1:8000/uploads/' + dataProduct.image
                    "
                    alt=""
                  />
                  <div class="product-label">
                    <span class="sale">-{{ dataProduct.discount }}%</span>
                    <span class="new">NEW</span>
                  </div>
                </div>
                <div class="product-body">
                  <p class="product-category">Category</p>
                  <h3 class="product-name">
                    <a href="#">{{ dataProduct.product_name }}</a>
                  </h3>
                  <h4 class="product-price">
                    ${{ dataProduct.price }}
                    <del class="product-old-price"
                      >${{
                        dataProduct.price -
                        (dataProduct.price * dataProduct.discount) / 100
                      }}</del
                    >
                  </h4>
                  <div class="product-rating"></div>
                  <div class="product-btns">
                    <button class="add-to-wishlist">
                      <font-awesome-icon icon="fa-solid fa-heart" /><span
                        class="tooltipp"
                        >add to wishlist</span
                      >
                    </button>
                    <button class="add-to-compare">
                      <font-awesome-icon icon="fa-solid fa-plus" /><span
                        class="tooltipp"
                        >add to compare</span
                      >
                    </button>
                    <button class="quick-view">
                      <font-awesome-icon icon="fa-solid fa-eye" /><span
                        class="tooltipp"
                        >quick view</span
                      >
                    </button>
                  </div>
                </div>
                <div class="add-to-cart">
                  <button class="add-to-cart-btn" @click="addToCart">
                    <i class="fa fa-shopping-cart"></i> add to cart
                  </button>
                </div>
              </div>
            </div>
            <div id="slick-nav-1" class="-nav"></div>
          </div>
          <!-- /tab -->
        </div>
      </div>
    </div>
  </div>

  <!-- /MAIN HEADER -->
</template>
<script>
import axios from "axios";
// thành phần xử lí
export default {
  name: "HeaderProduct",
  data() {
    return {
      img: require("@/assets/img/logo.png"),
      user_name: "",
      dataProducts: [],
      isActive: false,
    };
  },
  methods: {
    searchProduct() {
      axios
        .get(`http://127.0.0.1:8000/api/searchProduct/${this.valueProduct}`)
        .then((response) => {
          this.dataProducts = response.data;
          console.log(this.dataProducts);
        })
        .catch((e) => {
          console.log(e);
        });
    },
    checkLogin() {
      let token = window.localStorage.getItem("token");
      if (token == null) {
        this.$router.push({ name: "Login" });
      }
      axios
        .get("http://127.0.0.1:8000/api/userInf", {
          headers: {
            Accept: "application/json",
            Authorization: "Bearer" + " " + token,
          },
        })
        .then((response) => {
          this.user_name = response.data[0].user_name;
          console.log(response.data[0].user_name);
        })
        .catch((e) => {
          console.log("Bearer" + token);
          console.log(e);
        });
    },
    getLogout() {
      let token = window.localStorage.getItem("token");
      axios
        .get("http://127.0.0.1:8000/api/logout", {
          headers: {
            Accept: "application/json",
            Authorization: "Bearer" + " " + token,
          },
        })
        .then((response) => {
          localStorage.removeItem("token");
          this.$router.push({ name: "Login" });
          console.log(response.data);
        })
        .catch((e) => {
          console.log("Bearer" + " " + token);
          console.log(e);
        });
    },
  },
  mounted() {
    this.checkLogin(),
      (function ($) {
        "use strict";

        // Mobile Nav toggle
        $(".menu-toggle > a").on("click", function (e) {
          e.preventDefault();
          $("#responsive-nav").toggleClass("active");
        });

        // Fix cart dropdown from closing
        $(".cart-dropdown").on("click", function (e) {
          e.stopPropagation();
        });
      })(jQuery);
    //
    var count = 1;
    setTimeout(demo, 500);
    setTimeout(demo, 700);
    setTimeout(demo, 900);
    setTimeout(reset, 2000);

    setTimeout(demo, 2500);
    setTimeout(demo, 2750);
    setTimeout(demo, 3050);

    var mousein = false;
    function demo() {
      if (mousein) return;
      document.getElementById("demo" + count++).classList.toggle("hover");
    }

    function reset() {
      count = 1;
      var hovers = document.querySelectorAll(".hover");
      for (var i = 0; i < hovers.length; i++) {
        hovers[i].classList.remove("hover");
      }
    }

    document.addEventListener("mouseover", function () {
      mousein = true;
      reset();
    });
    /* eslint-env jquery */
  },
};
</script>
<style scoped>
.dropdown_logout {
  position: absolute;
  margin-top: -42px;
}
#demo1 a {
  color: #fff;
  font-size: 14px;
  font-weight: 500;
}
#demo1 a:hover {
  color: #d10024;
}
.logout {
  color: black;
  margin-left: 50px;
  margin-top: 10px;
  padding: 5px 10px 5px 10px;
  border-radius: 5px;
  background-color: rgb(122, 118, 118);
  font-size: 12px;
}
/*  */
html,
body {
  padding: 0px;
  margin: 0px;

  font-family: "Karla", sans-serif;
  width: 100vw;
}
body * {
  margin: 0;
  padding: 0;
}

/* HTML Nav Styles */
/* HTML Nav Styles */
/* HTML Nav Styles */
nav menuitem {
  position: relative;
  display: block;
  opacity: 0;
  cursor: pointer;
}

nav menuitem > menu {
  position: absolute;
  pointer-events: none;
}
nav > menu {
  display: flex;
}

nav > menu > menuitem {
  pointer-events: all;
  opacity: 1;
}
menu menuitem a {
  white-space: nowrap;
  display: block;
}

menuitem:hover > menu {
  pointer-events: initial;
}
menuitem:hover > menu > menuitem,
menu:hover > menuitem {
  opacity: 1;
}
nav > menu > menuitem menuitem menu {
  transform: translateX(100%);
  top: 0;
  right: 0;
}
/* User Styles Below Not Required */
/* User Styles Below Not Required */
/* User Styles Below Not Required */

nav {
  margin-top: 40px;
  margin-left: 40px;
}

nav a {
  color: #fff;
  min-width: 190px;
  transition: background 0.5s, color 0.5s, transform 0.5s;

  padding: 18px 0px 0px 38px;
  box-sizing: border-box;
  border-radius: 3px;
  position: relative;
  z-index: 1;
}

nav a:hover:before {
  content: "";
  top: 0;
  left: 0;
  position: absolute;

  width: 100%;
  height: 100%;
}

nav > menu > menuitem > menu > menuitem {
  transition: transform 0.6s, opacity 0.6s;
  transform: translateY(150%);
  opacity: 0;
}
nav > menu > menuitem:hover > menu > menuitem,
nav > menu > menuitem.hover > menu > menuitem {
  transform: translateY(0%);
  opacity: 1;
}

menuitem > menu > menuitem > menu > menuitem {
  transition: transform 0.6s, opacity 0.6s;
  transform: translateX(195px) translateY(0%);
  opacity: 0;
}
menuitem > menu > menuitem:hover > menu > menuitem,
menuitem > menu > menuitem.hover > menu > menuitem {
  transform: translateX(0) translateY(0%);
  opacity: 1;
}
.header-logo p {
  font-size: 24px;
  color: white;
  font-weight: 600;
  padding-left: 25px;
  border: 1px solid red;
  padding-right: 25px;
  background-color: red;
  margin-left: 20px;
  border-radius: 10px;
}
</style>