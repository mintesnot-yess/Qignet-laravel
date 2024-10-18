<template>

    <div class="auth_form_container page-transition">

        <form method="post">

            <a href="/">

                <div class="logo">
                    <img src="assets/logo_1.png" alt="">
                    <span>
                        QIGNIT
                    </span>

                </div>


            </a>


            <span class="text_error" id="error">
            </span>


            <label for="user_name">
                <span>
                    <i class="fa fa-user-circle" aria-hidden="true"> </i>
                    <p>User name</p>
                </span>

                <input type="text" name="name" id="user_name" min="3" value="" placeholder="user name" required>


            </label>
            <label for="email">
                <span>
                    <i class="fa-regular fa-envelope"></i>
                    <p>Email Id</p>
                </span>

                <input type="email" id="email" name="email" value="" placeholder="email" required> </label>






            <label for="password">
                <span>
                    <i class="fa fa-key" aria-hidden="true"> </i>
                    <p>password</p>

                </span>

                <input type="password" name="password" id="password" value="" required placeholder="password" min="6"
                    max="20"> </label>

            <button name="register" type="submit">
                SiGN UP
            </button>
            <span>
                <p>
                    have an account? <router-link to="/login">LOGIN</router-link>
                </p>
            </span>


        </form>




    </div>
</template>