<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

namespace Hyperf\Crontab;

use Hyperf\Crontab\Listener\CrontabRegisterListener;
use Hyperf\Crontab\Strategy\CoroutineStrategy;
use Hyperf\Crontab\Strategy\StrategyInterface;

class ConfigProvider
{
    public function __invoke()
    {
        return [
            'dependencies' => [
                StrategyInterface::class => CoroutineStrategy::class,
            ],
            'listeners' => [
                CrontabRegisterListener::class,
            ],
        ];
    }
}
