<?php
// Process contact form submissions
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Get and sanitize form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $service = htmlspecialchars(trim($_POST['service']));
    $message = htmlspecialchars(trim($_POST['message']));
    $timestamp = date('Y-m-d H:i:s');

    // Validate required fields
    $errors = [];
    
    if (empty($name)) {
        $errors[] = "Name is required";
    }
    
    if (empty($email)) {
        $errors[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }
    
    if (empty($service)) {
        $errors[] = "Please select a service";
    }
    
    if (empty($message)) {
        $errors[] = "Message is required";
    }

    // If there are errors, show them
    if (!empty($errors)) {
        showErrorPage($errors);
        exit;
    }

    // Prepare data for CSV
    $formData = [
        $timestamp,
        $name,
        $email,
        $phone,
        $service,
        $message
    ];

    // Save to CSV file
    $filename = 'contact-inquiries.csv';

    // Create file with headers if it doesn't exist
    if (!file_exists($filename)) {
        $header = ["Timestamp", "Name", "Email", "Phone", "Service", "Message"];
        file_put_contents($filename, implode(',', $header) . "\n");
    }

    // Append new inquiry with proper formatting
    $csvLine = [
        $timestamp,
        $name,
        $email,
        $phone,
        $service,
        $message
    ];

    // Use file_put_contents instead of fopen/fputcsv to avoid locking issues
    $data = '"' . implode('","', $csvLine) . '"' . "\n";
    file_put_contents($filename, $data, FILE_APPEND | LOCK_EX);

    // Show success page
    showSuccessPage($name);
    
} else {
    // If someone tries to access this page directly
    header("Location: pages/home.php");
    exit;
}

function showSuccessPage($name) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Thank You - The Wood Work</title>
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <div style="min-height: 100vh; display: flex; align-items: center; justify-content: center; background: #f8f9fa;">
            <div style="background: white; padding: 3rem; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); text-align: center; max-width: 500px;">
                <div style="font-size: 4rem; margin-bottom: 1rem;">✅</div>
                <h1 style="color: #2c3e50; margin-bottom: 1rem;">Thank You, <?php echo $name; ?>!</h1>
                <p style="color: #666; margin-bottom: 2rem; line-height: 1.6;">
                    Your message has been received. We'll get back to you within 24 hours to discuss your <?php echo htmlspecialchars($_POST['service']); ?> project.
                </p>
                <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                    <a href="pages/home.php" style="background: #d4af37; color: white; padding: 12px 24px; text-decoration: none; border-radius: 5px; font-weight: bold;">
                        Back to Home
                    </a>
                    <a href="pages/contact.php" style="background: #2c3e50; color: white; padding: 12px 24px; text-decoration: none; border-radius: 5px; font-weight: bold;">
                        Send Another Message
                    </a>
                </div>
            </div>
        </div>
    </body>
    </html>
    <?php
}

function showErrorPage($errors) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Error - The Wood Work</title>
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <div style="min-height: 100vh; display: flex; align-items: center; justify-content: center; background: #f8f9fa;">
            <div style="background: white; padding: 3rem; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); text-align: center; max-width: 500px;">
                <div style="font-size: 4rem; margin-bottom: 1rem;">❌</div>
                <h1 style="color: #e74c3c; margin-bottom: 1rem;">Please Fix Errors</h1>
                <div style="text-align: left; background: #fff5f5; padding: 1.5rem; border-radius: 5px; margin-bottom: 2rem;">
                    <ul style="color: #e74c3c;">
                        <?php foreach ($errors as $error): ?>
                            <li><?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <a href="pages/contact.php" style="background: #d4af37; color: white; padding: 12px 24px; text-decoration: none; border-radius: 5px; font-weight: bold;">
                    Back to Contact Form
                </a>
            </div>
        </div>
    </body>
    </html>
    <?php
}
?>