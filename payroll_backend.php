<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Payslip</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            width: 500px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        h2 {
            color: green;
            text-align: center;
        }
        .payslip-details { 
            margin-top: 20px;
        }
        .detail-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
        }
        .label {
            font-weight: bold;
        }
        .value {
            text-align: right;
        }
        .total-deductions {
            margin-top: 15px;
            border-top: 2px solid #ccc;
            padding-top: 10px;
        }
        .net-pay {
            font-size: 1.2em;
            font-weight: bold;
            margin-top: 15px;
            border-top: 2px solid #ccc;
            padding-top: 10px;
        }
        .buttons {
            margin-top: 20px;
            text-align: center;
        }
        button {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin: 0 10px;
        }
        .back-button {
            background-color: #ccc;
            color: black;
        }
        .print-button {
            background-color: #007BFF;
            color: white;
        }
        .back-button:hover {
            background-color: #999;
        }
        .print-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Employee Payslip</h2>
        <div class="payslip-details">
            <div class="detail-row">
                <span class="label">Employee Name:</span>
                <span class="value">Tasha Evangelista</span>
            </div>
            <div class="detail-row">
                <span class="label">Total Days Worked:</span>
                <span class="value">10</span>
            </div>
            <div class="detail-row">
                <span class="label">Daily Rate:</span>
                <span class="value">₱1,000.00</span>
            </div>
            <div class="detail-row">
                <span class="label">Gross Pay:</span>
                <span class="value">₱10,000.00</span>
            </div>
            <div class="detail-row">
                <span class="label">Tax (2%):</span>
                <span class="value">₱200.00</span>
            </div>
            <div class="detail-row">
                <span class="label">SSS (1.5%):</span>
                <span class="value">₱150.00</span>
            </div>
            <div class="detail-row">
                <span class="label">Pag-IBIG:</span>
                <span class="value">₱50.00</span>
            </div>
             <div class="detail-row">
                <span class="label">Cash Advance:</span>
                <span class="value">₱200.00</span>
            </div>
            <div class="total-deductions detail-row">
                <span class="label">Total Deductions:</span>
                <span class="value">₱600.00</span>
            </div>
            <div class="net-pay detail-row">
                <span class="label">Net Pay:</span>
                <span class="value">₱9,400.00</span>
            </div>
        </div>
        <div class="buttons">
            <button class="back-button" onclick="alert('Go back')">Back</button>
            <button class="print-button" onclick="window.print()">Print Payslip</button>
        </div>
    </div>
</body>
</html>