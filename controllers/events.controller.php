<?php
require_once("../config/connect.php");
require_once("../models/Events.php");
require_once("../config/session.php");
$events = new Events();

// Data
$json_data = file_get_contents('php://input');
$data = json_decode($json_data, true);

switch ($data["op"]) {
  case "createNewEvent":
    $event_name = filter_var($data["event_name"], FILTER_SANITIZE_STRING);
    $event_description = filter_var($data["event_description"], FILTER_SANITIZE_STRING);
    $event_date = filter_var($data["event_date"], FILTER_SANITIZE_STRING);
    $event_time = filter_var($data["event_time"], FILTER_SANITIZE_STRING);
    $event_address = filter_var($data["event_address"], FILTER_SANITIZE_STRING);
    $event_image = filter_var($data["event_image"], FILTER_SANITIZE_STRING);
    $event_credits = filter_var($data["event_credits"], FILTER_SANITIZE_STRING);

    $createNewEvent = $events->createNewEvent($userid, $event_name, $event_description, $event_date, $event_time, $event_address, $event_image, $event_credits);
    if(!$createNewEvent){echo json_encode(false); exit;}
    echo json_encode(true);
    break;
  case "getEvents":
    $getEvents = $events->getEvents();
    if(!$getEvents){echo json_encode(false); exit;}
    echo json_encode($getEvents);
    break;
  case "getEventsTable":
    $getEventsTable = $events->getEventsTable();
    if(!$getEventsTable){echo json_encode(false); exit;}
    echo json_encode($getEventsTable);
    break;
}