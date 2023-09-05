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
            background-color: #FFEFC0;
            background-size: cover;
            background-repeat: no-repeat;
        }

        h1 {
            font-weight: bold;
            color: #00567D;
            display: inline-block;
            vertical-align: middle; /* This helps center the text vertically within the container */
        }

        ul {
            list-style-type: none; /* Remove bullet points */
        }

        li {
            margin-left: -20px;
        }

        li a {
            text-decoration: none; /* Remove underlining */
            padding: 10px 0; /* Adjust the padding as needed for spacing */
            font-weight: bold;
            color: #00567D;
            display: inline-block;
            font-size: 17px;
        }

        .container {
            background-color: #FFF9E5;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            height: 500px;
            width: 90%;
            margin-top: 15px;
        }

        .container#title-container {
            background-color: transparent;
            height:50px;
            box-shadow: 0 0 0 rgba(0, 0, 0, 0);
        }

        .menu-divider {
            width: 100%;
            height: 1px;
            background-color: #B3B3B3;
        }

        /* Add a divider using ::before pseudo-element */
        li:not(:first-child)::before {
            content: "";
            display: block;
            width: calc(100% - 10px); /* Adjust the length as needed */
            height: 1px;
            background-color: #B3B3B3;
        }
    </style>
</head>

<body>
    <div style="position: absolute; top: 10px; left: 10px;">
        <a href="mainMenu.php">
            <i class="fas fa-home fa-lg" style="color: #00567D;"></i>
        </a>
    </div>
    <!-- Logo -->
    <div class="text-center">
      <img src="logo.png" alt="Logo" class="img-fluid my-3" style="max-width: 200px;">
    </div>

    <div class="container" id="title-container">
        <h1>Site Visit Menu</h1>
    </div>
    <div class="container">
        <ul>
            <li><a href="index.php">Sales Visit Information</a></li>
        </ul>
    </div>
</body>

</html>