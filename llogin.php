<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Somo, Cura - Login</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #fdf2f8 0%, #fae8ff 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .main-card {
            border: none;
            border-radius: 1.25rem;
            box-shadow: 0 15px 35px rgba(219, 39, 119, 0.12);
            overflow: hidden;
            max-width: 900px;
            width: 100%;
            background-color: #ffffff;
        }

        /* القسم الجانبي الملون */
        .brand-side {
            background: linear-gradient(135deg, #db2777 0%, #f472b6 100%);
            color: white;
            position: relative;
            overflow: hidden;
        }

        /* دوائر ديكور شفافة في الخلفية */
        .brand-side::before {
            content: '';
            position: absolute;
            width: 220px;
            height: 220px;
            background: rgba(255, 255, 255, 0.12);
            border-radius: 50%;
            top: -60px;
            right: -60px;
        }

        .brand-side::after {
            content: '';
            position: absolute;
            width: 160px;
            height: 160px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            bottom: -40px;
            left: -40px;
        }

        .icon-circle {
            width: 65px;
            height: 65px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            margin: 0 auto 1.2rem;
            backdrop-filter: blur(5px);
        }

        .btn-custom-pink {
            background-color: #db2777;
            border-color: #db2777;
            color: white;
            font-size: 0.9rem;
            transition: all 0.2s;
        }

        .btn-custom-pink:hover {
            background-color: #be185d;
            border-color: #be185d;
            color: white;
            transform: translateY(-1px);
        }

        .text-custom-pink {
            color: #db2777 !important;
        }

        /* تنسيق الحقول مع الأيقونات */
        .input-group-text {
            background-color: #fdf2f8;
            border-color: #dee2e6;
            color: #db2777;
        }

        .form-control {
            font-size: 0.85rem;
            border-left: none;
        }

        .form-control:focus {
            border-color: #f472b6;
            box-shadow: none;
        }

        .input-group:focus-within .input-group-text,
        .input-group:focus-within .form-control {
            border-color: #f472b6;
        }

        .input-group:focus-within {
            box-shadow: 0 0 0 0.2rem rgba(219, 39, 119, 0.15);
            border-radius: 0.375rem;
        }

        .custom-dropdown-btn {
            background-color: #ffffff;
            border: 1px solid #dee2e6;
            color: #212529;
            text-align: left;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.85rem;
        }

        .custom-dropdown-btn:focus,
        .custom-dropdown-btn:hover {
            border-color: #f472b6;
            box-shadow: 0 0 0 0.2rem rgba(219, 39, 119, 0.15);
            background-color: #ffffff;
        }

        .dropdown-item {
            font-size: 0.85rem;
        }

        .dropdown-item:hover,
        .dropdown-item:focus {
            background-color: #fce7f3 !important;
            color: #db2777 !important;
        }

        .form-label {
            font-size: 0.8rem;
            font-weight: 500;
            color: #334155;
            margin-bottom: 4px;
        }

        .link-custom {
            color: #db2777;
            text-decoration: none;
            font-weight: 600;
            cursor: pointer;
        }

        .link-custom:hover {
            color: #be185d;
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="main-card">
        <div class="row g-0">
            <!-- الجزء الأيسر: اللوحة الترحيبية -->
            <div
                class="col-md-5 brand-side d-flex flex-column justify-content-center align-items-center text-center p-4 p-md-5">
                <div class="position-relative z-1">
                    <div class="icon-circle">
                        <i class="bi bi-heart-pulse-fill"></i>
                    </div>
                    <h3 class="fw-bold mb-2">Somo, Cura</h3>
                    <p class="small opacity-75 mb-4">Your Smart Healthcare & Daily Routine Companion</p>
                    <div class="d-flex justify-content-center gap-2 small opacity-90">
                        <span class="badge bg-white text-custom-pink rounded-pill px-3 py-2 fw-medium">
                            <i class="bi bi-shield-check me-1"></i> Secure Care
                        </span>
                        <span class="badge bg-white text-custom-pink rounded-pill px-3 py-2 fw-medium">
                            <i class="bi bi-activity me-1"></i> AI Insights
                        </span>
                    </div>
                </div>
            </div>

            <!-- الجزء الأيمن: فورم تسجيل الدخول -->
            <div class="col-md-7 p-4 p-md-5">
                <div class="mb-4">
                    <h4 class="fw-bold text-dark mb-1">Welcome Back</h4>
                    <p class="text-muted small">Please enter your details to sign in</p>
                </div>

                <form action="GoPage.php" method="POST">
                    <!-- Role Selection -->
                    <div class="mb-3">
                        <label class="form-label">Login As</label>
                        <div class="dropdown w-100">
                            <button class="btn custom-dropdown-btn dropdown-toggle w-100 py-2" type="button"
                                id="roleDropdownBtn" data-bs-toggle="dropdown" aria-expanded="false">
                                <span><i class="bi bi-person-badge text-custom-pink me-2"></i><span
                                        id="selectedRoleText">Patient</span></span>
                            </button>
                            <ul class="dropdown-menu w-100 shadow-sm border-0" aria-labelledby="roleDropdownBtn">
                                <li><a class="dropdown-item" href="#"
                                        onclick="selectOption('role', 'selectedRoleText', 'Patient', 'patient')">Patient</a>
                                </li>
                                <li><a class="dropdown-item" href="#"
                                        onclick="selectOption('role', 'selectedRoleText', 'Doctor', 'doctor')">Doctor</a>
                                </li>
                                <li><a class="dropdown-item" href="#"
                                        onclick="selectOption('role', 'selectedRoleText', 'Secretary', 'secretary')">Secretary</a>
                                </li>
                            </ul>
                        </div>
                        <input type="hidden" id="role" name="role" value="patient">
                    </div>

                    <!-- Email Address -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                            <!-- ملاحظة: إذا بملف الـ PHP كتبتي $_POST["user"]، خلي name="user" هون عشان يقرأه صح -->
                            <input type="email" class="form-control py-2" id="email" name="user"
                                placeholder="name@example.com" required>
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-lock"></i></span>
                            <!-- اسم الحقل name="pass" ليتطابق مع $_POST["pass"] في ملف PHP -->
                            <input type="password" class="form-control py-2" id="password" name="pass"
                                placeholder="********" required>
                        </div>
                    </div>

                    <!-- Remember Me & Forgot Password -->
                    <div class="d-flex justify-content-between align-items-center mb-4" style="font-size: 0.8rem;">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="rememberMe">
                            <label class="form-check-label text-muted" for="rememberMe">Remember me</label>
                        </div>
                        <a href="forgot-password.html" class="text-decoration-none"
                            style="color: #db2777; font-size: 0.85rem; font-weight: 600;">Forgot password?</a>
                    </div>

                    <!-- Login Button -->
                    <div class="d-grid gap-2 mb-3">
                        <button type="submit" class="btn btn-custom-pink py-2 fw-bold">Login</button>
                    </div>

                    <!-- Don't have an account -->
                    <div class="text-center" style="font-size: 0.8rem;">
                        <span class="text-muted">Don't have an account? </span>
                        <a href="ssignUp.html" class="link-custom">Sign Up</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function selectOption(hiddenInputId, spanTextId, displayName, value) {
            document.getElementById(spanTextId).innerText = displayName;
            document.getElementById(hiddenInputId).value = value;
        }
    </script>
</body>

</html>