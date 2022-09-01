<?php
$name = 'Tedla Tafari';
$title = "ASE 230 - $name";
$profile = "assets/profile.jpg";
$intro = "Hello Everyone. My name is Tedla Tafari. I am a Senior at Northern Kentucky University. I am Majoring in Computer Science and Economics. I am taking Server Side Programming to improve Web develop skill and learn more about PHP and SQL. I am very excited to work on projects and getting to know my classmate. :)";
$funFact = "I really like to travel. I have been to 6 countries: Ethiopia, Mozambique, Zambia, Denmark, Bangladesh and United States.";
?>
<html lang="en">
<!-- https://www.bootdey.com/snippets/view/team-user-resume#html -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
  integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"
  integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />


<body>
  <link rel="stylesheet" href="assets/css/detail.css" />
  <title><?php echo $title; ?></title>
  <div class="container text-center mb-5">
    <h1><?php echo $title; ?></h1>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-md-6">
        <div class="mb-2">
          <img class="w-100" src=<?php echo $profile; ?> alt="">
        </div>
        <div class="mb-2 d-flex">
          <h4 class="font-weight-normal"><?php echo $name; ?></h4>
          <div class="social d-flex ml-auto">
            <p class="pr-2 font-weight-normal"><?php echo "Follow on:" ?></p>
            <a href="#" class="text-muted mr-1">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="text-muted mr-1">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="text-muted mr-1">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#" class="text-muted">
              <i class="fab fa-linkedin"></i>
            </a>
          </div>
        </div>
        <div class="mb-2">
          <ul class="list-unstyled">
            <li class="media">
              <span class="w-25 text-black font-weight-normal"><?php echo "Dream profession:" ?></span>
              <label class="media-body"><?php echo "Software Engineer" ?></label>
            </li>
            <li class="media">
              <span class="w-25 text-black font-weight-normal"><?php echo "Dream company:" ?> </span>
              <label class="media-body"><?php echo "Microsoft" ?></label>
            </li>
            <li class="media">
              <span class="w-25 text-black font-weight-normal"><?php echo "Email:" ?> </span>
              <label class="media-body"><?php echo "tafarit2@nku.edu" ?></label>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-7 col-md-6 pl-xl-3">
        <h5 class="font-weight-normal"><?php echo "Short intro" ?></h5>
        <p><?php echo $intro; ?></p>
        <div class="my-2 bg-light p-2">
          <p class="font-italic mb-0"><?php echo "“A dream you dream alone is only a dream. A dream you dream together is reality.” <br> ― John Lennon" ?></p>
        </div>
        <div class="mb-2 mt-2 pt-1">
          <h5 class="font-weight-normal"><?php echo "Top skills" ?></h5>
        </div>
        <div class="py-1">
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width:85%" aria-valuenow="85" aria-valuemin="0"
              aria-valuemax="100">
              <div class="progress-bar-title"><?php echo "HTML" ?></div>
              <span class="progress-bar-number"><?php echo "85%" ?></span>
            </div>
          </div>
        </div>
        <div class="py-1">
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width:70%" aria-valuenow="70" aria-valuemin="0"
              aria-valuemax="100">
              <div class="progress-bar-title"><?php echo "CSS" ?></div>
              <span class="progress-bar-number"><?php echo "70%" ?></span>
            </div>
          </div>
        </div>
        <div class="py-1">
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width:20%" aria-valuenow="77" aria-valuemin="0"
              aria-valuemax="100">
              <div class="progress-bar-title"><?php echo "Javascript" ?></div>
              <span class="progress-bar-number"><?php echo "20%" ?></span>
            </div>
          </div>
        </div>
        <div class="py-1">
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width:5%" aria-valuenow="77" aria-valuemin="0"
              aria-valuemax="100">
              <div class="progress-bar-title"><?php echo "PHP" ?></div>
              <span class="progress-bar-number"><?php echo "5%" ?></span>
            </div>
          </div>
        </div>
        <h5 class="font-weight-normal"><?php echo "Fun fact" ?></h5>
        <p><?php echo $funFact ?></p>
      </div>
    </div>
  </div>
  <div id="back_btn">
    <a type="button" class="btn btn-secondary" href="index.php"><?php echo "Back To Our Staff"?></a>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>