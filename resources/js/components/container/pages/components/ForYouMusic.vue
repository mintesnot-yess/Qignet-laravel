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
            axios.get(`/api/musics/${limit}`)
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


    <button v-for="Music in Musics" :key="Music.id"
        :style="{ 'backgroundImage': `url(/assets/albem_arts/${Music.albem_art})` }" class="card">
        <span class="music_btn">
            <i onclick="play_up(this)" title="click to open " data-artistname="Rophnan" data-title=" Behon"
                data-music_sours="6 - Rophnan - Essey.mp3" data-image="OIP (1).jpeg" data-artist="Rophnan" data-id="26"
                data-user_id="34" class="fa fa-play player_btn" aria-hidden="true"></i>
            <p>
                {{ Music.title }}

            </p>
            <router-link :to="`/users-profile/${Music.user_id}`" class="artist">
                {{ Music.artist }}

            </router-link>
        </span>
    </button>


</template>