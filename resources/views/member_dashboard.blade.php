<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Member Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            height: 100vh;
            background-color: #343a40;
            color: white;
        }
        .sidebar a {
            color: #adb5bd;
            text-decoration: none;
            display: block;
            padding: 10px 20px;
        }
        .sidebar a:hover {
            background-color: #495057;
            color: white;
        }
        .header {
            background-color: #ffffff;
            padding: 20px;
            border-bottom: 1px solid #dee2e6;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3 sidebar d-flex flex-column p-3">
            <h4 class="text-white">Member Panel</h4>
            <hr class="bg-secondary">
            <a href="#">🏠 Dashboard</a>
            <a href="#">👤 Profile</a>
            <a href="#">⚙️ Settings</a>
            <a href="{{ url('/member/logout') }}">🔓 Logout</a>
        </div>

        <!-- Main Content -->
        <div class="col-md-9">
            <div class="header d-flex justify-content-between align-items-center">
                <h4>Welcome, {{Auth::guard('member')->user()->NAME}}</h4>
                  <h4>Welcome, {{Auth::guard('member')->user()->id}}</h4>
                <span>{{ date('d M, Y') }}</span>
            </div>

            <div class="p-4">
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">📄 Total Posts</h5>
                                <p class="card-text display-6">12</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">📥 Messages</h5>
                                <p class="card-text display-6">3</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">👥 Followers</h5>
                                <p class="card-text display-6">20</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- More Content -->
                <div class="mt-5">
                    <h5>Recent Activity</h5>
                    <ul class="list-group">
                        <li class="list-group-item">✔️ Logged in successfully</li>
                        <li class="list-group-item">📬 You received a new message</li>
                        <li class="list-group-item">📝 You updated your profile</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
