<?php include "header.php"; ?>

<?php
$jsonPath = __DIR__ . '/data/product.json';
if (!file_exists($jsonPath)) {
    die("products.json not found.");
}

$data = json_decode(file_get_contents($jsonPath), true);
if (json_last_error() !== JSON_ERROR_NONE) {
    die("Invalid JSON in products.json: " . json_last_error_msg());
}

$page         = $data['page'] ?? [];
$products     = $data['products'] ?? [];
$applications = $data['applications'] ?? [];
?>

<!-- Page Header -->
<section class="hero-section" style="padding: 120px 0 60px;">
    <div class="container">
        <h1 class="text-center"><?= htmlspecialchars($page['title'] ?? 'Our Products') ?></h1>
        <p class="text-center" style="font-size: 1.2rem;">
            <?= htmlspecialchars($page['subtitle'] ?? '') ?>
        </p>
    </div>
</section>

<!-- Products Overview -->
<section class="section">
    <div class="container">
        <p class="section-subtitle">
            <?= htmlspecialchars($page['intro'] ?? '') ?>
        </p>

        <div class="row g-4">
            <?php foreach ($products as $item): ?>
                <div class="col-lg-4 col-md-6">
                    <div class="product-card">
                        <img
                            src="<?= htmlspecialchars($item['image'] ?? '') ?>"
                            alt="<?= htmlspecialchars($item['alt'] ?? ($item['title'] ?? 'Product')) ?>"
                            class="card-img-top"
                        >
                        <div class="product-card-body">
                            <h5 class="product-card-title"><?= htmlspecialchars($item['title'] ?? '') ?></h5>

                            <?php if (!empty($item['description'])): ?>
                                <p><?= htmlspecialchars($item['description']) ?></p>
                            <?php endif; ?>

                            <?php if (!empty($item['features']) && is_array($item['features'])): ?>
                                <ul class="list-unstyled mb-3">
                                    <?php foreach ($item['features'] as $f): ?>
                                        <li>
                                            <i class="fas fa-check text-primary-custom me-2"></i>
                                            <?= htmlspecialchars($f) ?>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>

                            <?php if (!empty($item['link'])): ?>
                                <a href="<?= htmlspecialchars($item['link']) ?>" class="btn btn-primary">View Details</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<!-- Applications -->
<section class="section bg-light">
    <div class="container">
        <h2 class="section-title">Industry Applications</h2>

        <div class="row g-4">
            <?php foreach ($applications as $app): ?>
                <div class="col-md-3">
                    <div class="text-center">
                        <i class="<?= htmlspecialchars($app['icon'] ?? 'fas fa-circle') ?> fa-3x text-primary-custom mb-3"></i>
                        <h5><?= htmlspecialchars($app['title'] ?? '') ?></h5>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<?php include "footer.php"; ?>
