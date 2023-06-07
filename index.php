<?php
    include_once "header.php";

    include "classes/dbh.classes.php";
    include "classes/profileinfo.classes.php";
    include "classes/profileinfo-view.classes.php";
    $profileInfo = new ProfileInfoView();
?>

    <div class="body-container">
        <div class="sidebar">
            <div class="sidebar-items">
                <a class="sidebar-item"><i class="ri-home-5-line"></i></i>Home</a>
                <a class="sidebar-item"><i class="ri-compass-3-line"></i>Explore</a>
                <a class="sidebar-item"><i class="ri-wireless-charging-line"></i>Shorts</a>
                <a class="sidebar-item"><i class="ri-rss-line"></i>Subscriptions</a>
                <hr>
                <a class="sidebar-item"><i class="ri-links-line"></i>Library</a>
                <a class="sidebar-item"><i class="ri-history-line"></i>History</a>
                <a class="sidebar-item"><i class="ri-video-line"></i>Your videos</a>
                <a class="sidebar-item"><i class="ri-time-line"></i>Watch later</a>
                <a class="sidebar-item"><i class="ri-play-list-2-line"></i>All videos</a>
                <a class="sidebar-item"><i class="ri-arrow-down-s-line"></i>Show more</a>
                <hr>
                <h4 class="more">Explore</h4>
                <a class="sidebar-item"><i class="ri-keyboard-box-line"></i>Gaming</a>
                <a class="sidebar-item"><i class="ri-live-line"></i>Live</a>
                <a class="sidebar-item"><i class="ri-award-line"></i>Sport</a>
                <hr>
                <a class="sidebar-item"><i class="ri-settings-5-line"></i>Settings</a>
                <a class="sidebar-item"><i class="ri-flag-line"></i>Report history</a>
                <a class="sidebar-item"><i class="ri-question-line"></i>Help</a>
                <a class="sidebar-item"><i class="ri-feedback-line"></i>Send feedback</a>
            </div>

        </div>
        <div class="content">
            <div class="chips-wrapper">
                <div class="chip">
                    <p>All</p>
                </div>
                <div class="chip">
                    <p>HTML</p>
                </div>
                <div class="chip">
                    <p>Frontend</p>
                </div>
                <div class="chip">
                    <p>CSS</p>
                </div>
                <div class="chip">
                    <p>JavaScript</p>
                </div>
                <div class="chip">
                    <p>Backend</p>
                </div>
                <div class="chip">
                    <p>PHP</p>
                </div>
                <div class="chip">
                    <p>MySQL</p>
                </div>
                <div class="chip">
                    <p>Cyber Security</p>
                </div>
                <div class="chip">
                    <p>Web Development</p>
                </div>
                <div class="chip">
                    <p>Databases</p>
                </div>
            </div>
            <div class="video-container">
                <div class="video-content-cover">
                    <div class="video-content">
                        <a href="" class="video-box">
                            <img src="images/boat.jpg" alt="">
                        </a>
                        <div class="video-details">
                            <div class="channel-logo">
                                <img src="images/profile-img.png" alt="">
                            </div>
                            <div class="detail">
                                <h3 class="title">The title, thumbnail and details of the video are set as an example</h3>
                                <div class="channel-name">user</div>
                                <div class="views-upload">
                                    <div class="views">0 views • </div>
                                    <div class="upload"> 1 sec. ago</div>
                                </div>
                            </div>
                        </div>
                        <div class="hidden-content">
                            <div class="btn"><i class="ri-time-line"></i>Watch later</div>
                            <div class="btn"><i class="ri-play-list-2-line"></i>Add to queue</div>
                        </div>
                    </div>
                </div>
                <div class="video-content-cover">
                    <div class="video-content">
                        <a href="" class="video-box">
                            <img src="images/img1.jpg" alt="">
                        </a>
                        <div class="video-details">
                            <div class="channel-logo">
                                <img src="images/profile-img.png" alt="">
                            </div>
                            <div class="detail">
                                <h3 class="title">The title, thumbnail and details of the video are set as an example</h3>
                                <div class="channel-name">user</div>
                                <div class="views-upload">
                                    <div class="views">0 views • </div>
                                    <div class="upload"> 1 sec. ago</div>
                                </div>
                            </div>
                        </div>
                        <div class="hidden-content">
                            <div class="btn"><i class="ri-time-line"></i>Watch later</div>
                            <div class="btn"><i class="ri-play-list-2-line"></i>Add to queue</div>
                        </div>
                    </div>
                </div>
                <div class="video-content-cover">
                    <div class="video-content">
                        <a href="" class="video-box">
                            <img src="images/img2.jpg" alt="">
                        </a>
                        <div class="video-details">
                            <div class="channel-logo">
                                <img src="images/profile-img.png" alt="">
                            </div>
                            <div class="detail">
                                <h3 class="title">The title, thumbnail and details of the video are set as an example</h3>
                                <div class="channel-name">user</div>
                                <div class="views-upload">
                                    <div class="views">0 views • </div>
                                    <div class="upload"> 1 sec. ago</div>
                                </div>
                            </div>
                        </div>
                        <div class="hidden-content">
                            <div class="btn"><i class="ri-time-line"></i>Watch later</div>
                            <div class="btn"><i class="ri-play-list-2-line"></i>Add to queue</div>
                        </div>
                    </div>
                </div>
                <div class="video-content-cover">
                    <div class="video-content">
                        <a href="" class="video-box">
                            <img src="images/img3.jpg" alt="">
                        </a>
                        <div class="video-details">
                            <div class="channel-logo">
                                <img src="images/profile-img.png" alt="">
                            </div>
                            <div class="detail">
                                <h3 class="title">The title, thumbnail and details of the video are set as an example</h3>
                                <div class="channel-name">user</div>
                                <div class="views-upload">
                                    <div class="views">0 views • </div>
                                    <div class="upload"> 1 sec. ago</div>
                                </div>
                            </div>
                        </div>
                        <div class="hidden-content">
                            <div class="btn"><i class="ri-time-line"></i>Watch later</div>
                            <div class="btn"><i class="ri-play-list-2-line"></i>Add to queue</div>
                        </div>
                    </div>
                </div>
                <div class="video-content-cover">
                    <div class="video-content">
                        <a href="" class="video-box">
                            <img src="images/img4.jpg" alt="">
                        </a>
                        <div class="video-details">
                            <div class="channel-logo">
                                <img src="images/profile-img.png" alt="">
                            </div>
                            <div class="detail">
                                <h3 class="title">The title, thumbnail and details of the video are set as an example</h3>
                                <div class="channel-name">user</div>
                                <div class="views-upload">
                                    <div class="views">0 views • </div>
                                    <div class="upload"> 1 sec. ago</div>
                                </div>
                            </div>
                        </div>
                        <div class="hidden-content">
                            <div class="btn"><i class="ri-time-line"></i>Watch later</div>
                            <div class="btn"><i class="ri-play-list-2-line"></i>Add to queue</div>
                        </div>
                    </div>
                </div>
                <div class="video-content-cover">
                    <div class="video-content">
                        <a href="" class="video-box">
                            <img src="images/img2.jpg" alt="">
                        </a>
                        <div class="video-details">
                            <div class="channel-logo">
                                <img src="images/profile-img.png" alt="">
                            </div>
                            <div class="detail">
                                <h3 class="title">The title, thumbnail and details of the video are set as an example</h3>
                                <div class="channel-name">user</div>
                                <div class="views-upload">
                                    <div class="views">0 views • </div>
                                    <div class="upload"> 1 sec. ago</div>
                                </div>
                            </div>
                        </div>
                        <div class="hidden-content">
                            <div class="btn"><i class="ri-time-line"></i>Watch later</div>
                            <div class="btn"><i class="ri-play-list-2-line"></i>Add to queue</div>
                        </div>
                    </div>
                </div>
                <div class="video-content-cover">
                    <div class="video-content">
                        <a href="" class="video-box">
                            <img src="images/img5.png" alt="">
                        </a>
                        <div class="video-details">
                            <div class="channel-logo">
                                <img src="images/profile-img.png" alt="">
                            </div>
                            <div class="detail">
                                <h3 class="title">The title, thumbnail and details of the video are set as an example</h3>
                                <div class="channel-name">user</div>
                                <div class="views-upload">
                                    <div class="views">0 views • </div>
                                    <div class="upload"> 1 sec. ago</div>
                                </div>
                            </div>
                        </div>
                        <div class="hidden-content">
                            <div class="btn"><i class="ri-time-line"></i>Watch later</div>
                            <div class="btn"><i class="ri-play-list-2-line"></i>Add to queue</div>
                        </div>
                    </div>
                </div>
                <div class="video-content-cover">
                    <div class="video-content">
                        <a href="" class="video-box">
                            <img src="images/boat.jpg" alt="">
                        </a>
                        <div class="video-details">
                            <div class="channel-logo">
                                <img src="images/profile-img.png" alt="">
                            </div>
                            <div class="detail">
                                <h3 class="title">The title, thumbnail and details of the video are set as an example</h3>
                                <div class="channel-name">user</div>
                                <div class="views-upload">
                                    <div class="views">0 views • </div>
                                    <div class="upload"> 1 sec. ago</div>
                                </div>
                            </div>
                        </div>
                        <div class="hidden-content">
                            <div class="btn"><i class="ri-time-line"></i>Watch later</div>
                            <div class="btn"><i class="ri-play-list-2-line"></i>Add to queue</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>