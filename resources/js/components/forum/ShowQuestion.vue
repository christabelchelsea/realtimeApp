<template>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-md-8">
        <div class="card mt-2">
          <div class="card-body">
            <h5 class="card-title my-3">{{ data.title }}</h5>
            <p class="card-text">
              <small class="text-muted">
                <b>{{ data.user }}</b>
                <i>said</i>
                {{ data.created_at }}
              </small>
            </p>
            <hr />
            <p class="card-text">{{ data.body }}</p>
            <a class="btn btn-success">Reply</a>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-4">.col-6 .col-md-4</div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["data"],
  methods: {}
};
</script>

<style  scoped>
a,
a:link,
a:hover {
  color: white;
}
</style>