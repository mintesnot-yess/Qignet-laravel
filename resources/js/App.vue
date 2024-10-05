<template>
    <div class="container">
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

        <div class="player_controll_container">
            <button onclick="controll_resize()" class="music_cont_resize">
                <i class="fa fa-angle-down" aria-hidden="true"></i>
            </button>

            <div class="player_controll">
                <div class="img">
                    <img class="current_music_image" src="assets/albem_arts/R (1).jpeg" alt="">
                </div>

                <span class="detail">
                    <button onclick="artistPage(this.value,this.value)"
                        class="current_music_artist btn1 w-fit"></button>
                    <div class="current_music_title"></div>
                </span>

                <div class="controll">
                    <button title="Previous" id="previous_play">
                        <i class="fa-solid fa-backward-step"></i>
                    </button>

                    <button title="Play" onclick="document.getElementById('audio').play()" class="play_pause_btn">
                        <i class="fa fa-play" aria-hidden="true"></i>
                    </button>

                    <button title="next" id="next_play">
                        <i class="fa-solid fa-forward-step"></i>
                    </button>
                </div>

                <div class="time_slider">
                    <input oninput="changeDuration()" class="time_changer" max="100" type="range" value="0" />
                </div>

                <div class="volumes">
                    <span class="vol_changer">
                        <button class="muted_btn">
                            <i class="fa fa-volume-up" aria-hidden="true"></i>
                        </button>

                        <input oninput="volumeChange(this.value)" class="volume_slider" value="50" type="range"
                            max="100" />
                    </span>

                    <span>
                        <button onclick="add_like_song(this.value)" title="like this song "
                            class="current_music_like_btn">
                            <i class="fa fa-heart" aria-hidden="true"></i>
                        </button>
                    </span>
                </div>
            </div>
        </div>

        <main>
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

            <router-view />

        </main>

        <audio src="assets/musics/Selena-Gomez-Love-You-Like-A-Love-Song-128.mp3" id="audio">
        </audio>


    </div>
</template>
