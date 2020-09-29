<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>IGN Test 1</title>
</head>
<body>
    <div class="container">
        <h2>Data Pendaftar</h2>
        <div class="table">
            <table>
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Birth Date</th>
                        <th>Country</th>
                        <th>Phone</th>
                        <th>Registration Date</th>
                        <th>Need Pickup</th>
                        <th>Motivation Later</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include 'readData.php' ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>