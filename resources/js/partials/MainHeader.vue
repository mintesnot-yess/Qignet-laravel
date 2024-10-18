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

            <router-link to="login" class="p-10 f-1 link login">login</router-link>
        </div>

    </header>
</template>