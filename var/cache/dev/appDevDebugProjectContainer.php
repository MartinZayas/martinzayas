<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerExyxvuc\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerExyxvuc/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerExyxvuc.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerExyxvuc\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerExyxvuc\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Exyxvuc',
    'container.build_id' => '109758ec',
    'container.build_time' => 1529525097,
));
