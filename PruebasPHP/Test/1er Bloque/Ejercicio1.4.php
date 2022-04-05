<html>
    <head>
        <style>
            table{
                border-collapse:collapse;
                border:2px solid red;
            }
            th,td{
                border:2px solid red;
            }
        </style>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>Hora</th>
                    <th>Lunes</th>
                    <th>Martes</th>
                    <th>Miercoles</th>
                    <th>Jueves</th>
                    <th>Viernes</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>06:00-07:00</th>
                    <td rowspan="6"><?php echo "Clase Nicolas A-211"?></td>
                    <td rowspan="6"><?php echo "Clase Nicolas A-209"?></td>
                    <td rowspan="4"><?php echo "Clase Bilingüismo A-202"?></td>
                    <td rowspan="4"><?php echo "Clase Andres A-209"?></td>
                    <td rowspan="6"><?php echo "Clase Julieth A-209"?></td>
                </tr>
                <tr>
                    <th>07:00-08:00</th>
                </tr>
                <tr>
                    <th>08:00-09:00</th>
                </tr>
                <tr>
                    <th>09:00-10:00</th>
                </tr>
                <tr>
                    <th>10:00-11:00</th>
                    <td></td>
                    <td rowspan="2"><?php echo "Clase E. Fisica Campo Deportivo"?></td>
                </tr>
                <tr>
                    <th>11:00-12:00</th>
                    <td></td>
                </tr>
                <tr>
                    <th>12:00-13:00</th>
                    <td></td>
                    <td rowspan="4"><?php echo "Clase Andres A-209"?></td>
                    <td rowspan="4"><?php echo "Clase Julieth A-209"?></td>
                    <td></td>
                    <td rowspan="4"><?php echo "Clase Etica A-204"?></td>
                </tr>
                <tr>
                    <th>13:00-14:00</th>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th>14:00-15:00</th>
                    <td rowspan="4"><?php echo "Clase Cristian A-205"?></td>
                    <td></td>
                </tr>
                <tr>
                    <th>15:00-16:00</th>
                    <td></td>
                </tr>
                <tr>
                    <th>16:00-17:00</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td rowspan="2"><?php echo "Clase E. Fisica Campo Deportivo"?></td>
                </tr>
                <tr>
                    <th>17:00-18:00</th>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </body>
</html>