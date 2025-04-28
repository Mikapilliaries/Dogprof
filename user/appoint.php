<?php
session_start();
if (!isset($_SESSION['ownerID'])) {
    header("Location: login.php");
    exit();
}

$pageTitle = 'Appointments'; 
$basePath = './'; // root files like appoint.php
?>

<?php include 'navigation/sidebar.php'; ?>
<div class="layout">
    <?php include 'navigation/sidebar.php'; ?>
    
    <h1>Appointments</h1>
    <p>Manage your appointments here.</p>
</div>

<?php include 'navigation/footer.php'; ?>

<script>
    const toggleButton = document.getElementById('menu-toggle');
    const sidebar = document.getElementById('sidebar');

    toggleButton?.addEventListener('click', () => {
        sidebar?.classList.toggle('collapsed');
    });
</script>
