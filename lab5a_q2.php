<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student List</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php
        $students = [
            [
                'name' => 'Ain',
                'program' => 'BIS',
                'age' => 21
            ],
            [
                'name' => 'Nur',
                'program' => 'BIS',
                'age' => 20
            ],
            [
                'name' => 'Athirah',
                'program' => 'BIs',
                'age' => 22
            ]
        ];
    ?>

    <table>
        <tr>
            <th>Name</th>
            <th>Program</th>
            <th>Age</th>
        </tr>
        <?php foreach ($students as $student): ?>
        <tr>
            <td><?php echo $student['name']; ?></td>
            <td><?php echo $student['program']; ?></td>
            <td><?php echo $student['age']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
