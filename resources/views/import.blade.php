<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
   <div class="container mt-5">
       <div class="d-flex align-items-center">
            <div class="flex-grow-1">
            <a href="/">Go Back</a>
            </div>
        </div>
    
           
        <form action="/import-data" class="mt-5" method="post" enctype="multipart/form-data">
            @csrf
        <div class="form-group mb-3">
            <label for="">File</label>
            <input type="file" name="file" class="form-control" id="">
        </div>

        <button type="submit" class="btn btn-primary">Submit Data</button>
        </form>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>