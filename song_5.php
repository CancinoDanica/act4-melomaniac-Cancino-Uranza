<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Made for Me</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <nav class="navbar">
      <div class="navbar-logo">
        <img src="images/icon1.png" alt="Logo">
        <span class="navbar-logo-text">MusikaMix</span>
      </div>
    </nav>
  </header>
  <aside class="sidebar">
    <ul class="sidebar-links">
      <li class="song"><a href="song_1.php"><img src="images/play.png" alt="Song Icon"> ENCHANTED</a></li>
      <li class="song "><a href="song_2.php"><img src="images/play.png" alt="Song Icon"> 10,000 REASONS</a></li>
      <li class="song"><a href="song_3.php"><img src="images/play.png" alt="Song Icon"> IKAW AT AKO</a></li>
      <li class="song "><a href="song_4.php"><img src="images/play.png" alt="Song Icon">  MADE BY ME</a></li>
      <li class="song active-song"><a href="song_5.php"><img src="images/icon.png" alt="Song Icon"> BULONG</a></li>
    </ul>
  </aside>
  <div class="content">
    <div class="music-player">
      <h2>Music Player</h2><br><br>
      <div class="profile"><img src="images/december.jpg" alt="Music Player Image"></div>
      <div class="title"><h3> Bulong </h3></div>
      <div class="artist"><p>December Avenue</p></div>
      <audio controls>
        <source src="song/December Avenue - Bulong (OFFICIAL MUSIC VIDEO).mp3" type="audio/mpeg">
      </audio>
    </div>
    <div class="lyrics">
<?php
echo "<br>";
echo "<h2>Lyrics</h2>";
echo "<br>"; 
echo "<h2>Bulong - December Avenue</h2>";
echo "<br>"; 
echo "<p>[Intro]</p>";
echo "<p>F Am7 G</p>";
echo "<br>";
echo "<p>[Verse 1]</p>";
echo "<p>F            Am7    G</p>";
echo "<p>Hindi masabi ang nararamdaman</p>";
echo "<p>F                Am7       G</p>";
echo "<p>Di makalapit, sadyang nanginginig nalang</p>";
echo "<p>F                         Am7 G</p>";
echo "<p>Mga kamay na sabik sa piling mo</p>";
echo "<p>F                          Am7      G</p>";
echo "<p>Ang iyong matang walang mintis sa pagtigil ng aking mundo</p>";
echo "<br>";
echo "<p>[Chorus]</p>";
echo "<p>F                    Am7 G</p>";
echo "<p>Ako'y alipin ng pag-ibig mo</p>";
echo "<p>F                         Am7 G</p>";
echo "<p>Handang ibigin ang 'isang tulad mo</p>";
echo "<p>F                        Am7      G</p>";
echo "<p>Hangga't ang puso mo'y sa akin lang hindi ka na malilinlang</p>";
echo "<p>F                        Am7        G</p>";
echo "<p>Ikaw ang ilaw sa dilim at ang liwanag ng mga bituin</p>";
echo "<br>";
echo "<p>[Verse 2]</p>";
echo "<p>F                 Am7         G</p>";
echo "<p>Hindi mapakali, hanggang tingin nalang</p>";
echo "<p>F                    Am7       G</p>";
echo "<p>Bumubulong sa iyong tabi, sadyang walang makapantay</p>";
echo "<p>F                    Am7    G</p>";
echo "<p>Sa kagandahang inuukit mo sa isip ko</p>";
echo "<br>";
echo "<p>[Chorus]</p>";
echo "<p>F                    Am7 G</p>";
echo "<p>Ako'y alipin ng pag-ibig mo</p>";
echo "<p>F                         Am7 G</p>";
echo "<p>Handang ibigin ang 'isang tulad mo</p>";
echo "<p>F                        Am7      G</p>";
echo "<p>Hangga't ang puso mo'y sa akin lang hindi ka na malilinlang</p>";
echo "<p>F                        Am7        G</p>";
echo "<p>Ikaw ang ilaw sa dilim at ang liwanag ng mga bituin</p>";
echo "<br>";
echo "<p>[Bridge]</p>";
echo "<p>F Am7 G</p>";
echo "<br>";
echo "<p>[Chorus]</p>";
echo "<p>F                    Am7 G</p>";
echo "<p>Ako'y alipin ng pag-ibig mo</p>";
echo "<p>F                         Am7 G</p>";
echo "<p>Handang ibigin ang 'isang tulad mo</p>";
echo "<p>F                        Am7      G</p>";
echo "<p>Hangga't ang puso mo'y sa akin lang hindi ka na malilinlang</p>";
echo "<p>F                        Am7        G</p>";
echo "<p>Ikaw ang ilaw sa dilim at ang liwanag ng mga bituin</p>";
echo "<br>";
echo "<p>[Outro]</p>";
echo "<p>F Am7 G</p>";
echo "<br>";
?>
  </div>
  </div>
</body>
</html>
