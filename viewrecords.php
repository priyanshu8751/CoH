<?php $title="Patient Info";
    include 'includes/header.php';
    include 'includes/auth_check.php';
    require_once 'Database/conn.php';
    $result=$crud->getPatients();
    echo'</br>';
?>
    <table class="table table-striped">
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Date Of Birth</th>
            <th>Sex</th>
            <th>Phone Number</th>
            <th>Email Id</th>
            <th>Symptoms</th>
            <th>Allergies</th>
            <th>Actions</th>
        </tr>
        <?php
            while($r=$result->fetch(PDO::FETCH_ASSOC))
            { ?><!--Opening in this php tag-->
            <tr>
                <td><?php echo $r['PId']?></td>
                <td><?php echo $r['firstname']?></td>
                <td><?php echo $r['lastname']?></td>
                <td><?php echo $r['D']."/".$r['M']."/".$r['Y']?></td>
                <td><?php echo $r['sex']?></td>
                <td><?php echo $r['phno']?></td>
                <td><?php echo $r['email']?></td>
                <td><?php echo $r['symptoms']?></td>
                <td><?php echo $r['allergies']?></td>
                <td>
                    <a href=" view.php?id=<?php echo $r['PId']?>"  class="btn btn-primary">View<a>
                    <a href=" delete.php?id=<?php echo $r['PId']?>"  class="btn btn-danger">Delete<a>
                    
                </td>

            </tr>

        <?php } ?><!--closing while loop-->
    </table>
<?php
    return 'includes/footer.php';
?>