<?php
http_response_code(404);
include('my_404.php'); // provide your own HTML for the error page
die();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page not found</title>
</head>
<body>
    <h1>Maaf, halaman tidak ditemukan</h1>
</body>
</html>