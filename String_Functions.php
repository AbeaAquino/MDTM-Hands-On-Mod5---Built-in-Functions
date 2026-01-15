<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>PHP Built-in String Functions</title>

<style>
  body {
    font-family: Arial, sans-serif;
    background:rgb(235, 245, 252);
    color: #333;
    padding: 2rem;
  }
  table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 1rem;
  }
  th, td {
    border: 1px solid #ddd;
    padding: 0.5rem 1rem;
  }
  th {
    background:rgb(221, 125, 224); 
    color: white;
  }
  tr:nth-child(even) {
    background:rgb(252, 231, 255);
  }
</style>
</head>
<body>

<h2>PHP Built-in String Functions</h2>

<?php

$caseString = "HOLY ANGEL UNIVERSITY";
$firstName = "Abea";
$lastName = "Aquino";


$fullName = $firstName . " " . $lastName;
$text = "  Pandan Festival! ";
$sampleText = "Abea Venice";
?>

<table>

  <tr>
    <th colspan="2">Changing the Case of Characters</th>
  </tr>

  <tr>
    <td>Lowercase</td>
    <td><?= strtolower($caseString); ?></td>
  </tr>

  <tr>
    <td>Uppercase</td>
    <td><?= strtoupper($caseString); ?></td>
  </tr>

  <tr>
    <td>Capitalize First Letters</td>
    <td><?= ucwords(strtolower($caseString)); ?></td>
  </tr>

  <tr><th colspan="2">Counting Characters and Words</th></tr>

  <tr>
    <td>Number of Characters </td>
    <td><?= strlen($fullName); ?></td>
  </tr>

  <tr>
    <td>Number of Words</td>
    <td><?= str_word_count($fullName); ?></td>
  </tr>

  <tr><th colspan="2">Removing and Replacing Characters</th></tr>

  <tr>
    <td>Remove whitespaces from left</td>
    <td><?= "[" . ltrim($text) . "]"; ?></td>
  </tr>

  <tr>
    <td>Remove whitespaces from right</td>
    <td><?= "[" . rtrim($text) . "]"; ?></td>
  </tr>

  <tr>
    <td>Remove whitespaces from left and right</td>
    <td><?= "[" . trim($text) . "]"; ?></td>
  </tr>

  <tr>
    <td>String replace </td>
    <td><?= str_replace("MySQL", "MariaDB", $sampleText); ?></td>
  </tr>

  <tr>
    <td>String ireplace</td>
    <td><?= str_ireplace("mysql", "MariaDB", $sampleText); ?></td>
  </tr>

  <tr>
    <td>String repeat</td>
    <td><?= str_repeat(trim($text) . " ", 2); ?></td>
  </tr>


 <tr><th colspan="2">Other Useful Built-in Functions</th></tr>

  <tr>
    <td class="func">Substring (substr)</td>
    <td><?= substr($caseString, 0, 4); ?></td>
  </tr>

  <tr>
    <td class="func">String Position (strpos)</td>
    <td><?= strpos($caseString, "UNIVERSITY"); ?></td>
  </tr>

  <tr>
    <td class="func">Case-insensitive Position (stripos)</td>
    <td><?= stripos($caseString, "Holy"); ?></td>
  </tr>

  <tr>
    <td class="func">Last Position (strrpos)</td>
    <td><?= strrpos($caseString, "ANGEL"); ?></td>
  </tr>

  <tr>
    <td class="func">Last Case-insensitive Position (strripos)</td>
    <td><?= strripos($caseString, "angel"); ?></td>
  </tr>

  <tr>
    <td class="func">Substring from first occurrence (strstr)</td>
    <td><?= strstr($caseString, "ANGEL"); ?></td>
  </tr>

  <tr>
    <td class="func">Case-insensitive strstr (stristr)</td>
    <td><?= stristr($caseString, "angel"); ?></td>
  </tr>

  <tr>
    <td class="func">Regular Expression Replace (preg_replace)</td>
    <td><?= preg_replace("/ANGEL/", "A", $caseString); ?></td>
  </tr>

  <tr>
    <td class="func">Check Pattern (preg_match)</td>
    <td><?= preg_match("/ANGEL/", $caseString) ? "Found" : "Not Found"; ?></td>
  </tr>
</table>

</body>
</html>
