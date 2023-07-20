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
        $titles = $_POST['titles'];
        $iconUrls = $_POST['iconUrls'];

        $updateQuery = "UPDATE `service-menu` SET `title` = ?, `icon_url` = ? WHERE `id` = ?";
        $stmt = mysqli_prepare($connect, $updateQuery);

        foreach ($titles as $id => $title) {
            $title = mysqli_real_escape_string($connect, $title);
            $iconUrl = mysqli_real_escape_string($connect, $iconUrls[$id]);
            $id = mysqli_real_escape_string($connect, $id);

            echo "Processing title with id $id: $title\n";

            mysqli_stmt_bind_param($stmt, "ssi", $title, $iconUrl, $id);
            mysqli_stmt_execute($stmt);

            if (mysqli_stmt_error($stmt)) {
                echo "MySQL error: " . mysqli_stmt_error($stmt);
            }
            
        }

        mysqli_stmt_close($stmt);

        //display message
        echo "Service Menu Update Success";
    } 
    else {
        // Update for dashboard-content (Content)
        $contents = $_POST['contents'];

        $updateQuery = "UPDATE `dashboard-content` SET `content` = ? WHERE `id` = ?";
        $stmt = mysqli_prepare($connect, $updateQuery);

        foreach ($contents as $id => $content) {
            $content = mysqli_real_escape_string($connect, $content);
            $id = mysqli_real_escape_string($connect, $id);

            mysqli_stmt_bind_param($stmt, "si", $content, $id);
            mysqli_stmt_execute($stmt);
        }

        mysqli_stmt_close($stmt);
    }

    // Display success message
    // echo "Update was successful.";
    echo '<script>alert("Update Berhasil"); window.location.href="../dashboard.php";</script>';


    // Redirect back to the dashboard editor page after a delay
    // header("Refresh: 3; URL=../dashboard_editor_page.php?menu_id=" . urlencode($_POST['menu_id']));
    exit;
}
?>
