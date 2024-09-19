<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Play Movie | TeraBytee</title>
    <link rel="shortcut icon" href="assets/images/appstore.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/appstore.png">

    <style>
        #myVideo {
            /* position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%; */

            width: 100vw;
            height: 100vh;
            object-fit: cover;
            position: fixed;
            top: 0;
            left: 0;
            /* z-index: -1; */
        }
    </style>
</head>

<body>
    <!-- Videonya -->
<!-- <section>
<video
<?php // echo $autoplay == '1' ? 'autoplay' : ''; ?>
    controlsList="nodownload" oncontextmenu="return false;"
    controls
    id="myVideo">

  <source src="<?php // echo  base_url() ?>repo/portfolio/<?php // echo $data?>" type="video/mp4">
  <source src="<?php // echo  base_url() ?>repo/portfolio/<?php // echo $data?>" type="video/mov">
  <source src="<?php // echo  base_url() ?>repo/portfolio/<?php // echo $data?>" type="video/webm">
  <source src="<?php // echo  base_url() ?>repo/portfolio/<?php // echo $data?>" type="video/ogg">

</video>
</section> -->

<?php
    $link1 = "https://tv1.lk21official.wiki/spider-man-no-way-home-2021/";
    $link2 = "https://layarkaca21.hair/morbius-3/";
    $link3 = "https://pusatfilm21.art/the-batman-2022/";
    $link4 = "https://layarkaca21.hair/elektra-2/";

    if (isset($_GET['film'])){
        $get = $_GET['film'];

        if ($get == 'spider_man_no_way_home') {
            $link = $link1;
        }elseif ($get == 'morbius'){
            $link = $link2;
        }elseif ($get == 'the_batman_2022'){
            $link = $link3;
        }elseif ($get == 'elektra'){
            $link = $link4;
        }else {
            $link = "https://www.youtube.com/embed/7ONfxObUIOU?si=y5bo2J9wzfy4kN1x";
        }
    }else {
        $link = "https://www.youtube.com/embed/7ONfxObUIOU?si=y5bo2J9wzfy4kN1x";
    }

    
?>

<iframe id="myVideo" src="<?=$link?>"></iframe>

<!-- Opsional: beberapa teks overlay untuk mendeskripsikan video -->
<!-- <div class="content">
    <button id="myBtn" onclick="myFunction()"><i class="fa fa-play"></i></button>
</div> -->


</body>

<script>
// Dapatkan videonya
// var video = document.getElementById("myVideo");

// Dapatkan buttonnya
// var btn = document.getElementById("myBtn");

      // if (video.requestFullscreen) {
      //   video.requestFullscreen();
      // } else if (video.webkitRequestFullscreen) { /* Safari */
      //   video.webkitRequestFullscreen();
      // } else if (video.msRequestFullscreen) { /* IE11 */
      //   video.msRequestFullscreen();
      // }

// Jeda dan putar video, dan ubah teks tombol
// function myFunction() {
//   if (video.paused) {
//     video.play();
//     btn.innerHTML = "<i class='fa fa-pause'></i>";
//   } else {
//     video.pause();
//     btn.innerHTML = "<i class='fa fa-play'></i>";
//   }

  
// }
</script>

</html>





