<?php

include 'Database.php';
include 'utils.php';

$db = new Database();

// ----Handles note deletion----
$method = $_POST['_method'] ?? '';

if ($method === 'DELETE') {
  $id = $_POST['id'];

  $db->query("DELETE FROM express WHERE id = :id", [':id' => $id]);

  header('Location: notes.php');
}
// ------------------------------

// ----Fetches notes from the database----
$notes = $db->query("SELECT * FROM express")->get();
// ----------------------------------------

$navTitle = "Notes";

include 'views/notes.view.php';