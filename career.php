<?php
include 'config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $apply = $_POST['apply'];
    $qual = $_POST['qual'];
    $year = $_POST['year'];

    $sql = "INSERT INTO `candidates`(`name`, `apply`, `qual`, `year`) VALUES ('$name','$apply','$qual','$year')";
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
    <title>Career</title>
    <style>
        .container {
            margin: 0px;
        }

        .navbar {
            overflow: hidden;
            background-color: #333;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 9;
        }

        .container1 {
            margin-top: 5em;
        }

        .jobs {
            border: 2px solid black;
            box-shadow: 5px 8px 16px black;
            padding: 15px;
            margin: 15px;
        }

        .carier {
            background: url(carier.jpg) no-repeat center center/cover;
            position: relative;
            height: 26em;
            width: 100vw;
        }

        .inv {
            opacity: 0;
        }

        .carier h1 {
            font-size: 60px;
            color: white;
        }

        .carier p {

            font-size: 25px;
            color: yellow;
        }
    </style>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php" style="font-weight: bolder;">Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="col lapse navbar-collapse" id="navbarNav">
                </div>
            </div>
        </nav>
    </div>
    <div class="carier">
        <div class="inv">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores ab quis autem, ut nostrum repellat culpa quas fugit labore soluta quidem perferendis, suscipit commodi minima consequatur? Molestias consectetur odit eaque reiciendis repellat odio iusto fuga id quo in error hic, est facilis suscipit atque unde corporis iure autem quae nihil sapiente dolores et assumenda? Beatae nostrum quaerat nihil, modi officiis voluptatem tenetur animi nisi corrupti? Dolores obcaecati sequi aspernatur recusandae.
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores odit distinctio nemo tempore. Vitae explicabo eaque iure? Eveniet odio nulla assumenda aut debitis, accusamus quibusdam modi ut tenetur illum culpa consequuntur quis velit sit iure, quisquam voluptates voluptas quod, minus error. Numquam, iusto. Eum nam placeat et fugit doloremque labore.
        </div>
        <h1><span style="opacity: 0;">Lorem</span><span style="color: #00ff66;">J</span>ob <span style="color: #00ff66;">P</span>ortaL</h1>
        <p><span style="opacity: 0;">Lorem lorem</span>Best jobs Matching to your Skills.</p>
    </div>

    <div class="row">
        <?php
        $sql = "SELECT `cname`, `position`, `jdes`, `ctc`, `skills` FROM `jobs`";
        $result = mysqli_query($conn, $sql);
        if ($result->num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {


                echo '
                <div class="col-md-4">
                <div class="jobs">
                <h3 style="text-align: center;color: red;">' . $rows['position'] . '</h3>
                <h4 style="text-align: center;center;color: #0089ff;">' . $rows['cname'] . '</h4>
                <p style="color: black; text-align:justify;">' . $rows['jdes'] . '</p>
                <p style="color: black ;"><b>Skills Required:</b>' . $rows['skills'] . '</p>
                <p style="color: black ;"><b>CTC:</b>' . $rows['ctc'] . '</p>
                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-expanded="false" aria-controls="collapseExample">
                Apply Now
            </button>
                </div>
                </div>';
            }
        }
        ?>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Apply for Jobs</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Name</label>
                                <input type="text" class="form-control" id="" name="name">
                            </div>
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Applying For</label>
                                <input type="text" class="form-control" id="" name="apply">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Qualification</label>
                                <input type="text" class="form-control" id="" name="qual">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Year Pass Out</label>
                                <input type="text" class="form-control" id="" name="year">
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="app">Apply</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>