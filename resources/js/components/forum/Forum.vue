<template>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-md-8">
        <question v-for="question in questions" :key="question.title" :data="question"></question>
      </div>
      <div class="col-6 col-md-4">.col-6 .col-md-4</div>
    </div>
  </div>
</template>

<script>
import question from "./question";
export default {
  data() {
    return {
      questions: {}
    };
  },
  components: { question },
  created() {
    axios
      .get("/api/question")
      .then(res => (this.questions = res.data.data))
      .catch(error => console.log(error.response.data));
  }
};
</script>