<template>
  <div class="container">
    <div class="login-form">
      <div class="main-div">
        <div class="panel">
          <h2>SIGN UP</h2>
        </div>

        <v-form @submit.prevent="signup" id="Login">
          <div class="form-group">
            <input
              type="text"
              v-model="form.name"
              class="form-control is-invalid"
              placeholder="Nama"
              required
            />
            <div v-if="errors.name" class="invalid-feedback">{{errors.name[0]}}</div>
          </div>
          <div class="form-group">
            <input
              v-model="form.email"
              type="email"
              class="form-control is-invalid"
              placeholder="Email Address"
              required
            />
            <div v-if="errors.email" class="invalid-feedback">{{errors.email[0]}}</div>
          </div>

          <div class="form-group">
            <input
              v-model="form.password"
              type="password"
              class="form-control is-invalid"
              placeholder="Password"
              required
            />
            <div v-if="errors.password" class="invalid-feedback">{{errors.password[0]}}</div>
          </div>
          <div class="form-group">
            <input
              v-model="form.password_confirmation"
              type="password"
              class="form-control is-invalid"
              placeholder="Password confirmation"
              required
            />
          </div>

          <button type="submit" class="btn btn-primary">Sign Up</button>

          <div class="forgot">
            <router-link to="/login">
              <div class="forgot">Login</div>
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
        name: null,
        email: null,
        password: null,
        password_confirmation: null
      },
      errors: {}
    };
  },
  created() {
    if (User.loggedIn()) {
      this.$router.push({ name: "forum_name" });
    }
  },
  methods: {
    signup() {
      axios
        .post("/api/auth/signup", this.form)
        .then(res => {
          User.responAfterLogin(res);
          // this.$router.push({ name: "forum_name" });
        })
        .catch(error => (this.errors = error.response.data.errors));
      // .catch(error => (this.errors = error.response.data.error));
    }
  }
};
</script>


<style scoped>
.invalid-feedback {
  text-align: left;
}
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