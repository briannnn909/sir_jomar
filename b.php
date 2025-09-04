<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Details</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-success text-white">
            <h4 class="mb-0">Employee Payroll</h4>
        </div>
        <div class="card-body">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = $_POST['fullname'];
                $work = $_POST['work'];
                $rate = $_POST['rate'];
                $advance = $_POST['advance'];

                $gross = $work * $rate;
                $tax = $gross * 0.02;
                $SSS = $gross * 0.015;
                $pag_ibig = 50;

                $total = $tax + $SSS + $pag_ibig + $advance;
                $net = $gross - $total;
            ?>
            
            <div class="card-body">
            <ul class="list-group">
        <li class="list-group-item"><strong>Employee Name: </strong><?php echo $name; ?> </li>
        <li class="list-group-item"><strong>Total Days of work: </strong><?php echo $work; ?> </li>
        <li class="list-group-item"><strong>Daily Rate: </strong><?php echo round($rate, 1); ?> </li>
        <li class="list-group-item"><strong>Gross Pay: </strong><?php echo $gross; ?> </li>
        <li class="list-group-item"><strong>Tax: </strong><?php echo $tax; ?> </li>
        <li class="list-group-item"><strong>SSS: </strong><?php echo $SSS; ?> </li>
        <li class="list-group-item"><strong>Pag-IBIG: </strong><?php echo $pag_ibig; ?> </li>
        <li class="list-group-item"><strong>Cash Advance: </strong><?php echo $advance; ?> </li>
        <li class="list-group-item"><strong>Total Deduction: </strong><?php echo $SSS; ?> </li>
        <li class="list-group-item"><strong>Net Pay: </strong><?php echo $net; ?> </li>
            </ul>

            <div class="mt-4">
                <a href="a.php" class="btn btn-primary">Generate Payroll</a>
            <div>

        
            <?php
            } else {
                echo "<div class='alert alert-danger'>No data received</div>";
            }
            ?>
        </div>
    </div>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>