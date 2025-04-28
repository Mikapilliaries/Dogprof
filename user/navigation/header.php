<h1?php
session_start();
if (!isset($_SESSION['ownerID'])) {
    header("Location: ../login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $pageTitle ?? 'PAWKEDEX' ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/home.css">
</head>
<body>
    <div class="navbar">
        <div class="navbar-container">
            <div class="nav-left">
                <button id="menu-toggle" class="menu-btn">☰</button>
                <h1 class="logo">PAWKEDEX</h1>
            </div>
            <div class="nav-right">
                <ul class="nav-menu">
                    <li class="profile-item">
                        <img src="" alt="Profile Picture" class="profile-pic">
                        <span class="profile-name"><?= htmlspecialchars($_SESSION['firstName'] ?? 'Guest') ?></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="layout">
    </div>
</body>
</html>
