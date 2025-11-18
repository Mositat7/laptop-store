<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>

    <link rel="stylesheet" href="{{ asset('assets/vendor_components/bootstrap/dist/css/bootstrap.min.css') }}">

    <style>
        body {
            margin: 0;
            height: 100vh;
            background: linear-gradient(135deg, #000428, #004e92);
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: "Poppins", sans-serif;
        }

        .login-card {
            width: 100%;
            max-width: 420px;
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-radius: 18px;
            padding: 35px;
            color: #fff;
            box-shadow: 0 0 25px rgba(0, 255, 255, 0.2);
            animation: fadeIn 0.8s ease;
        }

        @keyframes fadeIn {
            from {opacity: 0; transform: translateY(12px);}
            to   {opacity: 1; transform: translateY(0);}
        }

        .login-title {
            text-align: center;
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 25px;
            color: #e0f7ff;
            letter-spacing: 1px;
        }

        .input-group-text {
            background: #006fbd;
            border: none;
            color: #fff;
        }

        .form-control {
            border: none !important;
            background: rgba(255, 255, 255, 0.15);
            color: #fff !important;
            border-radius: 0 8px 8px 0;
        }

        .form-control::placeholder {
            color: #d0ecff;
        }

        .login-btn {
            width: 100%;
            margin-top: 15px;
            padding: 12px;
            font-size: 17px;
            border-radius: 8px;
            background: #00b7ff;
            color: #fff;
            border: none;
            font-weight: 600;
            letter-spacing: 1px;
            box-shadow: 0 0 15px rgba(0, 183, 255, 0.6);
            transition: 0.2s;
        }

        .login-btn:hover {
            background: #0095ce;
            box-shadow: 0 0 20px rgba(0, 183, 255, 0.9);
        }

        /* responsiveness */
        @media(max-width: 480px) {
            .login-card {
                margin: 0 15px;
                padding: 28px;
            }
        }
    </style>

</head>

<body>

<div class="login-card">
    <div class="login-title">Admin Panel Login</div>

    <form action="{{ route('admin.login.submit') }}" method="POST">
        @csrf

        <!-- Username -->
        <div class="form-group mb-3">
            <label>Email</label>
            <div class="input-group">
                <span class="input-group-text"><i class="ti-user"></i></span>
                <input type="text" name="email" class="form-control" placeholder="Enter email">
            </div>
        </div>

        <!-- Password -->
        <div class="form-group mb-3">
            <label>Password</label>
            <div class="input-group">
                <span class="input-group-text"><i class="ti-lock"></i></span>
                <input type="password" name="password" class="form-control" placeholder="Enter password">
            </div>
        </div>

        <!-- Button -->
        <button type="submit" class="login-btn">SIGN IN</button>
    </form>
</div>


<script src="{{ asset('assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js') }}"></script>
<script src="{{ asset('assets/vendor_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

</body>
</html>
