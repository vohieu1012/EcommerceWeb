<template>
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-form validate-form">
          <span class="login100-form-title p-b-43"> Login to continue </span>

          <div
            class="wrap-input100 validate-input"
            data-validate="Valid email is required: ex@abc.xyz"
          >
            <input
              v-model="customer.email"
              class="input100 is-invalid"
              type="text"
              name="email"
            />
            <span class="focus-input100"></span>
            <span class="label-input100">Email</span>
          </div>
          <div
            id="validationServerUsernameFeedback"
            class="invalid-feedback"
            style="z-index: 1"
          >
            Looks good!
          </div>

          <div
            class="wrap-input100 validate-input"
            data-validate="Password is required"
          >
            <input
              v-model="customer.password"
              class="input100"
              type="password"
              name="password"
            />
            <span class="focus-input100"></span>
            <span class="label-input100">Password</span>
          </div>

          <div class="flex-sb-m w-full p-t-3 p-b-32">
            <div class="contact100-form-checkbox">
              <input
                class="input-checkbox100"
                id="ckb1"
                type="checkbox"
                name="remember-me"
              />
              <label class="label-checkbox100" for="ckb1"> Remember me </label>
            </div>

            <div>
              <a href="#" class="txt1"> Forgot Password? </a>
            </div>
          </div>

          <div class="container-login100-form-btn">
            <button @click="login" class="login100-form-btn">Login</button>
          </div>

          <div class="text-center p-t-46 p-b-20">
            <router-link to="/register">or sign up using</router-link>
          </div>

          <div class="login100-form-social flex-c-m">
            <a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
              <i class="fa fa-facebook-f" aria-hidden="true"></i>
            </a>

            <a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
          </div>
        </div>

        <div
          class="login100-more"
          style="background-image: url('images/bg-01.jpg')"
        ></div>
      </div>
      <!-- <div class="spinner-border animation" role="status"></div> -->
      <div class="loader" v-if="loading">
        <div class="loader-centered">
          <div class="object square-one"></div>
          <div class="object square-two"></div>
          <div class="object square-three"></div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
      customers: [],
      customer: {
        email: "",
        password: "",
      },
      errors: {},
      loading: false,
    };
  },
  created() {},

  methods: {
    login() {
      this.loading = true;

      axios
        .post("http://127.0.0.1:8000/api/login", this.customer)

        .then((response) => {
          console.log(response.data.user.token);
          window.localStorage.setItem("token", response.data.user.token);
          this.$router.push({ name: "HomePage" });
          this.loading = false;
        })
        .catch((e) => {
          console.log(e)
          this.loading = false;
          // this.errors = e.response.data.errors;
        });
    },
    fetchCustomer() {
      axios
        .get(`http://127.0.0.1:8000/api/getUser`)
        .then((response) => {
          console.log(response.data.data[0]);
          this.posts = response.data;
        })
        .catch((e) => {
          console.log(e);
          this.errors.push(e);
        });
    },
    handleResponse(response) {
      return response.text().then((text) => {
        const data = text && JSON.parse(text);
        if (!response.ok) {
          if (response.status === 401) {
            // tự động logout nếu response 401 được trả về từ api
            // logout();
            location.reload(true);
          }

          const error = (data && data.message) || response.statusText;
          return Promise.reject(error);
        }

        return data;
      });
    },
  },
  mounted() {
    (function ($) {
      "use strict";

      /*==================================================================
    [ Focus Contact2 ]*/
      $(".input100").each(function () {
        $(this).on("blur", function () {
          if ($(this).val().trim() != "") {
            $(this).addClass("has-val");
          } else {
            $(this).removeClass("has-val");
          }
        });
      });

      /*==================================================================
    [ Validate ]*/
      var input = $(".validate-input .input100");

      $(".validate-form").on("submit", function () {
        var check = true;

        for (var i = 0; i < input.length; i++) {
          if (validate(input[i]) == false) {
            showValidate(input[i]);
            check = false;
          }
        }

        return check;
      });

      $(".validate-form .input100").each(function () {
        $(this).focus(function () {
          hideValidate(this);
        });
      });

      function validate(input) {
        if (
          $(input).attr("type") == "email" ||
          $(input).attr("name") == "email"
        ) {
          if (
            $(input)
              .val()
              .trim()
              .match(
                /* eslint-disable */
                /^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/
              ) == null
          ) {
            return false;
          }
        } else {
          if ($(input).val().trim() == "") {
            return false;
          }
        }
      }

      function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass("alert-validate");
      }

      function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass("alert-validate");
      }
    })(jQuery);
    /* eslint-env jquery */
  },
};
</script>
<style scoped>
.animation {
  position: absolute;
  z-index: 1;
  color: aliceblue;
}
.loader {
  background-color: rgba(0, 0, 0, 0.95);
  height: 100%;
  width: 100%;
  position: fixed;
  z-index: 999;
  margin-top: 0px;
  top: 0px;
}
.loader-centered {
  position: absolute;
  left: 50%;
  top: 50%;
  height: 200px;
  width: 200px;
  margin-top: -100px;
  margin-left: -100px;
}
.object {
  width: 50px;
  height: 50px;
  background-color: rgba(255, 255, 255, 0);
  margin-right: auto;
  margin-left: auto;
  border: 4px solid #fff;
  left: 73px;
  top: 73px;
  position: absolute;
}

.square-one {
  -webkit-animation: first_object_animate 1s infinite ease-in-out;
  animation: first_object_animate 1s infinite ease-in-out;
}
.square-two {
  -webkit-animation: second_object 1s forwards,
    second_object_animate 1s infinite ease-in-out;
  animation: second_object 1s forwards,
    second_object_animate 1s infinite ease-in-out;
}
.square-three {
  -webkit-animation: third_object 1s forwards,
    third_object_animate 1s infinite ease-in-out;
  animation: third_object 1s forwards,
    third_object_animate 1s infinite ease-in-out;
}

@-webkit-keyframes second_object {
  100% {
    width: 100px;
    height: 100px;
    left: 48px;
    top: 48px;
  }
}
@keyframes second_object {
  100% {
    width: 100px;
    height: 100px;
    left: 48px;
    top: 48px;
  }
}
@-webkit-keyframes third_object {
  100% {
    width: 150px;
    height: 150px;
    left: 23px;
    top: 23px;
  }
}
@keyframes third_object {
  100% {
    width: 150px;
    height: 150px;
    left: 23px;
    top: 23px;
  }
}

@-webkit-keyframes first_object_animate {
  0% {
    -webkit-transform: perspective(100px);
  }
  50% {
    -webkit-transform: perspective(100px) rotateY(-180deg);
  }
  100% {
    -webkit-transform: perspective(100px) rotateY(-180deg) rotateX(-180deg);
  }
}

@keyframes first_object_animate {
  0% {
    transform: perspective(100px) rotateX(0deg) rotateY(0deg);
    -webkit-transform: perspective(100px) rotateX(0deg) rotateY(0deg);
  }
  50% {
    transform: perspective(100px) rotateX(-180deg) rotateY(0deg);
    -webkit-transform: perspective(100px) rotateX(-180deg) rotateY(0deg);
  }
  100% {
    transform: perspective(100px) rotateX(-180deg) rotateY(-180deg);
    -webkit-transform: perspective(100px) rotateX(-180deg) rotateY(-180deg);
  }
}

@-webkit-keyframes second_object_animate {
  0% {
    -webkit-transform: perspective(200px);
  }
  50% {
    -webkit-transform: perspective(200px) rotateY(180deg);
  }
  100% {
    -webkit-transform: perspective(200px) rotateY(180deg) rotateX(180deg);
  }
}

@keyframes second_object_animate {
  0% {
    transform: perspective(200px) rotateX(0deg) rotateY(0deg);
    -webkit-transform: perspective(200px) rotateX(0deg) rotateY(0deg);
  }
  50% {
    transform: perspective(200px) rotateX(180deg) rotateY(0deg);
    -webkit-transform: perspective(200px) rotateX(180deg) rotateY(0deg);
  }
  100% {
    transform: perspective(200px) rotateX(180deg) rotateY(180deg);
    -webkit-transform: perspective(200px) rotateX(180deg) rotateY(180deg);
  }
}

@-webkit-keyframes third_object_animate {
  0% {
    -webkit-transform: perspective(300px);
  }
  50% {
    -webkit-transform: perspective(300px) rotateY(-180deg);
  }
  100% {
    -webkit-transform: perspective(300px) rotateY(-180deg) rotateX(-180deg);
  }
}

@keyframes third_object_animate {
  0% {
    transform: perspective(300px) rotateX(0deg) rotateY(0deg);
    -webkit-transform: perspective(300px) rotateX(0deg) rotateY(0deg);
  }
  50% {
    transform: perspective(300px) rotateX(-180deg) rotateY(0deg);
    -webkit-transform: perspective(300px) rotateX(-180deg) rotateY(0deg);
  }
  100% {
    transform: perspective(300px) rotateX(-180deg) rotateY(-180deg);
    -webkit-transform: perspective(300px) rotateX(-180deg) rotateY(-180deg);
  }
}
</style>



