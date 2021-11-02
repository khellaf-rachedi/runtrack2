<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>tableau Php</title>
</head>

<body>

<?php
 $boolean = true;
 $int = 1;
 $str = "chaine de caractères";
 $float = 6.67;
?>


<table class="bordure">
   <tr>
       <th class="bordure">Type</th>
       <th class="bordure">Nom</th>
       <th class="bordure">Valeur</th>
   </tr>

   <tr>
       <td class="bordure"><?php echo gettype($boolean);?></td>
       <td class="bordure">boolean</td>
       <td class="bordure"><?php echo $boolean; ?></td>
   </tr>
   <tr>
       <td class="bordure"><?php echo gettype($int); ?>></td>
       <td class="bordure">int</td>
       <td class="bordure"><?php echo $int; ?></td>
   </tr>
   <tr>
       <td class="bordure"><?php echo gettype($str); ?>></td>
       <td class="bordure">str</td>
       <td class="bordure"><?php echo $str; ?></td>
   </tr>
   <tr>
       <td class="bordure"><?php echo gettype($float); ?>></td>
       <td class="bordure">float</td>
       <td class="bordure"><?php echo $float; ?></td>
   </tr>
</table>

<style>
    .bordure{
        border: 2px solid black;
        padding: 5px;
        border-collapse: collapse;
        text-align: center;
    }
</style>
