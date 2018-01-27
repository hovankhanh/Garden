<!DOCTYPE html>
<html>
<head>
    <title></title>

    <link rel="stylesheet" type="text/css" href="../css/styleHeader.css"/>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
    <link href='//bizweb.dktcdn.net/100/178/647/themes/233989/assets/main.scss.css?1511881369182' rel='stylesheet' type='text/css' />
  

    <style>
      #container{
        width: 100%;
      }
      .line{
        background-color: #f26522;
        height: 10px;
        width: 100%
      }

      .link{
        background-color: #7da500;
        height: 100px;
        width: 100%;
      }
      .selectpicker{
        height: 40px;
        width: 90%;
        margin: auto;
        margin-top: -20px;
      }

      .textbox{
         background-color: #f26522;
         text-align: center;
         width: 100%;
         height: 150px;
      }
      .textbox h4{
        color: white;
      }

      .demo{
        background-image: url('../image/gioi-thieu.jpg');
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-position: 50% 100%;
        width: 100%;
        height: 300px;
      }
      .under{
        height: 450px;
        width: 100%;
        background-color: #333;
        color: white;
      }
      .row{
     
        margin: auto;
       /* margin-left: 5%;*/
      }

      .t-t{
        margin-left: 5%;
      }

      .map{
        float: right;
      }

      .title{
        margin-left: 5%;
        color: white;
      }
    </style>

</head>
<body> 
    <div id="container"> 
      <?php 
        include('heade_footer.php');
       ?> 
          <div class="demo">
          <br><br><br>
            <div class="title">
            <h1>Hệ thống cửa hàng</h1>
            <h3>Hệ thống cửa hàng của Garden</h3></div>
          </div>
          <div class="line"> 
          </div>
          <div class="link">  
          </div>
          <br>
          <div class="row">
            <div class="col-sm-12 col-md-3">
              <div class="textbox">
                <br><br>
                <h4>CHỌN TỈNH THÀNH</h4>
                <select class="selectpicker">
                  <option>Hồ Chí Minh</option>
                  <option>Huế</option>
                  <option>Đà Nẵng</option>
                  <option>Hải Phòng</option>
                </select>
              </div>
              <div class="under">
                <br>
                <div class="t-t">
                  <h4>CHI NHÁNH BÌNH THẠNH</h4>
                  <p> 158 Đường D2, Hồ Chí Minh, Bình Thạnh, TP. HCM</p>
                  <p> 01225 510 042</p>
                </div>
                <hr>
              </div>
            </div>
            <div class="col-sm-12 col-md-9">
              <div class="map">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.082231647897!2d108.22352671410233!3d16.061222043920296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219d2f38ce45d%3A0xbfa47dd116d4db88!2zQ-G6p3UgUuG7k25nLCBI4bqjaSBDaMOidSwgxJDDoCBO4bq1bmcsIFZpZXRuYW0!5e0!3m2!1sen!2s!4v1513138486456" width="1030" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
            </div>
          </div>
          <?php 
            include('footer.php');
          ?>
        </div>
</body>
</html>





    