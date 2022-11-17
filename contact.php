<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            margin-top: 60px;
            margin-left: 195px;
            padding: 1px 16px;
            height: 1000px;
            position: absolute;
            width: 85%;
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

        .co {
            margin-top: -10px;
            margin-left: 20px;
        }

        .cont {
            margin: 45px;
        }

        .cont .location {
            width: 50%;
            margin: auto;
            border: 5px solid rgb(194, 138, 128);
        }

        .cont .location iframe {
            width: 100%;
        }

        .add {
            text-align: center;
            font-size: 20px;
            font-weight: bolder;
        }

        .serve {
            margin-top: 36px;
        }
    </style>
    <title>Contact</title>
</head>

<body>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="position: fixed;">
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
            <a class="active" href="contact.php">Contact Us</a>
            <a href="about.php">About</a>
        </div>
    </div>
    <div class="co">
        <h6>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores nam placeat non ipsum, harum laudantium?
        </h6>
    </div>
    <div class="cont">
        <div class="location">
            <iframe src="
                https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3571.162828014831!2d80.34463001487349!3d26.482701683314758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399c38bcb8be106b%3A0x810c4a22ec6601e5!2sGreen%20Park%20International%20Stadium!5e0!3m2!1sen!2sin!4v1631768977573!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>">
        </div>
        <div class="add">
            <p>Near GreenPark Stadium ,</p>
            <p>Kanpur - 208001</p>
            <p>U.P.</p>
        </div>
    </div>
</body>

</html>