<?php
session_start();
if (!isset($_SESSION['ownerID'])) {
    header("Location: login.php");
    exit();
}

$pageTitle = 'Settings'; 
$basePath = './'; // root files like settings.php
?>

<?php include 'navigation/sidebar.php'; ?>
<div class="layout">
    
    <h1>Settings</h1>
    <p>Adjust your account settings here.</p>
</div>

<?php include 'navigation/footer.php'; ?>

<script>
    const toggleButton = document.getElementById('menu-toggle');
    const sidebar = document.getElementById('sidebar');

    toggleButton?.addEventListener('click', () => {
        sidebar?.classList.toggle('collapsed');
    });
</script>
