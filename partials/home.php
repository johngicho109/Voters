<?php
session_start();
if (!isset($_SESSION["id"])) {
    header("Location: ../");
}
$data = $_SESSION["data"];
if ($_SESSION["status"] == 1) {
    $status = "<b class='text-success'>Voted</b>";
} else {
    $status = "<b class='text-danger'>Not Voted</b>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting system dashboard</title>
    <!-- Bootstrap Core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Custom CSS Link -->
    <!-- <link rel="stylesheet" href="../css/styles.css"> -->
    <style>
        img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
        }

        li {
            list-style: none;
            margin-right: 10%;
        }
    </style>
</head>

<body>
    <!-- ----------------------Nav section------------------------- -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: grey;">
        <div class="container-fluid">
            <a class="navbar-brand" href="../partials/home.php">Voters</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../partials/home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#voting">Voting</a>
                    </li>
                </ul>
                <p>Welcome <?php echo $data["username"]; ?></p>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: black; ">
                        Account
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="logout.php"><button>Logout</button></a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="registration.php"><button>Register</button></a></li>
                    </ul>
                </li>
            </div>
        </div>
    </nav>
    <!-- -------------------End Nav Section------------------------ -->

    <!-- --------------------Voting Section-------------------------- -->
    <div id="voting" class="container my-5">
        <a></a>
        <h1>Voting System</h1>
        <div class="row my-5">
            <div class="col-7" >
                <?php
                if (isset($_SESSION["p-candidates"])) {
                    $candidates = $_SESSION["p-candidates"];
                    for ($i = 0; $i < count($candidates); $i++) {
                ?>
                        <div class="row" >
                            <div class="col-4">
                                <img src="../uploads/<?php echo $candidates[$i]['photo'] ?>" alt="image">
                            </div>
                            <div class="col-8">
                                <strong class="h5">Candidate:</strong>
                                <?php echo $candidates[$i]["username"] ?>
                                <br>
                                <strong class="h5">Votes:</strong>
                                <?php echo $candidates[$i]["votes"] ?>
                            </div>
                        </div>
                        <form action="../database/voting.php" method="post">
                            <input type="hidden" name="candidatevotes" value='<?php echo $candidates[$i]["votes"] ?>'>
                            <input type="hidden" name="candidateid" value='<?php echo $candidates[$i]["id"] ?>'>
                            <?php
                            if ($_SESSION["status"] == 1) {
                            ?>
                                <button class="btn btn-success my-3 px-3">Voted</button>
                            <?php
                            } else {
                            ?>
                                <button class="btn btn-danger my-3 px-3" type="submit">Vote</button>
                            <?php
                            }
                            ?>
                        </form>
                <?php
                    }
                }
                ?>

            </div>
            <div class="col-5">
                <img src="../uploads/<?php echo $data['photo']; ?>" alt="Image">
                <br>
                <strong class="h5">Name:<?php echo $data['username']; ?></strong>
                <br>
                <strong class="h5">Email:<?php echo $data['email']; ?></strong>
                <br>
                <strong class="h5">Status:<?php echo $status; ?></strong>
            </div>
        </div>
    </div>
    <!-- --------------------End Voting Section--------------------- -->

    <!-- ---------------------Statistics Section-------------------- -->
    <!-- ---------------------Statistics Section-------------------- -->

    <!-- Javascript CDN links -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- End Javascript CDN link -->
</body>
<!-- -------------------Footer section---------------------------- -->
<footer class="container-fluid" style="text-align: center;">
    <section id="copyright" style="background-color: crimson;">
        <h4>Voters studio</h4>
        <h5>&copy;2022</h5>
    </section>
</footer>

</html>