<?php
include'constants/constant.php'
?>


<!DOCTYPE html>
<html lang="en">

<?php
include'constants/head.php'
?>

<body background="images/backgrounds/background16.jpg">
    <div id="container">

        <div class="left">
            <div class="hold">
                <img src="images/home.png" width="200px" height="150px">

            </div>

            <?php
            include"constants/nav.php"
            ?>

        </div>

        <div class="right">
            <h1>Homepage</h1>
            <!--<img src="">-->
            <img src="images/manu1.JPG" width="300px" height="300px">
            <h3>A brief introduction</h3>
            <p>Hi my name is Manu I loves to code and work with pc's and this is my profile.</p>
            <br>
            <h3>Coding languages</h3>
            <p>HTML</p>
            <p>CSS</p>
            <p>JQUERY</p>
            <p>JAVA SCRIPT</p>
            <br>
            <h3>academic achievements</h3>
            <!--comeplete-->
            <p>False bay IT course</p>
            <p>Level 2</p>
            <p>Level 3</p>
        </div>

    </div>

</body>
</html>
<script>
$(document).ready(function(){

// jQuery methods go here...
    $("#hide").ready(function(){
        $("").hide();
    });
}); 





//$("#show").click(function(){
//$("p").show();
//});

</script>