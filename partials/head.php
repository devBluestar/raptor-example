<?php $type = isset($_GET['type']) ? $_GET['type'] : 'include'; ?>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<link rel="stylesheet" href="<?= RAPTOR_PARTIALS_URI; ?>style.css" />
<?php if ($type === 'packaged'): ?>
    <?php 
        require_once RAPTOR_THEMES_DIR . 'include.php';
        require_once RAPTOR_DEPENDENCIES_DIR . 'include.php';
    ?>
    <script src="<?= RAPTOR_PACKAGES_URI; ?>raptor.js"></script>
<?php elseif ($type === 'include'): ?>
    <?php
        require_once RAPTOR_THEMES_DIR . 'include.php';
        require_once RAPTOR_DEPENDENCIES_DIR . 'include.php';
        require_once RAPTOR_COMMON_DIR . 'include.php';
        require_once RAPTOR_LOCALES_DIR . 'include.php';
        require_once RAPTOR_EDITOR_DIR . 'src/include.php';
        require_once RAPTOR_FILE_MANAGER_DIR . 'src/include.php';
        require_once RAPTOR_IMAGE_EDITOR_DIR . 'src/include.php';
        require_once RAPTOR_PREMIUM_DIR . 'src/include.php';
        require_once RAPTOR_SECTION_DIR . 'src/include.php';
    ?>
<?php endif; ?>
<script src="<?= RAPTOR_PARTIALS_URI; ?>default.js"></script>
