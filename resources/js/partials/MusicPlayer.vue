<template>
    <div class="player_controll_container">
        <button onclick="controll_resize()" class="music_cont_resize">
            <i class="fa fa-angle-down" aria-hidden="true"></i>
        </button>

        <div class="player_controll">
            <div class="img">
                <img class="current_music_image" src="assets/albem_arts/R (1).jpeg" alt="">
            </div>

            <span class="detail">
                <button onclick="artistPage(this.value,this.value)" class="current_music_artist btn1 w-fit"></button>
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

                    <input oninput="volumeChange(this.value)" class="volume_slider" value="50" type="range" max="100" />
                </span>

                <span>
                    <button onclick="add_like_song(this.value)" title="like this song " class="current_music_like_btn">
                        <i class="fa fa-heart" aria-hidden="true"></i>
                    </button>
                </span>
            </div>
        </div>
    </div>


</template>
