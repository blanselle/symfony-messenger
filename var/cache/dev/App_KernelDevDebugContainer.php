<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container4rFNZjI\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container4rFNZjI/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container4rFNZjI.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container4rFNZjI\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container4rFNZjI\App_KernelDevDebugContainer([
    'container.build_hash' => '4rFNZjI',
    'container.build_id' => 'af543cc4',
    'container.build_time' => 1644916124,
], __DIR__.\DIRECTORY_SEPARATOR.'Container4rFNZjI');