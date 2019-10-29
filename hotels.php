
<html>
<head>
  <title>Week 7-8</title>
  <!-- all the default info and global css files will be stored here -->
  <!-- Meta tags -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Google icons -->
  <link rel="stylesheet" href="css/materialize-icons.css">
  <!-- Materialize CSS -->
  <link rel="stylesheet" href="css/materialize.min.css">

  <!-- fontawesome CSS -->
  <link rel="stylesheet" href="css/fontawesome-all.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/app.css">

</head>
<body>
  <div class="container">
    <ul class="collection">
      <?php
      $images = ["http://www.hotelcordelia.paris/images_hotel_cordelia_paris/home/hotel-cordelia-paris-1.jpg",
      "https://www.hotel-paris.cz/files/hotel/hotel-paris-prague/08-mobile/m-Hotel-Paris-Prague.jpg?h=960&w=640",
      "https://r-cf.bstatic.com/images/hotel/max1024x768/156/156842395.jpg"];

      for ($i = 0; $i < 3; $i++){
        ?>
        <li class="collection-item avatar">
          <img src="<?=$images[$i]?>" alt="" class="circle">
          <span class="title">Hotelname</span>
          <a href="#">Trip advisor</a>
          <a href="#!" class="secondary-content">Book</a>
        </li>
      <?php }; ?>
    </ul>
  </div>
</body>
</html>
