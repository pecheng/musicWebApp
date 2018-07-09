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

        <div id="topContainer">
            <div id="navBarContainer">
                <nav class="navBar">
                    <a style="text-decoration:none;" href="index.php" class="logo">
                        <img src="assets/images/icons/birth.png" alt="Icon">
                        <span class="logoTitle">For DearAsta🎂</span>
                    </a>

                    <div class="group">
                        <div class="navItem">
                            <a href="search.php" style="text-decoration:none;" class="navItemLink">Search
                                <img src="assets/images/icons/search.png" class="searchIcon" alt="Search">
                            </a>
                        </div>
                    </div>

                    <div class="group">
                        <div class="navItem">
                            <a href="profile.php" style="text-decoration:none;" class="navItemLink">Profile</a>
                        </div>
                        <div class="navItem">
                            <a href="browse.php" style="text-decoration:none;" class="navItemLink">Browse</a>
                        </div>
                        <div class="navItem">
                            <a href="myMusic.php" style="text-decoration:none;" class="navItemLink">My Music</a>
                        </div>
                        
                        <div class="navItem">
                            <a href="chat.php" style="text-decoration:none;" class="navItemLink">Chat</a>
                        </div>
                    </div>
                    
                    
                </nav>
            </div>

        </div>








        <div id="nowPlayingBarContainer">
            <div id="nowPlayingBar">
                <div id="nowPlayingLeft">
                    <span class="albumLink">
                        <img src="assets/images/test/howLong.jpg" class="albumArtwork">
                    </span>

                    <div class="trackInfo">
                        <span class="trackName">
                            <span>How Long (to my asta)</span>

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