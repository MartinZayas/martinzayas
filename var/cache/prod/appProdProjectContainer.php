<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSzsezfv\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSzsezfv/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerSzsezfv.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerSzsezfv\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerSzsezfv\appProdProjectContainer(array(
    'container.build_hash' => 'Szsezfv',
    'container.build_id' => 'f3fbfcce',
    'container.build_time' => 1527650762,
));
