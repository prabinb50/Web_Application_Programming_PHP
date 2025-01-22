<?php include 'header.php'; ?>
<?php include 'dbcon.php'; ?>

<!-- Table Section -->
<div class="card shadow-sm border-0">
    <div class="card-body">
        <h5 class="card-title text-secondary mb-3">Student Details</h5>

        <div class="table-responsive">
            <table class="table table-hover table-bordered align-middle">
                <thead class="table-primary">
                    <tr>
                        <th class="text-center">ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Age</th>
                    </tr>
                </thead>

                <tbody>

                    <!-- start: Read Data from Database -->
                    <?php 
                        $query = "select * from `student`";
                        $result = mysqli_query($connection, $query);

                        if (!$result){
                            die("Query failed: " . mysqli_error());
                        } else {
                            while($row =  mysqli_fetch_assoc($result)){
                                ?>
                                <tr>
                                    <td class="text-center"><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['first_name']; ?></td>
                                    <td><?php echo $row['last_name']; ?></td>
                                    <td><?php echo $row['age']; ?></td>
                                </tr>

                                <?php
                            }
                        }
                    ?>
                    <!-- end: Read Data from Database -->
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include ('footer.php'); ?>
