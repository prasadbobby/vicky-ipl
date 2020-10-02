<?php

include("./includes/header.php");

?>
  

    <div class="container-fluid">
            
            <div id="lsc_app" class="row">
                
                <!-- Start Section Header Bar -->
                <section id="lsc_header_bar" class="col-12">
                    <div class="row lsc_page_title_row">
                        <!-- <div class="col-2">
                            <i class="fa fa-chevron-left"></i>
                        </div> -->
                        <div class="col-12 lsc_page_title text-center font-weight-bold">
                            Get IPL
                        </div>
                    </div>
                </section>
                <!-- End Section Header Bar -->
                
                <!-- Start Section Header -->
                <section id="lsc_header" class="col-12">
                    <div class="row lsc_series_meta_row">
                        <div class="col-12">
                            <span class="lsc_series_meta_detail">Round of 16</span>
                            <span class="lsc_series_meta_title">Indian Premier League</span>
                        </div>
                    </div>
                    <div class="row lsc_match_meta_row">
                        <div class="col-4 lsc_team_left">
                            <img src="./imgs/sunrise.png" class="lsc_team_icon" width="30px" height="60px"/>
                            <div class="lsc_team_stat">
                                <ul>
                                    <li>Vicky </li>
                                    <li>Bobby</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-4 lsc_match_score_meta">
                            <span class="lsc_match_score">216 - 6</span>
                            <span class="lsc_match_time">Overs: 4/20</span>
                        </div>
                        <div class="col-4 lsc_team_right">
                            <img src="./imgs/delhi.png" class="lsc_team_icon" width="30px" height="60px"/>
                            <div class="lsc_team_stat">
                                <ul>
                                    <li>Vicky</li>
                                    <li>Bobby</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row lsc_page_tabs">
                        <div class="col-12">
                            <ul>
                                <li class="active">
                                    <span>Statistics</span>
                                </li>
                                <li>
                                    <span>Lineup</span>
                                </li>
                                <li>
                                    <span>Formation</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
                <!-- End Section Header -->

                <!-- Start Section Body -->
                <section id="lsc_body" class="col-12">
                    <div class="row lsc_match_stats_row">
                        <div class="col-3 justify-content-center align-self-center">
                            <span class="lsc_match_stat_num">03</span>
                        </div>
                        <div class="col-6 justify-content-center align-self-center">
                            <span class="lsc_match_stat_desc">
                                <i class="fa fa-dot-circle-o"></i>
                                <span>Shoot On Target</span>
                            </span>
                        </div>
                        <div class="col-3 justify-content-center align-self-center">
                            <span class="lsc_match_stat_num">03</span>
                        </div>
                    </div>
                    <div class="row lsc_match_stats_row">
                        <div class="col-3 justify-content-center align-self-center">
                            <span class="lsc_match_stat_num">05</span>
                        </div>
                        <div class="col-6 justify-content-center align-self-center">
                            <span class="lsc_match_stat_desc">
                                <i class="fa fa-square-o"></i>
                                <span>Shoot Off Target</span>
                            </span>
                        </div>
                        <div class="col-3 justify-content-center align-self-center">
                            <span class="lsc_match_stat_num">08</span>
                        </div>
                    </div>
                    <div class="row lsc_match_stats_row">
                        <div class="col-3 justify-content-center align-self-center">
                            <span class="lsc_match_stat_num">03</span>
                        </div>
                        <div class="col-6 justify-content-center align-self-center">
                            <span class="lsc_match_stat_desc">
                                <i class="fa fa-hand-paper-o"></i>
                                <span>Total Save</span>
                            </span>
                        </div>
                        <div class="col-3 justify-content-center align-self-center">
                            <span class="lsc_match_stat_num">03</span>
                        </div>
                    </div>
                    <div class="row lsc_match_stats_row">
                        <div class="col-3 justify-content-center align-self-center">
                            <span class="lsc_match_stat_num">68%</span>
                        </div>
                        <div class="col-6 justify-content-center align-self-center">
                            <span class="lsc_match_stat_desc">
                                <i class="fa fa-users"></i>
                                <span>Ball Possession</span>
                            </span>
                        </div>
                        <div class="col-3 justify-content-center align-self-center">
                            <span class="lsc_match_stat_num">32%</span>
                        </div>
                    </div>
                </section>
                <!-- End Section Body -->
               
                <!-- Start Section Footer -->
                <section id="lsc_footer" class="col-12">
                    <div class="row lsc_app_footer_row">
                        <div class="col-12 lsc_footer_tabs">
                            <ul>
                                <li class="active" onclick="location.href = 'index';">
                                    <span>
                                        <i class="fa fa-clock-o"></i>
                                    </span>
                                </li>
                                <li onclick="location.href = 'live';">
                                    <span>
                                        <i class="fa fa-line-chart"></i>
                                    </span>
                                </li>
                                <li onclick="location.href = 'terms';">
                                    <span>
                                        <i class="fa fa-trophy"></i>
                                    </span>
                                </li>
                                <li onclick="location.href = 'logout';">
                                    <span>
                                        <i class="fa fa-sign-out"></i>
                                    </span>
                                </li>
                            </ul>
                            <span class="lsc_sep"></span>
                        </div>
                    </div>
                </section>
                <!-- End Section Footer -->

             

            </div>

        </div>



<?php
  include("./includes/footer.php");
?>