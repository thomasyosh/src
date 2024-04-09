<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
$response = file_get_contents('https://data.etabus.gov.hk/v1/transport/kmb/route/');
$response = json_decode($response);
$bus_data = ($response->data);
// var_dump($bus_data);

// var_dump($bus_data[0]->route);

echo '<table>';
echo "<td>Route</td>";

foreach ($bus_data as $x) {
    echo "<tr>";
    echo "<td data={$x->route}>{$x->route}</td>";
    echo "<td>{$x->orig_tc}</td>";
        echo "</tr>";
  }








?>

</body>
</html>