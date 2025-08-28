<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Student Registration</h4>
        </div>
        <div class="card-body">

            <?php
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $fullname = htmlspecialchars($_POST['fullname']);
                $email = htmlspecialchars($_POST['email']);
                $address = htmlspecialchars($_POST['address']);
                $birthdate = htmlspecialchars($_POST['birthdate']);
                $gender = htmlspecialchars($_POST['gender']);

                echo "<div class='alert alert-success'>
                        Registration Successful!<br>
                        <strong>Name:</strong> $fullname <br>
                        <strong>Email:</strong> $email <br>
                        <strong>Address:</strong> $address <br>
                        <strong>Birthdate:</strong> $birthdate <br>
                        <strong>Gender:</strong> $gender
                      </div>";
            }
            ?>

            <form method="POST" action="">
                <div class="mb-3">
                    <label for="fullname" class="form-label">Full Name</label>
                    <input type="text" class="form-control" name="fullname" id="fullname" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <textarea class="form-control" name="address" id="address" rows="2" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="birthdate" class="form-label">Date of Birth</label>
                    <input type="date" class="form-control" name="birthdate" id="birthdate" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Gender</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="Male" required>
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="Female">
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-success">Register</button>
                </div>
            </form>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>