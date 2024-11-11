<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Status</title>
</head>
<body>
    <h1 id="message">
        <?php
        // Get the 'status' query parameter from the URL
        $status = isset($_GET['status']) ? $_GET['status'] : '';

        // Handle based on the status
        if ($status === 'successful') {
            echo 'Payment successful! Downloading book... please wait, this might take a while. Do not leave this page...';
            // Redirect to download link
            header("Location:https://mega.nz/file/2zB3yRKR#I5tNb81k9svyf0vIZo74Kyb5sajrwFnUBViXHJUFueA");
            exit(); // Make sure to exit after header redirect
        } elseif ($status === 'cancelled') {
            echo 'Payment cancelled! Redirecting to the home page...';
            // Redirect to home page after 3 seconds
            header("refresh:3;url=/checkout.html");
            exit();
        } else {
            echo 'Payment failed or an unknown error occurred. Redirecting to the home page...';
            // Redirect to home page after 3 seconds
            header("refresh:3;url=/checkout.html");
            exit();
        }
        ?>
    </h1>
</body>
</html>
