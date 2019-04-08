<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Jurnal</title>

  <!-- boostrap import -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color : #EF4228; border-radius : 0px;">
  <!-- <a class="navbar-brand" href="#">Navbar</a> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

    <form class="form-inline ">
      <div class="input-group flex-nowrap" style="display: inherit; background-color : #B00B1B; border-radius : 20px;">
        <div class="input-group-prepend">
          <span class="input-group-text" id="addon-wrapping"
          style="border: none; border-top-left-radius: 20px; border-bottom-left-radius: 20px; background-color : #B00B1B;"> <img src="<?= base_url('assets/img/search.png')?>" width="18px" > </span>
        </div>
        <input type="text" class="form-control" placeholder="Search" aria-label="Username" aria-describedby="addon-wrapping"
        style="border: none; border-radius : 20px; background-color : #B00B1B;">
      </div>
      <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search"
      style="border: none;border-radius : 20px; background-color : #B00B1B;
      background : url(../assets/img/search.png) no-repeat scroll 7px 7px;
      padding-left : 30px"> -->

      <!-- <button class="btn btn-outline-success my-2 my-sm-0 Rounded corners" type="submit">Search</button> -->
      <!-- <img src=".../assets/img/penzu_white.png" alt=""> -->
      <div class="text-center" style="margin-left : 340px; ">
        <img style="width : 100px;" src="<?= base_url('assets/img/penzu_white.png')?>" width="10px">
      </div>
      <div class="float-right" style="margin-left : 340px;">
        <a href="#" name="btnGoPro" style="background-color : #ffffff; padding : 6px 8px; text-decoration: none;  font-weight : bold; border-radius : 6px; font-style : bold; color : #E74C3C;">Go PRO</a>
      </div>

      <style>
      .vl {
        border-left: 6px solid black;
        height: 500px;
      }
      </style>

      <div class="dropdown">
        <button class="btn  dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border : none; color : #FFFFFF;">
          User
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
          <button class="dropdown-item" type="button">Action</button>
          <button class="dropdown-item" type="button">Another action</button>
          <button class="dropdown-item" type="button">Something else here</button>
        </div>
      </div>
    </form>
  </div>
</nav>
<div class="" style="background-color : #2F3940; position: relative; bottom: 24px; padding : 12px;">
    <a href="#" class="float-right" name="btnGoPro" style="background-color : #258CD1; padding : 6px 8px;
    text-decoration: none;  font-weight : bold; border-radius : 6px; font-style : bold; color : #ffffff; margin-right : 180px;"> <img src="<?= base_url('assets/img/book.png');?>" width="20px"> New Journal</a>

    <a href="#" class="float-right" name="btnGoPro" style="background-color : #273036; padding : 6px 8px;
    text-decoration: none;  font-weight : bold; border-radius : 6px; font-style : bold; color : #ffffff; margin-right : 8px;">Tags</a>

    <a href="#" class="float-right" name="btnGoPro" style="background-color : #273036; padding : 6px 8px;
    text-decoration: none;  font-weight : bold; border-radius : 6px; font-style : bold; color : #ffffff; margin-right : 8px;">  Change Themes</a>

    <h6 style="margin-left : 200px; font-size: 16px; color : #FFFFFF;" >Displaying 1 Journal</h6>

</div>


</body>
</html>