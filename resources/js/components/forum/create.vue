<template>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-md-8">
        <div class="login-form">
          <div class="main-div">
            <div class="panel">
              <h2>Add Question</h2>
            </div>

            <v-form @submit.prevent="createQuestion" id="Login">
              <div class="form-group">
                <label for="lblJudul">Title</label>
                <input
                  type="text"
                  class="form-control"
                  id="lblJudul"
                  v-model="form.title"
                  placeholder="Judul Pertanyaan"
                />
              </div>
              <div class="form-group">
                <label for="lblCategory">Category</label>

                <select class="form-control" id="lblCategory" v-model="form.category_id">
                  <option
                    v-for="kategori in categories"
                    :key="kategori.id"
                    :value="kategori.id"
                  >{{kategori.name }}</option>
                </select>
              </div>
              <div class="form-group">
                <label for="lblQuestion">Question</label>
                <vue-simplemde v-model="form.body" ref="markdownEditor" />
              </div>
              <button type="submit" class="btn btn-primary">Add</button>
            </v-form>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-4">.col-6 .col-md-4</div>
    </div>
  </div>
</template>

<script>
// import VueSimplemde from "vue-simplemde";

export default {
  data() {
    return {
      form: {
        title: null,
        category_id: null,
        body: null
      },
      categories: {},
      errors: {}
    };
  },
  components: {
    // VueSimplemde
  },
  created() {
    axios
      .get("/api/category")
      .then(res => (this.categories = res.data.data))
      .catch(error => console.log(error.response.data));
  },
  methods: {
    createQuestion() {
      axios
        .post("/api/question", this.form)
        .then(res => console.log(res.data))
        .catch(error => (this.errors = error.response.data.error));
    }
  }
};
</script>
<style>
/* @import "~simplemde/dist/simplemde.min.css"; */
</style>