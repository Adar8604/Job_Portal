<?php
include 'config.php';
if (isset($_POST['job'])) {

    $cname = $_POST['cname'];
    $position = $_POST['position'];
    $jdes = $_POST['jdes'];
    $skills = $_POST['skills'];
    $ctc = $_POST['ctc'];

    $sql = "INSERT INTO `jobs`(`cname`, `position`, `jdes`, `skills`, `ctc`) VALUES ('$cname','$position','$jdes','$skills','$ctc')";

    mysqli_query($conn, $sql);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .sidebar {
            margin: 0;
            margin-top: 57px;
            padding: 0;
            width: 200px;
            background-color: #f1f1f1;
            position: fixed;
            height: 100%;
            overflow: auto;
        }

        /* Sidebar links */
        .sidebar a {
            display: block;
            color: black;
            padding: 16px;
            text-decoration: none;
        }

        /* Active/current link */
        .sidebar a.active {
            background-color: #9907b8;
            color: white;
        }

        /* Links on mouse-over */
        .sidebar a:hover:not(.active) {
            background-color: #d8ce0a;
            color: white;
        }

        /* Page content. The value of the margin-left property should match the value of the sidebar's width property */
        div.content {
            margin-top: 56px;
            margin-left: 195px;
            padding: 9px 16px;
            height: 200%;
            position: absolute;
            width: 88%;
            background: #000054;
        }

        /* On screens that are less than 700px wide, make the sidebar into a topbar */
        @media screen and (max-width: 700px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .sidebar a {
                float: left;
            }

            div.content {
                margin-left: 0;
            }
        }

        /* On screens that are less than 400px, display the bar vertically, instead of horizontally */
        @media screen and (max-width: 400px) {
            .sidebar a {
                text-align: center;
                float: none;
            }
        }

        .navbar {
            overflow: hidden;
            background-color: #333;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 9;
        }
    </style>
    <title>Dashboard</title>
</head>

<body>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="position: fixed;">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Admin Dashboard</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="col lapse navbar-collapse" id="navbarNav">
                </div>
            </div>
        </nav>
        <div class="sidebar">
            <a href="career.php">Jobs</a>
            <a href="jobs.php">Candidates Applied</a>
            <a href="contact.php">Contact Us</a>
            <a href="about.php">About</a>
        </div>

        <!-- Page content -->
        <div class="content">
            <p>
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    Post Job
                </button>
            </p>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="Company Name" class="form-label">Company Name</label>
                            <input type="text" class="form-control" id="" name="cname">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPosition" class="form-label">Position</label>
                            <input type="text" class="form-control" id="exampleInputPosition" name="position">
                        </div>
                        <div class="mb-3">
                            <label for="JobDesc" class="form-label">Job Description</label>
                            <textarea id="" cols="30" rows="10" class="form-control" name="jdes"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPosition" class="form-label">Skills Required</label>
                            <input type="text" class="form-control" id="exampleInputPosition" name="skills">
                        </div>
                        <div class="mb-3">
                            <label for="ctc" class="form-label">CTC</label>
                            <input type="text" class="form-control" id="CTC" name="ctc">
                        </div>

                        <button type="submit" class="btn btn-primary" name="job">Submit</button>
                    </form>
                </div>
            </div>
            <table class="table" style="color:white;">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Company Name</th>
                        <th scope="col">Position</th>
                        <th scope="col">CTC</th>
                    </tr>
                </thead>

                <?php
                $sql = "SELECT `cname`, `position`, `ctc` FROM `jobs`";
                $result = mysqli_query($conn, $sql);
                $i = 0;
                if ($result->num_rows > 0) {
                    while ($rows = $result->fetch_assoc()) {

                        echo "
                 <tbody>
                 <tr>
                        <td>" . ++$i . "</td>
                        <td>" . $rows['cname'] . "</td>
                        <td>" . $rows['position'] . "</td>                 
                        <td>" . $rows['ctc'] . "</td>
                        </tr>";
                    }
                } else {
                    echo "";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>