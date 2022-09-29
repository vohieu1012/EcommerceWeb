<template>
  <div class="page-content">
    <div class="form-v6-content">
      <div class="form-left">
        <img src="../assets/img/login.png" alt="form" />
      </div>
      <div class="form-detail" action="#">
        <h2>Register Form</h2>
        <div class="form-row">
          <input
            v-model="users.user_name"
            type="text"
            name="user-name"
            class="input-text"
            placeholder="Your Name"
            required
          />
          <div :class="{ error: this.errors.user_name }">
            {{ this.arr[0] }}
          </div>
        </div>
        <div class="form-row">
          <input
            v-model="users.email"
            type="text"
            name="email"
            class="input-text"
            placeholder="Email Address"
            required
            pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}"
          />
          <div :class="{ error: this.errors.email }">
            {{ this.arr[1] }}
          </div>
        </div>
        <div class="form-row">
          <input
            v-model="users.password"
            type="password"
            name="password"
            id="password"
            class="input-text"
            placeholder="Password"
            required
          />
          <div :class="{ error: this.errors.password }">
            {{ this.arr[2] }}
          </div>
        </div>
        <div class="form-row">
          <input
            v-model="users.cf_password"
            type="password"
            name="comfirm-password"
            id="comfirm-password"
            class="input-text"
            placeholder="Comfirm Password"
            required
          />
          <div :class="{ error: this.errors.cf_password }">
            {{ this.arr[3] }}
          </div>
        </div>
        <div class="form-row-last">
          <input
            @click="register"
            type="submit"
            name="register"
            class="register"
            value="Register"
          />
        </div>
      </div>
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
      users: {
        user_name: "",
        email: "",
        password: "",
        cf_password: "",
      },
      loading: false,
      errors: {},
      arr: [],
    };
  },
  created() {},
  methods: {
    register() {
      
      
      axios
        .post("http://127.0.0.1:8000/api/register", this.users)
        .then((response) => {
          console.log(response.data);
          this.$router.push({ name: "Login" });
          this.loading = false;
        })
        .catch((error) => {
          this.errors = error.response.data.errors;
          if (!error.response.data.errors.user_name) {
            this.arr[0] = "";
          } else {
            this.arr[0] = error.response.data.errors.user_name[0];
            console.log(this.arr[0]);
          }
          if (!error.response.data.errors.email) {
            this.arr[1] = "";
          } else {
            this.arr[1] = error.response.data.errors.email[0];
            console.log(this.arr[1]);
          }
          if (!error.response.data.errors.password) {
            this.arr[2] = "";
          } else {
            this.arr[2] = error.response.data.errors.password[0];
            console.log(this.arr[2]);
          }
          if (!error.response.data.errors.cf_password) {
            this.arr[3] = "";
          } else {
            this.arr[3] = error.response.data.errors.cf_password[0];
            console.log(this.arr[3]);
          }
          this.loading = false;
        });
    },
  },
  mounted() {},
};
</script>
<style scoped>
.error {
  font-size: 12px;
  color: red;
  font-weight: 600;
  margin-top: -30px;
  position: absolute;
  margin-left: 16px;
}
/* .form-v6-content .form-detail .input-text {
  margin-bottom: 20px;
} */
</style>

