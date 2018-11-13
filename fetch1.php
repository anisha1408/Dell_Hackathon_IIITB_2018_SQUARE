<?php
//fetch.php

$connect = mysqli_connect("localhost", "root", "", "testing");
$columns = array('product_name','quantity_left','cost','curr_date','last_imp_date','bef_imp_qty','imp_qty','rate');

$query = "SELECT * FROM retailer ";

if(isset($_POST["search"]["value"]))
{
 $query .= '
 WHERE product_name LIKE "%'.$_POST["search"]["value"].'%" 
 OR rate LIKE "%'.$_POST["search"]["value"].'%" 
 ';
}

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' 
 ';
}
else
{
 $query .= 'ORDER BY id DESC ';
}

$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($connect, $query));

$result = mysqli_query($connect, $query . $query1);

$data = array();

while($row = mysqli_fetch_array($result))
{
 $sub_array = array();
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="part_id">' . $row["part_id"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="part_name">' . $row["part_name"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="size">' . $row["size"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="type">' . $row["type"] . '</div>';
$sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="quantity">' . $row["quantity"] . '</div>';
$sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="cost">' . $row["cost"] . '</div>';

 $sub_array[] = '<button type="button" name="edit" class="btn btn-success btn-xs  update edit" id="'.$row["id"].'">Save Changes</button>';
 $sub_array[] = '<button type="button" name="delete" class="btn btn-danger btn-xs delete" id="'.$row["id"].'">Delete</button>';
 $data[] = $sub_array;
}

function get_all_data($connect)
{
 $query = "SELECT * FROM supplier";
 $result = mysqli_query($connect, $query);
 return mysqli_num_rows($result);
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($connect),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);

?>



