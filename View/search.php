 
<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doffft</title>
</head>
<body>
    
searc
    <form action="search.php" method="post">
search
<input type="text" name="search">
<input type="submit" name="submit">
    </form>
    <?php /*
$conn=mysqli_connect("localhost","root","","employee_management_system");
if(isset($_GET["submit"])){
$search=$_GET["search"];
$sql="SELECT * FROM department WHERE Dep_ID='$search'";
$result->mysqli_query($conn,$sql)or die("Query failed!");
if(mysqli_num_rows($result)> 0){
    $count=0;
    while($row=mysqli_fetch_assoc($result)){
       $count++ 
?>
    <?php echo"$count";?>
    <tr>
         <td><?php echo $row['Dep_ID'];?></td>
         <td><?php echo $row['DName'];?></td>
         <td><?php echo $row['Managers'];?></td>
         <td><?php echo $row['Employees'];?></td>
                 
           </tr>
</body>
</html>
<?php }}}*/?>
-->
<!DOCTYPE html>
<html>
<head>
	<title>Search Bar using PHP</title>
</head>
<body>

<form method="post">
<label>Search</label>
<input type="text" name="search">
<input type="submit" name="submit">
	
</form>

</body>
</html>

<?php /*

$con = new PDO("mysql:host=localhost;dbname=employee_management_system",'root','');
 

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM `employee` WHERE Employee_ID = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br><br><br>
		<table>
			<tr>
            <th>ID</th>
          <th>FName</th>
          <th>LName</th>
          <th>Dep_ID</th>
          <th>Dep_Name</th>
          <th>DOB</th>
          <th>sex</th>
          <th>PhoneNo</th>
          <th>Email</th>
          <th>JobTitle</th>
          <th>Address</th>
          <th>HireDate</th>
          <th>Salary</th>
			</tr>
			<tr>
            <td><?php echo $row->Employee_ID;?></td>
                  <td><?php echo $row->FirstName;?></td>
                  <td><?php echo $row->LastName;?></td>
                  <td><?php echo $row->Dep_ID;?></td>
                  <td><?php echo $row->Dep_Name;?></td>
                  <td><?php echo $row->DOB;?></td>
                  <td><?php echo $row->Gender;?></td>
                  <td><?php echo $row->PhoneNo;?></td>
                  <td><?php echo $row->Email;?></td>
                  <td><?php echo $row->JobTitle;?></td>
                  <td><?php echo $row->Address;?></td>
                  <td><?php echo $row->HireDate;?></td>
                  <td><?php echo $row->Salary;?></td>
			</tr>

		</table>
<?php 
	}
		
		
		else{
			echo "Employee Does not exist";
		}


}
*/
include('conn.php');
?>
<?php
 if (isset($_POST["submit"])) {
            $ID = $_POST["search"];
$sql="SELECT * FROM employee WHERE Employee_ID = '$ID'";
        $result=mysqli_query($conn,$sql);
        if($row=mysqli_fetch_assoc($result)){
                  ?>
<table>
    <tr>
          <th>ID</th>
          <th>FName</th>
          <th>LName</th>
          <th>Dep_ID</th>
          <th>Dep_Name</th>
          <th>DOB</th>
          <th>Sex</th>
          <th>PhoneNo</th>
          <th>Email</th>
          <th>JobTitle</th>
          <th>Address</th>
          <th>HireDate</th>
          <th>Salary</th>
          </tr>
          
         
            <tr>
                  <td><?php echo $row['Employee_ID'];?></td>
                  <td><?php echo $row['FirstName'];?></td>
                  <td><?php echo $row['LastName'];?></td>
                  <td><?php echo $row['Dep_ID'];?></td>
                  <td><?php echo $row['Dep_Name'];?></td>
                  <td><?php echo $row['DOB'];?></td>
                  <td><?php echo $row['Gender'];?></td>
                  <td><?php echo $row['PhoneNo'];?></td>
                  <td><?php echo $row['Email'];?></td>
                  <td><?php echo $row['JobTitle'];?></td>
                  <td><?php echo $row['Address'];?></td>
                  <td><?php echo $row['HireDate'];?></td>
                  <td><?php echo $row['Salary'];?></td>
                  
            </tr></table>
            <?php
            }
            else{
                echo "Employee Does not exist"; 
            }
        }
      
    
        ?>