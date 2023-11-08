<?php
    require('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReviewKaro</title>
    <link rel="shortcut icon" href="images/favicon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="third.css?<?php echo time()?>">
</head>
<body>
    <div class="container">
        <div class="content">
            <form class="pages" id="third" action="submit.php" method="POST">
                <input type="hidden" name="name" value="<?php echo $_POST['name']; ?>">
                <input type="hidden" name="mobile" value="<?php echo $_POST['mobile']; ?>">
                <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>">
                <input type="hidden" name="year" value="<?php echo $_POST['year']; ?>">
                <input type="hidden" name="type" value="<?php echo $_POST['type']; ?>">
                <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
                <input type="hidden" name="gender" value="<?php echo $_POST['gender']; ?>">
                <input type="hidden" name="pgm" value="<?php echo $_POST['pgm']; ?>">
                <input type="hidden" name="course" value="<?php echo $_POST['course']; ?>">
                <input type="hidden" name="branch" value="<?php echo $_POST['branch']; ?>">
                <input type="hidden" name="reg" value="<?php echo $_POST['reg']; ?>">
                <header>
                    <h3>Your Experience</h3>
                    <hr>
                </header>
                <div class="body">
                    <div class="ask">
                        <p> 1. Course Content to Curriculum are in tune with PO: </p>
                        <input type="range" name="slider1" min="1" max="5" value="1">
                    </div>
                    <div class="ask">
                        <p> 2. Course Content are designed to enable Problem Solving Skills:</p> <input type="range" name="slider2" min="1" max="5" value="1">
                    </div>
                    <div class="ask">
                        <p> 3. Course placed in the curriculum serves the need of all learners: </p> <input type="range" name="slider3" min="1" max="5" value="1">
                    </div>
                    <div class="ask">
                       <p>  4. Contact hour distribution among the various course components is satisfiable: </p><input type="range" name="slider4" min="1" max="5" value="1">
                    </div>
                    <div class="ask">
                        <p> 5. Composition of basic sciences,engineering,humanities and management courses is a right mix and satisfiable: </p><input type="range" name="slider5" min="1" max="5" value="1"> 
                    </div>
                    <div class="ask">
                        <p> 6. Lab sessions are sufficient to improve the technical skills of studnets:</p> <input type="range" name="slider6" min="1" max="5" value="1"> 
                    </div>
                    <div class="ask">
                        <p> 7. Inclusion of projects improved the technical competency and leadership skill among the students: </p><input type="range" name="slider7" min="1" max="5" value="1">
                    </div>
                    <div class="ask" id="last">
                        <p>Feedback: 
                            <textarea name="feedback" cols="30" rows="5" ></textarea>
                        </p>
                    </div>
                </div>
                <footer>
                    <!-- <button name="button" value="second">Previous</button> -->
                    <button name="button" value="submit">Submit</button>
                </footer>
            </div>
        </div>
    </div>
</body>
</html>