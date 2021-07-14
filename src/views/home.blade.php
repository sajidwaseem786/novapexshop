<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Product form</h2>
  <form action="{{route('shop.store')}}" method="post" >
  	@csrf
  	@method('POST')
    <div class="form-group">
      <label for="email">Product Name:</label>
      <input type="text" class="form-control" id="pname" placeholder="Enter product name" name="productname">
    </div>
    <div class="form-group">
      <label for="pwd">Stock No:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter stock" name="stockno">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
