<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReviewKaro</title>
    <link rel="shortcut icon" href="images/favicon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="style.css?<?php echo time() ?>">
</head>
<body>
    <div class="container">
        <div class="content">
            <form class="pages" id="first" action="second.php" method="POST">
                <header>
                    <h3>Personal Details</h3>
                    <hr>
                </header>
                <div class="body">
                    <div class="column">
                        <input type="text" name="name" placeholder = "Name of Stackholder" onkeypress="return Letter(event)" value="<?php echo isset($name) ?>" required>
                        <input type="text" name="mobile" placeholder = "Contact Number" onkeypress="return onlyNumberKey(event)" required>
                        <input type="text" name="id" placeholder = "Registration ID" required>
                        <select name="year" required>
                            <option  disabled>--Select Academic year--</option>
                            <option value="2022-2023">2022-23</option>
                            <option value="2021-2022">2021-22</option>
                            <option value="2020-21">2020-21</option>
                        </select>
                    </div>
                    <div class="column">
                        <select name="type" required>
                            <option  disabled>--Type of Stackholder--</option>
                            <option value="Student">Student</option>
                            <option value="Alumini">Alumini</option>
                            <option value="Faculty">Faculty</option>
                        </select>
                        <input type="email" name="email" placeholder ="Email" required>
                        <div class="gender">
                            <span>Gender: </span>
                            <input type="radio" name="gender" value="male">Male<input type="radio" name="gender" value="female">Female
                        </div>
                        <input type="submit" value="Proceed">
                        <a href="see_feedback.php" id="prev">Check Previous Feedback</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
<script>
    function Letter(evt) {     
        var ascii = (evt.which) ? evt.which : evkeyCode
        if ((ascii>=65 && ascii<=90) || (ascii>=97 && ascii<=122) || ascii==32)
            return true;
        return false;
    }
    function onlyNumberKey(evt) {     
        var ASCIICode = (evt.which) ? evt.which : evkeyCode
        if (ASCIICode > 31 && (ASCIICode < 48 |ASCIICode > 57))
            return false;
        return true;
    }
</script>
</html>