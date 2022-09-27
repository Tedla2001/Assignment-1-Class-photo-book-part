<?php

function calculateAge($dateOfBirth){
    $age = date_diff(date_create($dateOfBirth), date_create('today'));
    return $age -> format('%y years old');
}

function timeSinceBirth($dateOfBirth){
    $age = date_diff(date_create($dateOfBirth), date_create('today'));
    return $age -> format('%y Years, %m months, %d days');
}

function displayCard($students){
    $i=0;
    foreach($students as $student){
       echo '<!-- Single Advisor-->
       <div class="col-12 col-sm-6 col-lg-3">
          <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s"
             style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
             <!-- Team Thumb-->
             <div class="advisor_thumb"><a href="detail.php?id='. $i .'"><img src='.$student['picture'].' alt=""></a>
                <!-- Social Info-->
                <div class="social-info"><a href="detail.php?id='. $i .'"><i class="fa fa-facebook"></i></a><a
                      href="detail.php?id='. $i .'"><i class="fa fa-twitter"></i></a><a href="detail.php?id='. $i .'"><i
                         class="fa fa-linkedin"></i></a></div>
             </div>
             <!-- Team Details-->
             <div class="single_advisor_details_info">
                <h6>'.
                   $student['name'].
                '</h6>
                <p class="designation">
                   '.
                   $student['year'].
                '
                </p>
                <p class="designation">
                   '.
                   calculateAge($student['DateOfBirth']).
                '
                </p>
                <p class="designation">
                '.
                timeSinceBirth($student['DateOfBirth']).
             '
             </p>';
                   if ($student['year'] == 'Senior') {
                      echo '<img src="assets/book-solid.svg"  alt="" id="year_icon"width="20" 
                      height="25" >'.'<img src="assets/book-solid.svg"  alt="" id="year_icon"width="20" 
                      height="25">'.'<img src="assets/book-solid.svg"  alt="" id="year_icon"width="20" 
                      height="25">'.'<img src="assets/book-solid.svg"  alt="" id="year_icon"width="20" 
                      height="25">';
                   } elseif ($student['year'] == 'Junior') {
                      echo'<img src="assets/book-solid.svg"  alt="" id="year_icon"width="20" 
                      height="25">'.'<img src="assets/book-solid.svg"  alt="" id="year_icon"width="20" 
                      height="25">'.'<img src="assets/book-solid.svg"  alt="" id="year_icon"width="20" 
                      height="25">';
                   } elseif ($student['year'] == 'Sophomore') {
                      echo'<img src="assets/book-solid.svg"  alt="" id="year_icon"width="20" 
                      height="25">'.'<img src="assets/book-solid.svg"  alt="" id="year_icon"width="20" 
                      height="25">';
                   } else {
                      echo'<img src="assets/book-solid.svg"  alt="" id="year_icon"width="20" 
                      height="25">';
                   }
                   echo'
                </a>
             </div>
          </div>
       </div>';
       $i++;
    }
 }