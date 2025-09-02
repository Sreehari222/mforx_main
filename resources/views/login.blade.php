<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EmforX Sabka - Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Add your style block here --}}
    <style>
         * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #1e1b4b 0%, #3730a3 25%, #7c3aed 50%, #ec4899 75%, #f97316 100%);
            min-height: 100vh;
            position: relative;
            overflow-x: hidden;
        }

        .background-pattern {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image:
                radial-gradient(circle at 20% 50%, rgba(120, 119, 198, 0.3) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 40% 80%, rgba(139, 92, 246, 0.2) 0%, transparent 50%);
            background-size: 600px 600px;
            animation: float 20s ease-in-out infinite;
        }

        .geometric-shapes {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            overflow: hidden;
            z-index: 1;
        }

        .shape {
            position: absolute;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .shape:nth-child(1) {
            width: 100px;
            height: 100px;
            top: 10%;
            left: 10%;
            transform: rotate(45deg);
            animation: drift 15s infinite linear;
        }

        .shape:nth-child(2) {
            width: 80px;
            height: 80px;
            top: 70%;
            right: 15%;
            border-radius: 50%;
            animation: drift 20s infinite linear reverse;
        }

        .shape:nth-child(3) {
            width: 60px;
            height: 60px;
            top: 40%;
            left: 5%;
            clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
            animation: drift 18s infinite linear;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }

        @keyframes drift {
            0% { transform: translateX(0) translateY(0) scale(1); }
            25% { transform: translateX(100px) translateY(-50px) scale(1.1); }
            50% { transform: translateX(-50px) translateY(100px) scale(0.9); }
            75% { transform: translateX(80px) translateY(50px) scale(1.05); }
            100% { transform: translateX(0) translateY(0) scale(1); }
        }

        .container {
            position: relative;
            z-index: 10;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .header {
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(10px);
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #ec4899, #8b5cf6);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: white;
            font-size: 18px;
        }

        .logo-text {
            color: white;
            font-size: 24px;
            font-weight: bold;
        }

        .logo-text .highlight {
            background: linear-gradient(45deg, #ec4899, #8b5cf6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .nav-links {
            display: flex;
            gap: 40px;
        }

        .nav-links a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
            position: relative;
        }

        .nav-links a:hover {
            color: #ec4899;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(45deg, #ec4899, #8b5cf6);
            transition: width 0.3s;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .main-content {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px;
        }

        .login-container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            padding: 60px;
            width: 100%;
            max-width: 500px;
            text-align: center;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
        }

        .login-title {
            color: white;
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .login-subtitle {
            color: rgba(255, 255, 255, 0.7);
            font-size: 18px;
            margin-bottom: 40px;
        }

        .welcome-text {
            background: linear-gradient(45deg, #ec4899, #8b5cf6, #06b6d4);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-weight: 800;
        }

        .form-group {
            margin-bottom: 25px;
            text-align: left;
        }

        .form-label {
            color: rgba(255, 255, 255, 0.9);
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 8px;
            display: block;
        }

        .input-container {
            position: relative;
        }

        .input-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: rgba(255, 255, 255, 0.5);
            font-size: 18px;
            z-index: 2;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"] {
            width: 100%;
            padding: 15px 15px 15px 50px;
            background: rgba(255, 255, 255, 0.1);
            border: 2px solid rgba(255, 255, 255, 0.2);
            border-radius: 12px;
            color: white;
            font-size: 16px;
            transition: all 0.3s;
            backdrop-filter: blur(10px);
        }

        input[type="text"]::placeholder,
        input[type="password"]::placeholder,
        input[type="email"]::placeholder {
            color: rgba(255, 255, 255, 0.5);
        }

        input[type="text"]:focus,
        input[type="password"]:focus,
        input[type="email"]:focus {
            outline: none;
            border-color: #ec4899;
            background: rgba(255, 255, 255, 0.15);
            box-shadow: 0 0 0 3px rgba(236, 72, 153, 0.2);
        }

        .forgot-password {
            text-align: right;
            margin-bottom: 30px;
        }

        .forgot-password a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s;
        }

        .forgot-password a:hover {
            color: #ec4899;
        }

        .login-btn {
            width: 100%;
            padding: 15px;
            background: linear-gradient(135deg, #ec4899, #8b5cf6);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            position: relative;
            overflow: hidden;
        }

        .login-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .login-btn:hover::before {
            left: 100%;
        }

        .login-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 30px rgba(236, 72, 153, 0.4);
        }

        .divider {
            margin: 30px 0;
            position: relative;
            text-align: center;
        }

        .divider::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 1px;
            background: rgba(255, 255, 255, 0.2);
        }

        .divider span {
            background: rgba(255, 255, 255, 0.1);
            color: rgba(255, 255, 255, 0.7);
            padding: 0 20px;
            font-size: 14px;
        }

        .social-login {
            display: flex;
            gap: 15px;
        }

        .social-btn {
            flex: 1;
            padding: 12px;
            background: rgba(255, 255, 255, 0.1);
            border: 2px solid rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .social-btn:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }

        .signup-link {
            margin-top: 30px;
            color: rgba(255, 255, 255, 0.7);
        }

        .signup-link a {
            color: #ec4899;
            text-decoration: none;
            font-weight: 600;
        }

        .signup-link a:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .header {
                padding: 15px 20px;
                flex-direction: column;
                gap: 20px;
            }

            .nav-links {
                gap: 20px;
            }

            .login-container {
                margin: 20px;
                padding: 40px 30px;
            }

            .login-title {
                font-size: 28px;
            }

            .social-login {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div class="background-pattern"></div>
    <div class="geometric-shapes">
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

    <div class="container">
        <header class="header">
            <div class="logo">
                <div class="logo-icon">E</div>
                <div class="logo-text">Emfor<span class="highlight">X</span></div>
            </div>
        </header>

        <main class="main-content">
            <div class="login-container">
                <h1 class="login-title"><span class="welcome-text">Welcome Back</span></h1>
                <p class="login-subtitle">Access your Sabka World of Opportunities</p>

                @if ($errors->any())
                    <p style="color: #f87171; font-weight: bold;">{{ $errors->first() }}</p>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label class="form-label">Email Address</label>
                        <div class="input-container">
                            <span class="input-icon">📧</span>
                            <input type="email" name="email" placeholder="Enter your email address" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Password</label>
                        <div class="input-container">
                            <span class="input-icon">🔒</span>
                            <input type="password" name="password" placeholder="Enter your password" required>
                        </div>
                    </div>

                    <div class="forgot-password">
                        <a href="#">Forgot Password?</a>
                    </div>

                    <button type="submit" class="login-btn">Sign In to Your Account</button>
                </form>
            </div>
        </main>
    </div>

    {{-- Keep the same JavaScript if needed --}}
    <script>
        const inputs = document.querySelectorAll('input');
        inputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.style.transform = 'translateY(-2px)';
                this.parentElement.style.boxShadow = '0 10px 20px rgba(236, 72, 153, 0.2)';
            });
            input.addEventListener('blur', function() {
                this.parentElement.style.transform = 'translateY(0)';
                this.parentElement.style.boxShadow = 'none';
            });
        });

        const socialBtns = document.querySelectorAll('.social-btn');
        socialBtns.forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                this.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    this.style.transform = 'translateY(-2px)';
                }, 100);
            });
        });
    </script>
</body>
</html>
