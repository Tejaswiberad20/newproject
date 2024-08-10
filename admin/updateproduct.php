<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="./css/style.css">

<style>
  body{
    background:url('./img/newbg.jpg');
    background-size:cover;
  }
.nav-link{
    margin-left: 50px;
}
.addproduct1{
  display:block;
  margin:50px auto;
  height: 500px;
  width: 400px;
  box-shadow:0 0 5px 0px #ff1a75; 
  padding:10px 20px;
  border-radius:10px;
  text-align:center;
  background-color:#ffe6f0;
}
.input{
  width: 300px;

}
.btn{
  display:block;
  margin:50px auto;
  box-shadow:0 0 5px 0px #ff1a75; 
  padding:10px 20px;
  border-radius:10px;
  text-align:center;
  background-color:#ff3385;
  color:#fff;
  


}

</style>
</head>

<body>
<div class="background fs-4 shadow">
    <nav class="navbar navbar-expand-lg nav">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="./img/logo (1).avif" class="logo-img">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link nav-content" aria-current="page" href="admin_product.php">Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="user.php">User</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="order.php">Order</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="report.php">Reports</a>
            </li>
          </ul>
          <div class="btn-group dropstart bg-light">
          </div>
        </div>
      </div>
    </nav>
</div>
<h1 style="text-align:center;color:#ff3385;margin-top:20px;">Update Product</h1>
  <form class="addproduct1">
    <h2 class="text">Product Name:</h2>
    <input type="text"name="pname"class="input"value="">
    <h2  class="text">Price</h2>
    <input type="text"name="price"class="input"value="">
    <h2  class="text">Category:</h2>
    <input type="text"name="category"class="input"value="">
    <h2  class="text">Quantity:</h2>
    <input type="number"name="qty"class="input"value="">
    <h2  class="text">Discription</h2>
    <input type="text"name="dis"class="input"value="">
    <button class="btn">Update Product</button>
</form>
 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
  <script src="./js/index.js"></script>
</body>

</html>