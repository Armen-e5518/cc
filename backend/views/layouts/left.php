
<aside class="main-sidebar">
    <section class="sidebar">
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget' => 'tree'],
                'items' => [
                    ['label' => 'Participation', 'icon' => 'list', 'url' => ['/participation']],
                ],
            ]
        ) ?>

    </section>

</aside>
