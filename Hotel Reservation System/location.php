<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="location.css">

    <title>Location</title>
</head>

<body>
    <div class="botle">

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
            <td class="row"><a class="navlink" href="rooms.php">Rooms</a></td>
            <td class="row"><a class="navlink ac1" href="#">Location</a></td>
            <td class="reserve">
                <a class="resbtn" href="rooms.php">Reserve</a>
            </td>
        </tr>
    </table>
    
    <table class="dettable">
        <tr>
            <td class="desc">
                <h2><b>About this Area</b></h2>
                <b>Las Vegas</b>
                <p>
                    Located in Las Vegas Strip neighborhood, The Venetian Resort Las Vegas is connected to a shopping
                    center. Fashion Show Mall and Las Vegas Premium Outlets North are worth checking out if shopping is
                    on the agenda, while those wishing to experience the area's natural beauty can explore Red Rock
                    Canyon National Conservation Area. Looking to enjoy an event or a game? See what's going on at
                    T-Mobile Arena or Thomas and Mack Center. Spend some time exploring the area's activities, including
                    outlet shopping. Guests appreciate the resort's central location.
                </p>
                <a href="#">Visit our Las Vegas travel guide</a><br><br>
                <a href="#">View more resorts in Las Vegas</a>
            </td>
            <td class="location-details">
                <table>
                    <img src="https://maps.googleapis.com/maps/api/staticmap?channel=expedia-HotelInformation&maptype=roadmap&format=jpg&zoom=13&scale=&size=660x330&map_id=3b266eb50d2997c6&markers=icon:https://a.travel-assets.com/shopping-pwa/images/his-preview-marker.png%7C36.12229,-115.171205&key=AIzaSyCYjQus5kCufOpSj932jFoR_AJiL9yiwOw&signature=ytpxncT3OaQdBqkiyJ5byiiQODY=
                        " alt="" class="loc"><br>
                        <tr>
                            <td class="abc">
                                <span>
                                    <img class="icons" src="location_files/location_files/map_drop.png" alt="">
                                    
                                    <b>What's nearby</b>
                                </span>
                                <br>
                                <div class="det">
                                    The Venetian Casino <br>- 1min walk<br>
                                    Mirage Volcano - 2min walk<br>
                                    The Linq - 8min walk<br>
                                    bellagio Casino - 17min walk<br>
                                The Cosmopolitan Casino - 19 min walk<br>
                            </div>
                        </td>
                        <td class="abc">
                            <img class="icons" src="location_files/location_files/restaurant.png"
                            alt=""><b>Restaurants</b><br>
                            <div class="det">
                                <span> Grand Lux Cafe - 2min walk<br></span>
                                <span>Smith & Wollensky - 1min walk<br></span>
                                <span>Buddy V's Ristorante - 2min walk<br></span>
                                <span> The Dorsey - 2min walk<br></span>
                                <span>Starbucks - 3min walk<br></span>
                                
                            </div>
                        </td>
                    </tr>
                </table>
                
                <img class="icons" src="location_files/location_files/car_icon.png" alt=""><b>Getting around</b>
                <br>
                <div class="det">
                    <img class="icons" src="location_files/location_files/bus_icon.png" alt="">
                    Las vegas International Airport Station - 8min drive<br>
                    <img class="icons" src="location_files/location_files/bus_icon.png" alt="">
                    Harrah's & The LINQ Station - 8min walk<br>
                    <img class="icons" src="location_files/location_files/airplane_icon.png" alt="">
                    Harry Reid Intl. Airport (LAS) - 11min drive<br>
                </div>
            </div>
        </td>
    </tr>
</table>

</td>
</tr>
</table>
</div>

</body>

</html>