<?php foreach ($menus as $menu): ?>
    <li class="nav-item dropdownhover m-0">
        <a class="nav-link" style="font-size: small;"
            href="<?= htmlspecialchars(base_url($menu['link']), ENT_QUOTES, 'UTF-8') ?>">
            <?= htmlspecialchars($menu['nama_menu'], ENT_QUOTES, 'UTF-8') ?>
        </a>

        <?php if (!empty($menu['children'])): ?>
            <ul class="dropdown-menu dropdown-menu-dark">
                <?= $this->load->view('alfas/partisi/menu', ['menus' => $menu['children']], TRUE) ?>
            </ul>
        <?php endif; ?>
    </li>
<?php endforeach; ?>