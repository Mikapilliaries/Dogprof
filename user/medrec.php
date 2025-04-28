<?php
session_start();
if (!isset($_SESSION['ownerID'])) {
    header("Location: login.php");
    exit();
}

$pageTitle = 'Medical Records'; 
$basePath = './'; // root files like medrec.php
?>
<?php include 'navigation/sidebar.php'; ?>
<div class="layout">
    
   
    <h1>Medical Records</h1>
    <p>View and manage your pets' medical records here.</p>
</div>



<script>
    const toggleButton = document.getElementById('menu-toggle');
    const sidebar = document.getElementById('sidebar');

    toggleButton?.addEventListener('click', () => {
        sidebar?.classList.toggle('collapsed');
    });
</script>
