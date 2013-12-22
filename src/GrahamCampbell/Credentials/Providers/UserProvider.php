<?php

/**
 * This file is part of Laravel Credentials by Graham Campbell.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace GrahamCampbell\Credentials\Providers;

use GrahamCampbell\Core\Providers\AbstractProvider;
use GrahamCampbell\Core\Providers\Interfaces\PaginateProviderInterface;
use GrahamCampbell\Core\Providers\Common\PaginateProviderTrait;

/**
 * This is the user provider class.
 *
 * @package    Laravel-Credentials
 * @author     Graham Campbell
 * @copyright  Copyright 2013 Graham Campbell
 * @license    https://github.com/GrahamCampbell/Laravel-Credentials/blob/develop/LICENSE.md
 * @link       https://github.com/GrahamCampbell/Laravel-Credentials
 */
class UserProvider extends AbstractProvider implements PaginateProviderInterface
{
    use PaginateProviderTrait;
}
