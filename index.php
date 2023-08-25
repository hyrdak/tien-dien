<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .form-login{
            width: 500px;
            height: auto;
            background: #fff1f1;
            margin: 0 auto;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        h2{
            text-align: center;
            margin: 0 0 10px 0;
        }
        input[type="text"]{
            border-radius: 5px;
            margin-bottom: 7px;
            border: 1px solid #ddd;
            width: 372px;
            height: 35px;
        }
        .form-items{
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        input[type="submit"]{
            padding: 9px 20px;
            color: #fff;
            border-radius: 5px;
            border: 1px solid #9eb3ff;
            background: #9eb3ff;
            text-transform: uppercase;
            cursor: pointer;
        }
        .submit-button{
            display: flex;
            justify-content: flex-end;
        }
</style>
<body>
<!-- code đây -->
<?php
    $nguoidung='';
    $socu=0;
    $somoi=0;
    $dg=0;
    $thanh_tien=0;
    function thanh_tien() {
        if(($GLOBALS['somoi'] < $GLOBALS['socu']))
        {
            $GLOBALS['thanh_tien']="Chỉ số cũ lớn hơn chỉ số mới!";
            echo $GLOBALS['thanh_tien'];
        }
        else
        {
            $GLOBALS['thanh_tien']=(($GLOBALS['somoi'] - $GLOBALS['socu']) * $GLOBALS['dg']);
            echo $GLOBALS['thanh_tien'];
        }
    }
?>
<div class="form-login">
        <div class="form-login-item">
            <h2>THANH TOÁN TIỀN ĐIỆN</h2>
            <form action="tiendien.php" method="POST">
                <div class="form-items">
                <label for="">Tên Chủ Hộ:</label>
                    <input type="text" name="user" value="<?php if(isset($_POST['user'])){$nguoidung=$_POST['user']; echo $nguoidung;} ?>">
                </div>
                <div class="form-items">
                    <label for="">Chỉ số cũ:</label>
                    <input type="text" name="chisocu" value="<?php if(isset($_POST['chisocu'])){$socu=$_POST['chisocu']; echo $socu;} ?>">
                </div>
                <div class="form-items">
                    <label for="">Chỉ số mới:</label>
                    <input type="text" name="chisomoi" value="<?php if(isset($_POST['chisomoi'])){$somoi=$_POST['chisomoi']; echo $somoi;} ?>">
                </div>
                <div class="form-items">
                    <label for="">Đơn giá:</label>
                    <input type="text" name="dongia" value="<?php if(isset($_POST['dongia'])){$dg=$_POST['dongia']; echo $dg;}else{$dg=2000; echo $dg;} ?>">
                </div>
                <div class="form-items">
                    <label for="">Số tiền thanh toán:</label>
                    <input type="text" name="thanhtoan" readonly="true" style="background-color:#FFCCCC" value="<?php thanh_tien(); ?>">
                    <span>(VNĐ)</span>
                </div>
                <div class="submit-button">
                    <input type="submit" value="Tính">
                </div>
            </form>


        </div>
    </div>
</body>
</html>