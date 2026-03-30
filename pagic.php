<!DOCTYPE html>
<html lang="en">
<head>
    <title>Advanced Pagination</title>
    <style>
        body.soumo {
            background: #eef;
            font-family: Arial;
        }
        table {
            border-collapse: collapse;
            margin: 20px auto;
            width: 60%;
            background: white;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background: #333;
            color: white;
        }
        .pagination {
            text-align: center;
            margin-top: 20px;
        }
        .pagination a, .pagination strong {
            padding: 8px 12px;
            margin: 3px;
            text-decoration: none;
            border-radius: 5px;
        }
        .pagination a {
            background: lightblue;
            color: black;
        }
        .pagination strong {
            background: orange;
            color: white;
        }
    </style>
</head>

<body class="soumo">

<?php
// Data (same tumhara)
$data = [];
for($i=1; $i<=50; $i++){
    $data[] = [$i, "Student $i", "CSA", "State $i"];
}

// Pagination Logic
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$perPage = 5;

$total = count($data);
$totalPage = ceil($total / $perPage);

// Limit page
if($page < 1) $page = 1;
if($page > $totalPage) $page = $totalPage;

$start = ($page - 1) * $perPage;
$currentData = array_slice($data, $start, $perPage);
?>

<table border="1">
<tr>
    <th>Roll</th>
    <th>Name</th>
    <th>Trade</th>
    <th>State</th>
</tr>

<?php foreach($currentData as $row): ?>
<tr>
    <td><?= $row[0] ?></td>
    <td><?= $row[1] ?></td>
    <td><?= $row[2] ?></td>
    <td><?= $row[3] ?></td>
</tr>
<?php endforeach; ?>
</table>

<div class="pagination">

<!-- Previous Button -->
<?php if($page > 1): ?>
    <a href="?page=<?= $page-1 ?>">⬅ Prev</a>
<?php endif; ?>

<!-- Page Numbers -->
<?php
for($i=1; $i <= $totalPage; $i++):
    if($i == $page):
        echo "<strong>$i</strong>";
    else:
        echo "<a href='?page=$i'>$i</a>";
    endif;
endfor;
?>

<!-- Next Button -->
<?php if($page < $totalPage): ?>
    <a href="?page=<?= $page+1 ?>">Next ➡</a>
<?php endif; ?>

</div>

</body>
</html>