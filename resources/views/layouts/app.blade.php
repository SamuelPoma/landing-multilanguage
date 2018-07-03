<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('metatitle')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="my-container mt-3">

      <div class="flag_img_cnt">
        <a href="#">
          <img class="img-fluid" src="https://www.gettysburgflag.com/media/catalog/product/cache/2/thumbnail/520x416/602f0fa2c1f0d1ba5e241f914e856ff9/i/t/italy.jpg" alt="">
        </a>
      </div>
      <div class="flag_img_cnt">
        <a href="#">
          <img class="img-fluid" src="https://images-na.ssl-images-amazon.com/images/I/419RsYi16FL._SX355_.jpg" alt="">
        </a>
      </div>
    </div>
  @yield('body-content')
  </body>
</html>
