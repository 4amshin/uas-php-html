<?php

include '../database/db_config.php';

session_start();

// Redirect to login page if not logged in
if (!isset($_SESSION['username'])) {
    header("Location: index.php?access_denied");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['save-button'])) {
    $menuIds = $_POST['menu_ids'];

    // Update for service-menu (Title and Icon URL)
    if (in_array('service-menu', $menuIds)) {
        // ... Your existing code ...
    } else {
        // Update for dashboard-content (Content)
        $contents = $_POST['contents'];

        $updateQuery = "UPDATE `dashboard-content` SET `content` = ? WHERE `id` = ?";
        $stmt = mysqli_prepare($connect, $updateQuery);

        foreach ($contents as $id => $content) {
            $content = mysqli_real_escape_string($connect, $content);

            mysqli_stmt_bind_param($stmt, "si", $content, $id);
            mysqli_stmt_execute($stmt);
        }

        mysqli_stmt_close($stmt);
    }

    // Display success message
    echo "Update was successful.";

    // Redirect back to the dashboard editor page after a delay
    // header("Refresh: 3; URL=../dashboard_editor_page.php?menu_id=$menuId");
    header("Location: ../dashboard.php");
    exit;
}
?>
