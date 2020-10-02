<?php

include("./includes/header.php");

?>
  <div class="container-fluid">
            
            <div id="lsc_app" class="row">
                
                <!-- Start Section Header Bar -->
                <section id="lsc_header_bar" class="col-12">
                    <div class="row lsc_page_title_row">
                        <div class="col-2" onclick="goBack()">
                            <i class="fa fa-chevron-left"></i>
                        </div>
                        <div class="col-8 lsc_page_title font-weight-bold">
                            Get IPL
                        </div>
                    </div>
                </section>
                <!-- End Section Header Bar -->
                
            <!-- Start Section Body -->
             <section id="lsc_body" class="col-12">
                 <h3 class="text-center">Terms and Conditions</h3>
                    <div class="row lsc_match_stats_row">
                        <div class="col-3 justify-content-center align-self-center">
                            <span class="lsc_match_stat_num"><i class="fa fa-hand-o-right"></i></span>
                        </div>
                        <div class="col-6 justify-content-center align-self-center">
                            <span class="lsc_match_stat_desc">
                                <!-- <i class="fa fa-dot-circle-o"></i> -->
                                <span>Condition 1</span>
                            </span>
                        </div>
                       
                    </div>
                    <div class="row lsc_match_stats_row">
                        <div class="col-3 justify-content-center align-self-center">
                        <span class="lsc_match_stat_num"><i class="fa fa-hand-o-right"></i></span>
                        </div>
                        <div class="col-6 justify-content-center align-self-center">
                            <span class="lsc_match_stat_desc">
                                <!-- <i class="fa fa-square-o"></i> -->
                                <span>Condition 2</span>
                            </span>
                        </div>
                      
                    </div>
                    <div class="row lsc_match_stats_row">
                        <div class="col-3 justify-content-center align-self-center">
                        <span class="lsc_match_stat_num"><i class="fa fa-hand-o-right"></i></span>
                        </div>
                        <div class="col-6 justify-content-center align-self-center">
                            <span class="lsc_match_stat_desc">
                                <!-- <i class="fa fa-hand-paper-o"></i> -->
                                <span>Condition 3</span>
                            </span>
                        </div>
                       </div>
                    <div class="row lsc_match_stats_row">
                        <div class="col-3 justify-content-center align-self-center">
                        <span class="lsc_match_stat_num"><i class="fa fa-hand-o-right"></i></span>
                        </div>
                        <div class="col-6 justify-content-center align-self-center">
                            <span class="lsc_match_stat_desc">
                                <!-- <i class="fa fa-users"></i> -->
                                <span>Condition 4</span>
                            </span>
                        </div>
                        <!-- <div class="col-3 justify-content-center align-self-center">
                            <span class="lsc_match_stat_num">*</span>
                        </div> -->
                    </div>
                </section>
                <!-- End Section Body -->


                <!-- Start Section Footer -->
                <section id="lsc_footer" class="col-12">
                    <div class="row lsc_app_footer_row">
                        <div class="col-12 lsc_footer_tabs">
                            <ul>
                                <li onclick="location.href = 'index';">
                                    <span>
                                        <i class="fa fa-clock-o"></i>
                                    </span>
                                </li>
                                <li onclick="location.href = 'live';">
                                    <span>
                                        <i class="fa fa-line-chart"></i>
                                    </span>
                                </li>
                                <li class="active" onclick="location.href = 'terms';">
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