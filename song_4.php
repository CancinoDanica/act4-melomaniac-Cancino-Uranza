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
      <li class="song active-song"><a href="song_4.php"><img src="images/icon.png" alt="Song Icon"> MADE BY ME</a></li>
      <li class="song"><a href="song_5.php"><img src="images/play.png" alt="Song Icon"> BULONG</a></li>
    </ul>
  </aside>
  <div class="content">
    <div class="music-player">
      <h2>Music Player</h2><br><br>
      <div class="profile"><img src="images/madeforme.jpg" alt="Music Player Image"></div>
      <div class="title"><h3>Made for Me </h3></div>
      <div class="artist"><p>Muni Long</p></div>
      <audio controls>
        <source src="song/Muni Long - Made For Me (Audio).mp3" type="audio/mpeg">
      </audio>
    </div>
    <div class="lyrics">
<?php
echo "<br>";
echo "<h2>Lyrics</h2>";
echo "<br>"; 
echo "<h2>Made For Me - Muni Long</h2>";
echo "<br>"; 
echo "<p>Mm</p>";
echo "<p>Oh</p>";
echo "<br>";
echo "<p>The smell of your perfume</p>";
echo "<p>I thought I was immune</p>";
echo "<p>Lookin' around this room</p>";
echo "<p>Can't help but see the traces of you</p>";
echo "<p>This moment is surreal</p>";
echo "<p>I can't put into words how I feel</p>";
echo "<br>";
echo "<p>Twin</p>";
echo "<p>Where have you been?</p>";
echo "<br>";
echo "<p>Nobody knows me like you do (Nobody)</p>";
echo "<p>Nobody gon' love me quite like you (Nobody, yeah)</p>";
echo "<p>Can't even deny it, every time I try it</p>";
echo "<p>One look in my eyes, you know I'm lyin', lyin'</p>";
echo "<p>Body to body, skin to skin (I' ve never gon' love like this)</p>";
echo "<p>I'm never gon' to love this again (Again, yeah)</p>";
echo "<p>You were made for me (Just for me)</p>";
echo "<p>Said you were made for me (Only for me, yeah, yeah)</p>";
echo "<p>Think you were made for me</p>";
echo "<p>Oh yeah, you were made for me</p>";
echo "<br>";
echo "<p>It ain't every day</p>";
echo "<p>That I get in my feelings this way</p>";
echo "<p>I knew it was rare</p>";
echo "<p>'Cause before you, I never did care</p>";
echo "<p>Don't know what I would do</p>";
echo "<p>If I had to go on without you</p>";
echo "<br>";
echo "<p>Twin, mm</p>";
echo "<p>Mm, where have you been?</p>";
echo "<br>";
echo "<p>Nobody knows me like you do (Nobody)</p>";
echo "<p>Nobody gon' love me quite like you (Nobody, yeah)</p>";
echo "<p>Can't even deny it, every time I try it</p>";
echo "<p>One look in my eyes, you know I'm lyin', lyin'</p>";
echo "<p>Body to body, skin to skin (I'm never gon' love like this)</p>";
echo "<p>I'm never gon' love like this again (Again, yeah)</p>";
echo "<p>You were made for me (Just for me)</p>";
echo "<p>Said you were made for me (Only for me, yeah, yeah)</p>";
echo "<p>Think you were made for me</p>";
echo "<p>Oh yeah, you were made for me</p>";
echo "<br>";
echo "<p>Made for me</p>";
echo "<p>Made for me</p>";
echo "<p>Made for me</p>";
echo "<br>";
?>
    </div>
  </div>
</body>
</html>
