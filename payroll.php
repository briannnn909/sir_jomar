<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Payroll Calculator</h4>
        </div>
        <div class="card-body">
            <form action="payroll_backend.php" method="POST">
                <!-- EMployeename -->
                <div class="mb-3">
                    <label for="employeename" class="form-label">Employee Name</label>
                    <input type="text" name="employeename" id="employeename" class="form-control" placeholder="Enter your full name" required>
                </div>

                <!-- Total Days of work -->
                <div class="mb-3">
                    <label for="totaldayworks" class="form-label">Total Days of Work</label>
                    <input type="totaldayworks" name="totaldayworks" id="totaldayworks" class="form-control" placeholder="Enter day works" required>
                </div>

                <!-- Daily rate -->
                <div class="mb-3">
                    <label for="dailyrate" class="form-label">Daily Rate</label>
                    <textarea name="dailyrate" id="dailyrate" class="form-control" rows="2" placeholder="Enter your Daily Rate" required></textarea>
                </div>

                 <!-- Cash advance -->
                <div class="mb-3">
                    <label for="cashadvance" class="form-label">Cash Advance</label>
                    <textarea name="cashadvance" id="cashadvance" class="form-control" rows="2" placeholder="Enter your Cash Advance" required></textarea>
                </div>

                

                <!-- Submit Button -->
             <div class="container mt-5">
             <div class="card shadow-lg">
             <div class="card-header bg-primary text-white">
             <button type="generate" class="btn btn-success">Generate Payslip</button>
             
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>