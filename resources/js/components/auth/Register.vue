<template>
    <div class="auth_form_container page-transition">
        <form @submit.prevent="registerUser" method="post">
            <a href="/">
                <div class="logo">
                    <img src="assets/logo_1.png" alt="">
                    <span>QIGNIT</span>
                </div>
            </a>

            <span class="text_error" id="error">{{ error }}</span>

            <label for="user_name">
                <span>
                    <i class="fa fa-user-circle" aria-hidden="true"> </i>
                    <p>User name</p>
                </span>
                <input v-model="FormData.name" type="text" name="name" id="user_name" placeholder="user name" required>
            </label>

            <label for="email">
                <span>
                    <i class="fa-regular fa-envelope"></i>
                    <p>Email Id</p>
                </span>
                <input v-model="FormData.email" type="email" id="email" name="email" placeholder="email" required>
            </label>

            <label for="password">
                <span>
                    <i class="fa fa-key" aria-hidden="true"> </i>
                    <p>Password</p>
                </span>
                <input v-model="FormData.password" type="password" name="password" id="password" placeholder="password"
                    required>
            </label>

            <label for="password_confirmation">
                <span>
                    <i class="fa fa-key" aria-hidden="true"> </i>
                    <p>Confirm Password</p>
                </span>
                <input v-model="FormData.password_confirmation" type="password" name="password_confirmation"
                    id="password_confirmation" placeholder="confirm password" required>
            </label>

            <button name="register" type="submit">SIGN UP</button>
            <span>
                <p>Have an account? <router-link to="/login">LOGIN</router-link></p>
            </span>
        </form>
    </div>
</template>

<script>
import axios from 'axios';

// Register a user
export default {
    data() {
        return {
            FormData: {
                name: '',
                email: '',
                password: '',
                password_confirmation: '' // Added password confirmation
            },
            error: ''
        }
    },
    methods: {
        async registerUser() {
            try {
                const response = await axios.post('api/register', this.FormData);
                if (response.status === 201) {
                    this.$router.push('/login');
                }
            } catch (error) {
                if (error.response && error.response.data) {
                    this.error = error.response.data.message;
                } else {
                    this.error = 'An error occurred while registering. Please try again later.';
                }
            }
        }
    }
}
</script>