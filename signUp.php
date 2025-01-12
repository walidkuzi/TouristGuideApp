<?php
// Start the session (if required for session management)
session_start();

// Database connection details
$servername = "localhost"; // Change if necessary
$username = "root"; // Change to your MySQL username
$password = ""; // Change to your MySQL password
$dbname = "touristguide_website"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $fullName = mysqli_real_escape_string($conn, $_POST['fullName']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Basic validation: Check if fields are empty
    if (empty($fullName) || empty($email) || empty($password)) {
        echo "All fields are required!";
        exit();
    }

    // Hash the password (to store it securely in the database)
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Check if email already exists in the database
    $checkEmailQuery = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($checkEmailQuery);
    if ($result->num_rows > 0) {
        echo "Email is already registered!";
        exit();
    }

    // Insert data into the users table
    $sql = "INSERT INTO users (full_name, email, password) VALUES ('$fullName', '$email', '$hashedPassword')";
    if ($conn->query($sql) === TRUE) {
        echo "Sign-up successful!";
        // Redirect to the login page after successful sign-up
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="initial-scale=1, width=device-width" />
        <title>Sign Up</title>
        <link rel="stylesheet" href="./signUp.css" />
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua:wght@700&display=swap"
        />
    </head>
    <body>
        <div class="signup">
            <div class="login-box">
                <div class="login-box-child"></div>
                <div class="sign-up-wrapper">
                    <b class="sign-up">Sign up</b>
                </div>

                <!-- Sign-Up Form -->
                <form id="signupForm" action="signup_process.php" method="POST">
                    <!-- Full Name -->
                    <label for="fullName" class="full-name-label"
                        >Full Name</label
                    >
                    <input
                        type="text"
                        id="fullName"
                        name="fullName"
                        placeholder="Enter Your Name"
                        required
                    />

                    <!-- Email -->
                    <label for="email" class="email-label">Email</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Enter Your Email"
                        required
                    />

                    <!-- Password -->
                    <label for="password" class="password-label"
                        >Password</label
                    >
                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Enter Password"
                        required
                    />

                    <!-- Submit Button -->
                    <button type="submit"  class="signup-button" onclick="redirectToPage()">Sign Up</button>
                </form>

                <!-- Have an Account -->
                <b class="have-an-account-container" id="haveAnAccount">
                    <span class="have-an-account-container1">
                        <span>Have an account?</span>
                        <span class="login" id="loginNow"> Login </span>
                    </span>
                </b>
            </div>
        </div>

        <script>
            // Handle "Have an account? Login" click
            var haveAnAccount = document.getElementById("haveAnAccount");
            if (haveAnAccount) {
                haveAnAccount.addEventListener("click", function (e) {
                    e.preventDefault();

                    // Redirect to login page
                    window.location.href = "login.php";
                });
            }

            // Handle Sign-Up Form Submission
            var signupForm = document.getElementById("signupForm");
            if (signupForm) {
                signupForm.addEventListener("submit", function (e) {
                    e.preventDefault(); // Prevent default form submission

                    // Get form values
                    var fullName = document
                        .getElementById("fullName")
                        .value.trim();
                    var email = document.getElementById("email").value.trim();
                    var password = document
                        .getElementById("password")
                        .value.trim();

                    // Perform basic validation
                    if (fullName === "" || email === "" || password === "") {
                        alert("All fields are required.");
                        return;
                    }

                    // Display a success message or proceed with form submission
                    alert("Sign-Up Successful!");
                   
                    window.location.href = "Dashboard.php";

                    // Proceed with actual submission
                });
            
   
            }
        </script>
    </body>
</html>
