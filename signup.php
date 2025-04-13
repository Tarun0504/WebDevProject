<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $email = $password = $confirm_password = "";
$username_err = $email_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate email
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter an email.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE email = ?";
        
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            // Set parameters
            $param_email = trim($_POST["email"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $email_err = "This email is already registered.";
                } else{
                    $email = trim($_POST["email"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have at least 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($email_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
         
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_username, $param_email, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_email = $email;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($conn);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - SocialFund</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            dark: '#0a2342', // dark blue
                            DEFAULT: '#134074',
                            light: '#13678a',
                        },
                        secondary: {
                            dark: '#1a936f', // green
                            DEFAULT: '#45c4b0',
                            light: '#9cf6f6',
                        }
                    }
                }
            }
        }
    </script>
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen flex flex-col">
    <!-- Navigation Bar - Same as index.html -->
    <nav class="bg-primary-dark text-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <i class="fas fa-seedling text-secondary-DEFAULT mr-2 text-2xl"></i>
                        <span class="font-bold text-xl">SocialFund</span>
                    </div>
                    <div class="hidden md:ml-6 md:flex md:items-center md:space-x-4">
                        <a href="index.php" class="px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-primary-light">Home</a>
                        <a href="discover.php" class="px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-primary-light">Discover</a>
                        <a href="start-project.php" class="px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-primary-light">Start a Project</a>
                        <a href="how-it-works.php" class="px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-primary-light">How It Works</a>
                        <a href="about.php" class="px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-primary-light">About Us</a>
                    </div>
                </div>
                <div class="hidden md:flex items-center">
                    <a href="login.php" class="px-4 py-2 text-sm font-medium text-white hover:bg-primary-light rounded-md">Log In</a>
                    <a href="signup.php" class="ml-4 px-4 py-2 text-sm font-medium text-white bg-secondary-dark hover:bg-secondary rounded-md">Sign Up</a>
                </div>
                <div class="flex items-center md:hidden">
                    <button type="button" class="mobile-menu-button inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-primary-light focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                        <span class="sr-only">Open main menu</span>
                        <i class="fas fa-bars text-white text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="md:hidden mobile-menu hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="index.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-primary-light">Home</a>
                <a href="discover.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-primary-light">Discover</a>
                <a href="start-project.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-primary-light">Start a Project</a>
                <a href="how-it-works.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-primary-light">How It Works</a>
                <a href="about.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-primary-light">About Us</a>
                <div class="border-t border-gray-700 pt-4 pb-3 mt-3">
                    <a href="login.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-primary-light">Log In</a>
                    <a href="signup.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-primary-light">Sign Up</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Signup Form -->
    <div class="flex-grow flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full bg-white rounded-lg shadow-lg p-8">
            <div class="text-center">
                <h2 class="text-3xl font-bold text-primary-dark">Create an Account</h2>
                <p class="mt-2 text-gray-600">Join our community of changemakers</p>
            </div>
            <form class="mt-8 space-y-6" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div>
                    <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                    <input type="text" name="username" id="username" value="<?php echo $username; ?>" class="mt-1 focus:ring-secondary-dark focus:border-secondary-dark block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2 border <?php echo (!empty($username_err)) ? 'border-red-500' : ''; ?>">
                    <span class="text-red-500 text-xs"><?php echo $username_err; ?></span>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                    <input type="email" name="email" id="email" value="<?php echo $email; ?>" class="mt-1 focus:ring-secondary-dark focus:border-secondary-dark block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2 border <?php echo (!empty($email_err)) ? 'border-red-500' : ''; ?>">
                    <span class="text-red-500 text-xs"><?php echo $email_err; ?></span>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password" id="password" class="mt-1 focus:ring-secondary-dark focus:border-secondary-dark block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2 border <?php echo (!empty($password_err)) ? 'border-red-500' : ''; ?>">
                    <span class="text-red-500 text-xs"><?php echo $password_err; ?></span>
                </div>

                <div>
                    <label for="confirm_password" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                    <input type="password" name="confirm_password" id="confirm_password" class="mt-1 focus:ring-secondary-dark focus:border-secondary-dark block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2 border <?php echo (!empty($confirm_password_err)) ? 'border-red-500' : ''; ?>">
                    <span class="text-red-500 text-xs"><?php echo $confirm_password_err; ?></span>
                </div>

                <div>
                    <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-secondary-dark hover:bg-secondary focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-secondary-dark">
                        Create Account
                    </button>
                </div>

                <div class="text-center text-sm">
                    <p class="text-gray-600">
                        Already have an account? <a href="login.php" class="font-medium text-secondary-dark hover:text-secondary">Log in</a>
                    </p>
                </div>
            </form>
        </div>
    </div>

    <!-- Footer - Same as index.html -->
    <footer class="bg-primary text-white pt-12 pb-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                <div>
                    <div class="flex items-center mb-4">
                        <i class="fas fa-seedling text-secondary-DEFAULT mr-2 text-2xl"></i>
                        <span class="font-bold text-xl">SocialFund</span>
                    </div>
                    <p class="text-gray-300">Connecting social initiatives with supporters to create positive change in communities worldwide.</p>
                    <div class="flex mt-4 space-x-4">
                        <a href="#" class="text-gray-300 hover:text-white">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="index.php" class="text-gray-300 hover:text-white">Home</a></li>
                        <li><a href="discover.php" class="text-gray-300 hover:text-white">Discover Projects</a></li>
                        <li><a href="start-project.php" class="text-gray-300 hover:text-white">Start a Project</a></li>
                        <li><a href="how-it-works.php" class="text-gray-300 hover:text-white">How It Works</a></li>
                        <li><a href="about.php" class="text-gray-300 hover:text-white">About Us</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Resources</h3>
                    <ul class="space-y-2">
                        <li><a href="faq.php" class="text-gray-300 hover:text-white">FAQ</a></li>
                        <li><a href="blog.php" class="text-gray-300 hover:text-white">Blog</a></li>
                        <li><a href="success-stories.php" class="text-gray-300 hover:text-white">Success Stories</a></li>
                        <li><a href="guidelines.php" class="text-gray-300 hover:text-white">Project Guidelines</a></li>
                        <li><a href="contact.php" class="text-gray-300 hover:text-white">Contact Us</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Subscribe</h3>
                    <p class="text-gray-300 mb-4">Stay updated with the latest projects and news.</p>
                    <form class="flex flex-col space-y-4">
                        <input type="email" placeholder="Enter your email" class="px-4 py-2 bg-primary-light text-white rounded-md placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-secondary" />
                        <button type="submit" class="px-4 py-2 bg-secondary-dark hover:bg-secondary text-white rounded-md">Subscribe</button>
                    </form>
                </div>
            </div>
            
            <div class="border-t border-primary-light pt-6">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p class="text-gray-300">&copy; 2025 SocialFund. All rights reserved.</p>
                    <div class="flex space-x-6 mt-4 md:mt-0">
                        <a href="terms.php" class="text-gray-300 hover:text-white">Terms of Service</a>
                        <a href="privacy.php" class="text-gray-300 hover:text-white">Privacy Policy</a>
                        <a href="cookie-policy.php" class="text-gray-300 hover:text-white">Cookie Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.querySelector('.mobile-menu-button').addEventListener('click', function() {
            document.querySelector('.mobile-menu').classList.toggle('hidden');
        });
    </script>
</body>
</html>