<?php

function books_list()
{
    echo "<tr>" . "<td>" . "ID" . "</td>" .
        "<td>" . "Название" . "</td>" .
        "<td>" . "Жанр" . "</td>" .
        "<td>" . "Издатель" . "</td>" .
        "<td>" . "Год" . "</td>" . "</tr>";

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "library_clients";

// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM books";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr>" . "<td>" . $row["book_id"] . "</td>" .
                "<td>" . $row["book_name"] . "</td>" .
                "<td>" . $row["book_genre"] . "</td>" .
                "<td>" . $row["book_publisher"] . "</td>" .
                "<td>" . $row["book_year"] . "</td>" . "</tr>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
}

function clients_list()
{
    echo "<tr>" . "<td>" . "ID" . "</td>" .
        "<td>" . "Ф.И.О." . "</td>" .
        "<td>" . "Пол" . "</td>" .
        "<td>" . "Дата рождения" . "</td>" .
        "<td>" . "Телефон" . "</td>" . "</tr>";

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "library_clients";

// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM clients";
    $result = $conn->query($sql);


    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr>" . "<td>" . $row["client_id"] . "</td>" .
                "<td>" . $row["client_name"] . "</td>" .
                "<td>" . $row["client_gender"] . "</td>" .
                "<td>" . $row["client_birthday"] . "</td>" .
                "<td>" . $row["client_phone"] . "</td>" . "</tr>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
}

function publishers()
{
    echo "<tr>" . "<td>" . "Название" . "</td>" .
        "<td>" . "Сайт" . "</td>" .
        "<td>" . "Телефон" . "</td>" .
        "<td>" . "Адрес" . "</td>" . "</tr>";

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "library_clients";

// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM publishers";
    $result = $conn->query($sql);


    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr>" . "<td>" . $row["publisher_name"] . "</td>" .
                "<td>" . $row["publisher_site"] . "</td>" .
                "<td>" . $row["publisher_phone"] . "</td>" .
                "<td>" . $row["publisher_adress"] . "</td>" . "</tr>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
}

function bdCheck()
{

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "library_clients";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "<p id='connection_status_php'>PHP connected.</p>";

}

function authServerCheck()
{
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
    echo "<p id='connection_status_login'>Login connected.</p>";
}

function orders_list()
{
    echo "<tr>" . "<td>" . "Дата" . "</td>" .
        "<td>" . "Название книга" . "</td>" .
        "<td>" . "Клиент" . "</td>" . "</tr>";

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "library_clients";

// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT `orders`.`order_date`, `books`.`book_name`, `clients`.`client_name` FROM `books` LEFT JOIN `orders` ON `orders`.`order_book_id` = `books`.`book_id` LEFT JOIN `clients` ON `orders`.`order_client_id` = `clients`.`client_id`";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr>" . "<td>" . $row["order_date"] . "</td>" .
                "<td>" . $row["book_name"] . "</td>" .
                "<td>" . $row["client_name"] . "</td>" . "</tr>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
}

