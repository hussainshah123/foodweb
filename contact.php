<!DOCTYPE html>
<?php
include('topbar.php');
include('header.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="services.php">
</head>
<body>
    <?php
    include 'conn.php';

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Collect and sanitize form data
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $phone = htmlspecialchars($_POST['phone']);
        $msg = htmlspecialchars($_POST['msg']);

        // Prepare the SQL statement
        $stmt = $conn->prepare("INSERT INTO contact (name, email, phone, msg) VALUES (?, ?, ?, ?)");

        // Check if the prepare statement was successful
        if ($stmt === false) {
            die("Error preparing the statement: " . $conn->error);
        }

        // Bind parameters (s for string types)
        $stmt->bind_param("ssss", $name, $email, $phone, $msg);

        // Execute the statement
        if ($stmt->execute()) {
            echo "<div class='alert alert-success'>Data inserted successfully</div>";
        } else {
            echo "<div class='alert alert-danger'>Error: " . $stmt->error . "</div>";
        }

        // Close the statement
        $stmt->close();
    }

    // Close the connection
    $conn->close();
    ?>

    <!-- Contact Form Section -->
    <div class="container contact-form-section">
        <h2>Contact Us</h2>
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="form-container">
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Your Phone Number" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" rows="4" name="msg" placeholder="Your Message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

<?php include('footer.php')?>
