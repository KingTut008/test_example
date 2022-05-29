<?php

function viewTableData($query = "") {
    $db = dbConnect();

    if($query == "First") {
        $stmt = $db->prepare("SELECT email, GROUP_CONCAT(login) as logins, COUNT(email) as count FROM users GROUP BY email HAVING count > 1");
        $stmt->execute();
        $result=$stmt->get_result();
        $rows = $result->fetch_all(MYSQLI_ASSOC);
        $tableColumTitle = array_keys($rows[0]);
    }

    if($query == "Second") {
        $stmt = $db->prepare("SELECT users.login, COUNT(orders.id) as count_order FROM users 
                            LEFT JOIN orders ON users.id = orders.user_id
                            GROUP BY users.login
                            HAVING count_order < 1
                        ");
        $stmt->execute();
        $result=$stmt->get_result();
        $rows = $result->fetch_all(MYSQLI_ASSOC);
        $tableColumTitle = array_keys($rows[0]);
    }

    if($query == "Third") {
        $stmt = $db->prepare("SELECT users.login, COUNT(orders.id) as count_order FROM users 
                            LEFT JOIN orders ON users.id = orders.user_id
                            GROUP BY users.login
                            HAVING count_order > 2
                        ");
        $stmt->execute();
        $result=$stmt->get_result();
        $rows = $result->fetch_all(MYSQLI_ASSOC);
        $tableColumTitle = array_keys($rows[0]);
    }

    include $_SERVER['DOCUMENT_ROOT'] . '/templates/viewTableData.php';
}