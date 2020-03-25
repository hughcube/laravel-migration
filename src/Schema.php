<?php
/**
 * Created by IntelliJ IDEA.
 * User: hugh.li
 * Date: 2020/3/24
 * Time: 22:42.
 */

namespace HughCube\Laravel\Migrations;

use Illuminate\Database\Connection;
use Illuminate\Database\MySqlConnection;
use Illuminate\Database\Schema\Builder;
use Illuminate\Support\Facades\Schema as IlluminateSchema;

class Schema extends IlluminateSchema
{
    /**
     * {@inheritdoc}
     */
    public static function connection($name)
    {
        /** @var Connection $connection */
        $connection = static::$app['db']->connection($name);

        return static::useCustomGrammar($connection);
    }

    /**
     * {@inheritdoc}
     */
    protected static function getFacadeAccessor()
    {
        $connection = static::$app['db']->connection();

        return static::useCustomGrammar($connection);
    }

    /**
     * 引导系统调用我们自定义的 Grammar.
     *
     * @param Connection $connection
     *
     * @return Builder
     */
    protected static function useCustomGrammar($connection)
    {
        if ($connection instanceof MySqlConnection) {
            $grammar = $connection->withTablePrefix(new MySqlGrammar());
            $connection->setSchemaGrammar($grammar);
        }

        $builder = $connection->getSchemaBuilder();

        $builder->blueprintResolver(function ($table, $callback, $prefix) {
            return new Blueprint($table, $callback, $prefix);
        });

        return $builder;
    }
}
