<?php declare(strict_types=1);

namespace seregazhuk\PhpWatcher;

use Jean85\PrettyVersions;
use Symfony\Component\Console\Application;

final class ConsoleApplication extends Application
{
    public function __construct()
    {
        parent::__construct('PHP-Watcher', PrettyVersions::getVersion('seregazhuk/php-watcher')->getPrettyVersion());
        $this->add(new WatcherCommand());
    }

    public function getLongVersion(): string
    {
        return parent::getLongVersion() . ' by <comment>Sergey Zhuk</comment>';
    }
}
