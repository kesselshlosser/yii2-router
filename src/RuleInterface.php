<?php

namespace Gevman\Router;

/**
 * Interface RuleInterface
 * @author Gevorg Mansuryan <gevorgmansuryan@gmail.com>
 */
interface RuleInterface
{
    /**
     * @param callable $callable
     * @return RuleInterface
     */
    public function configure($callable);

    /**
     * @param array $defaults
     * @return RuleInterface
     */
    public function defaults(array $defaults);

    /**
     * @param $name
     * @return RuleInterface
     */
    public function named($name);
}