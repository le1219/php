<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border: 1px solid
        }

        table th {
            border: 1px dashed;
        }

        table td {
            border: 1px dotted;
        }
    </style>
</head>

<body>
    <table>
        <thead>
            <th>姓名</th>
        </thead>
        <tbody>
            <?
            $arrStudent = ['AA', 'BB', 'CC', 'DD'];

            for ($i = 0; $i < count($arrStudent); $i++) {
                echo "<tr><td>" . $arrStudent[$i] . "</td></tr>";
            }
            ?>
        </tbody>
    </table>

</body>

</html>