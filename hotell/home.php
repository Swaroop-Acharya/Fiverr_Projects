<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

    <title>Reservation</title>
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
            <td class="row"><a class="navlink ac1" href="#">Overview</a></td>
            <td class="row"><a class="navlink" href="rooms.php">Rooms</a></td>
            <td class="row"><a class="navlink" href="location.php">Location</a></td>
            <td class="reserve">
                <a class="resbtn" href="rooms.php">Reserve</a>
            </td>
        </tr>
    </table>
    <div class="details">


        <h1 class="title">The Venetian Resort in Las Vegas</h1>


        <p>
            <?php
            include 'connection.php';
            // Sample data
            $checkQuery = "SELECT * FROM `hotel` WHERE hotel_id = 1";
            $checkResult = mysqli_query($con, $checkQuery);
            $hotelData = mysqli_fetch_assoc($checkResult);
            $stars = $hotelData['stars'];

            for ($i = 0; $i < $stars; $i++) {


                echo '<i class="fa fa-star"></i>';
            }
            for ($i = 0; $i < 5 - $stars; $i++) {
                echo '<i class="fa fa-star-o"></i>';
            }

            ?>
        </p>
        <p>
            The Venetian in Las Vegas is a lavish and iconic resort that transports guests to the enchanting city of
            Venice, Italy. With its meticulously crafted Italian-inspired architecture and exquisite attention to
            detail, this luxury destination offers an unparalleled experience. The resort boasts spacious and elegantly
            appointed suites, each designed to provide the utmost comfort and style. Guests can indulge in a wide array
            of world-class dining options, ranging from celebrity chef restaurants to charming cafes, offering a
            culinary journey for every palate. The Venetian is also renowned for its vibrant casino, where visitors can
            try their luck at a variety of table games and slot machines. Beyond the gaming excitement, guests can
            explore the resort's Grand Canal Shoppes, a premier shopping destination featuring high-end brands and
            unique boutiques. For relaxation and rejuvenation, the resort offers a tranquil spa and wellness center,
            complete with luxurious treatments and amenities. With its unparalleled elegance, Venetian-inspired charm,
            and an abundance of entertainment options, The Venetian is a true gem on the Las Vegas Strip, promising an
            unforgettable stay for every guest.
        </p>
    </div>



</body>

</html>