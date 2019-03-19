<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <p>ชือ่ผู้ติดต่อ <?php echo $fullname;?></p>
    <p>อีเมล์ <?php echo $email;?></p>
    <p>เบอร์ติดต่อ <?php echo $mobile;?></p>
    <p>LINE <?php echo $line;?></p>
    <p>ข้อความที่ต้องการปรึกษา </p>
    <p><?php echo $subject;?></p>
</body>
</html>