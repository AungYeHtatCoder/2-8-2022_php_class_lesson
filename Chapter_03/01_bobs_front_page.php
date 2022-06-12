<?php
  $pictures = array('brakes.png', 'head_light.png', 
                    'spark_plug.png', 'steering_wheel.png', 
                    'tire.png', 'wiper_blade.png');

  shuffle($pictures);
?>
<!DOCTYPE html>
<html>

<head>
 <title>Auto parts from Car_Spare_Shop</title>
</head>

<body>
 <h1>Auto parts from Car_Spare_Shop</h1>
 <div align="center">
  <table style="width: 100%; border: 0">
   <tr>
    <?php
        for ($i = 0; $i < 7; $i++) {
          echo "<td style=\"width: 33%; text-align: center\">
                <img src=\"";
          echo $pictures[$i];
          echo "\"/></td>";
        }
        ?>
   </tr>
  </table>
 </div>
</body>

</html>