
<div class="main_page">
    <link href="<?php echo base_url(); ?>news/css/flexslider.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>news/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>news/css/styles.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>news/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>news/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>news/css/prettyPhoto.css" rel="stylesheet">

    <!-- Accordion Start -->
    <link href="<?php echo base_url(); ?>news/css/accordion.css" rel="stylesheet">
    <!-- Accordion End -->

    <!-- Thumb start -->
    <link href="<?php echo base_url(); ?>news/css/og-grid-component.css" rel="stylesheet">
    <!-- Thumb start End -->

    <h1 class="align-center"> Question Archive  </h1>
    <br>

    <div id="wt-text-holder">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <!-- Nav tabs -->
                    <ul class="tab-nav">
                        <li id="first-li" class="active">
                            <a href="#first" data-toggle="tab">
                                <i class="fa fa-certificate"></i>
                                <div>
                                    <h6>First Semester</h6>
                                </div>
                            </a>
                        </li><li id="seconed-li">
                            <a href="#seconed" data-toggle="tab">
                                <i class="fa fa-certificate"></i>
                                <div>
                                    <h6>Seconed Semester</h6>
                                </div>
                            </a>
                        </li><li id="third-li">
                            <a href="#third" data-toggle="tab">
                                <i class="fa fa-certificate"></i>
                                <div>
                                    <h6>Third Semester</h6>
                                </div>
                            </a>
                        </li><li id="fourth-li">
                            <a href="#fourth" data-toggle="tab">
                                <i class="fa fa-certificate"></i>
                                <div>
                                    <h6>Fourth Semester</h6>
                                </div>
                            </a>
                        </li><li id="fitth-li">
                            <a href="#fifth" data-toggle="tab">
                                <i class="fa fa-certificate"></i>
                                <div>
                                    <h6>Fifth Semester</h6>
                                </div>
                            </a>
                        </li><li id="sixth-li">
                            <a href="#sixth" data-toggle="tab">
                                <i class="fa fa-certificate"></i>
                                <div>
                                    <h6>Sixth Semester</h6>
                                </div>
                            </a>
                        </li><li id="seventh-li">
                            <a href="#seventh" data-toggle="tab">
                                <i class="fa fa-certificate"></i>
                                <div>
                                    <h6>Seventh Semester</h6>
                                </div>
                            </a>
                        </li>
                    </li><li id="eight-li">
                    <a href="#eight" data-toggle="tab">
                        <i class="fa fa-certificate"></i>
                        <div>
                            <h6>Eighth Semester</h6>
                        </div>
                    </a>
                </li>
            </ul>
        </div><!-- End .col -->
        <div class="col-xs-12 col-sm-9 col-md-9">
            <!-- Tab panes -->
            <div id="home-tab-content" class="tab-content">
                <div class="tab-pane fade in active" id="first">
                    <h1>First Semester</h1> <hr>
                   <!--<p>Patuakhali Science and Technology University (PSTU) was established in 1987. The only university of its kind at that time, it started it's journey on the 13th of February 1991 with only three departments: Physics, Chemistry and Economics, 13 teachers and 205 students. It has now expanded to 7 schools, 26 departments and a number of institutes and centres. The number of teachers has grown to 487 and the students to 9262. Besides, the University has 8 affiliated medical colleges under the School of Medical Sciences with 2744 students. </p>-->
                    <?php
                    foreach ($all_published_question_archive as $v_question_archive) {
                        ?>
                        <?php
                        if ($v_question_archive->semester == 1) {
                            ?>
                            <strong>Course Title:  <?php echo $v_question_archive->course_title; ?><br></strong> 
                            <strong>  Course Code: </strong> <?php echo $v_question_archive->course_code; ?>  | <strong> Session: </strong> <?php echo $v_question_archive->session; ?> | <strong> Semester:</strong> <?php echo $v_question_archive->semester; ?>
                            </h6>Posted on <span class="date"><?php echo $v_question_archive->created_date_time; ?></span> by <?php echo $v_question_archive->author_name; ?></a> <p class="spec"><a href="<?php echo base_url() ?><?php echo $v_question_archive->question_location ?>" class="rm">Download&raquo;</a><br>


                             <?php }
                            } ?>
                       
                </div><!-- END .tab-pane #research -->
                <div class="tab-pane fade in" id="seconed">
                    <h1>Seconed Semester</h1><hr>
                     <?php
                    foreach ($all_published_question_archive as $v_question_archive) {
                        ?>
                        <?php
                        if ($v_question_archive->semester == 2) {
                            ?>
                            <strong>Course Title:  <?php echo $v_question_archive->course_title; ?><br></strong> 
                            <strong>  Course Code: </strong> <?php echo $v_question_archive->course_code; ?>  | <strong> Session: </strong> <?php echo $v_question_archive->session; ?> | <strong> Semester:</strong> <?php echo $v_question_archive->semester; ?>
                            </h6>Posted on <span class="date"><?php echo $v_question_archive->created_date_time; ?></span> by <?php echo $v_question_archive->author_name; ?></a> <p class="spec"><a href="<?php echo base_url() ?><?php echo $v_question_archive->question_location ?>" class="rm">Download&raquo;</a><br>


                             <?php }
                            } ?>
                </div><!-- END .tab-pane #research -->
                <div class="tab-pane fade" id="third">
                    <h1>Third Semester</h1><hr>
                    <!--<p>The teaching-learning activities of Patuakhali Science & Technology University  are notable at the national context. A diverse range of articles and journals are published by teachers and students all the year round. </p>-->
                     <?php
                    foreach ($all_published_question_archive as $v_question_archive) {
                        ?>
                        <?php
                        if ($v_question_archive->semester == 3) {
                            ?>
                            <strong>Course Title:  <?php echo $v_question_archive->course_title; ?><br></strong> 
                            <strong>  Course Code: </strong> <?php echo $v_question_archive->course_code; ?>  | <strong> Session: </strong> <?php echo $v_question_archive->session; ?> | <strong> Semester:</strong> <?php echo $v_question_archive->semester; ?>
                            </h6>Posted on <span class="date"><?php echo $v_question_archive->created_date_time; ?></span> by <?php echo $v_question_archive->author_name; ?></a> <p class="spec"><a href="<?php echo base_url() ?><?php echo $v_question_archive->question_location ?>" class="rm">Download&raquo;</a><br>


                             <?php }
                            } ?>
                </div><!-- END .tab-pane #publications -->
                <div class="tab-pane fade" id="fourth">
                    <h1>Fourth Semester</h1><hr>
                     <?php
                    foreach ($all_published_question_archive as $v_question_archive) {
                        ?>
                        <?php
                        if ($v_question_archive->semester == 4) {
                            ?>
                            <strong>Course Title:  <?php echo $v_question_archive->course_title; ?><br></strong> 
                            <strong>  Course Code: </strong> <?php echo $v_question_archive->course_code; ?>  | <strong> Session: </strong> <?php echo $v_question_archive->session; ?> | <strong> Semester:</strong> <?php echo $v_question_archive->semester; ?>
                            </h6>Posted on <span class="date"><?php echo $v_question_archive->created_date_time; ?></span> by <?php echo $v_question_archive->author_name; ?></a> <p class="spec"><a href="<?php echo base_url() ?><?php echo $v_question_archive->question_location ?>" class="rm">Download&raquo;</a><br>


                             <?php }
                            } ?>
                </div><!-- END .tab-pane #scholarships -->
                <div class="tab-pane fade" id="fifth">
                    <h1>Fifth Semester</h1><hr>
                     <?php
                    foreach ($all_published_question_archive as $v_question_archive) {
                        ?>
                        <?php
                        if ($v_question_archive->semester == 5) {
                            ?>
                            <strong>Course Title:  <?php echo $v_question_archive->course_title; ?><br></strong> 
                            <strong>  Course Code: </strong> <?php echo $v_question_archive->course_code; ?>  | <strong> Session: </strong> <?php echo $v_question_archive->session; ?> | <strong> Semester:</strong> <?php echo $v_question_archive->semester; ?>
                            </h6>Posted on <span class="date"><?php echo $v_question_archive->created_date_time; ?></span> by <?php echo $v_question_archive->author_name; ?></a> <p class="spec"><a href="<?php echo base_url() ?><?php echo $v_question_archive->question_location ?>" class="rm">Download&raquo;</a><br>


                             <?php }
                            } ?>
                </div><!-- END .tab-pane #achivements -->
                <div class="tab-pane fade" id="sixth">
                    <h1>Sixth Semester</h1><hr>
                     <?php
                    foreach ($all_published_question_archive as $v_question_archive) {
                        ?>
                        <?php
                        if ($v_question_archive->semester == 2) {
                            ?>
                            <strong>Course Title:  <?php echo $v_question_archive->course_title; ?><br></strong> 
                            <strong>  Course Code: </strong> <?php echo $v_question_archive->course_code; ?>  | <strong> Session: </strong> <?php echo $v_question_archive->session; ?> | <strong> Semester:</strong> <?php echo $v_question_archive->semester; ?>
                            </h6>Posted on <span class="date"><?php echo $v_question_archive->created_date_time; ?></span> by <?php echo $v_question_archive->author_name; ?></a> <p class="spec"><a href="<?php echo base_url() ?><?php echo $v_question_archive->question_location ?>" class="rm">Download&raquo;</a><br>


                             <?php }
                            } ?>
                </div><!-- END .tab-pane #library -->
                <div class="tab-pane fade" id="seventh">
                    <h1>Seventh Semester</h1><hr>
                     <?php
                    foreach ($all_published_question_archive as $v_question_archive) {
                        ?>
                        <?php
                        if ($v_question_archive->semester == 7) {
                            ?>
                            <strong>Course Title:  <?php echo $v_question_archive->course_title; ?><br></strong> 
                            <strong>  Course Code: </strong> <?php echo $v_question_archive->course_code; ?>  | <strong> Session: </strong> <?php echo $v_question_archive->session; ?> | <strong> Semester:</strong> <?php echo $v_question_archive->semester; ?>
                            </h6>Posted on <span class="date"><?php echo $v_question_archive->created_date_time; ?></span> by <?php echo $v_question_archive->author_name; ?></a> <p class="spec"><a href="<?php echo base_url() ?><?php echo $v_question_archive->question_location ?>" class="rm">Download&raquo;</a><br>


                             <?php }
                            } ?>
                </div>
                <div class="tab-pane fade in" id="eight">
                    <h1>Eighth Semester</h1><hr>
                     <?php
                    foreach ($all_published_question_archive as $v_question_archive) {
                        ?>
                        <?php
                        if ($v_question_archive->semester == 8) {
                            ?>
                            <strong>Course Title:  <?php echo $v_question_archive->course_title; ?><br></strong> 
                            <strong>  Course Code: </strong> <?php echo $v_question_archive->course_code; ?>  | <strong> Session: </strong> <?php echo $v_question_archive->session; ?> | <strong> Semester:</strong> <?php echo $v_question_archive->semester; ?>
                            </h6>Posted on <span class="date"><?php echo $v_question_archive->created_date_time; ?></span> by <?php echo $v_question_archive->author_name; ?></a> <p class="spec"><a href="<?php echo base_url() ?><?php echo $v_question_archive->question_location ?>" class="rm">Download&raquo;</a><br>


                             <?php }
                            } ?>
                </div><!-- END .tab-pane #culture -->
            </div><!-- END .tab-content -->

        </div><!-- End .col -->
    </div><!-- End .row -->
</div><!-- End .container -->
<span id="bg-tab"></span>
</div><!-- End #wt-text-holder -->


<!-- End #news-events-holder -->

<!-- Preload Images -->
<div id="preloaded-images">
    <img src="<?php echo base_url(); ?>images/bgs/publications.jpg" width="1" height="1" alt="Image 00"/>
    <img src="<?php echo base_url(); ?>images/bgs/research-lab.jpg" width="1" height="1" alt="Image 01"/>
    <img src="<?php echo base_url(); ?>images/bgs/publications.jpg" width="1" height="1" alt="Image 02"/>
    <img src="<?php echo base_url(); ?>images/bgs/scholarship.jpg" width="1" height="1" alt="Image 03"/>
    <img src="<?php echo base_url(); ?>images/bgs/publications.jpg" width="1" height="1" alt="Image 04"/>
    <img src="<?php echo base_url(); ?>images/bgs/library-new.jpg" width="1" height="1" alt="Image 05"/>
    <img src="<?php echo base_url(); ?>images/bgs/culture.jpg" width="1" height="1" alt="Image 06"/>
</div>
<!-- Preload Images End -->

<script type="text/javascript">
    jQuery(function ($) {
        $('#schools-ul > li > a').click(function () {
            $('.department-list').hide();
            $('#schools-ul li').removeClass('active');

            $(this).closest("li").addClass('active');


            var id = $(this).data('id');
            var title = $(this).data('title');

            $('#' + id).fadeIn(1000);
            $('#dept-list-container h3').text(title);

            return false;
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#first-li').click(function () {
            $('#wt-text-holder #bg-tab').css({'background': 'url(<?php echo base_url(); ?>images/bgs/home-overview-new.jpg) left center no-repeat'});
        });

        $('#seconed-li').click(function () {
            $('#wt-text-holder #bg-tab').css({'background': 'url(<?php echo base_url(); ?>images/bgs/research-lab.jpg) left center no-repeat'});
        });

        $('#third-li').click(function () {
            $('#wt-text-holder #bg-tab').css({'background': 'url(<?php echo base_url(); ?>images/bgs/publications.jpg) left center no-repeat'});
        });

        $('#fourth-li').click(function () {
            $('#wt-text-holder #bg-tab').css({'background': 'url(<?php echo base_url(); ?>images/bgs/scholarship.jpg) left center no-repeat'});
        });

        $('#fifth-li').click(function () {
            $('#wt-text-holder #bg-tab').css({'background': 'url(<?php echo base_url(); ?>images/bgs/achievements.jpg) left center no-repeat'});
        });

        $('#library-li').click(function () {
            $('#wt-text-holder #bg-tab').css({'background': 'url(<?php echo base_url(); ?>images/bgs/library-new.jpg) left center no-repeat'});
        });

        $('#culture-li').click(function () {
            $('#wt-text-holder #bg-tab').css({'background': 'url(<?php echo base_url(); ?>images/bgs/culture.jpg) left center no-repeat'});
        });
    });
</script>

</div>
</div>


