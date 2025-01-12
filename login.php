<?php
// Include database connection
include('db.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input data to prevent SQL injection
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Hash password before checking (Optional if you store passwords as hashed values)
    // $password = md5($password); // Or use password_hash for better security

    // SQL query to check if user exists in the database
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";

    // Execute the query
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User found, proceed to login (you may want to set session variables here)
        session_start();
        $_SESSION['email'] = $email;
        header("Location: dashboard.php"); // Redirect to the user dashboard
        exit();
    } else {
        // Invalid credentials
        $error_message = "Invalid email or password.";
    }
}

// Close the database connection
$conn->close();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="initial-scale=1, width=device-width" />
        <title>Login</title>
        <link rel="stylesheet" href="./login.css" />
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Inknut Antiqua:wght@700&display=swap"
        />
    </head>
    <body>
        <div class="login">
            <div class="login-box">
                <div class="login-box-child"></div>
                <div class="login-wrapper">
                    <b class="login1">Login</b>
                </div>

                <!-- Login Form -->
                <form action="dashboard.php" method="POST">
                    <!-- Email Field -->
                    <label for="email" class="email-label">Email</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        class="component-18-icon"
                        placeholder="Enter Your Email"
                        required
                    />

                    <!-- Password Field -->
                    <label for="password" class="password-label"
                        >Password</label
                    >
                    <input
                        type="password"
                        id="password"
                        name="password"
                        class="component-19-icon"
                        placeholder="Enter Password"
                        required
                    />

                    <!-- Forgot Password Link -->
                    <b class="forgot-password">
                        <a href="forgot_password.html">Forgot Password?</a>
                    </b>

                    <!-- Submit Button -->
                    <div class="component-20">
                        <button type="submit" class="component-20-child">
                            Login
                        </button>
                    </div>
                </form>

                <!-- Sign-Up Link -->
                <b class="dont-have-an-container" id="dontHaveAn">
                    <span class="dont-have-an-container1">
                        <span>Don’t have an account?</span>
                        <a href="signup.php" class="sign-up-now"
                            >Sign up Now</a
                        >
                    </span>
                </b>
            </div>
        </div>
        <script>
            var dontHaveAn = document.getElementById("dontHaveAn");
            if (dontHaveAn) {
                dontHaveAn.addEventListener("click", function (e) {
                    // Add your code here
                });
            }
        </script>
    </body>
</html>
