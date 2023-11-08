<?php
    require("connection.php");
    
    if(isset($_POST["name"]) && isset($_POST["mobile"]) && isset($_POST["id"]) && isset($_POST["year"]) && isset($_POST["tyoe"]) && isset($_POST["email"]) && isset($_POST["gender"])){
        $name = $_POST['name'];
        $mobile = $_POST['mobile'];
        $id = $_POST['id'];
        $year = $_POST['year'];
        $type = $_POST['type'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $out = $name.$mobile.$id.$year.$type.$email.$gender;
        echo "<script>alert($out)</script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReviewKaro</title>
    <link rel="shortcut icon" href="images/favicon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="second.css?<?php echo time()?>">
</head>
<body>
    <div class="container">
        <div class="content">
            <form class="pages" id="second" action="third.php" method="post">
                
                <header>
                    <h3>Program Details</h3>
                    <hr>
                </header>
                <div class="body">
                    <input type="hidden" name="name" value="<?php echo $_POST['name']; ?>">
                    <input type="hidden" name="mobile" value="<?php echo $_POST['mobile']; ?>">
                    <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>">
                    <input type="hidden" name="year" value="<?php echo $_POST['year']; ?>">
                    <input type="hidden" name="type" value="<?php echo $_POST['type']; ?>">
                    <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
                    <input type="hidden" name="gender" value="<?php echo $_POST['gender']; ?>">
                    <select name="pgm" id="pgm" onchange="addCourse()" required>
                        <option selected disabled>--Select Programme--</option>
                        <option value="UG">Undergraduate</option>
                        <option value="PG">Postgraduate</option>
                    </select>
                    <select name="course" id="course" onchange = "addBranch()" required>
                        <option selected disabled>--Select Course--</option>
                    </select>
                    <select name="branch" id="branch" required>
                        <option value="">--Select Branch--</option>
                    </select>
                    <select name="reg" id="reg" required>
                        <option selected disabled>--Select Regulation--</option>
                        <option value="R19">R-19</option>
                        <option value="R22">R-22</option>
                    </select>
                </div>
                <footer>
                    <!-- <button name="button" value="first">Previous</button> -->
                    <input name="button" type="submit" value="Submit">
                </footer>
            </div>
        </div>
    </div>
</body>
<script>
    var details = {
        "UG":{
            "B.Tech":['CSE','EEE','IT'],
            "BBA":['Economics','Accounting','Finance'],
            "BCA":['Cloud Computing','Web Designing','Artificial Intelligence'],
        },
        "PG":{
            "M.Tech":['Data Science','Automation','Cyber Security'],
            "MBA": ['Human Resource','Marketing','Finance'],
            "MCA":['Artificial Intelligence','Hadoop','Dot Net']
        }
    }
    function addCourse(){
        var pgm = document.getElementById('pgm');
        var course = document.getElementById('course');
        var pgmSel = pgm.value;
        course.innerHTML = '';
        var option = document.createElement('option');
        option.value = "";
        option.selected = true;
        option.disabled = true;
        option.text = "--Select Course--";
        course.appendChild(option);
        if(pgmSel == "")
            return ;
        for(var i in details[pgmSel]){
            var option = document.createElement('option');
            option.value = i;
            option.text = i;
            course.appendChild(option);
        }
    }
    function addBranch(){
        var pgmSel = document.getElementById('pgm').value;
        var course = document.getElementById('course');
        var courseSel = course.value;
        var branch = document.getElementById('branch');
        branch.innerHTML = '';
        var option = document.createElement('option');
        option.selected = true;
        option.disabled = true;
        option.value = "";
        option.text = "--Select Branch--";
        branch.appendChild(option);
        if(courseSel == "")
            return ;
        if (pgmSel === 'UG') {
            branches = details['UG'][courseSel];
            for (var i in branches) {
                var option = document.createElement('option');
                option.value = branches[i];
                option.text = branches[i];
                branch.appendChild(option);
            }
        }
        if (pgmSel === 'PG') {
            branches = details['PG'][courseSel];
            for (var i in branches) {
                var option = document.createElement('option');
                option.value = branches[i];
                option.text = branches[i];
                branch.appendChild(option);
            }
        }
    }
</script>
</html>