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
  <h2>Products</h2>
  <div class="col-sm-12">
					@if (session()->has('message'))
					<div class="alert alert-success">
						{{session('message')}}
					</div>
					@endif
				</div>
  <a class="btn btn-primary mb-3" style="float: right" href="{{route('shop.create')}}">Add Product</a>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>PrductId</th>
        <th>ProductName</th>
        <th>StockNo</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    	@foreach($products as $prod)
      <tr>
        <td>{{$prod->id}}</td>
        <td>{{$prod->productname}}</td>
        <td>{{$prod->stockno}}</td>
        <td>

        	<form  method="post" action="{{route('shop.destroy',$prod->id)}}">
        		@csrf
        		@method('DELETE')
        	<input type="submit" class="btn btn-danger btn-sm" value="DELETE">
        	      </form>

        	  <a href="{{route('shop.edit',$prod->id)}}" class="btn btn-primary mt-2">Edit</a></td>

      </tr>
     @endforeach
    </tbody>
  </table>
{{$products->links()}}
</div>

</body>
</html>
