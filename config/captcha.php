	<?php
/*
 * Secret key and Site key get on https://www.google.com/recaptcha
 * */
return [
	'secret' => '6LfgfEoUAAAAAA-S7AGp2MaFHCMN3pUy8M2ESQwM',
	'sitekey' => '6LfgfEoUAAAAAOHzcJaO_bkcFC2eJIY-OPpMZhSg',
    /**
     * @var string|null Default ``null``.
     * Custom with function name (example customRequestCaptcha) or class@method (example \App\CustomRequestCaptcha@custom).
     * Function must be return instance, read more in folder ``examples``
     */
    'request_method' => null,
    'options' => [
        'multiple' => false,
        'lang' => app()->getLocale(),
    ],
    'attributes' => [
        'theme' => 'light'
    ],
];