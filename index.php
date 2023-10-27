<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="linkPage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        /* Your other styles here */

        /* Define custom animation classes for h1 elements */
        .custom-animation1 {
            animation: customAnimation1 1s ease-in-out forwards;
        }

        .custom-animation2 {
            animation: customAnimation2 1s ease-in-out forwards;
        }

        /* Keyframes for custom animations */
        @keyframes customAnimation1 {
            0% {
                opacity: 0;
                transform: translateX(-100%);
            }
            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes customAnimation2 {
            0% {
                opacity: 1;
                transform: translateY(-50px);
            }
            100% {
                opacity: 0;
                transform: translateY(0);
            }
        }
    </style>
    <title>Payment Page</title>
</head>
<body>
    <h1>Welcome to the Payment Page</h1>
    <p>Click the button below to proceed with your payment:</p>
    <a href="PayWaypage.php" class="button">Pay Now</a>
</body>
</html>
