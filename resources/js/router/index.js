import { createRouter, createWebHashHistory } from "vue-router";
import Home from "../components/container/Home.vue";
import Musics from "../components/container/MusicList.vue";
import Search from "../components/container/Search.vue";
import ArtistDetail from "../components/container/Artist.vue";
import NotFoundPage from "../components/NotFoundPage.vue";
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
    component: ArtistDetail
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
