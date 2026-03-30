<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor="lightblue">
    <center>
        <?php
        $soumo=array(
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
array("50","Aditya Verma","ECE","DELHI"),
array("51","Sribas","DCS","WB"),
array("52","Rinku","CSA","up"),
array("53","Rinku","CSA","UP"),
array("54","Rahul","IT","Delhi"),
array("55","Amit","CSE","Bihar"),
array("56","Sohan","ECE","Punjab"),
array("57","Riya","BCA","Kolkata"),
array("58","Priya","MCA","Mumbai"),
array("59","Ankit","CSE","Gujarat"),
array("60","Neha","IT","Chennai"),
array("61","Vikas","CSA","Rajasthan"),
array("62","Pooja","BBA","Haryana"),
array("63","Karan","MBA","UP"),
array("64","Simran","CSE","Delhi"),
array("65","Arjun","IT","Bihar"),
array("66","Meena","ECE","Punjab"),
array("67","Rohit","BCA","Kolkata"),
array("68","Sneha","MCA","Mumbai"),
array("69","Deepak","CSE","Gujarat"),
array("70","Kajal","IT","Chennai"),
array("71","Manish","CSA","Rajasthan"),
array("72","Nisha","BBA","Haryana"),
array("73","Suraj","MBA","UP"),
array("74","Anu","CSE","Delhi"),
array("75","Raj","IT","Bihar"),
array("76","Tina","ECE","Punjab"),
array("77","Sumit","BCA","Kolkata"),
array("78","Payal","MCA","Mumbai"),
array("79","Aman","CSE","Gujarat"),
array("80","Divya","IT","Chennai"),
array("81","Nitin","CSA","Rajasthan"),
array("82","Komal","BBA","Haryana"),
array("83","Varun","MBA","UP"),
array("84","Isha","CSE","Delhi"),
array("85","Ramesh","IT","Bihar"),
array("86","Geeta","ECE","Punjab"),
array("87","Akash","BCA","Kolkata"),
array("88","Suman","MCA","Mumbai"),
array("89","Harsh","CSE","Gujarat"),
array("90","Jyoti","IT","Chennai"),
array("91","Tarun","CSA","Rajasthan"),
array("92","Rekha","BBA","Haryana"),
array("93","Vivek","MBA","UP"),
array("94","Shreya","CSE","Delhi"),
array("95","Mukesh","IT","Bihar"),
array("96","Alka","ECE","Punjab"),
array("97","Gaurav","BCA","Kolkata"),
array("98","Ritu","MCA","Mumbai"),
array("99","Abhishek","CSE","Gujarat"),
array("100","Pinky","IT","Chennai")
        );
        $record=isset($_GET['record'])?$_GET['record']:1;
        $perpage=3;
        $tp=ceil(count($soumo)/$perpage);
        $sribas=($record-1)* $perpage;
        $Gobind=array_slice($soumo,$sribas,$perpage);
        ?>
        <table border="5">
            <tr>
                <th>Roll_No</th>
                    <th>Name</th>
                        <th>Trade</th>
                            <th>State</th>
</tr>
<?php
foreach ($Gobind as $sribas):
    ?>
    <tr align="middle">
        <td><?php echo $sribas[0] ?></td>
        <td><?php echo $sribas[1] ?></td>
        <td><?php echo $sribas[2] ?></td>
        <td><?php echo $sribas[3] ?></td>
</tr>
<?php endforeach;
?>
</table>
</center>

<div>
    <?php
    for ($a=1; $a <= $tp; $a++):
        ?>
        <?php
    if ($a==$record):?>
    <strong>
        <?php
        echo $a;
        ?>
        </strong>
        <?php
        else:
            ?>
            <a href="?record=<?php echo $a ?>">
                <?php echo $a;?></a>
                <?php
                endif;
                ?>
                <?php
                endfor;
                ?>
                </div>
    
</body>
</html>