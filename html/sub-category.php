<?php
 
    // $conn = mysqli_connect('localhost','root','','adda_backend');
    include 'login/database/_dbconnect.php';  
    $category_id = $_POST["category_id"];
 
    $result = mysqli_query($conn, "SELECT * FROM products where category_id = $category_id");
?>
 
<option value="">Select Product Sub-Category</option>
<?php
while($row = mysqli_fetch_array($result)) {
?>
    <option value="<?php echo $row["id"];?>"><?php echo $row["title"];?></option>
<?php
}
?>