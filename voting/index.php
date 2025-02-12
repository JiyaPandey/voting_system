<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Voting System</title>
    <!--Bootstrap css link-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    

</head>
<body class="bg-dark">
    <h1 class="text-info text-center p-3">Voting System</h1>
    <div class="bg-info py-4">
        <h2 class="text-center">REGISTERED ACCOUNT</h2>
        <div class="container text-center">
           <form action="./actions/login.php" method="POST"> 
            <div class="mb-3">
                <input type="text" name="username" class="form-control w-50 m-auto" placeholder="Enter your Username" required="required">

            </div>
            <div class="mb-3">
                <input type="text" name="mobile number" class="form-control w-50 m-auto" placeholder="Enter your Mobile number" required="required" >

            </div>
            <div class="mb-3">
                <input type="text" name="password" class="form-control w-50 m-auto" placeholder="Enter your Password" required="required" >

            </div>
            <div class="mb-3">
                <input type="file" name="Photo" class="form-control w-50 m-auto"  required="required" name="username">

            </div>
            <div class="mb-3">
               <select name="std" class="form-select w-50 m-auto">
                <option value="group">Group</option>
                <option value="voter">Voter</option>
               </select>
            </div>  
            <button type="submit" class="btn btn-dark my-4">Register</button>
            <p>Already have an account? <a href="./partials/registration.php" class="text-white">Register here</a></p>
           </form> 
        </div>
    </div>
    
</body>
</html>