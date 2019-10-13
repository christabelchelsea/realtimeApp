import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Login from '../components/login/Login';
import Signup from '../components/login/signup';
import Forum from '../components/forum/Forum';
import Read from '../components/forum/read'
import Create from '../components/forum/create'
import Logout from '../components/login/logout';

const routes = [
  { path: '/login', name: 'Login', component: Login },
  { path: '/logout', name: 'Logout', component: Logout },
  { path: '/signup', name: 'Signup', component: Signup },
  { path: '/forum', name: 'forum_name', component: Forum },
  { path: '/question/:slug', name: 'read_name', component: Read },
  { path: '/ask', name: 'create_name', component: Create },
]

const router = new VueRouter({
  routes, // short for `routes: routes`
  hashbang: false,
  mode: 'history'
})

export default router