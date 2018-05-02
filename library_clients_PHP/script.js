document.getElementById("connection_check").innerHTML = "<p id='connection_status_js'>Javascript connected.</p>";


document.getElementById("logout").onclick = function () {
    document.location = "http://lc/auth.php";

};


document.getElementById("to_main_menu").onclick = function () {
    document.location = "http://lc/index.php";

};
/*
document.getElementById("butt_1").onclick = function () {
    document.getElementById("main_menu").innerHTML = "<ul>\n" +
        "        <li><input class=\"menu_butt\" type=\"submit\" id=\"butt_1_1\" value=\"Добавить книгу\" " +
        "onclick=\"document.getElementById('table_out').innerHTML = '<?php books_list(); ?>'\"><br></li>" +
        "        <li><input class=\"menu_butt\" type=\"submit\" id=\"butt_1_2\" value=\"Добавить клиента\"><br></li>" +
        "        <li><input class=\"menu_butt\" type=\"submit\" id=\"butt_1_3\" value=\"Добавить издательство\"><br></li>" +
        "        <li><input class=\"menu_butt\" type=\"submit\" id=\"butt_1_4\" value=\"Добавить заказ\"><br></li>" +
        "        <li><input class=\"menu_butt\" type=\"submit\" id=\"butt_1_5\" value=\"Добавить назад\"><br></li>" +
        "<ul>";

    document.getElementById("butt_1_1").onclick = function () {
        document.getElementById('table_out').innerHTML = "<form method=\"post\" name=\"add_book_form\">\n" +
            "<input class=\"auth_fields\" type=\"text\" required placeholder=\"Название\" name=\"book_name\"><br>\n" +
            "<input class=\"auth_fields\" type=\"text\" required placeholder=\"Жанр\" name=\"book_genre\"><br>\n" +
            "<input class=\"auth_fields\" type=\"text\" required placeholder=\"Издательство\" name=\"book_publisher\"><br>\n" +
            "<input class=\"auth_fields\" type=\"text\" required placeholder=\"Год\" name=\"book_year\"><br><br>\n" +
            "<input class=\"auth_butt\" type=\"submit\" name=\"add_book\" " +
            "onclick=\"document.getElementById('table_out').innerHTML = \'<?php book_list(); ?>\'\">\n" +
            "</form>";
    }
}
*/