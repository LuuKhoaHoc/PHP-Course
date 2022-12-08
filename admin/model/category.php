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

function check_category_exist($conn, $data, $edit = false)
{
    if ( ! $edit) {
        $stmt
            = $conn->prepare("SELECT name FROM online_sum_project.category WHERE name = :name");
    } else {
        $stmt
            = $conn->prepare("SELECT name FROM online_sum_project.category WHERE name = :name AND id !=:id");
        $stmt->bindParam(':id', $data["id"], PDO::PARAM_STR);

    }


    $stmt->bindParam(':name', $data["name"], PDO::PARAM_STR);
    $stmt->execute();
    $count = $stmt->rowCount();
    if ($count > 0) {
        return false;
    }

    return true;

}

function get_all_category($conn,$edit = false,$id=null)
{

    if ($edit) {
        $stmt = $conn->prepare("SELECT * FROM online_sum_project.category WHERE id !=:id");
        $stmt->bindParam(':id', $id, PDO::PARAM_STR);
    } else {
        $stmt = $conn->prepare("SELECT * FROM online_sum_project.category ");

    }

    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function get_category($conn, $id)
{
    $stmt
        = $conn->prepare("SELECT * FROM online_sum_project.category WHERE  id = :id");
    $stmt->bindParam(':id', $id, PDO::PARAM_STR);
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function edit_category($conn, $category)
{
    $stmt
        = $conn->prepare("UPDATE online_sum_project.category SET name =:name ,parent =:parent WHERE id=:id");
    $stmt->bindParam(':name', $category["name"], PDO::PARAM_STR);
    $stmt->bindParam(':parent', $category["parent"], PDO::PARAM_STR);
    $stmt->bindParam(':id', $category["id"], PDO::PARAM_INT);
    $stmt->execute();

    return $stmt;
}

function check_category_id($conn, $id)
{
    $stmt
        = $conn->prepare("SELECT * FROM online_sum_project.category WHERE id = :id");
    $stmt->bindParam(':id', $id, PDO::PARAM_STR);
    $stmt->execute();
    $count = $stmt->rowCount();
    if ($count > 0) {
        return true;
    }

    return false;
}

function check_category_child($conn, $id)
{
    $stmt
        = $conn->prepare("SELECT * FROM online_sum_project.category WHERE parent = :id");
    $stmt->bindParam(':id', $id, PDO::PARAM_STR);
    $stmt->execute();
    $count = $stmt->rowCount();
    if ($count > 0) {
        return false;
    }

    return true;
}

function delete_category ($conn, $id) {
    $stmt =$conn->prepare("DELETE FROM online_sum_project.category WHERE id =:id");
    $stmt->bindParam(':id', $id, PDO::PARAM_STR);
    $stmt->execute();
    return $stmt;

}