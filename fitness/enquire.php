<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive fitness and gym website design</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <!-- enquiry page starts  -->

<section class="enquire" id="enquire">

    <div class="swiper home-slider">

        <div class="swiper-wrapper">
           

            <div class="swiper-slide slide" style="background: url(images/bg.png) no-repeat;">
                <div class="content">
                    <span>WELCOME TO FITNESS CLUB</span>
                    <h3>FILL YOUR DETAILS</h3>

                </div>
        
---------------------------------------------------------------------------------
<br>
<br>
<form action="database/connection.php" method="post">
<lable style="color: rgb(224, 224, 241);"> First Name</lable>
<input type="text" name="firstname"size="30"/><br><br>
<lable style="color: rgb(224, 224, 241);">Middlename:</lable>
<input type="text" name="middlename" size="15"/><br><br>
<lable style="color: rgb(224, 224, 241);">lastname:</lable>
<input type="text" name="lastname"size="15"/><br><br>
<lable style="color: rgb(224, 224, 241);">
Choose any one:
</lable>
<select name="select"> 
<option value="weight loss" >weight loss</option>
<option value="weight gain">weight gain</option>
</select>
<br>
<br>
<lable style="color: rgb(224, 224, 241);">
Gender:
</lable><br>
<input type="radio" name="gender"/> Male<br>
<input type="radio" name="gender"/>Female<br>
<input type="radio" name="gender"/>other<br>
<br>
<br>
<lable style="color: rgb(224, 224, 241);">
Phone No:
</lable>

<input type="text" name="phoneno"size="10"/><br><br>
<label style="color: cornsilk;">
    Address:</label>
<br>

</textarea cols="80"rows="5"value="address">
<input type="text" name="address" id="">
</textarea>
<!-- <input type="text" name="find"size="15"/><br><br> -->

<input type="submit" name="submit" value="submit" class="btn">
<a href="index.php"><input type="home page" value="home page" class="btn"></a> 
</form>
            </div>
----------------------------------------------------------------
            

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>


<!-- enquire page ends -->
---------------------------------------------------------------------------------











<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>