<script>
import axios from 'axios';
export default {

    data() {
        return {
            Musics: []
        }
    },
    mounted() {
        this.fetchMusic(4);
    },



    methods: {
        fetchMusic(limit) {
            axios.get(`/api/new-musics/${limit}`)
                .then(response => {
                    this.Musics = response.data;
                })
                .catch(error => {
                    console.error(error);
                });
        }
    },
}
</script>


<template>

    <div v-for="Music in Musics" :key="Music.id" class="music_list">
        <span class="left">

            <button onclick="play_up(this)" title="click to open " data-artistname="Rophnan" data-title=" Behon"
                data-music_sours="7 - Rophnan - Bihon.mp3" data-image="photo_2024-06-29_19-03-31.jpg"
                data-artist="Rophnan" data-id="32" data-user_id="34">
                <i class="fa fa-play" aria-hidden="true"></i>
            </button>
            <img :src="`/assets/albem_arts/${Music.albem_art}`" alt="" />

            <div class="music_detail">
                <p class="title">{{ Music.title }}</p>

                <router-link :to="`/users-profile/${Music.user_id}`">{{ Music.artist }}</router-link>
            </div>
        </span>

        <span>
            <a href="assets/musics/7 - Rophnan - Bihon.mp3" download="qignet_music-Rophnan_ Behon">
                <button><i class="fa fa-download" aria-hidden="true"></i></button>
            </a>
        </span>
    </div>

</template>