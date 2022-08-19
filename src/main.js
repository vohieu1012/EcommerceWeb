import Vue from 'vue'
import App from './App.vue'
import Router from 'vue-router'
import 'bootstrap'
import $ from 'jquery'

import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
// Import Bootstrap and BootstrapVue CSS files (order is important)
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

// Make BootstrapVue available throughout your project
Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin)

export function somethingWithjQuery() {
  console.log($)
}
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
import { library } from "@fortawesome/fontawesome-svg-core";
import { fas } from '@fortawesome/free-solid-svg-icons'
import { far } from '@fortawesome/free-regular-svg-icons'
import { fab } from '@fortawesome/free-brands-svg-icons'
global.jQuery = require('jquery');


library.add(fas);
library.add(far);
library.add(fab);

Vue.component('font-awesome-icon', FontAwesomeIcon);
require('./assets/css/header.css');
require('./assets/css/style.css');
require('./assets/css/login.css');
require('./assets/css/regis.css');
require('./assets/css/footer.css');
require('./assets/css/product.css');


import 'slick-carousel/slick/slick.css';

Vue.config.productionTip = false

// import HeaderProduct from '@/components/HeaderProduct'
// import FooterProduct from '@/components/FooterProduct'
import LoginPage from "@/components/LoginAccount"
import RegisterPage from '@/components/RegisterAccount'
import AllProducts from '@/components/AllProducts'
import callApi from '@/components/CallApi'
// Vue.component('myHeader', HeaderProduct)
// Vue.component('myFooter', FooterProduct)
Vue.use(Router);
export const router = new Router({
  mode: 'history',
  routes: [
    // { path: '/', component: HeaderProduct,name:'HeaderProduct' },
    { path: '/login', component: LoginPage, name: 'Login' },
    { path: '/register', component: RegisterPage, name: 'Register' },
    // { path: '/footer', component: FooterProduct },
    { path: '/product', component: AllProducts, name: 'HomePage' },
    {path: '/callApi', component: callApi},
    // nếu không sẽ chuyển đến trang home
    { path: '*', redirect: '/' }
  ]
});
new Vue({
  router,
  render: h => h(App)
}).$mount('#app')
