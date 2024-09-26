<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
  background-color: rgba(0, 0, 0, 0.8);
}

.page--popup {
  position: fixed;
  width: 100%;
  max-width: 400px;
  padding: 48px 30px;
  background-color: #fff;
  border-radius: 5px;
  top: 50%;
  left: 50%;
  transform: translate3d(-50%, -50%, 0);
  text-align: center;
  transition: 0.3s all ease;
}
 
.popup--title {
  color: #4994FC;
  font-weight: bold;
  line-height: 32px;
  margin-top: 0;
  margin-bottom: 8px;
}

.popup--subtitle {
  color: #4994FC;
  line-height: 24px;
  margin-top: 0;
  margin-bottom: 24px;
}

.popup--note {
  font-size: 12px;
  line-height: 18px;
}

a.btn.button {
  display: inline-block;
  line-height: 40px;
  height: 40px;
  text-transform: none;
  font-weight: normal;
}

    </style>
</head>
<body>
<div class="payment-success-popup page--popup" id="payment-success">
  <svg width="64px" height="64px" viewBox="0 0 64 64">
      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g id="Get-Started" transform="translate(-688.000000, -621.000000)">
              <g id="Group-11" transform="translate(470.000000, 573.000000)">
                  <g id="Group-2" transform="translate(218.000000, 48.000000)">
                      <path d="M54.625,9.375 C48.374968,3.124968 40.833376,0 32,0 C23.166624,0 15.625032,3.124968 9.375,9.375 C3.1249688,15.625032 0,23.166624 0,32 C0,40.833376 3.1249688,48.374968 9.375,54.625 C15.625032,60.8750312 23.166624,64 32,64 C40.833376,64 48.374968,60.8750312 54.625,54.625 C60.875032,48.374968 64,40.833376 64,32 C64,23.166624 60.875032,15.625032 54.625,9.375 Z M51.75,51.875 C46.333304,57.2916936 39.770872,60 32.062496,60 C24.354128,60 17.750024,57.2708608 12.25,51.812496 C6.7499728,46.354136 4,39.75004 4,32 C4,24.24996 6.7499728,17.645864 12.25,12.187504 C17.750024,6.729136 24.354128,4 32.062496,4 C39.770872,4 46.354136,6.729136 51.812496,12.187504 C57.270864,17.645864 60,24.24996 60,32 C60,39.75004 57.250024,46.374976 51.75,51.875 Z" id="Page-1" fill="#ECF6FF"></path>
                      <path d="M47.25,21 C47.083336,20.25 46.687504,19.666672 46.062496,19.25 C45.437496,18.833328 44.75,18.708336 44,18.875 C43.25,19.041664 42.625,19.458328 42.125,20.125 L28.625,40.75 L22.25,34.75 C21.666664,34.25 20.979168,34 20.187504,34 C19.395832,34 18.75,34.291664 18.25,34.875 C17.75,35.458336 17.520832,36.145832 17.562496,36.937504 C17.604168,37.729168 17.875,38.375 18.375,38.875 L27.375,47.125 C27.375,47.125 27.395832,47.145832 27.437504,47.187504 C27.479168,47.229168 27.520832,47.270832 27.562496,47.312496 C27.604168,47.354168 27.625,47.375 27.625,47.375 C27.708336,47.375 27.791664,47.395832 27.875,47.437504 C27.958336,47.479168 28,47.5 28,47.5 C28.25,47.583336 28.416664,47.666664 28.5,47.75 C28.666664,47.75 28.833336,47.75 29,47.75 C29.25,47.833336 29.458336,47.833336 29.625,47.75 C29.708336,47.75 29.791664,47.75 29.875,47.75 C30.208336,47.666664 30.5,47.541664 30.75,47.375 C30.75,47.375 30.791664,47.333336 30.875,47.25 C31.125,47.083336 31.270832,46.979168 31.312496,46.937504 C31.354168,46.895832 31.395832,46.833336 31.437504,46.75 C31.479168,46.666664 31.5,46.625 31.5,46.625 L46.875,23.125 C47.291672,22.458328 47.416664,21.75 47.25,21 Z" id="Path" fill="#7ED321"></path>
                  </g>
              </g>
          </g>
      </g>
  </svg>
  <h2 class="popup--title">Thank you!</h2>
  <!-- <p class="popup--subtitle">Your application was succesfully submitted</p> -->
  <p>Your application has been submitted successfully.</p>
        <!-- <?php if (isset($school_id)): ?>
            <p>Your School ID is: <strong><?php echo $school_id; ?></strong></p>
        <?php else: ?>
            <p>Unable to retrieve School ID.</p>
        <?php endif; ?> -->
        <a href="<?php echo base_url(''); ?>" class="btn btn-primary">Go Back to Application Form</a>
  <!-- <a href="http://ictacdemypune.com/pairobochamps/" class="btn button m-button">Return to Home</a> -->
</div>
</body>
</html>