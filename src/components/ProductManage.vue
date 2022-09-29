<template>
  <div>
    <HeaderProduct />
    <div class="container mt-5">
      <div class="row tm-content-row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-products">
            <div class="tm-product-table-container">
              <table class="table table-hover tm-table-small tm-product-table">
                <thead>
                  <tr>
                    <th scope="col-1">&nbsp;</th>
                    <th scope="col-3">Product Name</th>
                    <th scope="col-2">Price</th>
                    <th scope="col-2">Product Id</th>
                    <th scope="col-3">Description</th>
                    <th scope="col-1">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="dataProduct in dataProducts" :key="dataProduct.id">
                    <th scope="row">
                      <input
                        :checked="evento.includes(dataProduct.product_id)"
                        @click="toggleLang(dataProduct.product_id)"
                        :value="dataProduct.product_id"
                        type="checkbox"
                      />
                    </th>
                    <td class="tm-product-name">
                      {{ dataProduct.product_name }}
                    </td>
                    <td>{{ dataProduct.price }}</td>
                    <td>{{ dataProduct.product_id }}</td>
                    <td>{{ dataProduct.description }}</td>
                    <td>
                      <a href="#" class="tm-product-delete-link">
                        <font-awesome-icon icon="fa-solid fa-trash" />
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- table container -->
            <button
              @click="pageAdd"
              class="btn btn-primary btn-block text-uppercase addProduct"
            >
              Add new product
            </button>
            <button
              class="btn btn-primary btn-block text-uppercase"
              @click="deleteProduct"
            >
              Delete selected products
            </button>
          </div>
        </div>
      </div>
    </div>
    <FooterProduct />
  </div>
</template>
<script>
import HeaderProduct from "./HeaderProduct.vue";
import FooterProduct from "./FooterProduct.vue";
import axios from "axios";
export default {
  components: {
    HeaderProduct,
    FooterProduct,
  },
  data() {
    return {
      dataProducts: [],
      dataSelected: [],
      productId: [],
      evento: [],
    };
  },
  methods: {
    toggleLang(lang) {
      if (!this.evento.includes(lang)) {
        this.evento.push(lang);
      } else {
        this.evento.splice(this.evento.indexOf(lang), 1);
      }
      // only splice array when item is found
    },
    pageAdd() {
      this.$router.push({ name: "AddProduct" });
    },

    allProduct() {
      let token = window.localStorage.getItem("token");
      axios
        .get("http://127.0.0.1:8000/api/allProduct", {
          headers: {
            Accept: "application/json",
            Authorization: "Bearer" + " " + token,
          },
        })
        .then((response) => {
          this.dataProducts = response.data;
          console.log(this.dataProducts);
        })
        .catch((e) => {
          console.log(e);
        });
    },
    deleteProduct() {
      console.log(this.evento[0]);
      const id = this.evento[0];
      axios
        .post(`http://127.0.0.1:8000/api/deleteProduct/${id}`)
        .then((response) => {
          console.log(response);
        })
        .catch((e) => {
          console.log(e);
        });
    },
  },
  mounted() {
    this.allProduct();
  },
};
</script>
<style scoped>
.addProduct {
  margin-right: 10px;
}
</style>