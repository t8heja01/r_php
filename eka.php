<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>PHP</h1>
    <p>
      Kirjoitetaan alle php-koodia. <br>
      <?php
      $ename='Teppo';
      echo 'Tervetuloa' .$ename;
      ?>
    </p>
    <h2>Array</h2>
    <?php
    $enames=array('Jussi','Liisa','Matti');
     ?>
     <p>
     Array voidaan tulostaa print_r-funktiolla: <br>
     <?php print_r($enames); ?>
   </p>
   <p>
     Arrayn alkioita voidaan tulostaa echo-funktiolla: <br>
     <?php echo $enames [1] ?>
   </p>
   <h2>Kaksiulotteinen array</h2>
   <?php
   $names=array(
     array('Jussi','Virta'),
     array('Liisa','Joki'),
     array('Aino','Järvi')
   );
    ?>
    <p>
      Koko taulukon sisältö: <br>
      <?php print_r($names) ?>
    </p>
    <p>
      Yksi alkio: <?php echo $names[0][1]; ?>
    </p>
    <h2>Associative array</h2>
    <?php
    $a_names=array(
      array('en'=>'Jussi', 'sn' =>'Virta'),
      array('en'=>'Liisa', 'sn' =>'Joki'),
      array('en'=>'Keijo', 'sn' =>'Komulainen')
    );
     ?>
     <p>Testataan tulostamista print_r-funktiolla</p>
     <?php print_r($a_names); ?>
     <p>Toinen etunimi = <?php echo $a_names[1]['en']; ?> </p>
     <h3>foreahc</h3>
     <p>
       foreahc-looppi on kätevä taulukon sisällön tulostamiseen. <br>
       <?php
      foreach ($a_names as $row) {
        echo $row['en'].' '.$row['sn'].'<br/>';
      }
        ?>
     </p>
     <p>
       Taulukkona: <br>
       <table border="1">
         <thead>
           <tr> <th>Etunimi</th> <th>Sukunimi</th> </tr>
         </thead>
         <tbody>
           <tr>
             <td>Teppo</td> <td>Testi</td>
           </tr>
           <?php foreach ($a_names as $row) {
             echo '<tr>';
             echo '<td>'.$row['en'].'</td> <td>' .$row['sn'].'</td>';
             echo '</tr>';
               }

              ?>



         </tbody>
       </table>

     </p>


  </body>
</html>
