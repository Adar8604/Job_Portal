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

        .aboutus p {
            margin: 40px;
            padding: 40px;
            font-size: 20px;
            margin-top: 40px;
            margin-left: 280px;
        }

        .co {
            margin-top: -10px;
            margin-left: 20px;
        }
        .d-flex {
            display: flex!important;
            position: relative;
            margin-top: 5em;
            margin-left: 6em;
        }
    </style>
    <title>About</title>
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
            <a href="contact.php">Contact Us</a>
            <a class="active" href="about.php">About Us</a>
        </div>
    </div>
    <div class="co">
        <h6>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores nam placeat non ipsum, harum laudantium?</h6>
    </div>
   
    
    <div class="container my-4 me-100">
        <div class="row featurette  d-flex justify-content-centre align-items-centre ms-10">
            <div class="col-md-7">
                <h2 class="featurette-heading"><b> OUR OFFICE. </b><span class="text-muted">The Way we work together.</span>
                </h2>
                <p class="lead">A company of 100 and more Employees working hard together to provide you a better and simplified solutions of your problems . !.</p>
            </div>
            <div class="col-md-5">
                <img class="img-fluid" src="about1.jfif" alt="">

            </div>
        </div>
        <div class="row featurette  d-flex justify-content-centre align-items-centre my-4">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your
                        mind.</span></h2>
                <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic unde laborum odio modi
                    ullam praesentium, saepe rerum tempora laboriosam et sapiente ea velit temporibus incidunt eveniet
                    repellat nemo est rem, optio doloremque possimus. Necessitatibus vel odio quasi illo recusandae
                    veniam!.</p>
            </div>
            <div class="col-md-5">
                <img class="img-fluid" src="about2.jfif" alt="">

            </div>
        </div>
        <div class="row featurette  d-flex justify-content-centre align-items-centre">
            <div class="col-md-7">
                <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your
                        mind.</span></h2>
                <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic unde laborum odio modi
                    ullam praesentium, saepe rerum tempora laboriosam et sapiente ea velit temporibus incidunt eveniet
                    repellat nemo est rem, optio doloremque possimus. Necessitatibus vel odio quasi illo recusandae
                    veniam!.</p>
            </div>
            <div class="col-md-5">
                <img class="img-fluid" src="about3.jfif" alt="">
            </div>
        </div>
    </div>
</body>

</html>