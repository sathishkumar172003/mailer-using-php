<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP Email Sender </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="./styles/main.css" rel="stylesheet" /> 

</head>
<body>

 


<div class="container mt-5 bg-dark">
    <form action="./send-mail.php" method="POST">
    <div class="form-group">
    <label for="exampleInputEmail1" class="mb-2">Email address</label>
    <input type="email" class="form-control mb-4" id="exampleInputEmail1" name="user_email"  placeholder="Enter email" required>
    <!-- <small id="emailHelp" class="form-text text-muted ">We'll never share your email with anyone else.</small> -->
    </div>


   <button type="submit" class="btn btn-primary">Subscribe</button> 
   </form>


</div>

</body>
</html>


