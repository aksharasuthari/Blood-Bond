<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor Details</title>
    <style>
        .container {
            margin-top: 20px;
        }
        .text-center {
            text-align: center;
        }
        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
        }
        .table th,
        .table td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }
        .table-hover tbody tr:hover {
            color: #495057;
            background-color: rgba(0, 0, 0, 0.075);
        }
        .table-bordered {
            border: 1px solid #dee2e6;
        }
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, 0.05);
        }
        .bg-info {
            background-color: #17a2b8 !important;
            color: white;
        }
        .text-right {
            text-align: right;
        }
        a {
            color: #007bff;
            text-decoration: none;
            background-color: transparent;
        }
        a:hover {
            color: #0056b3;
            text-decoration: underline;
        }
        img {
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center">DONOR DETAILS</h2>
        <hr><br><br>
        <table class="table table-light table-hover table-bordered table-striped">
            <thead class="bg-info">
                <tr>
                    <th scope="col">Username</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Blood Group</th>
                    <th scope="col">Location</th>
                    <th scope="col">Gender</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($_SESSION['matching_donors']) && !empty($_SESSION['matching_donors'])) {
                    foreach ($_SESSION['matching_donors'] as $donor) {
                        echo "<tr>";
                        echo "<td>{$donor['username']}</td>";
                        echo "<td>{$donor['name']}</td>";
                        echo "<td>{$donor['age']}</td>";
                        echo "<td>{$donor['email']}</td>";
                        echo "<td>{$donor['phone']}</td>";
                        echo "<td>{$donor['blood_group']}</td>";
                        echo "<td>{$donor['location']}</td>";
                        echo "<td>{$donor['gender']}</td>";
                        echo "</tr>";
                    }
                    unset($_SESSION['matching_donors']); // Clear the session variable
                } else {
                    echo "<tr><td colspan='8'>No matching donors found.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
