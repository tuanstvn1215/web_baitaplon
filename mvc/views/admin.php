<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" integrity="sha512-F5QTlBqZlvuBEs9LQPqc1iZv2UMxcVXezbHzomzS6Df4MZMClge/8+gXrKw2fl5ysdk4rWjR0vKS7NNkfymaBQ==" crossorigin="anonymous"></script>
</head>

<body>
    <style>
        body {
            font-size: 16px;
            margin: 0px;
            font-family: 'Roboto', sans-serif;
            background-color: #dfdfdf;
        }

        .warpper {

            display: flex;
            flex-direction: row;

        }

        .right-menu {
            z-index: 1;
            background-color: #3b3b3b;
            color: #d6d6d6;
            width: 200px;
            box-shadow: 0px 0px 5px 0px #3b3b3b;
            padding: 5px 5px 5px 5px;
            min-height: 768px;
            height: 100%;
            transition: width 200ms linear;
        }

        .right-menu-hidden {
            z-index: 1;
            background-color: #3b3b3b;
            color: #d6d6d6;
            position: absolute;
            width: 33px;
            transition: width 200ms linear;
            box-shadow: 0px 0px 5px 0px #3b3b3b;
            padding: 5px 5px 5px 5px;
            min-height: 768px;
            height: 100%;

        }

        .menu-icon {
            text-align: end;
        }

        .menu_content-hidden {
            display: none;
        }

        .menu-title {
            padding: 10px 10px 10px 10px;
            border-radius: 5px;

        }

        .menu-title:hover {
            background-color: #696969;
            cursor: pointer;
        }

        .menu-item {
            padding: 5px 5px 5px 5px;
        }

        .content {
            width: 100%;
        }

        .navbar {
            height: 50px;
            width: 100%;
            background-color: white;
            color: #5a5a5a;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0px 0px 5px 0px gainsboro;
        }



        .navbar-right {
            display: flex;
            justify-content: space-between;
            margin-right: 10px;
        }

        .navbar-right * {
            margin-left: 5px;
        }

        .navbar-right-item {
            position: relative;
        }

        .notification-icon:hover {
            cursor: pointer;
        }

        .fa-bell {
            font-size: larger;
        }



        .notification-icon-circle {

            position: absolute;

            right: 0px;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background-color: red;


        }

        .notification {
            background-color: white;
            width: 250px;
            top: 30px;
            right: 0px;
            position: absolute;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            border-radius: 5px;
            border: 1px solid gainsboro;
            box-shadow: 0px 0px 5px 0px gainsboro;

        }

        .notification-hidden {
            width: 0px;
            height: 0px;
            display: none;
        }

        .notification-title {
            text-align: center;
            padding: 5px;
            box-shadow: none;
            color: #5a5a5a;
        }

        .notification-item {
            padding: 5px;
            box-shadow: none;
            border-top: 1px solid gainsboro;
        }

        .sign-out {
            cursor: pointer;
            color: #5a5a5a;
        }


        .fa-sign-out-alt {
            font-size: larger;
        }

        .sign-out:hover {
            color: #838383;
        }
    </style>
    <div class="warpper">
        <div id='right-menu' class="right-menu">
            <div class="menu-icon"><i onclick="right_menu()" class="menu-title fas fa-bars"></i>
            </div>
            <div id='menu-content' class="menu-content">
                <div class="menu-group">
                    <div class="menu-title"> <i class="fas fa-box-open"></i> Hàng hóa</div>
                    <div class="menu-item"></div>
                    <div class="menu-item"></div>
                    <div class="menu-item"></div>
                    <div class="menu-item"></div>
                </div>
                <div class="menu-group">

                    <div class="menu-title"><i class="fas fa-file-invoice"></i> Đơn đặt hàng</div>
                    <div class="menu-item"></div>
                    <div class="menu-item"></div>
                    <div class="menu-item"></div>
                </div>
                <div class="menu-group">
                    <div class="menu-title"> <i class="fas fa-user-friends"></i> Khách hàng</div>
                    <div class="menu-item"><i class="fas fa-users-class"></i></div>
                    <div class="menu-item"></div>
                    <div class="menu-item"></div>
                </div>
            </div>

        </div>
        <div class="content">
            <div class="navbar">
                <div class="navbar-left">
                    <div class="navbar-icon"></div>
                </div>
                <div class="navbar-right">
                    <div class="navbar-right-item">
                        <div class="notification-icon" onclick="notification()">
                            <i class="far fa-bell"></i>
                            <span class="notification-icon-circle"></span>
                        </div>
                        <div id='notification' class="notification-hidden">
                            <div class="notification-title">Thông báo</div>
                            <div class="notification-item">Tin nhắn mới</div>
                            <div class="notification-item"></div>
                            <div class="notification-item"></div>
                        </div>
                    </div>
                    <div class="navbar-right-item"><a class="sign-out" href=""><i class="fas fa-sign-out-alt"></i></a>
                    </div>
                    <div class="navbar-right-item"></div>
                </div>
            </div>
            <div class="main_content">
                <?php
                require_once('./mvc/views/pages/admin/' . $data['page'] . '.php');
                ?>
            </div>

        </div>

    </div>

    <script>
        function right_menu() {
            var right_menu = document.getElementById('right-menu')
            var menu_content = document.getElementById('menu-content')
            if (right_menu.classList.contains('right-menu')) {
                right_menu.classList.replace('right-menu', 'right-menu-hidden')
                menu_content.classList.add('menu_content-hidden')

            } else {
                right_menu.classList.replace('right-menu-hidden', 'right-menu')
                menu_content.classList.remove('menu_content-hidden')
            }
        }

        function notification() {
            var notification = document.getElementById('notification')
            if (notification.classList.contains('notification')) {
                notification.classList.replace('notification', 'notification-hidden')


            } else {
                notification.classList.replace('notification-hidden', 'notification')
            }
        }
    </script>

</body>

</html>