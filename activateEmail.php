<?php //ใส่ทุกอัน
    include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <center>
    <div style="margin-top:300px;">
    <h1><span >Successful Your Account is Activate.</span></h1>
    </div>
    </center>
    <script>
        var username = "<?php echo $_GET['xTaScDwdlsdafqAdatwqcsIar'] ?>";
        $.post("src/indexPHP.php",{activeAccount:true,username:username},function(data){
            console.log(data);
            setTimeout(function() {window.location.href = "index.php"}, 3000);
        });
            
    </script>
    
</body>
</html>