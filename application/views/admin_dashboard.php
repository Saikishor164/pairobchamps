<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>"> -->
</head>
<body>
    <div class="container">
        <h2 class="text-center mt-5">Admin Dashboard</h2>
        <a href="<?php echo base_url('AdminController/logout'); ?>" class="btn btn-danger float-right">Logout</a>
        <h3>School Entries</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>School Name</th>
                    <th>Principal Name</th>
                    <th>Contact No</th>
                    <th>Mobile No</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($schools as $school): ?>
                    <tr>
                        <td><?php echo $school['school_name']; ?></td>
                        <td><?php echo $school['principal_name']; ?></td>
                        <td><?php echo $school['contact_no']; ?></td>
                        <td><?php echo $school['mobile_no']; ?></td>
                        <td>
                            <a href="<?php echo base_url('AdminController/view_school/'.$school['id']); ?>" class="btn btn-info">View Details</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
