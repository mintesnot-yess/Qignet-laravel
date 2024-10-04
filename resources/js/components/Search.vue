<template>
    <div class="page-transition">



        <div class="searching_page ptop-10   " style="display: block;">
            <form action="">
                <i class="fa fa-search" aria-hidden="true"></i>
                <input oninput="searching(this.value)" type="search" placeholder="search music">
            </form>
        </div>
        <div class="d-flex jc-space-between ai-center content_title">


        </div>
        <div class="playlist_page">
            <div class="searching_page_container">
                <div class="searching_page_content">

                    <div class="card_container " style="margin:20px 0 0 0;">
                        <button value="32" onclick="artistPage(this.value,'Ariana Grande')"
                            style="background-image: url(&quot;assets/avatars/afbf4e6c-1df8-4151-8384-4e01333f2605-eternal_sunshine_standard_cover.avif&quot;); flex: 1 1 200px; animation: auto ease 0s 1 normal none running none;"
                            class="card ">
                            <span> Ariana Grande </span>
                        </button>
                        <button value="33" onclick="artistPage(this.value,'Selena Gomeze')"
                            style="background-image: url(&quot;assets/avatars/R.jpeg&quot;); flex: 1 1 200px; animation: auto ease 0s 1 normal none running none;"
                            class="card ">
                            <span> Selena Gomeze </span>
                        </button>
                        <button value="34" onclick="artistPage(this.value,'Rophnan')"
                            style="background-image: url(&quot;assets/avatars/rophnan.jpg&quot;); flex: 1 1 200px; animation: auto ease 0s 1 normal none running none;"
                            class="card ">
                            <span> Rophnan </span>
                        </button>
                        <button value="35" onclick="artistPage(this.value,'Zara larsson')"
                            style="background-image: url(&quot;assets/avatars/maxresdefault.jpg&quot;); flex: 1 1 200px; animation: auto ease 0s 1 normal none running none;"
                            class="card ">
                            <span> Zara larsson </span>
                        </button>
                        <button value="36" onclick="artistPage(this.value,'Imagine Dragons')"
                            style=" flex: 1 1 200px; animation: auto ease 0s 1 normal none running none;" class="card ">
                            <span> Imagine Dragons </span>
                        </button>
                        <button value="42" onclick="artistPage(this.value,'dame')"
                            style="background-image: url(&quot;assets/avatars/IMG_20240224_102458-01.jpeg&quot;); flex: 1 1 200px; animation: auto ease 0s 1 normal none running none;"
                            class="card ">
                            <span> dame </span>
                        </button>
                        <div class="music_list_container">
                            <div class="music_list">
                                <span class="left">
                                    <button onclick="play_up(this)" title="click to open "
                                        data-artistname="Ariana Grande" data-title=" Position"
                                        data-music_sours="Ariana Grande - positions.mp3"
                                        data-image="photo_2024-07-15_22-25-06.jpg" data-artist="Ariana Grande"
                                        data-id="21" data-user_id="32">
                                        <i class="fa fa-play " aria-hidden="true"></i>
                                    </button>
                                    <img src="assets/albem_arts/photo_2024-07-15_22-25-06.jpg">
                                    <div class="music_detail">
                                        <p class="title"> Position</p>
                                        <p onclick="artistPage('32','Ariana Grande')" class="artist">
                                            Ariana Grande </p>
                                    </div>
                                </span>
                                <span>
                                    <button>
                                        <i class="fa fa-download" aria-hidden="true"></i>
                                    </button>
                                    <button>
                                        <i class="fa  fa-heart" aria-hidden="true"></i>
                                    </button>
                                </span>
                            </div>
                            <div class="music_list">
                                <span class="left">
                                    <button onclick="play_up(this)" title="click to open "
                                        data-artistname="Ariana Grande feat the weekend" data-title=" save your tears"
                                        data-music_sours="01 Save Your Tears (with Ariana Grande) (Remix).mp3"
                                        data-image="photo_2021-04-23_08-22-33.jpg"
                                        data-artist="Ariana Grande feat the weekend" data-id="22" data-user_id="32">
                                        <i class="fa fa-play " aria-hidden="true"></i>
                                    </button>
                                    <img src="assets/albem_arts/photo_2021-04-23_08-22-33.jpg">
                                    <div class="music_detail">
                                        <p class="title"> save your tears</p>
                                        <p onclick="artistPage('32','Ariana Grande feat the weekend')" class="artist">
                                            Ariana Grande feat the weekend </p>
                                    </div>
                                </span>
                                <span>
                                    <button>
                                        <i class="fa fa-download" aria-hidden="true"></i>
                                    </button>
                                    <button>
                                        <i class="fa  fa-heart" aria-hidden="true"></i>
                                    </button>
                                </span>
                            </div>
                            <div class="music_list">
                                <span class="left">
                                    <button onclick="play_up(this)" title="click to open "
                                        data-artistname="Ariana grande feat social house" data-title=" boy friende"
                                        data-music_sours="01 boyfriend.mp3" data-image="photo_2024-07-15_22-17-39.jpg"
                                        data-artist="Ariana grande feat social house" data-id="23" data-user_id="32">
                                        <i class="fa fa-play " aria-hidden="true"></i>
                                    </button>
                                    <img src="assets/albem_arts/photo_2024-07-15_22-17-39.jpg">
                                    <div class="music_detail">
                                        <p class="title"> boy friende</p>
                                        <p onclick="artistPage('32','Ariana grande feat social house')" class="artist">
                                            Ariana grande feat social house </p>
                                    </div>
                                </span>
                                <span>
                                    <button>
                                        <i class="fa fa-download" aria-hidden="true"></i>
                                    </button>
                                    <button>
                                        <i class="fa  fa-heart" aria-hidden="true"></i>
                                    </button>
                                </span>
                            </div>
                            <div class="music_list">
                                <span class="left">
                                    <button onclick="play_up(this)" title="click to open "
                                        data-artistname="Selena Gomeze" data-title=" love you like love song"
                                        data-music_sours="Selena-Gomez-Love-You-Like-A-Love-Song-128.mp3"
                                        data-image="R (1).jpeg" data-artist="Selena Gomeze" data-id="24"
                                        data-user_id="33">
                                        <i class="fa fa-play " aria-hidden="true"></i>
                                    </button>
                                    <img src="assets/albem_arts/R (1).jpeg">
                                    <div class="music_detail">
                                        <p class="title"> love you like love song</p>
                                        <p onclick="artistPage('33','Selena Gomeze')" class="artist">
                                            Selena Gomeze </p>
                                    </div>
                                </span>
                                <span>
                                    <button>
                                        <i class="fa fa-download" aria-hidden="true"></i>
                                    </button>
                                    <button>
                                        <i class="fa  fa-heart" aria-hidden="true"></i>
                                    </button>
                                </span>
                            </div>
                            <div class="music_list">
                                <span class="left">
                                    <button onclick="play_up(this)" title="click to open " data-artistname="Rophnan"
                                        data-title=" Qal" data-music_sours="2 - Rophnan - Qal.mp3"
                                        data-image="OIP (1).jpeg" data-artist="Rophnan" data-id="25" data-user_id="34">
                                        <i class="fa fa-play " aria-hidden="true"></i>
                                    </button>
                                    <img src="assets/albem_arts/OIP (1).jpeg">
                                    <div class="music_detail">
                                        <p class="title"> Qal</p>
                                        <p onclick="artistPage('34','Rophnan')" class="artist">
                                            Rophnan </p>
                                    </div>
                                </span>
                                <span>
                                    <button>
                                        <i class="fa fa-download" aria-hidden="true"></i>
                                    </button>
                                    <button>
                                        <i class="fa  fa-heart" aria-hidden="true"></i>
                                    </button>
                                </span>
                            </div>
                            <div class="music_list">
                                <span class="left">
                                    <button onclick="play_up(this)" title="click to open " data-artistname="Rophnan"
                                        data-title=" Behon" data-music_sours="6 - Rophnan - Essey.mp3"
                                        data-image="OIP (1).jpeg" data-artist="Rophnan" data-id="26" data-user_id="34">
                                        <i class="fa fa-play " aria-hidden="true"></i>
                                    </button>
                                    <img src="assets/albem_arts/OIP (1).jpeg">
                                    <div class="music_detail">
                                        <p class="title"> Behon</p>
                                        <p onclick="artistPage('34','Rophnan')" class="artist">
                                            Rophnan </p>
                                    </div>
                                </span>
                                <span>
                                    <button>
                                        <i class="fa fa-download" aria-hidden="true"></i>
                                    </button>
                                    <button>
                                        <i class="fa  fa-heart" aria-hidden="true"></i>
                                    </button>
                                </span>
                            </div>
                            <div class="music_list">
                                <span class="left">
                                    <button onclick="play_up(this)" title="click to open "
                                        data-artistname="Zara larsson" data-title=" Right here"
                                        data-music_sours="Zara_Larsson_Right_Here.mp3" data-image="R (2).jpeg"
                                        data-artist="Zara larsson" data-id="27" data-user_id="35">
                                        <i class="fa fa-play " aria-hidden="true"></i>
                                    </button>
                                    <img src="assets/albem_arts/R (2).jpeg">
                                    <div class="music_detail">
                                        <p class="title"> Right here</p>
                                        <p onclick="artistPage('35','Zara larsson')" class="artist">
                                            Zara larsson </p>
                                    </div>
                                </span>
                                <span>
                                    <button>
                                        <i class="fa fa-download" aria-hidden="true"></i>
                                    </button>
                                    <button>
                                        <i class="fa  fa-heart" aria-hidden="true"></i>
                                    </button>
                                </span>
                            </div>
                            <div class="music_list">
                                <span class="left">
                                    <button onclick="play_up(this)" title="click to open "
                                        data-artistname="Imagine Dragons feat J.I.D" data-title=" Enemy"
                                        data-music_sours="Imagine_Dragons_x_J.I.D_-_Enemy_(from_the_series_Arcane_League_of_Legends)(360p)_00.mp3"
                                        data-image="OIP (2).jpeg" data-artist="Imagine Dragons feat J.I.D" data-id="28"
                                        data-user_id="36">
                                        <i class="fa fa-play " aria-hidden="true"></i>
                                    </button>
                                    <img src="assets/albem_arts/OIP (2).jpeg">
                                    <div class="music_detail">
                                        <p class="title"> Enemy</p>
                                        <p onclick="artistPage('36','Imagine Dragons feat J.I.D')" class="artist">
                                            Imagine Dragons feat J.I.D </p>
                                    </div>
                                </span>
                                <span>
                                    <button>
                                        <i class="fa fa-download" aria-hidden="true"></i>
                                    </button>
                                    <button>
                                        <i class="fa  fa-heart" aria-hidden="true"></i>
                                    </button>
                                </span>
                            </div>
                            <div class="music_list">
                                <span class="left">
                                    <button onclick="play_up(this)" title="click to open "
                                        data-artistname="Imagine Dragons" data-title=" Believer"
                                        data-music_sours="Imagine_Dragons_-_Believer_(Lyrics)(128kbps).mp3"
                                        data-image="OIP (3).jpeg" data-artist="Imagine Dragons" data-id="29"
                                        data-user_id="36">
                                        <i class="fa fa-play " aria-hidden="true"></i>
                                    </button>
                                    <img src="assets/albem_arts/OIP (3).jpeg">
                                    <div class="music_detail">
                                        <p class="title"> Believer</p>
                                        <p onclick="artistPage('36','Imagine Dragons')" class="artist">
                                            Imagine Dragons </p>
                                    </div>
                                </span>
                                <span>
                                    <button>
                                        <i class="fa fa-download" aria-hidden="true"></i>
                                    </button>
                                    <button>
                                        <i class="fa  fa-heart" aria-hidden="true"></i>
                                    </button>
                                </span>
                            </div>
                            <div class="music_list">
                                <span class="left">
                                    <button onclick="play_up(this)" title="click to open " data-artistname="Rophnan"
                                        data-title=" hamet" data-music_sours="5 - Rophnan - Hamet.mp3"
                                        data-image="photo_2024-07-04_02-04-47.jpg" data-artist="Rophnan" data-id="31"
                                        data-user_id="34">
                                        <i class="fa fa-play " aria-hidden="true"></i>
                                    </button>
                                    <img src="assets/albem_arts/photo_2024-07-04_02-04-47.jpg">
                                    <div class="music_detail">
                                        <p class="title"> hamet</p>
                                        <p onclick="artistPage('34','Rophnan')" class="artist">
                                            Rophnan </p>
                                    </div>
                                </span>
                                <span>
                                    <button>
                                        <i class="fa fa-download" aria-hidden="true"></i>
                                    </button>
                                    <button>
                                        <i class="fa  fa-heart" aria-hidden="true"></i>
                                    </button>
                                </span>
                            </div>
                            <div class="music_list">
                                <span class="left">
                                    <button onclick="play_up(this)" title="click to open " data-artistname="Rophnan"
                                        data-title=" Behon" data-music_sours="7 - Rophnan - Bihon.mp3"
                                        data-image="photo_2024-06-29_19-03-31.jpg" data-artist="Rophnan" data-id="32"
                                        data-user_id="34">
                                        <i class="fa fa-play " aria-hidden="true"></i>
                                    </button>
                                    <img src="assets/albem_arts/photo_2024-06-29_19-03-31.jpg">
                                    <div class="music_detail">
                                        <p class="title"> Behon</p>
                                        <p onclick="artistPage('34','Rophnan')" class="artist">
                                            Rophnan </p>
                                    </div>
                                </span>
                                <span>
                                    <button>
                                        <i class="fa fa-download" aria-hidden="true"></i>
                                    </button>
                                    <button>
                                        <i class="fa  fa-heart" aria-hidden="true"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                        <div class="mb-3"></div>
                    </div>
                </div>
            </div>
            <!-------------------->
        </div>
    </div>

</template>