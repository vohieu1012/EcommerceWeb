<template>
  <div>
    <HeaderProduct />
    <div class="row tm-mt-big tm-mb-big">
      <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
        <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
          <div class="row">
            <div class="col-12">
              <h2 class="tm-block-title d-inline-block">Edit Product</h2>
            </div>
          </div>
          <div class="row tm-edit-product-row">
            <div class="col-xl-6 col-lg-6 col-md-12">
              <div class="form-group mb-3">
                <label for="name">Product Name </label>
                <input
                  id="name"
                  name="name"
                  type="text"
                  class="form-control validate"
                />
              </div>
              <div class="form-group mb-3">
                <label for="description">Description</label>
                <textarea
                  class="form-control validate tm-small"
                  rows="5"
                  required
                ></textarea>
              </div>
              <div class="row">
                <div class="form-group mb-3 col-xs-12 col-sm-6">
                  <label for="expire_date">Price </label>
                  <input
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
                    id="expire_date"
                    name="product_id"
                    type="number"
                    class="form-control validate"
                    data-large-mode="true"
                  />
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
              <div class="tm-product-img-edit mx-auto">
                <img
                  src="img/product-image.jpg"
                  alt="Product image"
                  class="img-fluid d-block mx-auto"
                />
                <i
                  class="fas fa-cloud-upload-alt tm-upload-icon"
                  onclick="document.getElementById('fileInput').click();"
                ></i>
              </div>
              <div class="custom-file mt-3 mb-3">
                <input id="fileInput" type="file" style="display: none" />
                <input
                  type="button"
                  class="btn btn-primary btn-block mx-auto"
                  value="CHANGE IMAGE NOW"
                  onclick="document.getElementById('fileInput').click();"
                />
              </div>
            </div>
            <div class="col-12">
              <button
                type="submit"
                class="btn btn-primary btn-block text-uppercase"
              >
                Update Now
              </button>
            </div>
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
export default {
  components: {
    HeaderProduct,
    FooterProduct,
  },
};
</script>
<style scoped>
</style>