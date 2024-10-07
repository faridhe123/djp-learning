
require_once('../config.php');
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Close Page</title>
    <script>
        window.onload = function() {
            setTimeout(function () {
                window.close();
            }, 1000)
        };
    </script>
</head>
<body>
<p>If this page was opened by JavaScript, it will close automatically after loading.</p>
</body>
</html>