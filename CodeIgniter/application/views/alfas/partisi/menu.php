<?php foreach ($menus as $menu): ?>
<li class="nav-item dropdownhover m-0">
    <a class="nav-link" style="font-size: small;" href="<?= $menu['url'] ?>"><?= $menu['text'] ?></a>

    <?php if (!empty($menu['children'])): ?>
    <ul class="dropdown-menu dropdown-menu-dark">
        <?= $this->include('partition/menu', ['menus' => $menu['children']]) ?>
    </ul>
    <?php endif; ?>
</li>
<?php endforeach; ?>
