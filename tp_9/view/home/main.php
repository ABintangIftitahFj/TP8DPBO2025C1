<?php include $_SERVER['DOCUMENT_ROOT'] . '/tp_9/templates/header.php'; ?>

<div class="dashboard">
    <h1 class="mb-4">Student Management System</h1>
    
    <div class="row">
        <!-- Student Card -->
        <div class="col-md-6 mb-4">
            <div class="card stat-card">
                <div class="card-body">
                    <h5 class="card-title">
                        <i class="fas fa-user-graduate"></i> Total Students
                    </h5>
                    <h2 class="display-4"><?= $totalStudents ?></h2>
                    <a href="/tp_9/index.php?page=student" class="btn btn-primary">
                        Manage Students <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Ethnic Groups Card -->
        <div class="col-md-6 mb-4">
            <div class="card stat-card">
                <div class="card-body">
                    <h5 class="card-title">
                        <i class="fas fa-users"></i> Total Ethnic Groups
                    </h5>
                    <h2 class="display-4"><?= $totalSuku ?></h2>
                    <a href="/suku" class="btn btn-primary">
                        Manage Groups <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/tp_9/templates/footer.php'; ?>