<?php
if ($_SERVER['REQUEST_URI'] === '/frontend') {
    require_once __DIR__ . '/departments/frontend/frontend.php';
    exit;
} elseif ($_SERVER['REQUEST_URI'] === '/backend') {
    require_once __DIR__ . '/departments/backend/backend.php';
    exit;
} elseif ($_SERVER['REQUEST_URI'] === '/data') {
    require_once __DIR__ . '/departments/data/data.php';
    exit;
} elseif ($_SERVER['REQUEST_URI'] === '/full-stack') {
    require_once __DIR__ . '/departments/full-stack/full-stack.php';
    exit;
} elseif ($_SERVER['REQUEST_URI'] === '/devops') {
    require_once __DIR__ . '/departments/devops/devops.php';
    exit;
} elseif ($_SERVER['REQUEST_URI'] === '/system-network') {
    require_once __DIR__ . '/departments/system-network/system-network.php';
    exit;
} elseif ($_SERVER['REQUEST_URI'] === '/mobile') {
    require_once __DIR__ . '/departments/mobile/mobile.php';
    exit;
} elseif ($_SERVER['REQUEST_URI'] === '/quality-assurance') {
    require_once __DIR__ . '/departments/quality-assurance/quality-assurance.php';
    exit;
} elseif ($_SERVER['REQUEST_URI'] === '/design') {
    require_once __DIR__ . '/departments/design/design.php';
    exit;
} elseif ($_SERVER['REQUEST_URI'] === '/technical-writing') {
    require_once __DIR__ . '/departments/technical-writing/technical-writing.php';
    exit;
} elseif ($_SERVER['REQUEST_URI'] === '/project-management') {
    require_once __DIR__ . '/departments/project-management/project-management.php';
    exit;
} elseif ($_SERVER['REQUEST_URI'] === '/it-support') {
    require_once __DIR__ . '/departments/it-support/it-support.php';
    exit;
} elseif ($_SERVER['REQUEST_URI'] === '/internship') {
    require_once __DIR__ . '/departments/internship/internship.php';
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>linkedin-jobs</title>
    <!-- css -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<style>
    body {
        font-family: 'Inter', sans-serif;
    }
</style>

<body>

    <!-- sidebar -->
    <?php include 'sidebar.php' ?>

    <!-- script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>

</body>

</html>