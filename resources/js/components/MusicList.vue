// MusicList.vue

<template>
    <div>
        <h1>Music List</h1>
        <ul v-for="music in musics" :key="music.id">

            <li>

                <span>

                    artist name:

                    {{ music.artist }}
                </span>

            </li>

            <li>

                <span>
                    music title:
                    {{ music.title }}

                </span>



            </li>
            <li>

                <span>
                    albe art:
                    {{ music.albem_art }}

                </span>



            </li>
            <li>

                <span>
                    albe art:
                    {{ music.user_id }}

                </span>



            </li>
            <li>

                <span>
                    albe art:
                    {{ music.user_id }}

                </span>



            </li>
        </ul>
    </div>
</template>

<script>
import axios from 'axios';
export default {

    data() {
        return {
            musics: []
        }
    },
    mounted() {
        this.fetchMusics();
    },
    methods: {
        fetchMusics() {
            axios.get('/api/musics')
                .then(response => {
                    this.musics = response.data;
                })
                .catch(error => {
                    console.error(error);
                });
        }
    }
}
</script>