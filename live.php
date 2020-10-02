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
                                <li class="active"  onclick="location.href = 'live';">
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