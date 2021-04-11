<?php
  get_header();

// if ( have_posts() ) {
// 	while ( have_posts() ) {
// 		the_post(); 
// 	} // end while
// } // end if
$aboutfields=get_field('about');
?>
      
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        <?php echo $aboutfields['first_name'];?>
                        <span class="text-primary"><?php echo $aboutfields['last_name'];?></span>
                    </h1>
                    <div class="subheading mb-5">
                    <?php echo $aboutfields['address'];?> · <?php echo $aboutfields['phone_number'];?>·
                        <a href="mailto:<?php echo $aboutfields['email'];?>"><?php echo $aboutfields['email'];?></a>
                    </div>
                    <p class="lead mb-5"><?php echo $aboutfields['about'];?></p>
                    <div class="social-icons">
                    <?php
                    if($aboutfields["linkedin"])
                    {
                    ?>
                        <a class="social-icon"  target="_blank" href="<?php echo $aboutfields["linkedin"]; ?>"><i class="fab fa-linkedin-in"></i></a>
                    <?php
                    }
                    if($aboutfields["github"])
                    {
                    ?>
                     <a class="social-icon" href="<?php echo $aboutfields["github"]; ?>"><i class="fab fa-github" target="_blank"></i></a>
                     <?php
                    }
                    ?>
                        <!-- <a class="social-icon" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="social-icon" href="#"><i class="fab fa-facebook-f"></i></a> -->
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Experience-->
            <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <h2 class="mb-5">Experience</h2>
                    <?php
        $companyposts= new WP_Query(array(
          'post_type'=>'company'
        ));
       
        while($companyposts->have_posts())
        {
           $companyposts->the_post();
           ?>
            <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0"><?php  echo get_field('position'); ?></h3>
                            <div class="subheading mb-3"><?php  echo get_field('company_name'); ?></div>
                            <!-- <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p> -->
                            <?php the_content(); ?>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary"><?php  
                        $toyear=get_field('to_year')==""?"Present":get_field('to_year');
                         echo get_field('from_year')." - ".$toyear;?>
                        </span></div>
                    </div>
           <?php
        }
        wp_reset_postdata();
        ?>
                   
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Web Developer</h3>
                            <div class="subheading mb-3">Intelitec Solutions</div>
                            <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">December 2011 - March 2013</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Junior Web Designer</h3>
                            <div class="subheading mb-3">Shout! Media Productions</div>
                            <p>Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. Keeping your eye on the ball while performing a deep dive on the start-up mentality to derive convergence on cross-platform integration.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">July 2010 - December 2011</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Web Design Intern</h3>
                            <div class="subheading mb-3">Shout! Media Productions</div>
                            <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">September 2008 - June 2010</span></div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Education-->
            <section class="resume-section" id="education">
                <div class="resume-section-content">
                    <h2 class="mb-5">Education</h2>
                    <?php
        $companyposts= new WP_Query(array(
          'post_type'=>'education'
        ));
       
        while($companyposts->have_posts())
        {
           $companyposts->the_post();
           ?>
                        <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0"><?php  echo get_field('schoolcollege_name'); ?></h3>
                            <div class="subheading mb-3"><?php  echo get_field('level'); ?></div>
                            <div><?php  echo get_field('course'); ?></div>
                            <p><?php  echo get_field('description_and_gpa'); ?></p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary"><?php  
                        $toyear=get_field('to_year')==""?"Present":get_field('to_year');
                         echo get_field('from_year')." - ".$toyear;?></span></div>
                    </div>

           <?php
        }
        wp_reset_postdata();
        ?>
       
       
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">James Buchanan High School</h3>
                            <div class="subheading mb-3">Technology Magnet Program</div>
                            <p>GPA: 3.56</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">August 2002 - May 2006</span></div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Skills-->
            <section class="resume-section" id="skills">
                <div class="resume-section-content">
                    <h2 class="mb-5">Skills</h2>
                    <div class="subheading mb-3">Programming Languages & Tools</div>
                    <ul class="list-inline dev-icons">
                <?php
                        $skills = get_field('skills');
                       
                        if (in_array("Html", $skills))
                        echo  '<li class="list-inline-item"><i class="fab fa-html5"></i></li>';
                        if (in_array("CSS", $skills))
                        echo  ' <li class="list-inline-item"><i class="fab fa-css3-alt"></i></li>';
                        if (in_array("JS", $skills))
                        echo  '<li class="list-inline-item"><i class="fab fa-js-square"></i></li>';
                        if (in_array("React", $skills))
                        echo  '<li class="list-inline-item"><i class="fab fa-react"></i></li>';
                        if (in_array("Python", $skills))
                        echo  '<li class="list-inline-item"><i class="fab fa-python"></i></li>';
                        if (in_array("SQL", $skills))
                        echo  '<li class="list-inline-item"><i class="fab fa-sql"></i></li>';
                        if (in_array("Wordpress", $skills))
                        echo  '<li class="list-inline-item"><i class="fab fa-wordpress"></i></li>';
                        if (in_array("NPM", $skills))
                        echo  '<li class="list-inline-item"><i class="fab fa-npm"></i></li>';
                        if (in_array("Angular", $skills))
                        echo  '<li class="list-inline-item"><i class="fab fa-angular"></i></li>';
                        if (in_array("Node", $skills))
                        echo  '  <li class="list-inline-item"><i class="fab fa-node-js"></i></li>';
                ?>
                        
                    </ul>
                    <div class="subheading mb-3">Workflow</div>
                    <ul class="fa-ul mb-0">
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Mobile-First, Responsive Design
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Cross Browser Testing & Debugging
                        </li>
                       
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Agile Development & Scrum
                        </li>
                    </ul>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Interests-->
            <section class="resume-section" id="interests">
                <div class="resume-section-content">
                    <h2 class="mb-5">Interests</h2>
                    <?php
        $interestposts= new WP_Query(array(
          'post_type'=>'interest'
        ));
       
        while($interestposts->have_posts())
        {
           $interestposts->the_post();
           the_content();
        }
        wp_reset_postdata();
        ?>
                 </div>
            </section>
            <hr class="m-0" />
            <!-- Awards-->
            <section class="resume-section" id="awards">
                <div class="resume-section-content">
                    <h2 class="mb-5">Certifications</h2>
                   
                    <?php
        $certificationposts= new WP_Query(array(
          'post_type'=>'certification'
        ));
        while($certificationposts->have_posts())
        {
           $certificationposts->the_post();
           the_content();
        }
        wp_reset_postdata();
        ?>
                        <!-- <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            Google Analytics Certified Developer
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            Mobile Web Specialist - Google Certification
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            1
                            <sup>st</sup>
                            Place - University of Colorado Boulder - Emerging Tech Competition 2009
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            1
                            <sup>st</sup>
                            Place - University of Colorado Boulder - Adobe Creative Jam 2008 (UI Design Category)
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            2
                            <sup>nd</sup>
                            Place - University of Colorado Boulder - Emerging Tech Competition 2008
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            1
                            <sup>st</sup>
                            Place - James Buchanan High School - Hackathon 2006
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            3
                            <sup>rd</sup>
                            Place - James Buchanan High School - Hackathon 2005
                        </li> -->
                </div>
            </section>
        </div>
        <!-- Bootstrap core JS-->
<?php
  get_footer();
?>