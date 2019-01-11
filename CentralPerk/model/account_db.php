<?php

function existing_email($email) {
  global $db;
 /* $checkUserEmail = $db -> query("SELECT UserEmail FROM Users 
                                WHERE `UserEmail` = :$email");*/
  $checkUserEmail = "SELECT UserEmail FROM Users WHERE `UserEmail` = :email";
  $statement = $db->prepare($checkUserEmail);
  $statement->bindValue(':email', $email);
  $statement->execute();
  $statement->closeCursor();
  return $statement;
}

function add_user($fName, $lName, $zip, $email) {
    global $db;
    $query = 'INSERT INTO Users
                (UserFirstName, UserLastName, UserZipcode, UserEmail) 
              VALUES 
                (:fName, :lName, :zip, :email)';
    $statement = $db->prepare($query);
    $statement->bindValue(':fName', $fName);
    $statement->bindValue(':lName', $lName);
    $statement->bindValue(':zip', $zip);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $statement->closeCursor();
}

function add_account($email, $pwd) {
  global $db;
  $query = "INSERT INTO Accounts
              (UserEmail, UserPwd)
            VALUES
              (:email, :pwd)";
  $statement = $db->prepare($query);
  $statement->bindValue(':email', $email);
  $statement->bindValue(':pwd', $pwd);
  $statement->execute();
  $statement->closeCursor();
}

?>