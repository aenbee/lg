<html>
 <head>
  <title>Anbu</title>
 </head>
 <body>
  <?php
   $a = $b = $c = 'white';
   shoot($a, $b, $c);
   
   function shoot($a, $b, $c)
    {
     echo 'Scroll down to Shoot<br />
      <table width = "100%" height = "100%">
      <tr>
       <td width = "10%" height = "10%" style = "background-color:'.$a.';border-style:solid solid none solid" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" style = "background-color:'.$b.';border-style:solid solid none solid" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" style = "background-color:'.$c.';border-style:solid" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
      </tr>
      <tr>
       <td width = "10%" height = "10%" style = "background-color:'.$a.';border-style:none solid none solid" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" style = "background-color:'.$b.';border-style:none solid none solid" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
      </tr>
      <tr>
       <td width = "10%" height = "10%" style = "background-color:'.$a.';border-style:none none solid solid" />
       <td width = "10%" height = "10%" style = "background-color:'.$a.';border-style:solid solid solid none" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" style = "background-color:'.$b.';border-style:none solid none solid" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" style = "background-color:'.$c.';border-style:solid" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
      </tr>
      <tr>
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" style = "background-color:'.$b.';border-style:none solid solid solid" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
      </tr>
      <tr>
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
      </tr>
      <tr>
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
      </tr>
      <tr>
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
      </tr>
      <tr>
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
      </tr>
      <tr>
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
      </tr>
      <tr>
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
       <td width = "10%" height = "10%" />
      </tr>
     </table>';
     
     if ($a == 'black' && $b == 'black' && $c == 'black')
      echo 'Game Over';
     else
      {
      switch (rand(0,9))
       {
        case 0: $a = 'black';
        case 1: break;
        case 2: break;
        case 3: $b = 'black';
                break;
        case 4: break;
        case 5: $c = 'black';
                break;
        case 6: break;
        case 7: break;
        case 8: break;
        case 9: break;
       }
      shoot($a, $b, $c);
     }
    }
  ?>
 </body>
</html>
