<?php
// detail.php

require_once '../config/database.php';
require_once '../models/Job.php';

$jobId = isset($_GET['id']) ? intval($_GET['id']) : 0;

$database = new Database();
$db = $database->getConnection();

$job = new Job($db);
$jobDetails = $job->getJobById($jobId);

if ($jobDetails) {
    ?>
    <!DOCTYPE html>
    <html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>案件詳細</title>
    </head>
    <body>
        <?php include '../includes/header.php'; ?>
        <div class="container">
            <h1><?php echo htmlspecialchars($jobDetails['title']); ?></h1>
            <p><?php echo nl2br(htmlspecialchars($jobDetails['description'])); ?></p>
            <p><strong>勤務地:</strong> <?php echo htmlspecialchars($jobDetails['location']); ?></p>
            <p><strong>給与:</strong> <?php echo htmlspecialchars($jobDetails['salary']); ?></p>
            <a href="list.php">戻る</a>
        </div>
        <?php include '../includes/footer.php'; ?>
    </body>
    </html>
    <?php
} else {
    echo "案件が見つかりませんでした。";
}
?>