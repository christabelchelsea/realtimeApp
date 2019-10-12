<template>
  <div>
    <v-app class="toolbars">
      <v-toolbar>
        <router-link to="/">
          <v-toolbar-title>MyApp</v-toolbar-title>
        </router-link>

        <div class="flex-grow-1"></div>

        <div>
          <v-btn text>Forum</v-btn>
          <v-btn text>Category</v-btn>
          <router-link to="/login">
            <v-btn text>Login</v-btn>
          </router-link>
        </div>
      </v-toolbar>
    </v-app>
  </div>
</template>

<style>
.toolbars {
  height: 70px;
  background-color: red;
}
</style>