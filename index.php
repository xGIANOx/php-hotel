<?php


$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];



// foreach ($hotels as $hotel) {
//     foreach ($hotel as $key => $value) {
//         var_dump($key, $value);

//     }
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

<div class="container">
<h1 class="mt-3">Hotel List</h1>
  <form action="index.php" method="GET">
    <div class="form-group">
      <label for="parking">Filter by parking:</label>
      <select name="parking" id="parking" class="form-control">
        <option value="">All</option>
        <option value="1">Yes</option>
        <option value="0">No</option>
      </select>
      <label class="mt-4" for="vote">Filter by vote:</label>
      <select name="vote" id="vote" class="form-control">
        <option value="">All</option>
        <option value="1">1 Star</option>
        <option value="2">2 Stars</option>
        <option value="3">3 Stars</option>
        <option value="4">4 Stars</option>
        <option value="5">5 Stars</option>

      </select>
    </div>
    <button type="submit" class="btn btn-primary mt-3">Filter</button>
  </form>
<table class="table table-success table-striped mt-5">
  <thead>
    <tr>
      <th scope="col">NAME</th>
      <th scope="col">DESCRIPTION</th>
      <th scope="col">PARKING</th>
      <th scope="col">VOTE</th>
      <th scope="col">DISTANCE TO CENTER</th>


    </tr>
  </thead>
  <tbody>
  <?php foreach ($hotels as $hotel) : ?>
  <?php if (!isset($_GET['parking']) || ($_GET['parking'] == $hotel['parking']) && !isset($_GET['vote']) || ($_GET['vote'] == $hotel['vote'])) : ?>
    <tr>
      <?php foreach ($hotel as $key => $value) : ?>
        <?php if ($key === 'parking') : ?>
          <td><?= $value ? 'Yes' : 'No'; ?></td>
        <?php else: ?>
          <td><?= $value ?></td>
        <?php endif; ?>
      <?php endforeach; ?>
    </tr>
  <?php endif; ?>
<?php endforeach; ?>
</tbody>
</table>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>