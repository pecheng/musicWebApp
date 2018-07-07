<?php
    include("includes/config.php");

    // manually log out
    session_destroy();

    
    // currently logged in 
    // if(isset($_SESSION['userLoggedIn'])){
    //     $userLoggedIn = $_SESSION['userLoggedIn'];
    // }
    // else{
    //     header("Location:initialization.php");
    // }
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Online Music App</title>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    </head>

    <body>
        <div id="nowPlayingBarContainer">
            <div id="nowPlayingBar">
                <div id="nowPlayingLeft">
                    <span class="albumLink">
                        <img src="assets/images/test/howLong.jpg" class="albumArtwork">
                    </span>

                    <div class="trackInfo">
                        <span class="trackName">
                            <span>Happy Birthday</span>

                        </span>

                        <span class="artistName">
                            <span>peng cheng</span>
                        </span>
                    </div>
                </div>



                <div id="nowPlayingCenter">
                    <div class="content playerControls">
                        <div class="buttons">

                            <button class="controlButton shuffle" title="Shuffle button">
                                <img src="assets/images/icons/shuffle.png">
                            </button>

                            <button class="controlButton previous" title="Previous button">
                                <img src="assets/images/icons/previous.png">
                            </button>

                            <button class="controlButton play" title="Play button">
                                <img src="assets/images/icons/play.png">
                            </button>

                            <button class="controlButton pause" title="Pause button" style="display:none">
                                <img src="assets/images/icons/pause.png">
                            </button>

                            <button class="controlButton next" title="Next button">
                                <img src="assets/images/icons/next.png">
                            </button>

                            <button class="controlButton repeat" title="Repeat button">
                                <img src="assets/images/icons/repeat.png">
                            </button>

                        </div>
                        <div class="playbackBar">
                            <span class="progressTime current">0.00</span>
                            <div class="progressBar">
                                <div class="progressBarBg">
                                    <div class="progress"></div>
                                </div>
                            </div>
                            <span class="progressTime remaining">0.00</span>
                        </div>
                    </div>
                </div>


                <div id="nowPlayingRight">
                    <div class="volumeBar">
                        <button class="controlButton volume" title="Volume Button">
                            <img src="assets/images/icons/volume.png" alt="Volume">
                        </button>
                        <div class="progressBar">
                            <div class="progressBarBg">
                                <div class="progress"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>