<?php
  $filename = 'path/to/excel/file.xlsx';
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $course = $_POST['course'];
  $payment = $_POST['payment'];

  $data = [$name, $email, $phone, $course, $payment];

  $file = fopen($filename, 'a+');
  fputcsv($file, $data);
  fclose($file);
?>
