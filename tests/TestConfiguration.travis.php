<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    UnitTests
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id$
 */

/**
 * This file defines configuration for running the unit tests for the Zend
 * Framework.  Some tests have dependencies to PHP extensions or databases
 * which may not necessary installed on the target system.  For these cases,
 * the ability to disable or configure testing is provided below.  Tests for
 * components which should run universally are always run by the master
 * suite and cannot be disabled.
 *
 * Do not edit this file. Instead, copy this file to TestConfiguration.php,
 * and edit the new file. Never commit plaintext passwords to the source
 * code repository.
 */
 
 /**
 * Zend_Auth_Adapter_DbTable tests
 */
defined('TESTS_ZEND_AUTH_ADAPTER_DBTABLE_PDO_SQLITE_ENABLED') || define('TESTS_ZEND_AUTH_ADAPTER_DBTABLE_PDO_SQLITE_ENABLED', true);

/**
 * Zend_Cache
 *
 * TESTS_ZEND_CACHE_SQLITE_ENABLED     => sqlite extension has to be enabled
 * TESTS_ZEND_CACHE_APC_ENABLED        => apc extension has to be enabled
 * TESTS_ZEND_CACHE_WINCACHE_ENABLED   => wincache extension has to be enabled
 * TESTS_ZEND_CACHE_MEMCACHED_ENABLED  => memcache extension has to be enabled and
 *                                        a memcached server has to be available
 * TESTS_ZEND_CACHE_LIBMEMCACHED_ENABLED => memcached extension has to be enabled and
 *                                          a memcached server has to be available
 * TESTS_ZEND_CACHE_XCACHE_ENABLED     => xcache extension has to be enabled
 */
defined('TESTS_ZEND_CACHE_SQLITE_ENABLED') || define('TESTS_ZEND_CACHE_SQLITE_ENABLED', true);
//defined('TESTS_ZEND_CACHE_MEMCACHED_ENABLED') || define('TESTS_ZEND_CACHE_MEMCACHED_ENABLED', true);
//defined('TESTS_ZEND_CACHE_LIBMEMCACHED_ENABLED') || define('TESTS_ZEND_CACHE_LIBMEMCACHED_ENABLED', true);

/**
 * Zend_Db_Adapter_Pdo_Mysql and Zend_Db_Adapter_Mysqli
 *
 * There are separate properties to enable tests for the PDO_MYSQL adapter and
 * the native Mysqli adapters, but the other properties are shared between the
 * two MySQL-related Zend_Db adapters.
 */
defined('TESTS_ZEND_DB_ADAPTER_PDO_MYSQL_ENABLED') || define('TESTS_ZEND_DB_ADAPTER_PDO_MYSQL_ENABLED', true);
defined('TESTS_ZEND_DB_ADAPTER_MYSQLI_ENABLED') || define('TESTS_ZEND_DB_ADAPTER_MYSQLI_ENABLED', true);
defined('TESTS_ZEND_DB_ADAPTER_MYSQL_USERNAME') || define('TESTS_ZEND_DB_ADAPTER_MYSQL_USERNAME', 'travis');
defined('TESTS_ZEND_DB_ADAPTER_MYSQL_PASSWORD') || define('TESTS_ZEND_DB_ADAPTER_MYSQL_PASSWORD', '');
defined('TESTS_ZEND_DB_ADAPTER_MYSQL_DATABASE') || define('TESTS_ZEND_DB_ADAPTER_MYSQL_DATABASE', 'zftest');

/**
 * Zend_Db_Adapter_Pdo_Sqlite
 *
 * Username and password are irrelevant for SQLite.
 */
defined('TESTS_ZEND_DB_ADAPTER_PDO_SQLITE_ENABLED') || define('TESTS_ZEND_DB_ADAPTER_PDO_SQLITE_ENABLED', true);

/**
 * Zend_Db_Adapter_Pdo_Pgsql
 */
defined('TESTS_ZEND_DB_ADAPTER_PDO_PGSQL_ENABLED') || define('TESTS_ZEND_DB_ADAPTER_PDO_PGSQL_ENABLED', true);
defined('TESTS_ZEND_DB_ADAPTER_PDO_PGSQL_USERNAME') || define('TESTS_ZEND_DB_ADAPTER_PDO_PGSQL_USERNAME', 'postgres');
defined('TESTS_ZEND_DB_ADAPTER_PDO_PGSQL_PASSWORD') || define('TESTS_ZEND_DB_ADAPTER_PDO_PGSQL_PASSWORD', '');
defined('TESTS_ZEND_DB_ADAPTER_PDO_PGSQL_DATABASE') || define('TESTS_ZEND_DB_ADAPTER_PDO_PGSQL_DATABASE', 'zftest');


require_once dirname(__FILE__) . '/TestConfiguration.dist.php';
