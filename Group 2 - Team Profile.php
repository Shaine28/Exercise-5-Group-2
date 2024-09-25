<!DOCTYPE html> 
<html lang = "en"> 
<head> 
    <meta charset = "UTF-8"> 
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0"> 
    <title>GROUP 2 - TEAM PROFILE</title> 
    <link rel = "stylesheet" href = "team-profile-css.css">
    <script src = "team-profile-js.js"></script>
</head> 

<body>
    <h1>GROUP 2 - TEAM PROFILE</h1> 
    <div class = "container"> 
        <div class = "member"> <!-- MEMBER MIKKA'S PROFILE -->
            <img src = "pojado.jpg" alt = "Team Member 1"> 
            <h2 onclick = "onmikka()">Mikka Mae Pojado</h2> 
            <p class = "section">BSIT-3D</p> 
            <p id = "mottoinlife-mikka"><b>“</b>Develop success from failures. Discouragement and failure are two of the surest stepping stones to success.<b>”</b></p> 
            <a href = "https://www.facebook.com/100010225215623/">
                <img id = "facebook"; src = "facebook icon.png">
            </a>    
            <a href = "https://github.com/Mikkamae3d">
                <img id = "github"; src = "github icon.png">
            </a>
            <a href = "https://www.linkedin.com/in/mikka-mae-pojado-97868a322/">
                <img id = "linkedin"; src = "linkedin icon.png">
            </a>
        </div> 
        <div class = "member"> <!-- MEMBER MIKYLLA'S PROFILE -->
            <img src = "racan.jpg" alt = "Team Member 2"> 
            <h2 onclick = "onmikay()">Mikylla Jean Racan</h2> 
            <p class = "section">BSIT-3D</p> 
            <p id = "mottoinlife-mikylla"><b>“</b>Yesterday is history, tomorrow is mystery, but today is a gift. That is why it is called present.<b>”</b></p> 
            <a href = "https://www.facebook.com/mikyllajean.malacaracan/">
                <img id = "facebook"; src = "facebook icon.png">
            </a>
            <a href = "https://github.com/MikyllaRacan">
                <img id = "github"; src = "github icon.png">
            </a> 
            <a href = "https://www.linkedin.com/in/mikyllaracan/">
                <img id = "linkedin"; src = "linkedin icon.png">
            </a>
        </div> 
        <div class = "member"> <!-- MEMBER JEANNA'S PROFILE -->
            <img src = "reyes.jpg" alt = "Team Member 3"> 
            <h2 onclick = "onjeanna()">Jeanna Lei Reyes</h2> 
            <p class = "section">BSIT-3D</p> 
            <p id = "mottoinlife-jeanna"><b>“</b>Buhay ay 'di karera.<b>”</b></p> 
            <a href = "https://www.facebook.com/jeannalei.reyes">
                <img id = "facebook"; src = "facebook icon.png">
            </a>
            <a href = "https://github.com/JeannaLei">
                <img id = "github"; src = "github icon.png">
            </a> 
            <a href = "https://www.linkedin.com/in/jeanna-lei-reyes-853711235/?trk=contact-info">
                <img id = "linkedin"; src = "linkedin icon.png">
            </a>
        </div> 
         <div class="member"> <!-- MEMBER SHAINE'S PROFILE -->
            <img src = "tan.jpeg" alt = "Team Member 1"> 
            <h2 onclick = "onshaine()">Shaine Tan</h2>
            <br> 
            <p class = "section">BSIT-3D</p> 
            <p id = "mottoinlife-shaine"><b>“</b>Don't let the "right now" ruin the "later on". You can do better.<b>”</b></p> 
            <a href = "https://www.facebook.com/Pulchiritudinous28">
                <img id = "facebook"; src = "facebook icon.png">
            </a>
            <a href = "https://github.com/Shaine28">
                <img id = "github"; src = "github icon.png">
            </a> 
            <a href = "https://www.linkedin.com/in/shane-tan-297486322/">
                <img id = "linkedin"; src = "linkedin icon.png">
            </a>
        </div> 
         <div class = "member"> <!-- MEMBER KATRINA'S PROFILE -->
            <img src = "yape.jpeg" alt = "Team Member 1"> 
            <h2 onclick = "onkatrina()">Katrina Paula Yape</h2> 
            <p class = "section">BSIT-3D</p> 
            <p id = "mottoinlife-katrina"><b>“</b>Life is short, make it shorter.<b>”</b></p> 
            <a href = "https://www.facebook.com/Enricoyape16">
                <img id = "facebook"; src = "facebook icon.png">
            </a>
            <a href = "https://github.com/Katrina182004">
                <img id = "github"; src = "github icon.png">
            </a> 
            <a href = "https://www.linkedin.com/in/katrina-yape-476690322">
                <img id = "linkedin"; src = "linkedin icon.png">
            </a>
        </div>
    </div> 


    <?php
        include("team-profile-php.php") // INCLUDES OR LINKS ANOTHER PHP FILE
    ?>


    <div id = "overlaymikka" onclick = "offmikka()"> <!-- MEMBER MIKKA'S OVERLAY -->
        <div class = "overlay-container">
            <div class = "overlay-description">
                <h2 class = "text"><?php member1_details() ?></h2>
                <div class = "overlay-image"> 
                    <?php 
                        imagemikka();
                    ?>
                </div>
            </div>
        </div>
    </div>
    


    <div id = "overlaymikay" onclick = "offmikay()"> <!-- MEMBER MIKYLLA'S OVERLAY -->
        <div class = "overlay-container">
            <div class = "overlay-description">
                <h2 class = "text"><?php member2_details() ?></h2>
                <div class = "overlay-image"> 
                    <?php imagemikay() ?>
                </div>
            </div>
        </div>
    </div>


   
   <div id = "overlayjeanna" onclick = "offjeanna()"> <!-- MEMBER JEANNA'S OVERLAY -->
        <div class = "overlay-container">
            <div class = "overlay-description">
                <h2 class = "text"><?php member3_details() ?></h2>
                <div class = "overlay-image"> 
                    <?php imagejeanna() ?>
                </div>
            </div>
        </div>
    </div>



    <div id = "overlayshaine" onclick = "offshaine()"> <!-- MEMBER SHAINE'S OVERLAY -->
        <div class = "overlay-container">
            <div class = "overlay-description">
                <h2 class = "text"><?php member4_details() ?></h2>
                <div class = "overlay-image"> 
                    <?php imageshaine() ?>
                </div>
            </div>
        </div>
    </div>



    <div id = "overlaykatrina" onclick = "offkatrina()"> <!-- MEMBER KATRINA'S OVERLAY -->
        <div class = "overlay-container">
            <div class = "overlay-description">
                <h2 class = "text"><?php member5_details() ?></h2>
                <div class = "overlay-image"> 
                    <?php imagekatrina() ?>
                </div>
            </div>
        </div>
    </div>

</body> 

</html>