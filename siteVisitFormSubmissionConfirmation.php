<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Visit Menu</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Custom CSS -->
    <style>
        body {
            background-color: #FFF3D2;
            background-size: cover;
            background-repeat: no-repeat;
        }

        h1 {
            font-weight: bold;
            color: #5B5B5B;
            display: inline-block;
            vertical-align: middle; /* This helps center the text vertically within the container */
        }

        .container {
            background-color: rgba(255, 255, 255, 0.7);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            height: 300px;
            width: 75%;
            margin-top: 20px;
        }

        .container#title-container {
            background-color: transparent;
            height:50px;
            box-shadow: 0 0 0 rgba(0, 0, 0, 0);
            text-align: center;
            margin-top:-10px;
        }

        #submissionSuccessfulText {
            color: #00567D;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <br>
    <!-- Logo -->
    <div class="text-center">
    <img src="https://raw.githubusercontent.com/chewshanyu/fusion/main/FusionETA.png" alt="Logo" class="img-fluid my-3" style="max-width: 300px;">
    </div>
    <br>

    <div class="container" id="title-container">
        <h1>Sales Visit Information</h1>
    </div>
    <div class="container">
        <br>
        <p id="submissionSuccessfulText" class="text-center">Thank you for your submission. The information has been successfully updated in the system.
            <br>
        </p>
    </div>
    <br>
</body>
</html>