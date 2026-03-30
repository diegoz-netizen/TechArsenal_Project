<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Register | Tech Arsenal</title>
    <link rel="stylesheet" href="../css/register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="register-page">

    <div class="logo-container" style="margin-bottom: 40px; text-align: center; z-index: 10;">
        <a href="../index.php" style="text-decoration: none;"> <div style="position: relative; display: inline-block;">
                <i class="fa-solid fa-microchip" style="font-size: 2.5rem; color: #22d3ee;"></i>
                <div style="position: absolute; inset: 0; background: rgba(34,211,238,0.2); filter: blur(15px);"></div>
            </div>
            <h1 style="margin-top: 15px; font-size: 1.8rem; letter-spacing: 2px; background: linear-gradient(to right, #22d3ee, #a855f7); -webkit-background-clip: text; -webkit-text-fill-color: transparent; font-weight: bold;">
                TECH ARSENAL
            </h1>
        </a>
    </div>

    <div class="register-box">
        <div class="tabs-list">
            <a href="login.php" class="tab">Login</a>
            <a href="#" class="tab active">Register</a>
        </div>

        <h3 style="margin: 0 0 5px 0; color: white;">Create Your Account</h3>
        <p style="color: #a1a1aa; font-size: 0.85rem; margin-bottom: 25px;">
            Join Tech Arsenal and start your gaming journey
        </p>

        <form action="../auth/register_user.php" method="POST">
            <div class="form-group">
                <label style="font-size: 0.85rem; color: #d4d4d8;">Username</label>
                <div class="input-wrapper">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="username" placeholder="GamerTag123" required>
                </div>
            </div>

            <div class="form-group">
                <label style="font-size: 0.85rem; color: #d4d4d8;">Email</label>
                <div class="input-wrapper">
                    <i class="fa-regular fa-envelope"></i>
                    <input type="email" name="email" placeholder="you@example.com" required>
                </div>
            </div>

            <div class="form-group">
                <label style="font-size: 0.85rem; color: #d4d4d8;">Password</label>
                <div class="input-wrapper">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="password" placeholder="••••••••" required>
                </div>
            </div>

            <div class="form-group">
                <label style="font-size: 0.85rem; color: #d4d4d8;">Confirm Password</label>
                <div class="input-wrapper">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="confirm_password" placeholder="••••••••" required>
                </div>
            </div>

            <button type="submit" class="btn-register">Register Account</button>
            
            <div style="margin-top: 20px; text-align: center; font-size: 0.85rem; color: #a1a1aa;">
                Already have an account? <a href="login.php" style="color: #22d3ee; text-decoration: none;">Login here</a>
            </div>
        </form>
    </div>

</body>
</html>