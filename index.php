<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Presidential-Voting-System-Login</title>
        <!-- Boostrap CDN Link -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- Custom CSS Link -->
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <h1 class="text-center">Presidential Voting System</h1>
        <div class="">
            <h2 class="text-center">Login</h2>
            <div class="container text-center">
                <form action="./database/login.php" method="post">
                    <div class="mb-3">
                        <input type="text" class="form-control w-50 m-auto" name="username" placeholder="Enter Your Voters Name" required="required">
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control w-50 m-auto" name="email" placeholder="Enter Your Email" required="required">
                    </div>
                    <div class="mb-3">
                        <input type="Password" class="form-control w-50 m-auto" name="password" placeholder="Enter Your Password" required="required">
                    </div>
                    <div class="mb-3 ">
                        <label for="">Are You a Voter Or A Presidential Candidate?</label>
                        <select class="form-select w-50 m-auto" name="std" id="">
                            <option selected></option>
                            <option class="" value="p-candidate">presidential candidate</option>
                            <option class="" value="voter">Voter</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success my-3">Login</button>
                    <p>Don't Have An Account? <a class="" href="./partials/registration.php">Register Here</a></p>
                </form>
            </div>
        </div>
    </body>
</html>