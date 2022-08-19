<template>
  <div>
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
          <ul class="header-links pull-right">
            <li>
              <a href="#"
                ><font-awesome-icon icon="fa-solid fa-dollar-sign" /> USD</a
              >
            </li>
            <li>
              <a href="#"
                ><font-awesome-icon icon="fa-solid fa-user" /> My Account</a
              >
            </li>
          </ul>
          <div>
            <b-dropdown class="dropdown_logout">
              <button @click="getLogout">LogOut</button>
            </b-dropdown>
          </div>
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
              <a href="#" class="logo">
                <img :src="img" alt="" />
              </a>
            </div>
          </div>
          <!-- /LOGO -->

          <!-- SEARCH BAR -->
          <div class="col-md-6">
            <div class="header-search">
              <form>
                <select class="input-select">
                  <option value="0">All Categories</option>
                  <option value="1">Category 01</option>
                  <option value="1">Category 02</option>
                </select>
                <input class="input" placeholder="Search here" />
                <button class="search-btn">Search</button>
              </form>
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
    };
  },
  methods: {
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
.dropdown {
  position: absolute;
  margin-left: 758px;
  margin-top: 5px;
  height: 5px;
}
/*  */
html,
body {
  padding: 0px;
  margin: 0px;
  background: #191a1d;
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
  background: #75f;
  color: #fff;
  min-width: 190px;
  transition: background 0.5s, color 0.5s, transform 0.5s;
  margin: 0px 6px 6px 0px;
  padding: 20px 40px;
  box-sizing: border-box;
  border-radius: 3px;
  box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.5);
  position: relative;
}

nav a:hover:before {
  content: "";
  top: 0;
  left: 0;
  position: absolute;
  background: rgba(0, 0, 0, 0.2);
  width: 100%;
  height: 100%;
}

nav > menu > menuitem > a + menu:after {
  content: "";
  position: absolute;
  border: 10px solid transparent;
  border-top: 10px solid white;
  left: 12px;
  top: -40px;
}
nav menuitem > menu > menuitem > a + menu:after {
  content: "";
  position: absolute;
  border: 10px solid transparent;
  border-left: 10px solid white;
  top: 20px;
  left: -180px;
  transition: opacity 0.6, transform 0s;
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
</style>