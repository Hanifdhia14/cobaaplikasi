<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/logo_asdp.png">
    <script type="text/javascript" src="../jQuery.js"></script>
    <script type="text/javascript" src="script.js">

    </script>
      <title>login</title>
  </head>
<style media="screen">
  body{
    background-color: blue;
    margin-top:50pt;
    padding-top:10px;
    padding-right:10px;
    padding-bottom:10px;
    padding-left:10px;
}
  div.container{
  margin: auto;
  color: blue;
}
  form{
  margin-left:100pt;
  margin-right:100pt;
}
  h4{
    font-size:20px;
    margin: 10pt;
}
  h2{
    font-style: ;
    font-size: 20px;
    margin: 10pt;
}
  img{
    padding-bottom:10pt;
    margin: 20pt;
}
  input{
  margin: 10pt;

}
  p{
    margin: 150pt;
  }
  button{
    padding-left: 30pt;
    margin-left: 20pt;
    margin-right: 150pt;
    margin-bottom: 30pt;

}
label{
  margin-left: 10 pt;


}


</style>

<body class="form">
  <div class="container" >
    <div class="row justify-content-center">
      <div class="from-content">

        <div class="card text-center shadow-lg p-3 mb-5 bg-white rounded" >
          <img src="logo_asdp.PNG" class="rounded mx-auto d-block" width="600" height="200">
          <h4 class="text-center"> Aplikasi Manajemen Kinerja Individu Organisasi </h4>
            <h2 class="text-center font-italic"> Log In to <strong>AKIO</strong></h2>

        <form method="POST" action="" class="need-validation" novalidate="">
          @crsf
          <div class="input-group flex-nowrap">
            <div class="input-group-prepend "></div>
              <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
          </div>
        </form >
        <form>
          <div class="input-group flex-nowrap">
            <div class="input-group-prepend"></div>
              <input type="password" class="form-control" value="fakePSW" id="myinput" placeholder="Password" aria-label="Password" aria-describedby="addon-wrapping">
          </div>
        </form>
            <div class="form-group form-check">
              <div style="margin-right: 240px;margin-top: 20px;">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" onclick="myFunction()">
                <label class="form-check-label" for="exampleCheck1">lihat Password</label>
              </div>

            </div>
          <div class="input-group flex-nowrap">
            <div class="field-wrapper">
                <div style=" margin-left:350px;">
                  <button type="button`button" class="btn btn-primary" value="">Log In</button>
                </div>
            </div>

          </div>
          <div class="center">
            <small>© 2020 ALL Rights Reserved</small> <br>
            <small>AKIO is a product of Earth Life.Id</small>
          </div>

        </div>
      </div>
      </div>
    </div>
  </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <script>
    function myFunction() {
      var x = document.getElementById("myinput");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
    </script>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>
</html>
