<template>
  <v-container>
    <v-form @submit.prevent="login">
      <v-text-field v-model="form.email" label="Email" type="text" required></v-text-field>

      <v-text-field v-model="form.password" label="Password" type="password" required></v-text-field>

      <v-btn color="green" type="submit" class="mr-4">Sign In</v-btn>
    </v-form>
  </v-container>
</template>

<script>
export default {
  data() {
    return {
      form: {
        email: null,
        password: null
      }
    };
  },
  methods: {
    login() {
      User.login(this.form);
    }
  }
};
</script>