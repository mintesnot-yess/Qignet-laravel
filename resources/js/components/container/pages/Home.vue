<template>


    <div class="page-transition">

        <div class="divider"></div>
        <!-----   home pages        ---------->
        <div style="animation: play_list_intro 0.5s" class="home_view ">
            <!--  artists         -->
            <div>
                <div onclick="all_artists()" class="d-flex jc-space-between ai-center content_title btn-1">
                    <span> artists </span>
                    <button onclick="all_artists()">
                        <i class="fa fa-angle-right"></i>
                    </button>
                </div>

                <div class="card_container">
                    <ArtistLink />
                </div>

            </div>
            <!--  your favorite songs          ------->
            <div></div>
            <!--  for you songs      -->
            <div class="d-flex jc-space-between ai-center mt-10 content_title">
                <span> for you </span>
            </div>

            <div class="card_container ">
                <ForYouMusic />
            </div>
            <!--  your like songs      -->
            <div></div>
            <!--   New releases     -->
            <div onclick="all_songs()" class="d-flex jc-space-between ai-center mt-10 content_title btn-1">
                <span> new release </span>
                <button onclick="all_songs()"><i class="fa fa-angle-right"></i></button>
            </div>
            <div class="music_list_container">
                <NewMusic />
            </div>
            <div></div>
        </div>
    </div>

</template>


<script>
import ArtistLink from './components/Artist.vue';
import ForYouMusic from './components/ForYouMusic.vue';
import NewMusic from './components/NewMuisc.vue';

export default {

    components: { ArtistLink, ForYouMusic, NewMusic }

}
</script>