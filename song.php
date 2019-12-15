<?php 
include_once 'header.php';
?>
<!-- <link rel ="stylesheet" href= "style1.css"> -->
<link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
<style>
 body{
    background-image:url('img/bg-img/bg-1.jpg');
    background-attachment: fixed;
              background-position: center;
              background-repeat: no-repeat;
              background-size: cover;
}  </style>
<body>
<div class="row">
        <div class ="col-sm-12">
            <center>
                <p id ="song-head">
                Our Music Your Melody</p>
            </center>
</div>
    </div>
 <div class = "container">
 <div class ="row">
 <div class ="col-md-12 col-sm-12">
 <div class ="playlist">
     <form action ="audio.php" method ="GET">
     <table style = "width:100%; padding:3px;">
         <?php
          $song_url='song-data.json';
          $song_json=file_get_contents($song_url);
          $song_array=json_decode($song_json,true);
           
            foreach($song_array as $song)
            {    echo '<tr>';
                echo '<td><img src ="'.$song['cover_image'].'" width ="150" height = "150"></td>';
                echo '<td><h1>'.$song['song'].'</h1><br>
                <h3>'.$song['artists'].'</h3>
                </td>';
                echo '<td><button type ="submit" name ="submit" value = "'.$song['url'].'" class ="musica-btn">
                <i class ="fa fa-play" style ="font-size:20px;"></i></button></td>';
                echo '</tr>';
            }
            
         
         ?>
</table>
        </form>
</div>
 <div>
 </div>
 </div>