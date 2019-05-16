
<aside class="main-sidebar">
    <section class="sidebar">
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget' => 'tree'],
                'items' => [
                    ['label' => 'Results', 'icon' => 'list', 'url' => ['/results']],
                ],
            ]
        ) ?>

    </section>

</aside>
