<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>在线题目</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./images/logo.png" rel="icon">
    <link rel="stylesheet" href="./css/common.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">
                <img alt="Brand" src="./images/logo.jpg" style="width:40px;border-radius: 50%;">
            </a>
            <span id="title">在线测试</span>
            <button class="btn btn-primary" id="login" style="position: absolute;top:8px;right:4px;">登入</button>
        </div>
    </div>
</nav>
<!--主体部分-->
<div class="container-fluid">

    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="./images/theme1.jpeg" alt="">
                <div class="caption">
                    <h3>脑筋急转弯大挑战</h3>
                    <p>开启你的智慧去迎战</p>
                    <p><a href="#" class="btn btn-primary" role="button">挑战</a> <a href="#" class="btn btn-warning" role="button" data-toggle="modal" data-target=".bs-example-modal-sm" >详情</a></p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="./images/theme2.jpg" alt="...">
                <div class="caption">
                    <h3>真心话大冒险挑战</h3>
                    <p>和你朋友一起来吧!</p>
                    <p><a href="#" class="btn btn-primary" role="button">挑战</a> <a href="#" class="btn btn-warning" role="button" data-toggle="modal" data-target=".bs-example-modal-sm" >详情</a></p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="./images/theme3.jpeg" alt="...">
                <div class="caption">
                    <h3>求生欲大挑战</h3>
                    <p>测试你能不能活过求生欲</p>
                    <p><a href="#" class="btn btn-primary" role="button">挑战</a> <a href="#" class="btn btn-warning" role="button" data-toggle="modal" data-target=".bs-example-modal-sm" >详情</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<footer>
    <ul id="bottom">
        <li>Github开源项目</li>
        <li>实例</li>
        <li>项目精选</li>
        <li>关于</li>
    </ul>
    <div>
        网站所有的数据都来源于api,本人利用代理的方式获取数据
    </div>
</footer>
<div class="music">

</div>
<!--提示用户信息-->
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="title" style="text-align: center;font-size:20px;font-weight: bold;padding-top:10px;">详情页</div>
            <div class="slot" style="padding:10px 20px;text-indent: 2rem;"></div>
        </div>
    </div>
</div>
<script type="module" src="js/common.js"></script>
<script src="./js/getDate.js" type="module"></script>
</body>
</html>