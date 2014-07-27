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

namespace GrahamCampbell\Credentials\Models;

use Cartalyst\Sentry\Groups\Eloquent\Group as SentryGroup;
use GrahamCampbell\Database\Models\Common\BaseModelTrait;
use GrahamCampbell\Database\Models\Interfaces\BaseModelInterface;

/**
 * This is the group model class.
 *
 * @author    Graham Campbell <graham@mineuk.com>
 * @copyright 2013-2014 Graham Campbell
 * @license   <https://github.com/GrahamCampbell/Laravel-Credentials/blob/master/LICENSE.md> Apache 2.0
 */
class Group extends SentryGroup implements BaseModelInterface
{
    use BaseModelTrait;

    /**
     * The table the groups are stored in.
     *
     * @type string
     */
    protected $table = 'groups';

    /**
     * The model name.
     *
     * @type string
     */
    public static $name = 'group';

    /**
     * The columns to select when displaying an index.
     *
     * @type array
     */
    public static $index = array('id', 'name');

    /**
     * The max groups per page when displaying a paginated index.
     *
     * @type int
     */
    public static $paginate = 20;

    /**
     * The columns to order by when displaying an index.
     *
     * @type string
     */
    public static $order = 'name';

    /**
     * The direction to order by when displaying an index.
     *
     * @type string
     */
    public static $sort = 'asc';
}
