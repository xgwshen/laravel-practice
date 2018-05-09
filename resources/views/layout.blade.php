<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .header{
            height: 100px;
            margin: 0 auto;
            width: 800px;
            border:1px solid #8c8c8c;
        }
        .main{
            width:800px;
            height: 300px;
            margin: 0 auto;
            margin-top: 15px;
            clear:both;
        }
        .sidebar{
            width: 200px;
            height: 300px;
            border:1px solid #8c8c8c;
            float: left;
        }
        .content{
            width: 500px;
            height: 300px;
            border:1px solid #8c8c8c;
            float: right;
        }
        .footer{
            width:800px;
            height: 50px;
            margin: 0 auto;
            margin-top: 10px;
            border:1px solid #8c8c8c;
        }
    </style>
</head>
<body>
    <div class="header">
        头部
    </div>
    <div class="main">
        <div class="sidebar">
            侧边栏
        </div>
        <div class="content">
            内容区
        </div>
    </div>
    <div class="footer">
        尾部
    </div>
</body>
</html>