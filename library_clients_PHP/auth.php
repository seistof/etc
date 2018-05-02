<?php
include "lib.php";
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
    <style>
        <?php echo file_get_contents("styles.css"); ?>
    </style>
</head>
<body>
<div id="container">

    <header>
        <h1>ИПС "Клиенты библиотеки"</h1>
    </header>
    <div>
        <?php
        bdCheck();
        authServerCheck();
        ?>
        <p id="connection_check"></p>
    </div>
    <div>
        <div id="content_auth">
            <div id="auth_fields">
                <form method="post" action="">
                    <h1>Авторизация</h1><br>
                    <p></p><input class="auth_fields" type="text" name="user_name" placeholder=" | Имя пользователя"
                                  required>
                    <p></p><input class="auth_fields" type="password" name="user_password" placeholder=" | Пароль"
                                  required><br><br>
                    <input class="auth_butt" type="submit" name="login" value="Войти">
                </form>
            </div>
            <?php
            global $login_name;
            global $login_pass;
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "lib_client_auth";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            if (isset($_POST['login'])) {
                global $user_name;
                global $user_password;
                $user_name = $_POST['user_name'];
                $user_password = $_POST['user_password'];

                $sql = "SELECT * FROM auth ";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        if ($row['user_name'] === $user_name and $row['user_password'] === $user_password) {

                            echo "<script>" . "document.getElementById(\"auth_fields\").innerHTML = \" \";" ."</script>";
                            echo("<br><br><br><br><br><br><br><br><br><br><br><b class='welcome'>Добро пожаловать.</b>");

                            echo "<script>" . "someTimeout = 3000;" .
                                "window.setTimeout(\"document.location = \'http://lc/index.php\';\", someTimeout);" .
                                "</script>";

                        } else {

                            echo "<br><b class='big_font'>Ошибка, вы ввели неверные данные.</b>";

                        }
                    }
                }
            }
            ?>
        </div>
    </div>
</body>
<script src="auth.js"></script>
</html>

