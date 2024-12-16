<?php
require_once '../config/config.php';
?>
<?php if (!empty($success_message)) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= htmlspecialchars($success_message); ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Responsive Form</title>

    <!-- Latest Bootstrap and FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        body {
            background: url('https://cb.bajj.org/background.jpg') no-repeat center center fixed;
            background-size: cover; /* Keeps the background consistent across all devices */
        }

        .container {
            min-height: 100vh; /* Ensures content fills the viewport height */
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 15px;
        }

        .frame {
            background: rgba(0, 0, 0, 0.6);
            border-radius: 10px;
            padding: 20px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            color: white;
        }

        .form-control {
            background: rgba(255, 255, 255, 0.2);
            border: none;
            border-radius: 20px;
            color: white;
        }

        .form-control:focus {
            background: rgba(255, 255, 255, 0.3);
            outline: none;
            color: white;
        }

        label {
            font-weight: bold;
            text-transform: uppercase;
            font-size: 12px;
        }

        .btn {
            border-radius: 20px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .nav-pills .nav-link {
            color: rgba(255, 255, 255, 0.7);
        }

        .nav-pills .nav-link.active {
            background-color: #0F4FE6;
        }

        .logo img {
            max-width: 80%;
            height: auto;
            margin-bottom: 15px;
        }

        .forgot a {
            color: #b81313;
            text-decoration: none;
        }

        @media (max-width: 576px) {
            .frame {
                padding: 15px;
            }

            label {
                font-size: 10px;
            }

            .btn {
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="frame">
            <div class="text-center mb-4">
                <div class="logo">
                    <!-img src="http://cb.bajj.org/logo3.png" alt="Logo"-->
                </div>
            </div>

            <ul class="nav nav-pills justify-content-center mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="signin-tab" data-bs-toggle="pill" data-bs-target="#signin" type="button" role="tab" aria-controls="signin" aria-selected="true">Existing User</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="signup-tab" data-bs-toggle="pill" data-bs-target="#signup" type="button" role="tab" aria-controls="signup" aria-selected="false">New User</button>
                </li>
            </ul>

            <div class="tab-content" id="pills-tabContent">
                <!-- Sign In Form -->
                <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
                <form action="<?=$baseURL?>/user/login" method="POST">
                        <div class="mb-3">
                            <label for="email">Username</label>
                            <input type="email" class="form-control" id="username" name="username" placeholder="Enter your username">
                        </div>
                        <div class="mb-3">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="remember-me">
                            <label class="form-check-label" for="remember-me">Keep me signed in</label>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                        <div class="text-center mt-3 forgot">
                            <a href="#">Forgot your password?</a>
                        </div>
                    </form>
                </div>

                <!-- Sign Up Form -->
                <div class="tab-pane fade" id="signup" role="tabpanel" aria-labelledby="signup-tab">
                <form action="/cb/public/user/register" method="POST">
                        <div class="mb-3">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username">
                        </div>
                        <div class="mb-3">
                            <label for="email-signup">Email</label>
                            <input type="email" class="form-control" id="email-signup" name="email" placeholder="Enter your email">
                        </div>
                        <div class="mb-3">
                            <label for="password-signup">Create Password</label>
                            <input type="password" class="form-control" id="password-signup" name="password" placeholder="Create a password">
                        </div>
                        <button type="submit" class="btn btn-success w-100">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Latest Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
