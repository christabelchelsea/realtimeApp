<template>
  <div>
    <beranda></beranda>
    <router-view></router-view>
    <app-footer></app-footer>
  </div>
</template>
     
<script>
import beranda from "./Beranda";
import AppFooter from "./AppFooter";
import login from "./login/Login";

export default {
  components: { beranda, AppFooter, login }
};
</script>