<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Contact Us</title>
  </head>
  <body>
      <div class="container">
          <h1 class="text-white bg-primary">Contact Us Form</h1>
        <form action="sendmail.php" method="POST">
            <div class="mb-3">
                <label for="Email">Email Address</label>
                <input class="form-control" type="email" name="email" required/>
            </div>
            <div class="mb-3">
                <label for="subject">Subject</label>
                <input class="form-control" type="text" name="subject" required/>
            </div>
            <div class="mb-3">
                <label for="message">Message</label>
                <textarea class="form-control"  required name="message"></textarea>
            </div>
            <input type="submit" class="btn btn-primary"/>
        </form>
      </div>
   

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>