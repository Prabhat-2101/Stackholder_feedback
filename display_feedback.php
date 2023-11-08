<?php
    require('connection.php');
    $id = $_POST['id'];
    $type = $_POST['type'];
    $query1 = "select Name,Mobile,Id,Type,Email,Gender from feedback where Id='$id' and Type='$type';";
    $query2 = "select Program,Course,Branch,Regulation,R1,R2,R3,R4,R5,R6,R7,Feedback from feedback where Id='$id' and Type='$type';";

    $result1 = mysqli_query($conn,$query1);
    $result2 = mysqli_query($conn,$query2);
    if (mysqli_num_rows($result1) > 0) {
    } else {
        echo "<script>alert('No records found')
        location.href = 'see_feedback.php'</script>";
        
        die();
    }
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="shortcut icon" href="images/favicon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
        body{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'poppins';
        }
        .container{
            height: 100vh;
            width: 100vw;
            display: flex;
            flex-direction: column;
            background-image: url(Images/bg2.jpeg);
            background-size: cover;
            align-items: center;
        }
        h2{
            text-align: center;
            font-variant: small-caps;
            font-size: 1.6rem;
            color: blue;
        }
        #short{
            display: none;
        }
        #details{
            margin-bottom: 100px;
            margin-top: 20px;
            border: 1px;
            width: 100%;
            table-layout: fixed;
            white-space: normal;
        }
        #details, th,td{
            padding: 5px;
            word-wrap: break-word;
        }
        #review {
            width: 100%;
            table-layout: fixed;
            white-space: normal;
        }
        #review,th,td {
            text-align: center;
            word-wrap: break-word;
        }
        #review tr:nth-child(even) {
            background-color: #EBE0DE;
        }
        #review tr:nth-child(odd) {
            background-color: #E2D9F8;
        }
        .fas {
            cursor: pointer;
        }
        footer{
            width: 100%;
            display: flex;
            justify-content: center;
            background-image: url(Images/bg2.jpeg);
            background-size: cover;
        }
        #desc{
            display: none;
            width: 80%;
            border: 1px solid black;
            border-collapse: collapse;
            margin-top: 20px;
        }
        #desc tr td{
            text-align:  left;
        }
        @media screen and (min-width:768px) and (max-width:1024px) {
            #long{
                display: none;
            }
            body{
                overflow: visible;
            }
            #short{
                display: block;
                letter-spacing: 1px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <h2 id="long">Vignan Foundation For Science, Technology and Research</h2>
            <h2 id="short">Vignan University</h2>
            <hr>
            <?php
                $details = mysqli_fetch_array($result1, MYSQLI_NUM);
            ?>
            <table border="1" id="details">
                <tr>
                <th>Name</th>
                <th>Mobile</th>
                <th>Registration Id</th>
                <th>Type</th>
                <th>Email</th>
                <th>Gender</th>
            </tr>
            <tr>
                <td><?php echo $details[0] ?></td>
                <td><?php echo $details[1] ?></td>
                <td><?php echo $details[2] ?></td>
                <td><?php echo $details[3] ?></td>
                <td><?php echo $details[4] ?></td>
                <td><?php echo $details[5] ?></td>
            </tr>
        </table>
        
        <table id="review">
            <tr>
                    <th>Program</th>
                    <th>Course</th>
                    <th>Branch</th>
                    <th>Regulation</th>
                    <th>R1 <i class="fas fa-question"></i></th>
                    <th>R2 <i class="fas fa-question"></th>
                    <th>R3 <i class="fas fa-question"></th>
                    <th>R4 <i class="fas fa-question"></th>
                    <th>R5 <i class="fas fa-question"></th>
                    <th>R6 <i class="fas fa-question"></th>
                    <th>R7 <i class="fas fa-question"></th>
                    <th>Feedback</th>
                </tr>
            <?php
                while ($row = mysqli_fetch_assoc($result2)) {
                    echo '<tr>';
                    echo '<td>' . $row['Program'] . '</td>';
                    echo '<td>' . $row['Course'] . '</td>';
                    echo '<td>' . $row['Branch'] . '</td>';
                    echo '<td>' . $row['Regulation'] . '</td>';
                    echo '<td>' . $row['R1'] . '</td>';
                    echo '<td>' . $row['R2'] . '</td>';
                    echo '<td>' . $row['R3'] . '</td>';
                    echo '<td>' . $row['R4'] . '</td>';
                    echo '<td>' . $row['R5'] . '</td>';
                    echo '<td>' . $row['R6'] . '</td>';
                    echo '<td>' . $row['R7'] . '</td>';
                    echo '<td>' . $row['Feedback'] . '</td>';
                    echo '</tr>';
                }
            ?>
            </table>

        </div>
        <footer>
            <table id="desc">
                <tr>
                    <th>Id</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td>R1.</td>
                    <td>Course Content to Curriculum are in tune with PO</td>
                </tr>
                <tr>
                    <td>R2.</td>
                    <td>Course Content are designed to enable Problem Solving Skills</td>
                </tr>
                <tr>
                    <td>R3.</td>
                    <td>Course placed in the curriculum serves the need of all learners</td>
                </tr>
                <tr>
                    <td>R4.</td>
                    <td>Contact hour distribution among the various course components is satisfiable</td>
                </tr>
                <tr>
                    <td>R5.</td>
                    <td>Composition of basic sciences,engineering,humanities and management courses is a right mix and satisfiable</td>
                </tr>
                <tr>
                    <td>R6.</td>
                    <td>Lab sessions are sufficient to improve the technical skills of studnets</td>
                </tr>
                <tr>
                    <td>R7.</td>
                    <td>Inclusion of projects improved the technical competency and leadership skill among the students</td>
                </tr>
            </table>
        </footer>
    </div>
</body>
<script>
    const icons = document.querySelectorAll('.fas');
    const desc = document.getElementById('desc');
    icons.forEach(icon => {
        icon.addEventListener('click', () => {
            if (desc.style.display === 'none' || desc.style.display === '') {
                desc.style.display = 'block';
            } else {
                desc.style.display = 'none';
            }
        });
    });
</script>
</html>