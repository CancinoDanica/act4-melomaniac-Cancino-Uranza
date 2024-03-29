<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Enchanted</title>
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
      <li class="song active-song"><a href="song_1.php"><img src="images/icon.png" alt="Song Icon"> ENCHANTED</a></li>
      <li class="song"><a href="song_2.php"><img src="images/play.png" alt="Song Icon"> 10,000 REASONS</a></li>
      <li class="song"><a href="song_3.php"><img src="images/play.png" alt="Song Icon"> IKAW AT AKO</a></li>
      <li class="song"><a href="song_4.php"><img src="images/play.png" alt="Song Icon"> MADE BY ME</a></li>
      <li class="song"><a href="song_5.php"><img src="images/play.png" alt="Song Icon"> BULONG</a></li>
    </ul>
  </aside>
  <div class="content">
    <div class="music-player">
      <h2>Music Player</h2><br><br>
      <div class="profile"><img src="images/taylor.jpg" alt="Music Player Image"></div>
      <div class="title"><h3>Enchanted</h3></div>
      <div class="artist"><p>Taylor Swift</p></div>
      <audio controls>
        <source src="song/Taylor Swift - Enchanted (Taylor's Version) (Lyric Video).mp3" type="audio/mpeg">
      </audio>
    </div>
    <div class="lyrics">     
<?php
echo "<br>";
echo "<h2>Lyrics</h2>";
echo "<br>"; 
echo "<h2>Enchanted - Taylor Swift</h2>";
echo "<br>"; 
echo "<p>[Verse 1]</p>";
echo "<p>G</p>";
echo "<p>There I was again tonight</p>";
echo "<p>Em</p>";
echo "<p>Forcing laughter, faking smiles</p>";
echo "<p>Cadd9</p>";
echo "<p>Same old tired, lonely place</p>";
echo "<p>D</p>";
echo "<p>Walls of insincerity, shifting eyes and vacancy</p>";
echo "<br>";
echo "<p>[Pre-Chorus]</p>";
echo "<p>G</p>";
echo "<p>Vanished when I saw your face</p>";
echo "<p>Em</p>";
echo "<p>All I can say is, it was enchanting to meet you</p>";
echo "<p>Cadd9</p>";
echo "<p>Your eyes whispered 'have we met?'</p>";
echo "<p>D</p>";
echo "<p>Across the room your silhouette</p>";
echo "<p>Em</p>";
echo "<p>Starts to make its way to me</p>";
echo "<br>";
echo "<p>[Chorus]</p>";
echo "<p>G</p>";
echo "<p>The playful conversation starts</p>";
echo "<p>Em</p>";
echo "<p>Counter all your quick remarks</p>";
echo "<p>Cadd9</p>";
echo "<p>Like passing notes in secrecy</p>";
echo "<p>D</p>";
echo "<p>And it was enchanting to meet you</p>";
echo "<br>";
echo "<p>[Verse 2]</p>";
echo "<p>G</p>";
echo "<p>All I can say is I was enchanted to meet you</p>";
echo "<p>Em</p>";
echo "<p>This night is sparkling, don't you let it go</p>";
echo "<p>Cadd9</p>";
echo "<p>I'm wonderstruck, blushing all the way home</p>";
echo "<p>D</p>";
echo "<p>I'll spend forever wondering if you knew</p>";
echo "<br>";
echo "<p>[Pre-Chorus]</p>";
echo "<p>G</p>";
echo "<p>I was enchanted to meet you</p>";
echo "<p>Em</p>";
echo "<p>All I can say is, I was enchanted to meet you</p>";
echo "<br>";
echo "<p>[Chorus]</p>";
echo "<p>G</p>";
echo "<p>This night is flawless, don't you let it go</p>";
echo "<p>Em</p>";
echo "<p>I'm wonderstruck, dancing around all alone</p>";
echo "<p>Cadd9</p>";
echo "<p>I'll spend forever wondering if you knew</p>";
echo "<p>D</p>";
echo "<p>I was enchanted to meet you</p>";
echo "<br>";
?>
    </div>
  </div>
</body>
</html>
