<?php

//insert
try {
  $pdo = new PDO('mysql:host=localhost;dbname=animals', 'root', 'Keeptry1ng');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 

  $stmt = $pdo->prepare('INSERT INTO felines (name) VALUES(:name)');
  $stmt->execute(array(
    ':name' => 'Cougar'
  ));
 
  # Affected Rows?
  echo $stmt->rowCount(); // 1
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}

//update
$id = 5;
$name = "experiment update";
 
try {
  $pdo = new PDO('mysql:host=localhost;dbname=animals', 'root', 'Keeptry1ng');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
  $stmt = $pdo->prepare('UPDATE felines SET name = :name WHERE feline_id = :id');
  $stmt->execute(array(
    ':id'   => $id,
    ':name' => $name
  ));
   
  echo $stmt->rowCount(); // 1
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}

//Delete
$id = 6; // From a form or something similar
 
try {
  $pdo = new PDO('mysql:host=localhost;dbname=animals', 'root', 'Keeptry1ng');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
  $stmt = $pdo->prepare('DELETE FROM felines WHERE feline_id = :id');
  $stmt->bindParam(':id', $id); // this time, we'll use the bindParam method
  $stmt->execute();
   
  echo $stmt->rowCount(); // 1
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}



//see all
 try {
    $conn = new PDO('mysql:host=localhost;dbname=animals', 'root', 'Keeptry1ng');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $data = $conn->query('SELECT * FROM felines ');
 //$data = $conn->query('SELECT * FROM felines WHERE name = ' . $conn->quote($name));

    foreach($data as $row) {
        print_r($row); 
    }
}

/*catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
*/
 catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

?>