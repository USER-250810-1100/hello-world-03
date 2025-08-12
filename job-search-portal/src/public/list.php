<?php
require_once '../config/database.php';
require_once '../models/Job.php';
require_once '../utils/Pagination.php';

$database = new Database();
$db = $database->getConnection();

$job = new Job($db);
$pagination = new Pagination($job->getTotalJobs(), 10); // 10 jobs per page
$current_page = $pagination->getCurrentPage();
$jobs = $job->getJobs($current_page, 10); // Fetch jobs for the current page

include '../includes/header.php';
?>

<div class="container">
    <h1>案件一覧</h1>
    <table>
        <thead>
            <tr>
                <th>タイトル</th>
                <th>会社名</th>
                <th>勤務地</th>
                <th>詳細</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($jobs as $job): ?>
                <tr>
                    <td><?php echo htmlspecialchars($job['title']); ?></td>
                    <td><?php echo htmlspecialchars($job['company']); ?></td>
                    <td><?php echo htmlspecialchars($job['location']); ?></td>
                    <td>
                        <a href="detail.php?id=<?php echo $job['id']; ?>">詳細</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="pagination">
        <?php echo $pagination->createLinks(); ?>
    </div>
</div>

<?php include '../includes/footer.php'; ?>