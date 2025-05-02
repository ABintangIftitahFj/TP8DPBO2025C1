<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .navbar {
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 12px 0;
            background: linear-gradient(135deg, #2b5876, #4e4376) !important;
        }
        .navbar-brand {
            font-weight: 700;
            font-size: 1.8rem;
            padding: 5px 15px;
            border-radius: 5px;
            color: white !important;
            letter-spacing: 1px;
        }
        .navbar-brand span {
            color: #ffc107;
        }
        .nav-item {
            margin: 0 5px;
        }
        .nav-link {
            font-weight: 500;
            padding: 8px 16px !important;
            border-radius: 4px;
            transition: all 0.3s ease;
            color: rgba(255,255,255,0.85) !important;
        }
        .nav-link:hover {
            background-color: rgba(255,255,255,0.1);
            color: white !important;
            transform: translateY(-2px);
        }
        .nav-link.active {
            background-color: rgba(255,255,255,0.2);
            color: white !important;
        }
        .navbar-toggler {
            border: none;
            padding: 8px;
        }
        .user-section {
            display: flex;
            align-items: center;
        }
        .user-avatar {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            margin-right: 10px;
            background-color: #ffc107;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #343a40;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="/"><i class="fas fa-graduation-cap me-2"></i>SMS <span>Pro</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="/tp_9/index.php?page=home">
                            <i class="fas fa-home me-1"></i> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/tp_9/index.php?page=student">
                            <i class="fas fa-user-graduate me-1"></i> Students
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/tp_9/index.php?page=suku">
                            <i class="fas fa-users me-1"></i> Ethnic Groups
                        </a>
                    </li>
                </ul>
                <div class="user-section">
                    <div class="user-avatar">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-link text-white dropdown-toggle p-0" type="button" id="userDropdown" data-bs-toggle="dropdown">
                            Admin
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-2"></i>Settings</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt me-2"></i>Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    
    <div class="container mt-4">
        <!-- Content goes here -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>