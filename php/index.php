<?php

try {
    $dbh = new PDO(
        'mysql:host=db;port:6603;dbname=user_manager',
        'db_user',
        'mypwd'
    );
    echo "success";
} catch (PDOException $ex) {
    echo $ex->getMessage();
}
