<?php

function create_category($conn, $category)
{
    $stmt
        = $conn->prepare("INSERT INTO online_sum_project.category(name,parent) VALUES (:name,:parent) ");
    $stmt->bindParam(':name', $category["name"], PDO::PARAM_STR);
    $stmt->bindParam(':parent', $category["parent"], PDO::PARAM_STR);
    $stmt->execute();

    return $stmt;
}
function check_category_exist ($conn,$name) {
    $stmt =$conn->prepare("SELECT name FROM online_sum_project.category WHERE name = :name");
    $stmt->bindParam(':name',$name,PDO::PARAM_STR);
    $stmt->execute();
    $count = $stmt->rowCount();
    if ($count > 0) {
        return false;
    }
    return true;

}

function get_all_category ($conn) {
    $stmt = $conn->prepare("SELECT * FROM online_sum_project.category ");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}