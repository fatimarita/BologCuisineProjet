<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container6XPgSpb\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container6XPgSpb/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container6XPgSpb.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container6XPgSpb\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container6XPgSpb\srcApp_KernelDevDebugContainer([
    'container.build_hash' => '6XPgSpb',
    'container.build_id' => '89a8b338',
    'container.build_time' => 1557620538,
], __DIR__.\DIRECTORY_SEPARATOR.'Container6XPgSpb');
