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
    .header{
      width: 100%;
    }

    .btn{
      background-color: #f26522;
      color: #fff;
    }

    .demo{
      background-image: url('../image/lienhe.jpg');
      background-attachment: fixed;
      background-repeat: no-repeat;
      background-position: 50% 100%;
      width: 100%;
      height: 300px;
    }

    .title{
      margin-left: 5%;
      color: white;
    }

    #content{
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
  </style>

</head>
<body> 
    <div id="container">       
        <?php 
        include('heade_footer.php');
       ?> 
     <?php
        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "nongsan";
        $conn = mysqli_connect($host, $user, $password, $database);

        $namect = "";
        $emailct = "";
        $phonect = "";
        $contentct = "";
            error_reporting(E_ALL ^ E_DEPRECATED);

            if (isset($_POST['sendcontact'])) 
              {
                $namect = $_POST['contact-name'];
                $emailct = $_POST['contact-email'];
                $phonect = $_POST['contact-phone'];
                $contentct = $_POST['contact-content'];

                $sql = "INSERT INTO contacts(named,phone, email, Question) VALUES ('$namect', '$phonect','$emailct', '$contentct')";
                $result = mysqli_query($conn,$sql);
                if ($result) 
                {

                   echo "<script type=\"text/javascript\">alert(\"Gửi liên hệ thành công!\");</script>";
                } 
                else 
                {
                   echo "<script type=\"text/javascript\">alert(\"Gửi liên hệ thất bại!\");</script>";
                }
            }
        ?>
        <div class="demo">
        <br><br><br>
          <div class="title">
            <h1>Liên hệ</h1>
            <h3>Chúng tôi luôn sẵn sàng hỗ trợ</h3>
          </div>
        </div>

        <div id="content">
      <div class="line"> 
      </div>
      <div class="link">  
      </div>
      <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.187178486685!2d108.1710340144178!3d16.055773788889258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421910b766fed5%3A0xa005d3d866bc7979!2zQuG6v24gWGUgVHJ1bmcgVMOibSBUcCDEkMOgIE7hurVuZw!5e0!3m2!1svi!2s!4v1512751836478" width="1500" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

      <br><br><br>
      <div class="row">
        <div class="col-sm-12 col-md-6">
            <div class="col-md-12">
             <h4>Thông tin Liên hệ</h4>
              <p>"... Nơi tuyệt vời nhất để có được những giây phút vui và ý nghĩa bên người thân, nơi hoàn hảo nhất để ăn uống kết hợp học tập, làm việc và giải trí ..."</p> <br> <br>
            </div>
              <div class="col-md-12">
                <p>Địa chỉ: <i>175 Lý Thường Kiệt, Phường 6, Quận Tân Bình, TP. Hồ Chí Minh.</i></p>
                <p>Điện thoại: <i>0123 456 789 / 0123 456 789</i></p>
                <p>Fax: <i>0123 456 789</i></p>
                <p>Email: <i>admin@garden.com.vn</i></p>
              </div>
              <div class="col-md-12">
                <p>-----------------------------------------------------------------------------------------------------------<p>
              </div>
            
              <div class="col-md-12">
                <h4>Thời gian làm việc</h4>
                <p>Chúng tôi luôn sẵn sàng hỗ trợ</p>
                <br> <br>
                <p>Thứ 2 - Thứ 6: <i> giờ sáng - 4 giờ chiều</i></p>
                <p>Thứ 7: <i>10 giờ sáng - 4 giờ chiều</i></p>
                <p>Chủ nhật: <i>11 giờ sáng - 3 giờ chiều</i></p>
              </div>
            </div>


          <div class="col-sm-12 col-md-6">
            <div class="col-md-12">
              <form role="form" method="POST" action="">
                <div class="form-group">
                  <h2>Liên hệ với chúng tôi</h2>
                  Chúng tôi trân trọng ý kiến của quý khách. Quý khách vui lòng gửi thắc mắc hoặc ý kiến đóng góp qua biểu mẫu. <br> <br>
                  <input type="text" name="contact-name" placeholder="Họ và tên" value="">
                </div>
                <div class="form-group"> 
                  <input type="email" name="contact-email"  placeholder="Địa chỉ email" value="">
                </div>
                <div class="form-group"> 
                  <input type="text" name="contact-phone"  placeholder="Số điện thoại" value="">
                </div>
                <div class="form-group"> 
                 <textarea placeholder="Nội dung liên hệ" name="contact-content" rows="8" value=""></textarea>
                </div>
                <button name="sendcontact" type="submit" class="btn btn-default">Gửi liên hệ</button>
              </form>
            </div>
          </div>
      </div>
      <br><br><br>
      <?php 
        include('footer.php');
      ?>
    </div>
</body>
</html>





    