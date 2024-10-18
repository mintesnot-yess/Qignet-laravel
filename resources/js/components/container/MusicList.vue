<script>
import { defineComponent } from 'vue'
import Music from "./pages/Musics.vue"
import Aside from '../../partials/Aside.vue';
import MusicPlayer from '../../partials/MusicPlayer.vue';
import MainHeader from '../../partials/MainHeader.vue';

export default defineComponent({
    components: { Music, Aside, MusicPlayer, MainHeader }
})





</script>

<template>
    <Aside></Aside>
    <MusicPlayer> </MusicPlayer>
    <main>
        <MainHeader></MainHeader>
        <Music />
    </main>


</template>