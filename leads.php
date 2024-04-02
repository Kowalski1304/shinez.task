<!DOCTYPE html>
<html>
<head>
    <title>Lead Status</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<h2>Lead Status</h2>
<ul>
    <li><a href="index.html">Home</a></li>
    <li><a href="leads.php">Lead Status</a></li>
</ul>
<table class="table">
    <thead>
    <tr>
        <th>id</th>
        <th>Email</th>
        <th>Status</th>
        <th>FTD</th>
    </tr>
    </thead>
    <tbody>

    <?php
    include_once('getLeads.php');

    if ($result['status']) {
        foreach ($result['data'] as $lead) {
            echo "<tr>";
            echo "<td>{$lead['id']}</td>";
            echo "<td>{$lead['email']}</td>";
            echo "<td>{$lead['status']}</td>";
            echo "<td>{$lead['ftd']}</td>";
            echo "</tr>";
        }
    } else {
        echo "<h1>" . ($result['error']) . "</h1>" ;
    }
    ?>
    </tbody>
</table>
</body>
</html>
