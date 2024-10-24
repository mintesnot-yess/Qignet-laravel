<template>
    <div class="auth_form_container page-transition">
        <form @submit.prevent="handleLogin" method="post">
            <a href="/">
                <div class="logo">
                    <img src="assets/logo_1.png" alt="">
                    <span>QIGNIT</span>
                </div>
            </a>

            <span class="text_error" id="error">{{ error }}</span>

            <label for="email">
                <span>
                    <i class="fa-regular fa-envelope"></i>
                    <p>Email Id</p>
                </span>
                <input type="email" name="email" v-model="FormData.email" id="email" required>
            </label>

            <label for="password">
                <span>
                    <i class="fa fa-key" aria-hidden="true"> </i>
                    <p>Password</p>
                </span>
                <input type="password" name="password" id="password" v-model="FormData.password" required>
            </label>

            <button name="submit" type="submit">Login</button>
            <span>
                <p>You don't have an account? <router-link to="/register">SIGN-UP</router-link></p>
            </span>
        </form>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            FormData: {
                email: '',
                password: ''
            },
            error: ''
        }
    },
    methods: {
        async handleLogin() {
            try {
                const response = await axios.post('api/login', {
                    email: this.FormData.email,
                    password: this.FormData.password
                });

                const { token, user } = response.data;

                localStorage.setItem('token', token);
                localStorage.setItem('user', JSON.stringify(user));

                this.$router.push('/');
            } catch (error) {
                if (error.response && error.response.data) {
                    this.error = error.response.data.error || 'Invalid credentials';
                } else {
                    this.error = 'An error occurred. Please try again later.';
                }
            }
        }
    },
    mounted() {
        if (localStorage.getItem('token')) {
            this.$router.push('/');
        } else {
            this.error = '';
        }
    }
}
</script>