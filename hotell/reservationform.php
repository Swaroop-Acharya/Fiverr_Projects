

<?php
include 'connection.php';


//Get the room id
$roomid=$_GET['id'];


// Get the maximum room ID from the reservation table
$maxRoomIdQuery = "SELECT MAX(res_id) AS max_room_id FROM reservation";
$maxRoomIdResult = mysqli_query($con, $maxRoomIdQuery);
$maxRoomIdRow = mysqli_fetch_assoc($maxRoomIdResult);
$nextRoomId = $maxRoomIdRow['max_room_id'] + 1;




if (isset($_POST['submit'])) {
    $cust_name = $_POST['cust_name'];
    $cust_email = $_POST['cust_email'];
    $cust_phone = $_POST['cust_phone'];
    $res_from = $_POST['res_from'];
    $res_to = $_POST['res_to'];

    // Check if the room is already booked for the specified dates
    $checkQuery = "SELECT * FROM reservation WHERE room_id = $roomid AND res_from <= '$res_to' AND res_to >= '$res_from'";
    $checkResult = mysqli_query($con, $checkQuery);

    if (mysqli_num_rows($checkResult) > 0) {
        // Room is already booked for the specified dates
        ?>
        <script>
            alert("The room is already booked for the specified dates.")
        </script>
        <?php
    } else {
        // Insert the reservation data into the database
        $insertQuery = "INSERT INTO reservation (room_id, cust_name, cust_email, cust_phone, res_from, res_to) 
                        VALUES ($roomid, '$cust_name', '$cust_email', '$cust_phone', '$res_from', '$res_to')";
        $insertResult = mysqli_query($con, $insertQuery);

        if ($insertResult) {
            // Reservation successful
            ?>
            <script>
                alert("Reservation successful. Thank you!")
                window.location.href = "home.php";
            </script>
            <?php
        } else {
            // Error in inserting the reservation data
            echo "Error: " . mysqli_error($con);
        }
    }
}

mysqli_close($con);
?>




<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        function validateForm() {
            var fromDate = document.getElementById("res_from").value;
            var toDate = document.getElementById("res_to").value;

            if (toDate < fromDate) {
                alert("Invalid date selection. The 'To Date' should be later than the 'From Date'.");
                return false;
            }

            return true;
        }
    </script>

</head>
<body class="bg-gray-100">
    <div class="container mx-auto py-8">
        <form action="" method="POST" onsubmit="return validateForm()" class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-lg">
            <div class="mb-4">
            <label for="cust_name" class="text-gray-700">Room ID:</label>
            <p>


            <?php
                echo $nextRoomId;

            ?>
            </p>
            </div>
            <div class="mb-4">
                <label for="cust_name" class="text-gray-700">Customer Name:</label>
                <input type="text" id="cust_name" name="cust_name" required
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 ">
            </div>

            <div class="mb-4">
                <label for="cust_email" class="text-gray-700">Email:</label>
                <input type="email" id="cust_email" name="cust_email" required
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 ">
            </div>

            <div class="mb-4">
                <label for="cust_phone" class="text-gray-700">Phone:</label>
                <input type="tel" id="cust_phone" name="cust_phone" required
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 ">
            </div>

            <div class="mb-4">
                <label for="res_from" class="text-gray-700">From Date:</label>
                <input type="date" id="res_from" name="res_from" required
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 ">
            </div>

            <div class="mb-4">
                <label for="res_to" class="text-gray-700">To Date:</label>
                <input type="date" id="res_to" name="res_to" required
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 ">
            </div>

            <div class="mt-6">
                <input type="submit" name="submit" value="Reserve"
                    class="w-full px-4 py-2 text-lg font-semibold text-white bg-indigo-500 rounded-md hover:bg-indigo-600 focus:bg-indigo-700">
            </div>
        </form>
    </div>
</body>

</html>





