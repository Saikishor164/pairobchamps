<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
</head>
<body>
    <div class="container">
        <h2 class="text-center mt-5">School Details</h2>
        <a href="<?php echo base_url('AdminController/dashboard'); ?>" class="btn btn-primary">Back to Dashboard</a>
        <h3>School Information</h3>
        <table class="table table-bordered">
            <tr>
                <th>School Name:</th>
                <td><?php echo $school['school_name']; ?></td>
            </tr>
            <tr>
                <th>Principal Name:</th>
                <td><?php echo $school['principal_name']; ?></td>
            </tr>
            <tr>
                <th>School Address:</th>
                <td><?php echo $school['school_address']; ?></td>
            </tr>
            <tr>
                <th>Contact No:</th>
                <td><?php echo $school['contact_no']; ?></td>
            </tr>
            <tr>
                <th>Mobile No:</th>
                <td><?php echo $school['mobile_no']; ?></td>
            </tr>
            <tr>
                <th>School Telephone No:</th>
                <td><?php echo $school['school_telephone']; ?></td>
            </tr>
            <tr>
                <th>Mentor Name:</th>
                <td><?php echo $school['mentor_name']; ?></td>
            </tr>
            <tr>
                <th>Mentor Contact No:</th>
                <td><?php echo $school['mentor_contact']; ?></td>
            </tr>
        </table>

        <h3>Participants' Information</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Participant Name</th>
                    <th>Standard</th>
                    <th>Contact No</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($participants as $participant): ?>
                    <tr>
                        <td><?php echo $participant['name']; ?></td>
                        <td><?php echo $participant['std']; ?></td>
                        <td><?php echo $participant['contact_no']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <button class="btn btn-success" onclick="window.print()">Print Page</button>
    </div>
</body>
</html>
