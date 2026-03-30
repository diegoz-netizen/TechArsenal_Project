<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login | Tech Arsenal</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="login-page">

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

    <div class="login-box">
        <div class="tabs-list">
            <div class="tab active">login</div>
            <div class="tab" onclick="location.href='../auth/register.php'">Register</div>
        </div>

        <h3 style="margin: 0 0 5px 0; font-size: 1.4rem;">Welcome Back</h3>
        <p style="color: #a1a1aa; font-size: 0.85rem; margin-bottom: 25px;">
            Enter your credentials to access your account
        </p>

        <form action="../auth/validar.php" method="POST">
            <div class="form-group" style="margin-bottom: 15px;">
                <label style="font-size: 0.85rem; color: #d4d4d8;">Email</label>
                <div class="input-wrapper">
                    <i class="fa-regular fa-envelope"></i>
                    <input type="email" name="email" placeholder="gamer@techmail.com" required>
                </div>
            </div>

            <div class="form-group" style="margin-bottom: 15px;">
                <label style="font-size: 0.85rem; color: #d4d4d8;">Password</label>
                <div class="input-wrapper">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="password" placeholder="••••••••" required>
                </div>
            </div>

            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px; font-size: 0.8rem;">
                <label style="color: #a1a1aa; cursor: pointer;">
                    <input type="checkbox" style="width: auto; margin-right: 5px;"> Remember me
                </label>
                <a href="#" style="color: var(--neon-cyan); text-decoration: none;">Forgot password?</a>
            </div>

            <button type="submit" class="btn-primary" style="box-shadow: 0 4px 15px rgba(34,211,238,0.2);">
                Login
            </button>
        </form>
    </div>
</body>
</html>