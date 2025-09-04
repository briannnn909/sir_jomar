<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h4 class="mb=0">Payroll Calculator</h4>
        </div>
        <div class="card-body">
            <form action="b.php" method="POST">
                <div class="mb-3">
                    <label for="fullname" class="form-label">Employee Name</label>
                    <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Enter your full Name" required>
                </div>
                <div class="mb-3">
                    <label for="number" class="form-label">Total Days of work</label>
                    <input type="number" name="work" id="work" class="form-control" placeholder="Enter your Total Days of Work" required>
                </div>
                <div class="mb-3">
                    <label for="number" class="form-label">Daily Rate</label>
                    <input type="number" name="rate" id="email" class="form-control" placeholder="Enter your Daily rate" required>
                </div>
                <div class="mb-3">
                    <label for="number" class="form-label">Cash Advance</label>
                    <input type="number" name="advance" id="email" class="form-control" placeholder="Enter your Cash Advance" required>
                </div>
                <div class="text-end">
                    <button type="submit" class="btn btn-success">Generate Payslip</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>