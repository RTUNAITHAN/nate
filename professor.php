<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Homepage</title>
</head>
<body>
   
      <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer Engineering Professors</title>
    
</head>
<body>
    <div class="header">
        <h1>Computer Engineering Professor</h1>
        <div class="links"> 
            <ul>
                <li><a href="">HOME</a></li>
                <li><a href="room.php">ROOM</a></li>
            </ul>
        </div>

    </div>

    <div class="professor-grid">
        <div class="professor">
            <a href="sched.php"><img src="pic.png" alt="Professor 1"></a>
            <a href="sched.php"><span>Dr. Yanoco, Ma. Eugenia M.</span></a>
            <p>SUC II President</p>
        </div>
        <div class="professor">
            <a href=""><img src="pic.png" alt="Professor 2"></a>
            <a href=""><span>Dr. Opulencia, Kristine Y.</span></a>
            <p>Vice President For Academic And Students Affairs Division</p>
        </div>
        <div class="professor">
            <a href=""><img src="pic.png" alt="Professor 3"></a>
            <a href=""><span>Engr. Bravo, Corleto R.</span></a>
            <p>College Dean</p>
        </div>
        <div class="professor">
            <a href=""><img src="pic.png" alt="Professor 4"></a>
            <a href=""><span>Dr. Articona, Jennis N.</span></a>
            <p>Asistant Dean</p>
            <p>Associate Professor</p>
        </div>
        <div class="professor">
            <a href=""><img src="pic.png" alt="Professor 5"></a>
            <a href=""><span>Dr. Zaplan, Christopher Lee</span></a>
            <p>Associate Professor Department Head</p>
        </div>
        <div class="professor">
            <a href=""><img src="pic.png" alt="Professor 6"></a>
            <a href=""><span>Pentecostes, Renz</span></a>
            <p>Laboratory Technician</p>
        </div>
        <div class="professor">
            <a href=""><img src="pic.png" alt="Professor 7"></a>
            <a href=""><span>Dr. Bunag, Belinda G. </span></a>
            <p>Associate Professor</p>
        </div>
        <div class="professor">
            <a href=""><img src="pic.png" alt="Professor 8"></a>
            <a href=""><span>Cruz, Dolores</span></a>
            <p>Associate Professor</p>
        </div>
        <div class="professor">
            <a href=""><img src="pic.png" alt="Professor 8"></a>
            <a href=""><span>Dr. Gomez, Marife E.</span></a>
            <p>Associate Professor</p>
        </div>
        <div class="professor">
            <a href=""><img src="pic.png" alt="Professor 8"></a>
            <a href=""><span>De Vela, Floyd D.</span></a>
            <p>Instructor</p>
        </div>
        <div class="professor">
            <a href=""><img src="pic.png" alt="Professor 8"></a>
            <a href=""><span>Dr. Diaz, Arlene Grace C.</span></a>
            <p>Associate Professor</p>
        </div>
        <div class="professor">
            <a href=""><img src="pic.png" alt="Professor 8"></a>
            <a href=""><span>Laqui, Rizal C.</span></a>
            <p>Associate Professor</p>
        </div>
        <div class="professor">
            <a href=""><img src="pic.png" alt="Professor 8"></a>
            <a href=""><span>Licsi, Ronald N.</span></a>
            <p>Associate Professor</p>
        </div>
        <div class="professor">
            <a href=""><img src="pic.png" alt="Professor 8"></a>
            <a href=""><span>Luna, Jennelyn E.</span></a>
            <p>Instructor</p>
        </div>
        <div class="professor">
            <a href=""><img src="pic.png" alt="Professor 8"></a>
            <a href=""><span>Nequit, Ezekiel C.</span></a>
            <a href=""><p>Associate Professor</p></a>
        </div>
        <div class="professor">
            <a href=""><img src="pic.png" alt="Professor 8"></a>
            <a href=""><span>Presbitero, Emelita C.</span></a>
            <p>Associate Professor</p>
        </div>
        <div class="professor">
            <a href=""><img src="pic.png" alt="Professor 8"></a>
            <a href=""><span>Purisima, Edwin G.</span></a>
            <p>Associate Professor</p>
        </div>
        <div class="professor">
            <a href=""><img src="pic.png" alt="Professor 8"></a>
            <a href=""><span>Sadicon, Eugine M.</span></a>
            <p>Associate Professor</p>
        </div>
        <div class="professor">
            <a href=""><img src="pic.png" alt="Professor 8"></a>
            <a href=""><span>Dr. Villaneuva, Ma. Luisa M.</span></a>
            <p>Associate Professor</p>
        </div>
    </div>
    <div class="log-out">
    <a href="logout.php"><p>Logout</p></a>
    </div>

    <div class="container-chart">
        <h1>RTU College of Engineering - Department of Computer Engineering</h1>
        <div class="flowchart">
            <div class="box">Dr. Yanoco, Ma. Eugenia M. <br> SUC II President</div>
            <div class="line"></div>
            <div class="box">Dr. Opulencia, Kristine Y. <br> Vice President for Academic & Student Affairs</div>
            <div class="line"></div>
            <div class="box">Engr. Bravo, Corleto R. <br> College Dean</div>
            <div class="line"></div>
            <div class="row">
                <div class="box">Dr. Articona, Jennis N. <br> Assistant Dean</div>
                <div class="box">Dr. Zaplan, Christopher Lee <br> Department Head</div>
            </div>
            <div class="line"></div>
            <div class="row">
                
                <div class="box">Pentecostes, Renz <br> Laboratory Technician</div>
            </div>
            <div class="line"></div>
            <div class="row">
                <div class="box">Dr. Bunag, Belinda G.</div>
                <div class="box">Cruz, Dolores</div>
                <div class="box">Dr. Gomez, Marife E.</div>
                <div class="box">De Vela, Floyd D.</div>
                <div class="box">Dr. Diaz, Arlene Grace C.</div>
                <div class="box">Laqui, Rizal C.</div>
            </div>
            <div class="line"></div>
            <div class="row">
                <div class="box">Licsi, Ronald N.</div>
                <div class="box">Luna, Jennelyn E.</div>
                <div class="box">Nequit, Ezekiel C.</div>
                <div class="box">Presbitero, Emelita C.</div>
                <div class="box">Purisima, Edwin G.</div>
                <div class="box">Sadicon, Eugine M.</div>
                <div class="box">Dr. Villanueva, Ma. Luisa M.</div>
            </div>
        </div>
    </div>
      
</body>
</html>
