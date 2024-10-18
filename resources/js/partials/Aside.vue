<template>
    <aside>
        <ul class="un_aside">
            <a href="/" class="logo">
                <img src="assets/logo_1.png" alt="" />
                <span>QIGNET</span>
            </a>
        </ul>
        <ul>
            <router-link active-class="active" to="/" title="Home" class="side_nav " exact>
                <i class="fa fa-home" aria-hidden="true"></i>
                <span> home </span>
            </router-link>
            <router-link active-class="active" to="/search" title="search" class="side_nav" value="-">
                <i class="fa fa-search" aria-hidden="true"></i>
                <span> search </span>
            </router-link>

            <router-link active-class="active" to="/music" title="Musics" class="side_nav">
                <i class="fa fa-music" aria-hidden="true"></i>
                <span> musics </span>
            </router-link>

            <router-link active-class="active" to="recently-played" title="recently played" class="side_nav">
                <i class="fa fa-clock" aria-hidden="true"></i>
                <span> recently played </span>
            </router-link>
        </ul>
    </aside>
</template>
