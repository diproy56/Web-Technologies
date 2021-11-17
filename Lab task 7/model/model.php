<?php 

require_once 'db_connect.php';

function addUser($data){
    $conn = db_conn();
    $selectQuery = "INSERT INTO `user`(`name`, `email`, `user_name`, `password`,`gender`,`dob`)  VALUES (:name, :email, :user_name, :password, :gender, :dob )";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':name' => $data['name'],
            ':email' => $data['email'],
            ':user_name' => $data['user_name'],
            ':password' => $data['password'],
            ':gender' => $data['gender'],
            ':dob' => $data['dob'],
         
           
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}
function addBook($data){
    $conn = db_conn();
    $selectQuery = "INSERT INTO `book`(`book_name`, `author_name`, `book_price`)  VALUES (:book_name, :author_name, :book_price)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':book_name' => $data['book_name'],
            ':author_name' => $data['author_name'],
            ':book_price' => $data['book_price'],
        
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


function showAlluser(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `user` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}
function showAllBooks(){
    $conn = db_conn();
    $selectQuery = 'SELECT * FROM `book` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}
function updateUser($user_name, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE `user` set `name` = ?, `email` = ?, `gender` = ?, `dob` = ? where `user_name` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['name'], $data['email'], $data['gender'], $data['dob'], $user_name
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}
function updatePassword($user_name, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE `user` set `password` = ? where `user_name` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['password'], $user_name
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}
function updateProduct($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE `book` set `book_name` = ?, `author_name` = ?, `book_price` = ? where `ID` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['book_name'], $data['author_name'], $data['book_price'], $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}
function deleteProduct($id){
    $conn = db_conn();
    $selectQuery = "DELETE FROM `user` WHERE `ID` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}
function showProduct($id){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `book` where ID = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}
function showuser($user_name){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `user` where user_name = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$user_name]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function searchProduct($name){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `user` WHERE Name LIKE '%$name%'";
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function searchData($user_name){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `user` WHERE user_name = ?";
     try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$user_name]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}
?>