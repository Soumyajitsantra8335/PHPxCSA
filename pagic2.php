<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pagination Mixed</title>
    <style>
        body.soumo {
            background: #eef;
        }
        table {
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background: black;
            color: white;
        }
        .pagination {
            text-align: center;
            margin-top: 15px;
        }
        .pagination a, .pagination strong {
            padding: 6px 10px;
            margin: 3px;
            text-decoration: none;
            border-radius: 5px;
        }
        .pagination a {
            background: lightblue;
        }
        .pagination strong {
            background: orange;
            color: white;
        }
    </style>
</head>

<body class="soumo">

<center>
<?php
// 👉 Tumhara original array (same)
$soumo = array(
    array("1","Soumo das","CSA","West Bengal"),
    array("2","Satyarth Kumar","CSE","BIHAR"),
    array("3","Sribas Das","CSA","WEST BENGAL"),
    array("4","Bikash Santra","CSA","WEST BENGAL"),
    array("5","Tamal Santra","CSA","UTTAR PRADESH"),
    array("6","Soumi Dolui","CSA","MADHYA PRADESH"),
    array("7","Amit Sharma","CSE","DELHI"),
    array("8","Priya Singh","ECE","PUNJAB"),
    array("9","Riya Das","CSA","ASSAM"),
    array("10","Ankit Verma","CSE","RAJASTHAN"),
    array("11","Neha Gupta","ECE","HARYANA"),
    array("12","Arjun Roy","CSA","WEST BENGAL"),
    array("13","Kiran Patel","CSE","GUJARAT"),
    array("14","Pooja Kumari","ECE","BIHAR"),
    array("15","Vikram Singh","CSA","UTTAR PRADESH"),
    array("16","Suman Das","CSE","WEST BENGAL"),
    array("17","Deepak Yadav","ECE","BIHAR"),
    array("18","Rohit Sharma","CSA","DELHI"),
    array("19","Sneha Roy","CSE","WEST BENGAL"),
    array("20","Aakash Singh","ECE","UTTAR PRADESH"),
    array("21","Nitu Kumari","CSA","BIHAR"),
    array("22","Manish Gupta","CSE","RAJASTHAN"),
    array("23","Komal Verma","ECE","DELHI"),
    array("24","Anjali Das","CSA","ASSAM"),
    array("25","Sumit Kumar","CSE","BIHAR"),
    array("26","Rakesh Singh","ECE","PUNJAB"),
    array("27","Payal Roy","CSA","WEST BENGAL"),
    array("28","Tarun Sharma","CSE","HARYANA"),
    array("29","Divya Patel","ECE","GUJARAT"),
    array("30","Nikhil Yadav","CSA","UTTAR PRADESH"),
    array("31","Meena Kumari","CSE","BIHAR"),
    array("32","Rajesh Das","ECE","ASSAM"),
    array("33","Sonu Singh","CSA","DELHI"),
    array("34","Kajal Roy","CSE","WEST BENGAL"),
    array("35","Alok Kumar","ECE","BIHAR"),
    array("36","Rekha Sharma","CSA","RAJASTHAN"),
    array("37","Vivek Gupta","CSE","DELHI"),
    array("38","Soniya Verma","ECE","HARYANA"),
    array("39","Pankaj Das","CSA","ASSAM"),
    array("40","Ritu Singh","CSE","PUNJAB"),
    array("41","Gaurav Yadav","ECE","UTTAR PRADESH"),
    array("42","Shreya Roy","CSA","WEST BENGAL"),
    array("43","Abhishek Kumar","CSE","BIHAR"),
    array("44","Monika Sharma","ECE","DELHI"),
    array("45","Sourav Das","CSA","WEST BENGAL"),
    array("46","Naveen Singh","CSE","RAJASTHAN"),
    array("47","Tina Roy","ECE","ASSAM"),
    array("48","Harsh Kumar","CSA","BIHAR"),
    array("49","Simran Kaur","CSE","PUNJAB"),
    array("50","Aditya Verma","ECE","DELHI")
);

// ✅ FIXED GET
$page = isset($_GET['record']) ? (int)$_GET['record'] : 1;
$perPage = 5;

$total = count($soumo);
$totalPage = ceil($total / $perPage);

// ✅ page limit
if($page < 1) $page = 1;
if($page > $totalPage) $page = $totalPage;

// slicing
$start = ($page - 1) * $perPage;
$currentData = array_slice($soumo, $start, $perPage);
?>

<table border="1">
<tr>
    <th>Roll_No</th>
    <th>Name</th>
    <th>Trade</th>
    <th>State</th>
</tr>

<?php foreach ($currentData as $row): ?>
<tr>
    <td><?= $row[0] ?></td>
    <td><?= $row[1] ?></td>
    <td><?= $row[2] ?></td>
    <td><?= $row[3] ?></td>
</tr>
<?php endforeach; ?>

</table>

</center>

<div class="pagination">

<!-- Prev -->
<?php if($page > 1): ?>
    <a href="?record=<?= $page-1 ?>">⬅ Prev</a>
<?php endif; ?>

<!-- Page Numbers -->
<?php
for($i=1; $i <= $totalPage; $i++):
    if($i == $page):
        echo "<strong>$i</strong>";
    else:
        echo "<a href='?record=$i'>$i</a>";
    endif;
endfor;
?>

<!-- Next -->
<?php if($page < $totalPage): ?>
    <a href="?record=<?= $page+1 ?>">Next ➡</a>
<?php endif; ?>

</div>

</body>
</html>