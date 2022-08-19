<template>
  <div>
    <HeaderProduct />
    <!-- <RegisterAccount /> -->
    <!-- <CallApi/> -->
    <!-- <CustomerAll/> -->
    <LoginAccount />
  </div>
</template>

<script>
// import HelloWorld from '@/components/HelloWorld.vue'
import HeaderProduct from "@/components/HeaderProduct";
// import CallApi from  '@/components/CallApi'
// import RegisterAccount from "@/components/RegisterAccount";
import LoginAccount from "@/components/LoginAccount";
// import CustomerAll from "@/components/CustomersAll";

export default {
  name: "HomeView",
  components: {
    HeaderProduct,
    // RegisterAccount,
    // CallApi,
    // CustomerAll,
    LoginAccount,
  },
};
</script>
