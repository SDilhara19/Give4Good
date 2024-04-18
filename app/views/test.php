<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        th:first-child, td:first-child {
            width: 30%;
        }
    </style>
</head>
<body>

<h2>$_POST Data</h2>
<table>
    <tr>
        <th>Field</th>
        <th>Value</th>
    </tr>
    <?php
    foreach ($_POST as $key => $value) {
        echo "<tr><td>$key</td><td>$value</td></tr>";
    }
    ?>
</table>

<h2>$_FILES Data</h2>
<table>
    <tr>
        <th>Field</th>
        <th>File Details</th>
    </tr>
    <?php
    foreach ($_FILES as $fieldName => $fileDetails) {
        echo "<tr><td>$fieldName</td><td>";
        foreach ($fileDetails as $key => $value) {
            echo "$key: $value <br>";
        }
        echo "</td></tr>";
    }
    ?>
</table>


<h2>Data</h2>
<table>
    <tr>
        <th>Field</th>
        <th>File Details</th>
    </tr>
    <?php
    foreach ($data as $fieldName => $fileDetails) {
        echo "<tr><td>$fieldName</td><td>";
        foreach ($fileDetails as $key => $value) {
            echo "$key: $value <br>";
        }
        echo "</td></tr>";
    }
    ?>
</table>

</body>
</html>

