<template>
  <div>
    <navbar></navbar>
    <router-view></router-view>
    <!-- <app-footer></app-footer> -->
  </div>
</template>
     
<script>
import navbar from "./Navbar";
// import AppFooter from "./AppFooter";
import login from "./login/Login";

export default {
  components: { navbar, login }
};
</script>