<template>
  <div class="card mt-2">
    <div class="card-body">
      <h5 class="card-title my-3">{{ data.title }}</h5>
      <p class="card-text">
        <small class="text-muted">{{ data.created_at }}</small>
      </p>
      <p class="card-text">{{ data.body }}</p>
      <router-link :to="data.slug">
        <a class="btn btn-primary">Selengkapnya</a>
      </router-link>
    </div>
  </div>
</template>

<script>
export default {
  props: ["data"]
};
</script>

<style  scoped>
a,
a:link,
a:hover {
  color: white;
}
</style>