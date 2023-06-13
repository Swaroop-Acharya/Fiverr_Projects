<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="room.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <title>Rooms</title>
</head>

<body>
    <table>
        <tr colspan="2">
            <td>
                <?php
                include 'connection.php';
                $sql = "SELECT * FROM images WHERE hotel_id = 1";
                $res = mysqli_query($con, $sql);
                $imageUrls = array(); // Create an empty array to store image URLs
                
                if (mysqli_num_rows($res) > 0) {
                    while ($images = mysqli_fetch_assoc($res)) {
                        $imageUrls[] = $images['image_url']; // Append each image URL to the array
                    }
                }


                ?>
                <img class="images" src="hotel_images/<?= $imageUrls[2] ?>" alt="no images available">
            </td>
            <td>
                <img class="img1" src="hotel_images/<?= $imageUrls[0] ?>" alt="no images available">
                <img class="img1" src="hotel_images/<?= $imageUrls[1] ?>" alt="no images available">
            </td>
            <td>
                <img class="img1" src="hotel_images/<?= $imageUrls[3] ?>" alt="no images available">
                <img class="img1" src="hotel_images/<?= $imageUrls[4] ?>" alt="no images available">
            </td>

        </tr>
    </table>
    <table class="navtable">
        <tr>
            <td class="row"><a class="navlink" href="home.php">Overview</a></td>
            <td class="row"><a class="navlink ac1" href="rooms.php">Rooms</a></td>
            <td class="row"><a class="navlink" href="location.php">Location</a></td>
            <td class="reserve">
                <a class="resbtn" href="#">Reserve</a>
            </td>
        </tr>
    </table>
    <h2>Choose your room</h2>
    <div class="main-container">
        <div class="room-container">
            <div class="room-card card1">
                <div class="heading">Popular among travelers</div>
                <?php
                include 'connection.php';
                $sql = "SELECT * FROM room WHERE hotel_id = 1";
                $res = mysqli_query($con, $sql);
                $imageUrls = array(); // Create an empty array to store image URLs
                
                if (mysqli_num_rows($res) > 0) {
                    while ($data = mysqli_fetch_assoc($res)) {
                        $imageUrls[] = $data['room_image'];
                        $roomNames[] = $data['room_name'];
                        $roomRating[] = $data['room_rating'];
                        $roomPrice[] = $data['room_price'];
                    }
                }

                $sql1 = "SELECT * FROM roomamenities WHERE room_id = 1";
                $res1 = mysqli_query($con, $sql1);
                $iconImg1 = array();
                $amenitiesTxt1 = array();
                if (mysqli_num_rows($res1) > 0) {
                    while ($data1 = mysqli_fetch_assoc($res1)) {
                        $iconImg1[] = $data1['icon_image'];
                        $amenitiesTxt1[] = $data1['amenity_text'];
                    }
                }
                $sql2 = "SELECT * FROM roomamenities WHERE room_id = 2";
                $res2 = mysqli_query($con, $sql2);
                $iconImg2 = array();
                $amenitiesTxt2 = array();
                if (mysqli_num_rows($res2) > 0) {
                    while ($data2 = mysqli_fetch_assoc($res2)) {
                        $iconImg2[] = $data2['icon_image'];
                        $amenitiesTxt2[] = $data2['amenity_text'];
                    }
                }
                $sql3 = "SELECT * FROM roomamenities WHERE room_id = 3";
                $res3 = mysqli_query($con, $sql3);
                $iconImg3 = array();
                $amenitiesTxt3 = array();
                if (mysqli_num_rows($res3) > 0) {
                    while ($data3 = mysqli_fetch_assoc($res3)) {
                        $iconImg3[] = $data3['icon_image'];
                        $amenitiesTxt3[] = $data3['amenity_text'];
                    }
                }
                $sql4 = "SELECT * FROM roomamenities WHERE room_id = 4";
                $res4 = mysqli_query($con, $sql4);
                $iconImg4 = array();
                $amenitiesTxt4 = array();
                if (mysqli_num_rows($res4) > 0) {
                    while ($data4 = mysqli_fetch_assoc($res4)) {
                        $iconImg4[] = $data4['icon_image'];
                        $amenitiesTxt4[] = $data4['amenity_text'];
                    }
                }
                $sql5 = "SELECT * FROM roomamenities WHERE room_id = 5";
                $res5 = mysqli_query($con, $sql5);
                $iconImg5 = array();
                $amenitiesTxt5 = array();
                if (mysqli_num_rows($res5) > 0) {
                    while ($data5 = mysqli_fetch_assoc($res5)) {
                        $iconImg5[] = $data5['icon_image'];
                        $amenitiesTxt5[] = $data5['amenity_text'];
                    }
                }
                $sql6 = "SELECT * FROM roomamenities WHERE room_id = 6";
                $res6 = mysqli_query($con, $sql6);
                $iconImg6 = array();
                $amenitiesTxt6 = array();
                if (mysqli_num_rows($res6) > 0) {
                    while ($data6 = mysqli_fetch_assoc($res6)) {
                        $iconImg6[] = $data6['icon_image'];
                        $amenitiesTxt6[] = $data6['amenity_text'];
                    }
                }
                $sql7 = "SELECT * FROM roomamenities WHERE room_id = 7";
                $res7 = mysqli_query($con, $sql7);
                $iconImg7 = array();
                $amenitiesTxt7 = array();
                if (mysqli_num_rows($res7) > 0) {
                    while ($data7 = mysqli_fetch_assoc($res7)) {
                        $iconImg7[] = $data7['icon_image'];
                        $amenitiesTxt7[] = $data7['amenity_text'];
                    }
                }


                ?>
                <img class="roomimg" src="room_images/<?= $imageUrls[0] ?>" />


                <h3 class="room-title">
                    <?php echo $roomNames[0] ?>
                </h3>

                <p class="rating">
                    <?php echo $roomRating[0] ?>
                </p>
                <p class="room-info"><img class="icons" src="icon_amenities/<?= $iconImg1[0] ?>" alt=""><span>
                        <?php echo $amenitiesTxt1[0] ?>
                    </span>
                </p>
                <p class="room-info"><img class="icons" src="icon_amenities/<?= $iconImg1[1] ?>" alt=""><span>
                        <?php echo $amenitiesTxt1[1] ?>
                    </span></p>
                <p class="room-info"><img class="icons" src="icon_amenities/<?= $iconImg1[2] ?>" alt=""><span>
                        <?php echo $amenitiesTxt1[2] ?>
                    </span></p>
                <p class="room-info"><img class="icons" src="icon_amenities/<?= $iconImg1[3] ?>" alt=""><span>
                        <?php echo $amenitiesTxt1[3] ?>
                    </span></p>
                <p class="room-info"><img class="icons" src="icon_amenities/<?= $iconImg1[4] ?>" alt=""><span>
                        <?php echo $amenitiesTxt1[4] ?>
                    </span></p>
                <div class="price-container">
                    <span class="cost">$
                        <?php echo $roomPrice[0] ?>
                    </span>
                    <a href="reservationform.php?id=1" class="resbtn">Reserve</a>
                </div>
            </div>
        </div>
        <div class="room-container">
            <div class="room-card card2">

                <img class="roomimg" src="room_images/<?= $imageUrls[1] ?>"" />
                <h3 class=" room-title">
                <?php echo $roomNames[1] ?>
                </h3>
                <p class="rating">
                    <?php echo $roomRating[1] ?>
                </p>
                <p class="room-info"><img class="icons" src="icon_amenities/<?= $iconImg2[0] ?>" alt=""><span>
                        <?php echo $amenitiesTxt2[0] ?>
                    </span>
                </p>
                <p class="room-info"><img class="icons" src="icon_amenities/<?= $iconImg2[1] ?>" alt=""><span>
                        <?php echo $amenitiesTxt2[1] ?>
                    </span></p>
                <p class="room-info"><img class="icons" src="icon_amenities/<?= $iconImg2[2] ?>" alt=""><span>
                        <?php echo $amenitiesTxt2[2] ?>
                    </span></p>
                <p class="room-info"><img class="icons" src="icon_amenities/<?= $iconImg2[3] ?>" alt=""><span>
                        <?php echo $amenitiesTxt2[3] ?>
                    </span></p>
                <p class="room-info"><img class="icons" src="icon_amenities/<?= $iconImg2[4] ?>" alt=""><span>
                        <?php echo $amenitiesTxt2[4] ?>
                    </span></p>
                <div class="price-container">
                    <span class="cost">$
                        <?php echo $roomPrice[1] ?>
                    </span>
                    <a href="reservationform.php?id=2" class="resbtn">Reserve</a>
                </div>
            </div>
        </div>
        <div class="room-container">
            <div class="room-card card3">

                <img class="roomimg" src="room_images/01066662.jpg" />
                <h3 class="room-title">
                    <?php echo $roomNames[2] ?>
                </h3>
                <p class="rating">
                    <?php echo $roomRating[2] ?>
                </p>
                <p class="room-info"><img class="icons" src="icon_amenities/<?= $iconImg3[0] ?>" alt=""><span>
                        <?php echo $amenitiesTxt3[0] ?>
                    </span></p>
                <p class="room-info"><img class="icons" src="icon_amenities/<?= $iconImg3[1] ?>" alt=""><span>
                        <?php echo $amenitiesTxt3[1] ?>
                    </span></p>
                <p class="room-info"><img class="icons" src="icon_amenities/<?= $iconImg3[2] ?>" alt=""><span>
                        <?php echo $amenitiesTxt3[2] ?>
                    </span></p>
                <p class="room-info"><img class="icons" src="icon_amenities/<?= $iconImg3[3] ?>" alt=""><span>
                        <?php echo $amenitiesTxt3[3] ?>
                    </span></p>
                <div class="price-container">
                    <span class="cost">$
                        <?php echo $roomPrice[2] ?>
                    </span>
                    <a href="reservationform.php?id=3" class="resbtn">Reserve</a>
                </div>
            </div>
        </div>
        <div class="room-container">
            <div class="room-card card4">

                <img class="roomimg" src="room_images/d1bcdecd.jpg" />
                <h3 class="room-title">
                    <?php echo $roomNames[3] ?>
                </h3>
                <p class="rating">
                    <?php echo $roomRating[3] ?>
                </p>
                <p class="room-info"><img class="icons" src="icon_amenities/<?= $iconImg4[0] ?>" alt=""><span>
                        <?php echo $amenitiesTxt4[0] ?>
                    </span></p>
                <p class="room-info"><img class="icons" src="icon_amenities/<?= $iconImg4[1] ?>" alt=""><span>
                        <?php echo $amenitiesTxt4[1] ?>
                    </span></p>
                <p class="room-info"><img class="icons" src="icon_amenities/<?= $iconImg4[2] ?>" alt=""><span>
                        <?php echo $amenitiesTxt4[2] ?>
                    </span></p>
                <p class="room-info"><img class="icons" src="icon_amenities/<?= $iconImg4[3] ?>" alt=""><span>
                        <?php echo $amenitiesTxt4[3] ?>
                    </span></p>
                <p class="room-info"><img class="icons" src="icon_amenities/<?= $iconImg4[4] ?>" alt=""><span>
                        <?php echo $amenitiesTxt4[4] ?>
                    </span></p>
                <div class="price-container">
                    <span class="cost">$
                        <?php echo $roomPrice[3] ?>
                    </span>
                    <a href="reservationform.php?id=4" class="resbtn">Reserve</a>
                </div>
            </div>
        </div>
        <div class="room-container">
            <div class="room-card card5">
                <img class="roomimg" src="room_images/dc882e48.jpg" />
                <h3 class="room-title">
                    <?php echo $roomNames[4] ?>
                </h3>
                <p class="rating">
                    <?php echo $roomRating[4] ?>
                </p>
                <p class="room-info"><img class="icons" src="icon_amenities/<?= $iconImg5[0] ?>" alt=""><span>
                        <?php echo $amenitiesTxt5[0] ?>
                    </span></p>
                <p class="room-info"><img class="icons" src="icon_amenities/<?= $iconImg5[1] ?>" alt=""><span>
                        <?php echo $amenitiesTxt5[1] ?>
                    </span></p>
                <p class="room-info"><img class="icons" src="icon_amenities/<?= $iconImg5[2] ?>" alt=""><span>
                        <?php echo $amenitiesTxt5[2] ?>
                    </span></p>
                <p class="room-info"><img class="icons" src="icon_amenities/<?= $iconImg5[3] ?>" alt=""><span>
                        <?php echo $amenitiesTxt5[3] ?>
                    </span></p>
                <div class="price-container">
                    <span class="cost">$
                        <?php echo $roomPrice[4] ?>
                    </span>
                    <a href="reservationform.php?id=5" class="resbtn">Reserve</a>
                </div>
            </div>
        </div>
        <div class="room-container">
            <div class="room-card card6">

                <img class="roomimg" src="room_images/64ddc853.jpg" />
                <h3 class="room-title">
                    <?php echo $roomNames[5] ?>
                </h3>
                <p class="room-info"><img class="icons" src="icon_amenities/<?= $iconImg6[0] ?>" alt=""><span>
                        <?php echo $amenitiesTxt6[0] ?>
                    </span>
                </p>
                <p class="room-info"><img class="icons" src="icon_amenities/<?= $iconImg6[1] ?>" alt=""><span>
                        <?php echo $amenitiesTxt6[1] ?>
                    </span></p>
                <p class="room-info"><img class="icons" src="icon_amenities/<?= $iconImg6[2] ?>" alt=""><span>
                        <?php echo $amenitiesTxt6[2] ?>
                    </span></p>
                <p class="room-info"><img class="icons" src="icon_amenities/<?= $iconImg6[3] ?>" alt=""><span>
                        <?php echo $amenitiesTxt6[3] ?>
                    </span></p>
                <p class="room-info"><img class="icons" src="icon_amenities/<?= $iconImg6[4] ?>" alt=""><span>
                        <?php echo $amenitiesTxt6[4] ?>
                    </span></p>
                <p class="room-info"><img class="icons" src="icon_amenities/<?= $iconImg6[5] ?>" alt=""><span>
                        <?php echo $amenitiesTxt6[5] ?>
                    </span></p>
                <p class="room-info"><img class="icons" src="icon_amenities/<?= $iconImg6[6] ?>" alt=""><span>
                        <?php echo $amenitiesTxt6[6] ?>
                    </span></p>
                <p class="room-info"><img class="icons" src="icon_amenities/<?= $iconImg6[7] ?>" alt=""><span>
                        <?php echo $amenitiesTxt6[7] ?>
                    </span></p>
                <div class="price-container">
                    <span class="cost">$
                        <?php echo $roomPrice[5] ?>
                    </span>
                    <a href="reservationform.php?id=6" class="resbtn">Reserve</a>
                </div>
            </div>
        </div>
        <div class="room-container">
            <div class="room-card card7">

                <img class="roomimg" src="room_images/f0a26054.jpg" />
                <h3 class="room-title">
                    <?php echo $roomNames[5] ?>
                </h3>

                <p class="room-info"><img class="icons" src="icon_amenities/<?= $iconImg7[0] ?>" alt=""><span>
                        <?php echo $amenitiesTxt7[0] ?>
                    </span></p>
                <p class="room-info"><img class="icons" src="icon_amenities/<?= $iconImg7[1] ?>" alt=""><span>
                        <?php echo $amenitiesTxt7[1] ?>
                    </span></p>
                <p class="room-info"><img class="icons" src="icon_amenities/<?= $iconImg7[2] ?>" alt=""><span>
                        <?php echo $amenitiesTxt7[2] ?>
                    </span></p>
                <p class="room-info"><img class="icons" src="icon_amenities/<?= $iconImg7[3] ?>" alt=""><span>
                        <?php echo $amenitiesTxt7[3] ?>
                    </span></p>
                <p class="room-info"><img class="icons" src="icon_amenities/<?= $iconImg7[4] ?>" alt=""><span>
                        <?php echo $amenitiesTxt7[4] ?>
                    </span></p>
                <p class="room-info"><img class="icons" src="icon_amenities/<?= $iconImg7[5] ?>" alt=""><span>
                        <?php echo $amenitiesTxt7[5] ?>
                    </span></p>
                <p class="room-info"><img class="icons" src="icon_amenities/<?= $iconImg7[6] ?>" alt=""><span>
                        <?php echo $amenitiesTxt7[6] ?>
                    </span></p>
                <p class="room-info"><img class="icons" src="icon_amenities/<?= $iconImg7[7] ?>" alt=""><span>
                        <?php echo $amenitiesTxt7[7] ?>
                    </span></p>
                <div class="price-container">
                    <span class="cost">$
                        <?php echo $roomPrice[6] ?>
                    </span>
                    <a href="reservationform.php?id=7" class="resbtn">Reserve</a>
                </div>
            </div>
        </div>
    </div>


</body>

</html>