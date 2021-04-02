<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="exo4.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <table>
            <tr>
                
                    <?php
                    for ($z = 0; $z <= 13; $z++) {
                        ?>
                <td>
<?php

                        if ($z == 0) {
                            echo ' ';
                        } else {
                            echo $z;
                        }
                    }
                    ?>
                </td>
            
            </tr>
            <tr>
                <?php
                for ($i = 0; $i <= 13; $i++) {
                   
                        
               
                   ?>
            <td>
                        <?php
                        if($i == 0)
                        {
                            for ($j = 1; $j <= 13; $j++) {

                            echo$i+1 * $j, '<br>';
                        }
                        }

                        else
                        {
                        
                        for ($j = 1; $j <= 13; $j++) {

                            echo$i * $j, '<br>';
                        }
                }
                }
                    ?>
                </td>
            </tr>


        </table>
    </body>
</html>
