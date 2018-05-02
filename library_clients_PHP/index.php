<?php
include "lib.php";
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Клиенты библиотеки</title>
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
    <div id="main_menu">
        <ul>
            <li><input class="menu_butt" type="submit" id="butt_1" value="Заказы"
                       onclick="document.getElementById('table_out').innerHTML = '<?php orders_list(); ?>'"><br></li>
            <li><input class="menu_butt" type="submit" id="butt_2" value="Книги"
                       onclick="document.getElementById('table_out').innerHTML = '<?php books_list(); ?>'"><br></li>
            <li><input class="menu_butt" type="submit" id="butt_3" value="Читатели"
                       onclick="document.getElementById('table_out').innerHTML = '<?php clients_list(); ?>'"><br></li>
            <li><input class="menu_butt" type="submit" id="butt_4" value="Издательства"
                       onclick="document.getElementById('table_out').innerHTML = '<?php publishers(); ?>'"><br></li>
            <li><input class="menu_butt" type="submit" id="butt_5" value="smth 5"
                       onclick="document.getElementById('table_out').innerHTML = '<?php #(); ?>'"><br></li>
            <li><input class="menu_butt" type="submit" id="butt_6" value="smth 6"
                       onclick="document.getElementById('table_out').innerHTML = '<?php #(); ?>'"><br></li>
            <li><input class="menu_butt" type="submit" id="butt_7" value="smth 7"
                       onclick="document.getElementById('table_out').innerHTML = '<?php #(); ?>'"><br></li>
            <li><input class="menu_butt" type="submit" id="butt_8" value="smth 8"
                       onclick="document.getElementById('table_out').innerHTML = '<?php #(); ?>'"><br></li>
            <li><input class="menu_butt" type="submit" id="butt_9" value="smth 9"
                       onclick="document.getElementById('table_out').innerHTML = '<?php #(); ?>'"><br></li>
            <li><input class="menu_butt" type="submit" id="butt_10" value="smth 10"
                       onclick="document.getElementById('table_out').innerHTML = '<?php #(); ?>'"><br></li>
            <li><input class="menu_butt" type="submit" id="butt_11" value="smth 11"
                       onclick="document.getElementById('table_out').innerHTML = '<?php #(); ?>'"><br></li>
            <li><input class="menu_butt" type="submit" id="butt_12" value="smth 12"
                       onclick="document.getElementById('table_out').innerHTML = '<?php #(); ?>'"><br></li>
            <li><input class="menu_butt" type="submit" id="butt_13" value="smth 13"
                       onclick="document.getElementById('table_out').innerHTML = '<?php #(); ?>'"><br></li>
            <li><input class="menu_butt" type="submit" id="butt_14" value="smth 14"
                       onclick="document.getElementById('table_out').innerHTML = '<?php #(); ?>'"><br></li>
            <li><input class="menu_butt" type="submit" id="but_15" value="smth 15"
                       onclick="document.getElementById('table_out').innerHTML = '<?php #(); ?>'"><br></li>
            <li><a href="auth.php"><input class="menu_butt" type="submit" id="logout" value="Выйти"></a><br>
            </li>
        </ul>
    </div>
    <div id="content">

        <table id="table_out">
        </table>
    </div>
</div>
</body>

<script src="script.js"></script>
</html>



