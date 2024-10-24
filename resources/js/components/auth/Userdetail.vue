<template>
    <div class="user_page_container page-transition" style="display: block;">



        <div class="user_page p-sticky" style="
 background-position: center;
                background-size: cover;
                background-repeat: no-repeat;"
            :style="`background-image:linear-gradient(transparent, var(--black_50)), url(/assets/avatars/${profilePicture});`">



            >

            <span>

                <h1> {{ username }}</h1>

                <button onclick="profile_editor()">

                    <i class="fas fa-user-edit"> edit</i>

                </button>

            </span>

        </div>


        <div class="d-flex jc-space-between ai-center content_title">
            <span>
                <i class="fa fa-music" aria-hidden="true"></i>
                3 Songs

            </span>

            <span>
                <i class="fa fa-user" aria-hidden="true"> </i>
                1 followers
            </span>

        </div>




        <div class="music_list_container">





            <div v-for="music in musics.musics" :key="music.id" class="music_list">
                <span class="left">
                    <button onclick="play_up(this)" title="Open " data-artistname="Ariana Grande" data-title=" Position"
                        data-music_sours="Ariana Grande - positions.mp3" data-image="photo_2024-07-15_22-25-06.jpg"
                        data-artist="Ariana Grande" data-id="21">
                        <i class="fa fa-play " aria-hidden="true"></i>
                    </button>
                    <img :src="`assets/albem_arts/${music.albem_art}`" alt="">
                    <div class="music_detail">
                        <p class="title"> {{ music.title }}</p>
                        <p class="artist">{{ music.artist }} </p>
                    </div>
                </span>

                <span>

                    <button onclick="music_editor(this)" data-music_artist="Ariana Grande"
                        data-music_image="photo_2024-07-15_22-25-06.jpg" data-music_title=" Position"
                        data-music_id="21">
                        <i class="fa fa-edit" aria-hidden="true"></i>
                    </button>

                    <button onclick="delete_music(this)" data-music_name="Ariana Grande" data-music_title=" Position"
                        data-music_image="photo_2024-07-15_22-25-06.jpg" data-music_id="21">
                        <i class="fa fa-trash" aria-hidden="true"></i>
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
            username: '',
            profilePicture: '',
            userId: '',
            musics: []

        }
    },
    mounted() {
        const userData = localStorage.getItem('user');
        const user = JSON.parse(userData);
        this.username = user.name;
        this.profilePicture = user.profile_image;
        this.userId = user.id;
        this.FetchMusicsSource();


    }, methods: {
        FetchMusicsSource() {
            const userId = this.userId;

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
}
</script>