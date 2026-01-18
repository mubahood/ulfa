<?php
/**
 * Admin Dashboard
 */
require_once 'config/auth.php';
requireAdmin();
checkSessionTimeout();

$currentAdmin = getCurrentAdmin();
$currentPage = 'dashboard';
$pageTitle = 'Dashboard';

// Get statistics (placeholder - will be replaced with actual queries)
$stats = [
    'news' => 0,
    'events' => 0,
    'causes' => 0,
    'gallery' => 0,
    'team' => 0,
    'inquiries' => 0
];

try {
    $pdo = getDBConnection();
    if ($pdo) {
        // Get actual counts from database
        $tables = ['news_posts', 'events', 'causes', 'gallery_images', 'team_members', 'contact_inquiries'];
        $keys = ['news', 'events', 'causes', 'gallery', 'team', 'inquiries'];
        
        foreach ($tables as $index => $table) {
            try {
                $stmt = $pdo->query("SELECT COUNT(*) FROM $table");
                $stats[$keys[$index]] = $stmt->fetchColumn();
            } catch (PDOException $e) {
                // Table doesn't exist yet - keep at 0
                $stats[$keys[$index]] = 0;
            }
        }
    }
} catch (Exception $e) {
    // Keep default values
}

include 'includes/header.php';
?>

<div class="row mb-4">
    <div class="col-12">
        <h2>Welcome back, <?php echo htmlspecialchars($currentAdmin['name']); ?>!</h2>
        <p class="text-muted">Here's an overview of your content management system.</p>
    </div>
</div>

<!-- Statistics Grid -->
<div class="stats-grid">
    <div class="stat-card">
        <div class="stat-card-header">
            <div>
                <div class="stat-number"><?php echo $stats['news']; ?></div>
                <div class="stat-label">News Articles</div>
            </div>
            <div class="stat-icon">
                <i class="fas fa-newspaper"></i>
            </div>
        </div>
        <a href="news.php" class="btn btn-sm btn-primary" style="width: 100%;">
            <i class="fas fa-eye"></i> View All
        </a>
    </div>
    
    <div class="stat-card">
        <div class="stat-card-header">
            <div>
                <div class="stat-number"><?php echo $stats['events']; ?></div>
                <div class="stat-label">Events</div>
            </div>
            <div class="stat-icon" style="background: #17a2b8;">
                <i class="fas fa-calendar-alt"></i>
            </div>
        </div>
        <a href="events.php" class="btn btn-sm btn-primary" style="width: 100%;">
            <i class="fas fa-eye"></i> View All
        </a>
    </div>
    
    <div class="stat-card">
        <div class="stat-card-header">
            <div>
                <div class="stat-number"><?php echo $stats['causes']; ?></div>
                <div class="stat-label">Active Causes</div>
            </div>
            <div class="stat-icon" style="background: #28a745;">
                <i class="fas fa-hand-holding-heart"></i>
            </div>
        </div>
        <a href="causes.php" class="btn btn-sm btn-primary" style="width: 100%;">
            <i class="fas fa-eye"></i> View All
        </a>
    </div>
    
    <div class="stat-card">
        <div class="stat-card-header">
            <div>
                <div class="stat-number"><?php echo $stats['gallery']; ?></div>
                <div class="stat-label">Gallery Images</div>
            </div>
            <div class="stat-icon" style="background: #dc3545;">
                <i class="fas fa-images"></i>
            </div>
        </div>
        <a href="gallery.php" class="btn btn-sm btn-primary" style="width: 100%;">
            <i class="fas fa-eye"></i> View All
        </a>
    </div>
    
    <div class="stat-card">
        <div class="stat-card-header">
            <div>
                <div class="stat-number"><?php echo $stats['team']; ?></div>
                <div class="stat-label">Team Members</div>
            </div>
            <div class="stat-icon" style="background: #6f42c1;">
                <i class="fas fa-users"></i>
            </div>
        </div>
        <a href="team.php" class="btn btn-sm btn-primary" style="width: 100%;">
            <i class="fas fa-eye"></i> View All
        </a>
    </div>
    
    <div class="stat-card">
        <div class="stat-card-header">
            <div>
                <div class="stat-number"><?php echo $stats['inquiries']; ?></div>
                <div class="stat-label">Inquiries</div>
            </div>
            <div class="stat-icon" style="background: #fd7e14;">
                <i class="fas fa-envelope"></i>
            </div>
        </div>
        <a href="inquiries.php" class="btn btn-sm btn-primary" style="width: 100%;">
            <i class="fas fa-eye"></i> View All
        </a>
    </div>
</div>

<!-- Quick Actions -->
<div class="row">
    <div class="col-lg-8 mb-4">
        <div class="data-table-container">
            <div class="table-header">
                <h3>Recent Activity</h3>
            </div>
            <div class="p-4 text-center text-muted">
                <i class="fas fa-clock fa-3x mb-3" style="opacity: 0.3;"></i>
                <p>Activity log will appear here once you start managing content.</p>
            </div>
        </div>
    </div>
    
    <div class="col-lg-4 mb-4">
        <div class="data-table-container">
            <div class="table-header">
                <h3>Quick Actions</h3>
            </div>
            <div class="p-3">
                <div class="d-grid gap-2">
                    <a href="news.php?action=add" class="btn btn-primary">
                        <i class="fas fa-plus"></i> Add News Article
                    </a>
                    <a href="events.php?action=add" class="btn btn-primary">
                        <i class="fas fa-plus"></i> Add Event
                    </a>
                    <a href="causes.php?action=add" class="btn btn-primary">
                        <i class="fas fa-plus"></i> Add Cause
                    </a>
                    <a href="gallery.php?action=add" class="btn btn-primary">
                        <i class="fas fa-plus"></i> Add Gallery Images
                    </a>
                    <a href="team.php?action=add" class="btn btn-primary">
                        <i class="fas fa-plus"></i> Add Team Member
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
