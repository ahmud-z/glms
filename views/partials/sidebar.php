<aside>
    <div class="sidebar_class_links flex-1">
        <li>
            <a href="/">Home</a>
        </li>
        <?php foreach ($classes as $class) : ?>
            <li>
                <a href="/class-details?id=<?= $class['id'] ?>"><?= $class['name'] ?></a>
            </li>
        <?php endforeach; ?>
    </div>


    <ul class="sidebar_class_links">
        <li>
            <a href="/logout">Logout</a>
        </li>
    </ul>
</aside>