<?php
include 'admin.php'; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="description_style.css">
</head>
<body>
<div class="movie_details">
<h2 id="heading"><centre>Registered Users</centre> </h2>
<br>
    <table>
        <tr>
            <th>Login ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Created</th>
        </tr>
<?php
        $qry1=mysqli_query($conn,"SELECT * FROM users ");
        while($users=mysqli_fetch_array($qry1)){
        ?>
        <tr>
            <td><?php echo $users['id'];?></td>
            <td><?php echo $users['name'];?></td>
            <td><?php echo $users['email'];?></td>
            <td><?php echo $users['created_at'];?></td>
        </tr>
        <?php
        }
        ?>
    </div>
    </table>
</body>
</html>