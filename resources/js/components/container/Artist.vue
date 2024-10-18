<script>
import { defineComponent } from 'vue';
import Aside from '../../partials/Aside.vue';
import MusicPlayer from '../../partials/MusicPlayer.vue';
import MainHeader from '../../partials/MainHeader.vue';
import Userdetail from './pages/details/artist.vue';

export default defineComponent({
    components: { Userdetail, Aside, MusicPlayer, MainHeader, Userdetail }
})
</script>

<template>



    <Aside></Aside>
    <MusicPlayer> </MusicPlayer>
    <main>
        <MainHeader></MainHeader>
        <userdetail />
    </main>
</template>