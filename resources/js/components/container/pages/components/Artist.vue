<template>

    <router-link v-for="user in users" :key="user.id" class="card artist" :to="`/users-profile/${user.id}`"
        :style="{ 'backgroundImage': `url(/assets/avatars/${user.profile_image})` }">
        <span>
            <p class="artist">
                {{ user.name }}
            </p>
        </span>
    </router-link>

</template>
<script>
import axios from 'axios';
export default {

    data() {
        return {
            users: []
        }
    },
    mounted() {
        this.fetchUsers(4);
    },



    methods: {
        fetchUsers(limit) {
            axios.get(`/api/users/${limit}`)
                .then(response => {
                    this.users = response.data;
                })
                .catch(error => {
                    console.error(error);
                });
        }
    },
}
</script>