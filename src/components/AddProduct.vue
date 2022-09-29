<template>
  <div>
    <HeaderProduct />
    <div class="row">
      <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
        <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
          <div class="row">
            <div class="col-12">
              <h2 class="tm-block-title d-inline-block">Add Product</h2>
            </div>
          </div>
          <div class="row tm-edit-product-row">
            <div class="col-xl-6 col-lg-6 col-md-12">
              <form action="" class="tm-edit-product-form">
                <div class="form-group mb-3">
                  <label>Product Name </label>
                  <input
                    v-model="product.product_name"
                    id="name"
                    name="product_name"
                    type="text"
                    class="form-control validate"
                    required
                  />
                </div>
                <div class="form-group mb-3">
                  <label>Description</label>
                  <textarea
                    v-model="product.description"
                    class="form-control validate"
                    rows="3"
                    name="description"
                    required
                  ></textarea>
                </div>
                <div class="row">
                  <div class="form-group mb-3 col-xs-12 col-sm-6">
                    <label for="expire_date">Price </label>
                    <input
                      v-model="product.price"
                      id="expire_date"
                      name="price"
                      type="number"
                      class="form-control validate"
                      data-large-mode="true"
                    />
                  </div>
                  <div class="form-group mb-3 col-xs-12 col-sm-3">
                    <label for="stock">Discount </label>
                    <input
                      v-model="product.discount"
                      id="stock"
                      name="discount"
                      type="number"
                      class="form-control validate"
                      required
                    />
                  </div>
                  <div class="form-group mb-3 col-xs-12 col-sm-3">
                    <label for="expire_date">Id </label>
                    <input
                      v-model="product.product_id"
                      id="expire_date"
                      name="product_id"
                      type="number"
                      class="form-control validate"
                      data-large-mode="true"
                    />
                  </div>
                </div>
              </form>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
              <form action="" enctype="multipart/form-data">
                <div class="tm-product-img-dummy mx-auto">
                  <font-awesome-icon
                    icon="fa-solid fa-cloud-arrow-up"
                    onclick="document.getElementById('fileInput').click();"
                  />
                </div>
                <div class="custom-file mt-3 mb-3">
                  <input
                    id="fileInput"
                    @change="onImageChange"
                    name="fileInput"
                    type="file"
                    style="display: none"
                  />
                  <input
                    type="button"
                    class="btn btn-primary btn-block mx-auto"
                    value="UPLOAD PRODUCT IMAGE"
                    accept="image/jpeg"
                    onclick="document.getElementById('fileInput').click();"
                  />
                </div>
              </form>
            </div>
            <div class="col-12">
              <button
                type="submit"
                class="btn btn-primary btn-block text-uppercase"
                @click="addProduct"
              >
                Add Product Now
              </button>
            </div>
          </div>
        </div>
      </div>
      <FooterProduct />
    </div>
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
      product: {
        product_name: "",
        price: "",
        discount: "",
        description: "",
        product_id: "",
        image: [],
      },
      file:''
    };
  },
  methods: {
    // imageSelected(e) {},
    onImageChange(e) {
      this.file = e.target.files[0];
    //   let reader = new FileReader();
    //   reader.readAsDataURL(this.product.image);
    },
    addProduct() {
      console.log(this.product.image);
      let form = new FormData();
      for(const key in this.product){
          form.append(key, this.product[key])
      }
      form.append('image',this.file)
      let token = window.localStorage.getItem("token");
      if (token == null) {
        this.$router.push({ name: "Login" });
      }
    //   const data=this.product;
      axios
        .post("http://127.0.0.1:8000/api/addProduct",form,
        {
          headers: {
            Accept: "application/json",
            Authorization: "Bearer" + " " + token,
          },
        })
        .then((response) => {
        this.$router.push({ name: "ProductManage" })
          console.log(response);
        })
        .catch((e) => {
          console.log("Bearer" + token);
          console.log(this.product);
          console.log(e);
        });
    },
  },
  mounted() {},
};
</script>
<style scoped>
.tm-block-h-auto {
  margin-bottom: 60px;
  min-height: 1px;
  max-height: none;
  height: auto;
  margin-top: 60px;
}
.tm-bg-primary-dark {
  background-color: #0d0d0e;
}
.svg-inline--fa {
  background-color: red;
  font-size: 38px;
  display: var(--fa-display, inline-block);
  height: 1em;
  overflow: visible;
  vertical-align: -0.125em;
  border: 1px solid red;
  padding: 5px;
  border-radius: 60%;
}
/* imgae Upload */
</style>