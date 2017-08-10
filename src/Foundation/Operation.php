<?php
namespace Awok\Foundation;

use Awok\Foundation\Traits\DispatchesJobsTrait;
use Awok\Foundation\Traits\JobDispatcherTrait;
use Awok\Foundation\Traits\MarshalTrait;

abstract class Operation
{
    use MarshalTrait;
    use DispatchesJobsTrait;
    use JobDispatcherTrait;
}