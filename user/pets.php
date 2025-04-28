<?php
session_start();
if (!isset($_SESSION['ownerID'])) {
    header("Location: ../login.php");
    exit();
}

$pageTitle = 'Pets'; // Optional: customize title per page

include 'navigation/sidebar.php';
?>

<div class="body-content">
    <h1>Your Pets</h1>
    <p>Manage all your pets here.</p>  

    <div class="add-pet-card">
        <div class="add-pet-image">
            <!-- You can later replace this with your actual image -->
            <img src="../assets/paw-plus.png" alt="Add Pet" />
        </div>
        <div class="add-pet-text">
            <h2>Add a pet here</h2>
            <p>Click here to register a new furry friend to your Pawkedex!</p>
        </div>
    </div>
</div>

<?php include 'navigation/footer.php'; ?>

<script>
    const toggleButton = document.getElementById('menu-toggle');
    const sidebar = document.getElementById('sidebar');

    toggleButton?.addEventListener('click', () => {
        sidebar?.classList.toggle('collapsed');
    });
</script>
