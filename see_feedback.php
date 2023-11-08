<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Feedback</title>
    <link rel="shortcut icon" href="images/favicon.jpg" type="image/x-icon">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
        body{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container{
            height: 100vh;
            width: 100vw;
            display: flex;
            flex-direction: column;
            background-image: url("Images/bg1.jpg");
            background-size: cover;
            align-items: center;
        }
        p{
            text-align: center;
            font-variant: small-caps;
            font-size: 2rem;
            font-weight: bold;
        }
        form{
            margin-top: 50px;
            width: 30%;
            display: flex;
            gap: 10px;
            flex-direction: column;
            align-items: center;
        }
        form select,input[type=text]{
            font-family: 'poppins';
            width: 60%;
            padding: 5px;
            border-radius: 7px;
        }
        form input[type=submit]{
            border-radius: 3px;
            padding: 5px;
            color: white;
            background-color: blue;
            font-family: 'poppins';
        }
        @media screen and (min-width:0px) and (max-width:767px) {
            p{
                font-size: 1.1rem;
            }
            form{
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <p>
            Vignan Stackholder Feeback Engine
        </p>
        <form action="display_feedback.php" method="POST">
            <select name="type" required>
                <option disabled>--Type of Stackholder--</option>
                <option value="Student">Student</option>
                <option value="Alumini">Alumini</option>
                <option value="Faculty">Faculty</option>
            </select>
            <input type="text" name="id" id="id" placeholder="Stackholder Id">
            <input type="submit" value="Find">
        </form>
    </div>
</body>
</html>