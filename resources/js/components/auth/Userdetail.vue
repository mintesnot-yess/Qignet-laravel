<template>
    <div class="artist_page page-transition" style="">

        <div class="artist_page_container">
            <div class="artist_page" style="
          
          background-position: center;
          background-size: cover;
          background-repeat: no-repeat;
        " :style="{ 'backgroundImage': `url(/assets/avatars/${users.profile_image})` }">
                <span>
                    <h1>{{ users.name }}</h1>
                </span>
            </div>
            <div class="flex_list_container">
                <h1></h1>

                <button title="play all song" onclick="musics_sour( 32)">
                    <i class="fa fa-play"> </i>
                </button>
            </div>

            <div class="music_list_container">
                <div class="music_list">
                    <span class="left">
                        <button onclick="play_up(this)" title="click to open " data-artistname="Ariana Grande"
                            data-title=" Position" data-music_sours="Ariana Grande - positions.mp3"
                            data-image="photo_2024-07-15_22-25-06.jpg" data-artist="Ariana Grande" data-id="21"
                            data-user_id="32">
                            <i class="fa fa-play" aria-hidden="true"></i>
                        </button>
                        <img src="assets/albem_arts/photo_2024-07-15_22-25-06.jpg" alt="" />

                        <div class="music_detail">
                            <p class="title">Position</p>
                            <p class="artist">Ariana Grande</p>
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
        <!-------------------->
    </div>
</template>


<script>
import axios from 'axios';
export default {

    data() {
        return {
            users: [],
        }
    },
    mounted() {
        this.fetchUsers();
    },



    methods: {
        fetchUsers() {
            const userId = this.$route.params.id;
            axios.get(`api/users-profile/${userId}`)
                .then(response => {
                    this.users = response.data;
                })
                .catch(error => {
                    console.error(error);
                });
        },
    }
}
</script>