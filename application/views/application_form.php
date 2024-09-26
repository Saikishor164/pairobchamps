<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form - PAI ROBO CHAMPS 2024</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-5">Registration Form for PAI ROBO CHAMPS Competition 2024</h1>
        <form method="post" action="<?php echo base_url('FormController/submit'); ?>">

            <!-- Section One: School Details -->
            <h3>Section One: School Details</h3>
            <div class="form-group">
                <label for="school_name">School Name:</label>
                <input type="text" class="form-control" id="school_name" name="school_name" required>
            </div>
            <div class="form-group">
                <label for="principal_name">Principal Name:</label>
                <input type="text" class="form-control" id="principal_name" name="principal_name" required>
            </div>
            <div class="form-group">
                <label for="school_address">School Address:</label>
                <textarea class="form-control" id="school_address" name="school_address" required></textarea>
            </div>
            <div class="form-group">
                <label for="contact_no">Contact No:</label>
                <input type="text" class="form-control" id="contact_no" name="contact_no" required>
            </div>
            <div class="form-group">
                <label for="mobile_no">Mobile No:</label>
                <input type="text" class="form-control" id="mobile_no" name="mobile_no" required>
            </div>
            <div class="form-group">
                <label for="school_telephone">School Telephone No:</label>
                <input type="text" class="form-control" id="school_telephone" name="school_telephone">
            </div>

            <!-- Section Two: Participant's Details -->
            <h3>Section Two: Participant's Details</h3>
            <?php for ($i = 1; $i <= 5; $i++) : ?>
                <h5>Participant <?php echo $i; ?></h5>
                <div class="form-group">
                    <label for="participant_name_<?php echo $i; ?>">Name:</label>
                    <input type="text" class="form-control" id="participant_name_<?php echo $i; ?>" name="participant_name_<?php echo $i; ?>" required>
                </div>
                <div class="form-group">
                    <label for="participant_std_<?php echo $i; ?>">Standard:</label>
                    <input type="text" class="form-control" id="participant_std_<?php echo $i; ?>" name="participant_std_<?php echo $i; ?>" required>
                </div>
                <div class="form-group">
                    <label for="participant_contact_<?php echo $i; ?>">Contact No:</label>
                    <input type="text" class="form-control" id="participant_contact_<?php echo $i; ?>" name="participant_contact_<?php echo $i; ?>" required>
                </div>
            <?php endfor; ?>

            <!-- Mentor Details -->
            <h5>Mentor</h5>
            <div class="form-group">
                <label for="mentor_name">Mentor Name:</label>
                <input type="text" class="form-control" id="mentor_name" name="mentor_name" required>
            </div>
            <div class="form-group">
                <label for="mentor_contact">Mentor Contact No:</label>
                <input type="text" class="form-control" id="mentor_contact" name="mentor_contact" required>
            </div>

            <!-- Submit and Reset Buttons -->
            <button type="submit" class="btn btn-primary">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp; 
            <button type="reset" class="btn btn-secondary">Reset</button>
            <br>
            <br>
            <br>
        </form>
    </div>

    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
</body>
</html>
