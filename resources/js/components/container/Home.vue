<script>
import { defineComponent } from 'vue'
import Home from "./pages/Home.vue"
import Aside from '../../partials/Aside.vue';
import MusicPlayer from '../../partials/MusicPlayer.vue';
import MainHeader from '../../partials/MainHeader.vue';

export default defineComponent({
    components: { Home, Aside, MusicPlayer, MainHeader }
})





</script>

<template>
    <Aside></Aside>
    <MusicPlayer> </MusicPlayer>
    <main>
        <MainHeader></MainHeader>
        <Home />
    </main>


</template>