<?php

return [
    // Limit the number of displayed toasts
    'maxItems' => null,

    'options' => [
        'closeButton'       => true,
        'closeClass'        => 'toast-close-button',
        'closeDuration'     => 1000,
        'closeEasing'       => 'swing',
        'closeHtml'         => '<button><i class="fa fa-cros">x</i></button>',
        'closeMethod'       => 'fadeOut',
        'closeOnHover'      => true,
        'containerId'       => 'toast-container',
        'debug'             => false,
        'escapeHtml'        => false,
        'extendedTimeOut'   => 1000,
        'hideDuration'      => 1000,
        'hideEasing'        => 'linear',
        'hideMethod'        => 'fadeOut',
        'iconClass'         => 'toast-info',
        'iconClasses'       => [
            'error'   => 'toast-error',
            'info'    => 'toast-info',
            'success' => 'toast-success',
            'warning' => 'toast-warning',
        ],
        'messageClass'      => 'toast-message',
        'newestOnTop'       => false,
        'onHidden'          => null,
        'onShown'           => null,
        'positionClass'     => 'toast-top-center',
        'preventDuplicates' => true,
        'progressBar'       => true,
        'progressClass'     => 'toast-progress',
        'rtl'               => false,
        'showDuration'      => 1000,
        'showEasing'        => 'swing',
        'showMethod'        => 'fadeIn',
        'tapToDismiss'      => true,
        'target'            => 'body',
        'timeOut'           => 3000,
        'titleClass'        => 'toast-title',
        'toastClass'        => 'toast',
    ],
];
