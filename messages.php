<?php

$conn = mysqli_connect("localhost", "root", "", "contact_form") or die("connection failed");

?>


<table>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Subject</th>
    <th>Message</th>

    <?php
    
    
    $sql = "SELECT * from contact_table";
    $query = mysqli_query($conn, $sql);
    while ($info = mysqli_fetch_array($query)){
        ?>

        <tr>
            <td><?php echo $info ['first_name'];?></td>
            <td><?php echo $info ['last_name'];?></td>
            <td><?php echo $info ['email'];?></td>
            <td><?php echo $info ['subject'];?></td>
            <td><?php echo $info ['message'];?></td>
        </tr>
        <?php
    }
    
    ?>


</table>
