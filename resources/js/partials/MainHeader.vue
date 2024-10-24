<template>
    <header class="main_navs">
        <div class="navs">

            <router-link to="/music" class="btn"> New Release </router-link>
            <span class="ex_btns">
                <button onclick="aside_bar()" class="btn logo">
                    <i class="fs-1 fa fa-bars" aria-hidden="true"></i>
                </button>
            </span>

            <a href="/" class="logo">
                <img src="assets/logo_1.png" alt="" />
                <span> QIGNET </span>
            </a>

            <!-- Check if user is logged in -->
            <router-link to="/user-detail" v-if="isLoggedIn">
                <img :src="`assets/avatars/${profilePicture}`" alt="Profile Picture" class="profile-pic" />
            </router-link>

            <div v-else>
                <router-link to="/login" class="p-10 f-1 link login">login</router-link>
            </div>
        </div>
    </header>
</template>

<script>
export default {
    data() {
        return {
            isLoggedIn: false,
            username: '',
            profilePicture: '',
        }
    },
    mounted() {
        // Check if user is logged in by checking localStorage
        const userData = localStorage.getItem('user'); // Replace 'user' with your actual localStorage key

        if (userData) {
            this.isLoggedIn = true;
            const user = JSON.parse(userData);
            this.username = user.name; // Assuming the user object has a 'name' property
            this.profilePicture = user.profile_image; // Assuming the user object has a 'profilePicture' property
            this.userId = user.id
        } else {
            this.isLoggedIn = false;
        }
    }
}
</script>

<style>
.profile-pic {
    width: 40px;
    height: 40px;
    border-radius: 50%;
}
</style>