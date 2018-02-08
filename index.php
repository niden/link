<?php

define("PLATFORM", "platform");
define("LANG", "lang");
define("PLATFORM_UNSET", "platform unset");

$langs = require_once 'langs.php';

$routes = [
    'about'                                => 'https://phalconphp.com/en/about',
    'blog'                                 => 'https://blog.phalconphp.com',
    'builtwith'                            => 'https://builtwith.phalconphp.com',
    'compose'                              => 'https://phalcon-compose.readme.io',
    'discord'                              => 'https://discord.gg/kRc2N2M',
    'docs'                                 => 'https://docs.phalconphp.com',
    'donate'                               => 'https://opencollective.com/phalcon',
    'download'                             => 'https://phalconphp.com/en/download',
    'download/linux'                       => 'https://packagecloud.io/phalcon/stable',
    'download/windows/latest/x86-70'       => 'https://github.com/phalcon/cphalcon/releases/tag/v3.2.2',
    'download/windows/latest/x86-70-nts'   => 'https://github.com/phalcon/cphalcon/releases/tag/v3.2.2',
    'download/windows/latest/x86-56'       => 'https://github.com/phalcon/cphalcon/releases/tag/v3.2.2',
    'download/windows/latest/x86-56-nts'   => 'https://github.com/phalcon/cphalcon/releases/tag/v3.2.2',
    'download/windows/latest/x86-55'       => 'https://github.com/phalcon/cphalcon/releases/tag/v3.2.2',
    'download/windows/latest/x86-55-nts'   => 'https://github.com/phalcon/cphalcon/releases/tag/v3.2.2',
    'download/windows/latest/x64-70'       => 'https://github.com/phalcon/cphalcon/releases/tag/v3.2.2',
    'download/windows/latest/x64-70-nts'   => 'https://github.com/phalcon/cphalcon/releases/tag/v3.2.2',
    'download/windows/latest/x64-56'       => 'https://github.com/phalcon/cphalcon/releases/tag/v3.2.2',
    'download/windows/latest/x64-56-nts'   => 'https://github.com/phalcon/cphalcon/releases/tag/v3.2.2',
    'download/windows/latest/x64-55'       => 'https://github.com/phalcon/cphalcon/releases/tag/v3.2.2',
    'download/windows/latest/x64-55-nts'   => 'https://github.com/phalcon/cphalcon/releases/tag/v3.2.2',
    'download/windows/previous/x86-56'     => 'https://github.com/phalcon/cphalcon/releases/tag/v3.2.1',
    'download/windows/previous/x86-56-nts' => 'https://github.com/phalcon/cphalcon/releases/tag/v3.2.1',
    'download/windows/previous/x86-55'     => 'https://github.com/phalcon/cphalcon/releases/tag/v3.2.1',
    'download/windows/previous/x86-55-nts' => 'https://github.com/phalcon/cphalcon/releases/tag/v3.2.1',
    'download/windows/previous/x64-56'     => 'https://github.com/phalcon/cphalcon/releases/tag/v3.2.1',
    'download/windows/previous/x64-56-nts' => 'https://github.com/phalcon/cphalcon/releases/tag/v3.2.1',
    'download/windows/previous/x64-55'     => 'https://github.com/phalcon/cphalcon/releases/tag/v3.2.1',
    'download/windows/previous/x64-55-nts' => 'https://github.com/phalcon/cphalcon/releases/tag/v3.2.1',
    'facebook'                             => 'https://www.facebook.com/Phalcon-Framework-134230726685897/',
    'fb'                                   => 'https://www.facebook.com/Phalcon-Framework-134230726685897/',
    'forum'                                => 'https://forum.phalconphp.com',
    'fund'                                 => 'https://opencollective.com/phalcon',
    'funding'                              => 'https://opencollective.com/phalcon',
    'gplus'                                => 'https://plus.google.com/u/0/b/102376109340560896457/+PhalconPHP',
    'gab'                                  => 'https://gab.ai/phalcon',
    'github'                               => 'https://github.com/phalcon/cphalcon',
    'github-docs'                          => 'https://github.com/phalcon/docs',
    'license'                              => 'https://license.phalconphp.com',
    'resources'                            => 'https://phalconist.phalconphp.com',
    'sample-apps'                          => 'https://docs.phalconphp.com/en/latest/reference/tutorial.html#sample-applications',
    'slack'                                => 'https://slack.phalconphp.com/',
    'so'                                   => 'https://stackoverflow.com/questions/tagged/phalcon',
    'sponsors'                             => 'https://phalconphp.com/en/sponsors',
    'store'                                => 'https://store.phalconphp.com',
    'support_us'                           => 'https://opencollective.com/phalcon',
    't'                                    => 'https://twitter.com/phalconphp',
    'team'                                 => 'https://phalconphp.com/en/team',
    'team/andres'                          => 'https://github.com/andresgutierrez',
    'team/nikos'                           => 'https://github.com/niden',
    'team/serghei'                         => 'https://github.com/sergeyklay',
    'team/volodymyr'                       => 'https://github.com/sjinks',
    'tutorial'                             => 'https://docs.phalconphp.com/en/latest/reference/tutorial.html',
    'twitter'                              => 'https://twitter.com/phalconphp',
    'default'                              => 'https://phalconphp.com',
];

$app = new \Phalcon\Mvc\Micro();

$getBase      = function () use ($app, $routes) {
    $output   = <<<EOF
<!DOCTYPE html>
<html lang="en">
<title>Phalcon Link</title>
<head>
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Stub</th>
                    <th>URL</th>
                </tr>
                </thead>
                <tbody>
                    %s
                </tbody>
            </thead>
            </table>
        </div>
    </div>
</body>
</html>
EOF;
    $template = '<tr><td><a href="https://phalcon.link/%s">%s</a></td><td><a href="%s">%s</a></td></tr>' . PHP_EOL;
    $links    = sprintf(
        $template,
        'www',
        'Website',
        $routes['default'],
        $routes['default']
    );
    ksort($routes);
    foreach ($routes as $key => $url) {
        if ('default' !== $key) {
            $links .= sprintf($template, $key, $key, $url, $url);
        }
    }

    $output = sprintf($output, $links);
    $app->response->setContent($output);

    return $app->response->send();
};

$platformUrlBuilder = function ($url, $platform, $category, $version) use ($verifyUrl, $routes) {
    switch ($url) {
        case 'download':
            switch ($platform) {
                case 'linux':
                    $url = 'download/linux';
                    break;
                case 'windows':
                    $url = sprintf(
                        'download/%s/%s/%s',
                        $platform,
                        $category,
                        $version
                    );
                    break;
            }
            break;
        case 'team':
            $url = sprintf('team/%s', $platform);
            break;
    }
    return $routes[$url] ?? $routes['default'];
};

$langUrlBuilder = function ($url, $platform) use ($verifyUrl, $routes) {
    if (isset($routes[$url])) {
        return $routes[$url] . "/" . $platform;
    } else {
        return $routes['default'];
    }
};

$resolvePlatformOrLang = function ($platformOrLang) use ($langs) {
    if (isset($platformOrLang)) {
        return in_array($platformOrLang, $langs) ? LANG : PLATFORM;
    } else {
        return PLATFORM_UNSET;
    }
};

$getRedirect  = function ($url, $platform, $category, $version) use (
    $app,
    $resolvePlatformOrLang,
    $platformUrlBuilder,
    $langUrlBuilder)
{
    $platformOrLang = $resolvePlatformOrLang($platform);
    $url = strtolower($url);
    switch($platformOrLang) {
        case PLATFORM:
            $url = $platformUrlBuilder($url, $platform, $category, $version);
            break;
        case LANG:
            $url = $langUrlBuilder($url, $platform);
            break;
    }

    return $app->response->redirect($url, true);
};

$routeProcess = function ($url, $platform = '', $category = '', $version = '') use ($app, $routes, $getBase, $getRedirect) {
    if (true === empty($url)) {
        return $getBase();
    } else {
        return $getRedirect($url, $platform, $category, $version);
    }
};

$app->notFound(
    function () use ($app) {
        $app->response->setStatusCode(404, "Not Found");
        $app->response->sendHeaders();

        echo "This link does not exist";
    }
);
$app->get('/{url}', $routeProcess);
$app->get('/{url}/{platform}', $routeProcess);
$app->get('/{url}/{platform}/{category}', $routeProcess);
$app->get('/{url}/{platform}/{category}/{version}', $routeProcess);

$app->handle();
