<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUogGfCn\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUogGfCn/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerUogGfCn.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerUogGfCn\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerUogGfCn\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'UogGfCn',
    'container.build_id' => '149312c2',
    'container.build_time' => 1537532451,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerUogGfCn');
