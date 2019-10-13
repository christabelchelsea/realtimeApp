<template>
  <show-question :data="questions"></show-question>
</template>
     
<script>
import ShowQuestion from "./ShowQuestion";
export default {
  components: { ShowQuestion },
  data() {
    return {
      questions: {}
    };
  },
  created() {
    axios
      .get(`/api/question/${this.$route.params.slug}`)
      .then(res => (this.questions = res.data.data))
      .catch(error => console.log(error.response.data));
  }
};
</script>