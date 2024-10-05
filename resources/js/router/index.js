import { createRouter, createWebHashHistory } from "vue-router";
import Home from "../components/Home.vue";
import Search from "../components/Search.vue";
import Musics from "../components/Musics.vue";
import NotFoundPage from "../components/NotFoundPage.vue";
import Userdetail from "../components/auth/Userdetail.vue";
import UserLogin from "../components/auth/Login.vue";
import UserRegister from "../components/auth/Register.vue";

const routes = [
  {
    path: "/",
    component: Home
  },
  {
    path: "/search",
    component: Search
  },
  {
    path: "/music",
    component: Musics
  },
  {
    path: "/recently-played",
    component: Musics
  },

  {
    path: "/users-profile/:id",
    component: Userdetail
  },
  {
    path: "/login",
    component: UserLogin
  },
  {
    path: "/register",
    component: UserRegister
  },
  {
    path: "/:pathName(.*)",
    component: NotFoundPage
  }
];

const router = createRouter({
  history: createWebHashHistory(),
  routes
});

export default router;
