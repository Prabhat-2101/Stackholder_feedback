<?php
    require('connection.php');
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $id = $_POST['id']; 
    $year = $_POST['year'];
    $type = $_POST['type'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $pgm = $_POST['pgm']; 
    $course = $_POST['course'];
    $branch = $_POST['branch'];
    $reg = $_POST['reg']; 
    $val1 = $_POST['slider1'];
    $val2 = $_POST['slider2'];
    $val3 = $_POST['slider3'];
    $val4 = $_POST['slider4'];
    $val5 = $_POST['slider5'];
    $val6 = $_POST['slider6'];
    $val7 = $_POST['slider7'];
    $feed = $_POST['feedback'];

    $query = "INSERT into feedback(Name,Mobile,Id,Year,Type,Email,Gender,Program,Course,Branch,Regulation,R1,R2,R3,R4,R5,R6,R7,Feedback) values('$name','$mobile','$id','$year','$type','$email','$gender','$pgm','$course','$branch','$reg','$val1','$val2','$val3','$val4','$val5','$val6','$val7','$feed');";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Feedback Submitted')
        location.href = 'index.php'</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>