<script>
import { defineComponent } from 'vue'
import Userdetail from "../auth/Userdetail.vue"
import Aside from '../../partials/Aside.vue';
import MusicPlayer from '../../partials/MusicPlayer.vue';
import MainHeader from '../../partials/MainHeader.vue';

export default defineComponent({
    components: { Userdetail, Aside, MusicPlayer, MainHeader }
})





</script>

<template>
    <Aside></Aside>
    <MusicPlayer> </MusicPlayer>
    <main>
        <MainHeader></MainHeader>
        <Userdetail />
    </main>


</template>