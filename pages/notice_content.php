<!doctype html>
<?php
session_start();require ("../database/dbconnect.php");
$result = mysqli_query($connection, "select * from notice ORDER BY dateadded DESC");
if (mysqli_num_rows($result) > 0) 
{		
?> 


<style>
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

td {
word-wrap: break-word;
max-width: 150px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
</style>
<script src="../js/table.js"></script>
	
		<form method="POST" action="#">
	<table class="example table-autosort:0 table-stripeclass:alternate table-stripeclass:alternate" id="TABLE_4"   align="left" cellspacing="15" cellpadding="17">
		<thead><a id="myLink" href="javascript:void(0)" onclick="javascript:myLinkButtonClick();"><tr>
		<th ></th>
<th style="cursor:pointer" class="filterable table-sortable:default table-sortable" title="Click to sort"     align="left"><h2>Date of Entry</h2></th>
<th style="cursor:pointer" class="filterable table-sortable:default table-sortable" title="Click to sort"     align="left"><h2>Subject</h2></th>
<th style="cursor:pointer" class="filterable table-sortable:default table-sortable" title="Click to sort"     align="left"><h2>Type</h2></th>
<th style="cursor:pointer" class="filterable table-sortable:default table-sortable" title="Click to sort"     align="left"><h2>Date of Event</h2></th>
<th style="cursor:pointer" class="filterable table-sortable:default table-sortable" title="Click to sort"     align="left"><h2>Coordinator</h2></th>
<th style="cursor:not-allowed" align="left"><h2>Notice</h2></th>
</tr>



<tr>
		<th>Filter:</th>
		<th></th>
		<th><input name="filter" size="8" onkeyup="Table.filter(this,this)"></th>
		<th><input name="filter" size="8" onkeyup="Table.filter(this,this)"></th>
		<th></th>
		
		<!--th><select onchange="Table.filter(this,this)"><option value="">All</option><option value="s">s</option><option value="t">t</option><option value="a">a</option></select></th-->
		<th><input href="javascript:void(0)" onchange="javascript:myLinkButtonClick();"name="filter" size="8" onkeyup="Table.filter(this,this)"></th>
		<th></th>
		</a>
	</tr>





</thead><?php
$counting=1;
while($row = mysqli_fetch_assoc($result)) {
			
echo '<tr  > <td align="left">'.$counting.'</td><td align="left">' . $row['dateadded'] . '</td><td align="left">' .  
$row['subject'] . '</td><td align="left">' . 
$row['type'] . '</td><td align="left">' .   
$row['dateofevent'] . '</td><td align="left">' . 
$row['by'] . '</td><td>';
?>
        <button class="button">Click to Read</button>
<?php

echo '
</td></tr>';
$counting++;
}
echo '</table>';
		echo "<br>";
} 
else 
{
	echo "Couldn't issue database query<br />";
}
?>