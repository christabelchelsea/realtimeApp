<template>
  <div class="container">
    <div class="login-form">
      <div class="main-div">
        <div class="panel">
          <h2>Admin Login</h2>
          <p>Please enter your email and password</p>
        </div>

        <v-form @submit.prevent="login" id="Login">
          <div class="form-group">
            <input
              v-model="form.email"
              type="email"
              class="form-control"
              placeholder="Email Address"
              required
            />
          </div>

          <div class="form-group">
            <input
              v-model="form.password"
              type="password"
              class="form-control"
              placeholder="Password"
              required
            />
          </div>

          <button type="submit" class="btn btn-primary">Login</button>

          <div class="forgot">
            <router-link to="/signup">
              <div class="forgot">Sign Up</div>
            </router-link>
          </div>
        </v-form>
      </div>
    </div>
  </div>
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
  created() {
    if (User.loggedIn()) {
      this.$router.push({ name: "forum_name" });
    }
  },
  methods: {
    login() {
      User.login(this.form);
      this.$router.push({ name: "forum_name" });
    }
  }
};
</script>

<style scoped>
.form-heading {
  color: #fff;
  font-size: 23px;
}
.panel h2 {
  color: #444444;
  font-size: 18px;
  margin: 0 0 8px 0;
}
.panel p {
  color: #777777;
  font-size: 14px;
  margin-bottom: 30px;
  line-height: 24px;
}
.login-form .form-control {
  background: #f7f7f7 none repeat scroll 0 0;
  border: 1px solid #d4d4d4;
  border-radius: 4px;
  font-size: 14px;
  height: 50px;
  line-height: 50px;
}
.main-div {
  background: #ffffff none repeat scroll 0 0;
  border-radius: 2px;
  margin: 10px auto 30px;
  padding: 50px 70px 70px 71px;
}
@media screen and (min-width: 720px) {
  .main-div {
    max-width: 38%;
  }
}

.login-form .form-group {
  margin-bottom: 10px;
}
.login-form {
  text-align: center;
}
.forgot a {
  color: #777777;
  font-size: 14px;
  text-decoration: underline;
}
.login-form .btn.btn-primary {
  background: #f0ad4e none repeat scroll 0 0;
  border-color: #f0ad4e;
  color: #ffffff;
  font-size: 14px;
  width: 100%;
  height: 50px;
  line-height: 50px;
  padding: 0;
}
.forgot {
  text-align: left;
  margin-bottom: 30px;
}
.botto-text {
  color: #ffffff;
  font-size: 14px;
  margin: auto;
}
.login-form .btn.btn-primary.reset {
  background: #ff9900 none repeat scroll 0 0;
}
.back {
  text-align: left;
  margin-top: 10px;
}
.back a {
  color: #444444;
  font-size: 13px;
  text-decoration: none;
}
</style>