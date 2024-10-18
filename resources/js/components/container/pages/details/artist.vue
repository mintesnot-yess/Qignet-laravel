<template>
    <div class="artist_page page-transition" style="">
        <div class="artist_page_container">
            <div class="artist_page" v-for=" user in users" :key="user.id" style="   background-position:
                center; background-size: cover; background-repeat: no-repeat; " :style="`
                background-image:linear-gradient(transparent, var(--black_50)),
                url(/assets/avatars/${user.profile_image});`">
                <span>
                    <h1>{{ user.name }}</h1>
                </span>
            </div>
        </div>
        <div class="flex_list_container">
            <h1></h1>
            <button title="play all song">
                <i class="fa fa-play"> </i>
            </button>
        </div>

        <div class="music_list_container">

            <div v-for="music in musics.musics" :key="music.id" class="music_list">
                <span class="left">
                    <button onclick="play_up(this)" title="click to open " data-artistname="Zara larsson"
                        data-title=" Right here" data-music_sours="Zara_Larsson_Right_Here.mp3" data-image="R (2).jpeg"
                        data-artist="Zara larsson" data-id="27" data-user_id="35">
                        <i class="fa fa-play" aria-hidden="true"></i>
                    </button>
                    <img :src="`assets/albem_arts/${music.albem_art}`">

                    <div class="music_detail">
                        <p class="title">{{ music.artist }}</p>
                        <p class="artist">{{ music.artist }}</p>
                    </div>
                </span>

                <span>
                    <button>
                        <i class="fa fa-download" aria-hidden="true"></i>
                    </button>
                </span>
            </div>
        </div>

    </div>
</template>

<script>
import axios from "axios";


export default {

    data() {
        return {
            users: [],
            musics: [],
        };
    },

    mounted() {
        this.FetchUserDetails();
        this.FetchMusicsSource();
    },

    methods: {
        FetchUserDetails() {
            const userId = this.$route.params.id;

            axios
                .get(`api/artist-detail/${userId}`)
                .then((response) => {
                    this.users = response.data;
                })
                .catch((error) => {
                    console.error(error);
                });
        },

        FetchMusicsSource() {
            const userId = this.$route.params.id;

            axios
                .get(`api/artists-musics/${userId}`)
                .then((response) => {
                    this.musics = response.data;
                })
                .catch((error) => {
                    console.error(error);
                });
        },

    },
};
</script>