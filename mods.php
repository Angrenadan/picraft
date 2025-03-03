<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index of /mods</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2 class="mb-4">Index of /mods</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Size</th>
                <th>Last Modified</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $dir = './mods'; 
            if (is_dir($dir)) {
                foreach (scandir($dir) as $file) {
                    if ($file !== '.' && $file !== '..') {
                        $filepath = $dir . '/' . $file;
                        echo "<tr>";
                        echo "<td><a href='$filepath'>$file</a></td>";
                        echo "<td>" . filesize($filepath) . " bytes</td>";
                        echo "<td>" . date("Y-m-d H:i:s", filemtime($filepath)) . "</td>";
                        echo "</tr>";
                    }
                }
            }
            ?>
        </tbody>
    </table>
    <footer class="mt-4 text-muted">Apache/2.4.52 (Ubuntu) Server at 10.1.5.69 Port 8080</footer>
</body>
</html>
