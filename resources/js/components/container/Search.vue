<script>
import { defineComponent } from 'vue'
import Search from "./pages/Search.vue"
import Aside from '../../partials/Aside.vue';
import MusicPlayer from '../../partials/MusicPlayer.vue';
import MainHeader from '../../partials/MainHeader.vue';

export default defineComponent({
    components: { Search, Aside, MusicPlayer, MainHeader }
})





</script>

<template>
    <Aside></Aside>
    <MusicPlayer> </MusicPlayer>
    <main>
        <MainHeader></MainHeader>
        <Search />
    </main>


</template>