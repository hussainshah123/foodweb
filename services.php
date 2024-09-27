<!DOCTYPE html>
<?php
include('topbar.php');
include('header.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Planner</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<link rel="stylesheet" href="services.css">
</head>
<body>

    <div class="container event-planner-section">
        <h2>Event Planner</h2>
        <div class="row">
            <!-- Birthday Party Box -->
            <div class="col-md-4">
                <div class="box">
                    <i class="fas fa-birthday-cake"></i>
                    <h3>Birthday Parties</h3>
                    <p>Celebrate birthdays with personalized decorations, cakes, and party favors. Let us make your special day unforgettable!</p>
                </div>
            </div>

            <!-- Wedding Planning Box -->
            <div class="col-md-4">
                <div class="box">
                    <i class="fas fa-ring"></i>
                    <h3>Wedding Planning</h3>
                    <p>From venue selection to catering and decor, we handle all the details to ensure your wedding day is perfect.</p>
                </div>
            </div>

            <!-- Themed Parties Box -->
            <div class="col-md-4">
                <div class="box">
                    <i class="fas fa-hat-cowboy"></i>
                    <h3>Themed Parties</h3>
                    <p>Create memorable events with themed decorations and activities tailored to your party’s unique theme.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
<?php include('footer.php')?>
