<?php
require_once ("../controllers/events.controller.php");
require_once("../config/cookies.php");

class Events extends Connect {
  public function createNewEvent($userid, $event_name, $event_description, $event_date, $event_address, $event_image){
    $connect=parent::Conection();
    $sql = "INSERT INTO events
      (event_name, event_description, event_date, event_address, event_image, user_id)
      VALUES (?,?,?,?,?,?)
    ";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(1, $event_name, PDO::PARAM_STR);
    $stmt->bindParam(2, $event_description, PDO::PARAM_STR);
    $stmt->bindParam(3, $event_date, PDO::PARAM_STR);
    $stmt->bindParam(4, $event_address, PDO::PARAM_STR);
    $stmt->bindParam(5, $event_image, PDO::PARAM_STR);
    $stmt->bindParam(6, $userid, PDO::PARAM_INT);

    try {
      $stmt->execute();
      return true;
    } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
      return false;
    }
  }
  
  public function getEvents(){
    $connect=parent::Conection();
    $sql = "SELECT * FROM events ;";
    $stmt = $connect->prepare($sql);

    try {
      $stmt->execute();
      $response = "";
      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $event_name = $row['event_name'];
        $event_description = $row['event_description'];
        $event_date = $row['event_date'];
        $event_address = $row['event_address'];
        $event_image = $row['event_image'];
        
        $response .= "
          <event-item
            data-img='$event_image'
            data-title='$event_name'
            data-description='$event_description'
            data-date='$event_date'
            onclick='toggleWindow(\"#window-events\")' 
            data-flip-id='animate'
          ></event-item>
        ";
      }
      return $response;
    } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
      return false;
    }
  }
}