
TIME: 0.000242 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SET NAMES 'utf8'

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/db/connection.php:376
 from Bitrix\Main\DB\Connection->queryExecute() /home/bitrix/www/bitrix/php_interface/after_connect_d7.php:3
 from include() /home/bitrix/www/bitrix/modules/main/lib/db/connection.php:1016
 from Bitrix\Main\DB\Connection->afterConnected() /home/bitrix/www/bitrix/modules/main/lib/db/mysqliconnection.php:101
 from Bitrix\Main\DB\MysqliConnection->connectInternal() /home/bitrix/www/bitrix/modules/main/lib/data/connection.php:53
 from Bitrix\Main\Data\Connection->getResource() /home/bitrix/www/bitrix/modules/main/classes/general/database.php:283
 from CAllDatabase->DoConnect() /home/bitrix/www/bitrix/modules/main/classes/mysql/database_mysqli.php:73
 from CDatabase->ForSql() /home/bitrix/www/bitrix/modules/main/classes/general/sqlwhere.php:713
----------------------------------------------------------

TIME: 0.000173 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SET collation_connection = "utf8_unicode_ci"

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/db/connection.php:376
 from Bitrix\Main\DB\Connection->queryExecute() /home/bitrix/www/bitrix/php_interface/after_connect_d7.php:4
 from include() /home/bitrix/www/bitrix/modules/main/lib/db/connection.php:1016
 from Bitrix\Main\DB\Connection->afterConnected() /home/bitrix/www/bitrix/modules/main/lib/db/mysqliconnection.php:101
 from Bitrix\Main\DB\MysqliConnection->connectInternal() /home/bitrix/www/bitrix/modules/main/lib/data/connection.php:53
 from Bitrix\Main\Data\Connection->getResource() /home/bitrix/www/bitrix/modules/main/classes/general/database.php:283
 from CAllDatabase->DoConnect() /home/bitrix/www/bitrix/modules/main/classes/mysql/database_mysqli.php:73
 from CDatabase->ForSql() /home/bitrix/www/bitrix/modules/main/classes/general/sqlwhere.php:713
----------------------------------------------------------

TIME: 0.001343 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SELECT 
	`abtest_a_btest`.`ID` AS `ID`,
	`abtest_a_btest`.`SITE_ID` AS `SITE_ID`,
	`abtest_a_btest`.`ACTIVE` AS `ACTIVE`,
	`abtest_a_btest`.`ENABLED` AS `ENABLED`,
	`abtest_a_btest`.`NAME` AS `NAME`,
	`abtest_a_btest`.`DESCR` AS `DESCR`,
	`abtest_a_btest`.`TEST_DATA` AS `TEST_DATA`,
	`abtest_a_btest`.`START_DATE` AS `START_DATE`,
	`abtest_a_btest`.`STOP_DATE` AS `STOP_DATE`,
	`abtest_a_btest`.`DURATION` AS `DURATION`,
	`abtest_a_btest`.`PORTION` AS `PORTION`,
	`abtest_a_btest`.`MIN_AMOUNT` AS `MIN_AMOUNT`,
	`abtest_a_btest`.`USER_ID` AS `USER_ID`,
	`abtest_a_btest`.`SORT` AS `SORT`
FROM `b_abtest` `abtest_a_btest` 

WHERE `abtest_a_btest`.`SITE_ID` = 'w3'
AND `abtest_a_btest`.`ACTIVE` = 'Y'
AND `abtest_a_btest`.`START_DATE` <= '2022-03-17 01:29:19'
ORDER BY `SORT` ASC
LIMIT 0, 1


 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/orm/query/query.php:3558
 from Bitrix\Main\ORM\Query\Query->query() /home/bitrix/www/bitrix/modules/main/lib/orm/query/query.php:952
 from Bitrix\Main\ORM\Query\Query->exec() /home/bitrix/www/bitrix/modules/main/lib/orm/data/datamanager.php:513
 from Bitrix\Main\ORM\Data\DataManager::getList() /home/bitrix/www/bitrix/modules/abtest/lib/helper.php:41
 from Bitrix\ABTest\Helper::getActiveTest() /home/bitrix/www/bitrix/modules/abtest/lib/helper.php:127
 from Bitrix\ABTest\Helper::getContext() /home/bitrix/www/bitrix/modules/abtest/lib/eventhandler.php:37
 from Bitrix\ABTest\EventHandler::onGetCurrentSiteTemplate()
 from call_user_func_array() /home/bitrix/www/bitrix/modules/main/lib/eventmanager.php:448
----------------------------------------------------------

TIME: 0.000375 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SELECT GET_LOCK('2dcab33c20aabfc9efab2b40eade80f1d876a3a5b5ef2e29184eba200ebedb0a', 0) as L

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/db/mysqlcommonconnection.php:251
 from Bitrix\Main\DB\MysqlCommonConnection->lock() /home/bitrix/www/bitrix/modules/main/classes/mysql/user_counter.php:523
 from CUserCounterPage::checkSendCounter() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3550
 from CAllMain::RunFinalActionsInternal() /home/bitrix/www/bitrix/modules/main/lib/application.php:285
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
 from CAllMain::FinalActions() /home/bitrix/www/bitrix/modules/main/include/epilog_after.php:58
 from require() /home/bitrix/www/bitrix/modules/main/include/epilog.php:3
----------------------------------------------------------

TIME: 0.000115 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G CONN: 5780

SELECT USER_ID FROM b_user_counter WHERE SENT='0' GROUP BY USER_ID LIMIT 100

 from CDatabaseMysql->Query() /home/bitrix/www/bitrix/modules/main/classes/mysql/user_counter.php:531
 from CUserCounterPage::checkSendCounter() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3550
 from CAllMain::RunFinalActionsInternal() /home/bitrix/www/bitrix/modules/main/lib/application.php:285
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
 from CAllMain::FinalActions() /home/bitrix/www/bitrix/modules/main/include/epilog_after.php:58
 from require() /home/bitrix/www/bitrix/modules/main/include/epilog.php:3
 from require_once() /home/bitrix/www/bitrix/footer.php:4
--------------------------------------------------------------------

TIME: 0.000241 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SELECT RELEASE_LOCK('2dcab33c20aabfc9efab2b40eade80f1d876a3a5b5ef2e29184eba200ebedb0a') as L

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/db/mysqlcommonconnection.php:263
 from Bitrix\Main\DB\MysqlCommonConnection->unlock() /home/bitrix/www/bitrix/modules/main/classes/mysql/user_counter.php:601
 from CUserCounterPage::checkSendCounter() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3550
 from CAllMain::RunFinalActionsInternal() /home/bitrix/www/bitrix/modules/main/lib/application.php:285
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
 from CAllMain::FinalActions() /home/bitrix/www/bitrix/modules/main/include/epilog_after.php:58
 from require() /home/bitrix/www/bitrix/modules/main/include/epilog.php:3
----------------------------------------------------------

TIME: 0.000807 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SELECT 1 FROM b_messageservice_message WHERE SUCCESS_EXEC='N' AND (NEXT_EXEC < '2022-03-17 01:29:19' OR NEXT_EXEC IS NULL) LIMIT 1

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/messageservice/lib/queue.php:23
 from Bitrix\MessageService\Queue::hasMessages() /home/bitrix/www/bitrix/modules/messageservice/lib/queue.php:43
 from Bitrix\MessageService\Queue::run() /home/bitrix/www/bitrix/modules/main/classes/general/module.php:480
 from ExecuteModuleEventEx() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3560
 from CAllMain::RunFinalActionsInternal() /home/bitrix/www/bitrix/modules/main/lib/application.php:285
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
 from CAllMain::FinalActions() /home/bitrix/www/bitrix/modules/main/include/epilog_after.php:58
----------------------------------------------------------

TIME: 0.000598 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G CONN: 5780

SELECT 'x'
FROM b_agent
WHERE
	ACTIVE = 'Y'
	AND NEXT_EXEC <= now()
	AND (DATE_CHECK IS NULL OR DATE_CHECK <= now())
	 AND IS_PERIOD='Y' 
LIMIT 1

 from CDatabaseMysql->Query() /home/bitrix/www/bitrix/modules/main/classes/mysql/agent.php:63
 from CAgent::ExecuteAgents() /home/bitrix/www/bitrix/modules/main/classes/mysql/agent.php:21
 from CAgent::CheckAgents()
 from call_user_func_array() /home/bitrix/www/bitrix/modules/main/lib/application.php:690
 from Bitrix\Main\Application->runBackgroundJobs() /home/bitrix/www/bitrix/modules/main/lib/application.php:294
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
 from CAllMain::FinalActions() /home/bitrix/www/bitrix/modules/main/include/epilog_after.php:58
--------------------------------------------------------------------

TIME: 0.000148 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SELECT GET_LOCK('2dcab33c20aabfc9efab2b40eade80f1b33aed8f3134996703dc39f9a7c95783', 0) as L

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/db/mysqlcommonconnection.php:251
 from Bitrix\Main\DB\MysqlCommonConnection->lock() /home/bitrix/www/bitrix/modules/main/classes/mysql/agent.php:66
 from CAgent::ExecuteAgents() /home/bitrix/www/bitrix/modules/main/classes/mysql/agent.php:21
 from CAgent::CheckAgents()
 from call_user_func_array() /home/bitrix/www/bitrix/modules/main/lib/application.php:690
 from Bitrix\Main\Application->runBackgroundJobs() /home/bitrix/www/bitrix/modules/main/lib/application.php:294
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
----------------------------------------------------------

TIME: 0.000376 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G CONN: 5780

SELECT ID, NAME, AGENT_INTERVAL, IS_PERIOD, MODULE_ID, RETRY_COUNT FROM b_agent WHERE ACTIVE = 'Y' 	AND NEXT_EXEC <= now() 	AND (DATE_CHECK IS NULL OR DATE_CHECK <= now())  AND IS_PERIOD='Y'  ORDER BY RUNNING ASC, SORT desc LIMIT 100

 from CDatabaseMysql->Query() /home/bitrix/www/bitrix/modules/main/classes/mysql/agent.php:111
 from CAgent::ExecuteAgents() /home/bitrix/www/bitrix/modules/main/classes/mysql/agent.php:21
 from CAgent::CheckAgents()
 from call_user_func_array() /home/bitrix/www/bitrix/modules/main/lib/application.php:690
 from Bitrix\Main\Application->runBackgroundJobs() /home/bitrix/www/bitrix/modules/main/lib/application.php:294
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
 from CAllMain::FinalActions() /home/bitrix/www/bitrix/modules/main/include/epilog_after.php:58
--------------------------------------------------------------------

TIME: 0.000795 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G CONN: 5780

UPDATE b_agent SET DATE_CHECK = DATE_ADD(now(), INTERVAL 600 SECOND) WHERE ID IN (37060)

 from CDatabaseMysql->Query() /home/bitrix/www/bitrix/modules/main/classes/mysql/agent.php:122
 from CAgent::ExecuteAgents() /home/bitrix/www/bitrix/modules/main/classes/mysql/agent.php:21
 from CAgent::CheckAgents()
 from call_user_func_array() /home/bitrix/www/bitrix/modules/main/lib/application.php:690
 from Bitrix\Main\Application->runBackgroundJobs() /home/bitrix/www/bitrix/modules/main/lib/application.php:294
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
 from CAllMain::FinalActions() /home/bitrix/www/bitrix/modules/main/include/epilog_after.php:58
--------------------------------------------------------------------

TIME: 9.7E-5 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SELECT RELEASE_LOCK('2dcab33c20aabfc9efab2b40eade80f1b33aed8f3134996703dc39f9a7c95783') as L

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/db/mysqlcommonconnection.php:263
 from Bitrix\Main\DB\MysqlCommonConnection->unlock() /home/bitrix/www/bitrix/modules/main/classes/mysql/agent.php:125
 from CAgent::ExecuteAgents() /home/bitrix/www/bitrix/modules/main/classes/mysql/agent.php:21
 from CAgent::CheckAgents()
 from call_user_func_array() /home/bitrix/www/bitrix/modules/main/lib/application.php:690
 from Bitrix\Main\Application->runBackgroundJobs() /home/bitrix/www/bitrix/modules/main/lib/application.php:294
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
--------------------------------------------------------

TIME: 0.000342 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G CONN: 5780

UPDATE b_agent SET RUNNING = 'Y', RETRY_COUNT = RETRY_COUNT+1 WHERE ID = 37060

 from CDatabaseMysql->Query() /home/bitrix/www/bitrix/modules/main/classes/mysql/agent.php:152
 from CAgent::ExecuteAgents() /home/bitrix/www/bitrix/modules/main/classes/mysql/agent.php:21
 from CAgent::CheckAgents()
 from call_user_func_array() /home/bitrix/www/bitrix/modules/main/lib/application.php:690
 from Bitrix\Main\Application->runBackgroundJobs() /home/bitrix/www/bitrix/modules/main/lib/application.php:294
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
 from CAllMain::FinalActions() /home/bitrix/www/bitrix/modules/main/include/epilog_after.php:58
--------------------------------------------------------------------

TIME: 0.000436 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SELECT * from b_cache_tag WHERE TAG='*'
LIMIT 0, 1


 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/data/cacheenginefiles.php:529
 from Bitrix\Main\Data\CacheEngineFiles::delayedDelete() /home/bitrix/www/bitrix/modules/main/classes/mysql/agent.php(163) : eval()'d code:1
 from eval() /home/bitrix/www/bitrix/modules/main/classes/mysql/agent.php:163
 from CAgent::ExecuteAgents() /home/bitrix/www/bitrix/modules/main/classes/mysql/agent.php:21
 from CAgent::CheckAgents()
 from call_user_func_array() /home/bitrix/www/bitrix/modules/main/lib/application.php:690
 from Bitrix\Main\Application->runBackgroundJobs() /home/bitrix/www/bitrix/modules/main/lib/application.php:294
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
----------------------------------------------------------

TIME: 0.000351 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

DELETE FROM b_cache_tag WHERE ID = 566

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/db/connection.php:376
 from Bitrix\Main\DB\Connection->queryExecute() /home/bitrix/www/bitrix/modules/main/lib/data/cacheenginefiles.php:511
 from Bitrix\Main\Data\CacheEngineFiles::deleteOneDir() /home/bitrix/www/bitrix/modules/main/lib/data/cacheenginefiles.php:532
 from Bitrix\Main\Data\CacheEngineFiles::delayedDelete() /home/bitrix/www/bitrix/modules/main/classes/mysql/agent.php(163) : eval()'d code:1
 from eval() /home/bitrix/www/bitrix/modules/main/classes/mysql/agent.php:163
 from CAgent::ExecuteAgents() /home/bitrix/www/bitrix/modules/main/classes/mysql/agent.php:21
 from CAgent::CheckAgents()
 from call_user_func_array() /home/bitrix/www/bitrix/modules/main/lib/application.php:690
----------------------------------------------------------

TIME: 0.000301 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SELECT SITE_ID, CACHE_SALT, RELATIVE_PATH, TAG from b_cache_tag WHERE TAG='**'

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/data/cacheenginefiles.php:539
 from Bitrix\Main\Data\CacheEngineFiles::delayedDelete() /home/bitrix/www/bitrix/modules/main/classes/mysql/agent.php(163) : eval()'d code:1
 from eval() /home/bitrix/www/bitrix/modules/main/classes/mysql/agent.php:163
 from CAgent::ExecuteAgents() /home/bitrix/www/bitrix/modules/main/classes/mysql/agent.php:21
 from CAgent::CheckAgents()
 from call_user_func_array() /home/bitrix/www/bitrix/modules/main/lib/application.php:690
 from Bitrix\Main\Application->runBackgroundJobs() /home/bitrix/www/bitrix/modules/main/lib/application.php:294
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
----------------------------------------------------------

TIME: 0.000283 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SELECT count(1) CNT from b_cache_tag WHERE TAG='*'
LIMIT 0, 1


 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/db/connection.php:355
 from Bitrix\Main\DB\Connection->queryScalar() /home/bitrix/www/bitrix/modules/main/lib/data/cacheenginefiles.php:556
 from Bitrix\Main\Data\CacheEngineFiles::delayedDelete() /home/bitrix/www/bitrix/modules/main/classes/mysql/agent.php(163) : eval()'d code:1
 from eval() /home/bitrix/www/bitrix/modules/main/classes/mysql/agent.php:163
 from CAgent::ExecuteAgents() /home/bitrix/www/bitrix/modules/main/classes/mysql/agent.php:21
 from CAgent::CheckAgents()
 from call_user_func_array() /home/bitrix/www/bitrix/modules/main/lib/application.php:690
 from Bitrix\Main\Application->runBackgroundJobs() /home/bitrix/www/bitrix/modules/main/lib/application.php:294
----------------------------------------------------------

TIME: 0.000315 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

UPDATE b_cache_tag SET RELATIVE_PATH='0:1647469759' WHERE TAG='**'

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/db/connection.php:376
 from Bitrix\Main\DB\Connection->queryExecute() /home/bitrix/www/bitrix/modules/main/lib/data/cacheenginefiles.php:574
 from Bitrix\Main\Data\CacheEngineFiles::delayedDelete() /home/bitrix/www/bitrix/modules/main/classes/mysql/agent.php(163) : eval()'d code:1
 from eval() /home/bitrix/www/bitrix/modules/main/classes/mysql/agent.php:163
 from CAgent::ExecuteAgents() /home/bitrix/www/bitrix/modules/main/classes/mysql/agent.php:21
 from CAgent::CheckAgents()
 from call_user_func_array() /home/bitrix/www/bitrix/modules/main/lib/application.php:690
 from Bitrix\Main\Application->runBackgroundJobs() /home/bitrix/www/bitrix/modules/main/lib/application.php:294
----------------------------------------------------------

TIME: 0.000258 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G CONN: 5780

DELETE FROM b_agent WHERE ID = 37060

 from CDatabaseMysql->Query() /home/bitrix/www/bitrix/modules/main/classes/mysql/agent.php:210
 from CAgent::ExecuteAgents() /home/bitrix/www/bitrix/modules/main/classes/mysql/agent.php:21
 from CAgent::CheckAgents()
 from call_user_func_array() /home/bitrix/www/bitrix/modules/main/lib/application.php:690
 from Bitrix\Main\Application->runBackgroundJobs() /home/bitrix/www/bitrix/modules/main/lib/application.php:294
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
 from CAllMain::FinalActions() /home/bitrix/www/bitrix/modules/main/include/epilog_after.php:58
--------------------------------------------------------------------

TIME: 0.000406 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SET NAMES 'utf8'

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/db/connection.php:376
 from Bitrix\Main\DB\Connection->queryExecute() /home/bitrix/www/bitrix/php_interface/after_connect_d7.php:3
 from include() /home/bitrix/www/bitrix/modules/main/lib/db/connection.php:1016
 from Bitrix\Main\DB\Connection->afterConnected() /home/bitrix/www/bitrix/modules/main/lib/db/mysqliconnection.php:101
 from Bitrix\Main\DB\MysqliConnection->connectInternal() /home/bitrix/www/bitrix/modules/main/lib/data/connection.php:53
 from Bitrix\Main\Data\Connection->getResource() /home/bitrix/www/bitrix/modules/main/classes/general/database.php:283
 from CAllDatabase->DoConnect() /home/bitrix/www/bitrix/modules/main/classes/mysql/database_mysqli.php:73
 from CDatabase->ForSql() /home/bitrix/www/bitrix/modules/main/classes/general/sqlwhere.php:713
----------------------------------------------------------

TIME: 0.000219 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SET collation_connection = "utf8_unicode_ci"

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/db/connection.php:376
 from Bitrix\Main\DB\Connection->queryExecute() /home/bitrix/www/bitrix/php_interface/after_connect_d7.php:4
 from include() /home/bitrix/www/bitrix/modules/main/lib/db/connection.php:1016
 from Bitrix\Main\DB\Connection->afterConnected() /home/bitrix/www/bitrix/modules/main/lib/db/mysqliconnection.php:101
 from Bitrix\Main\DB\MysqliConnection->connectInternal() /home/bitrix/www/bitrix/modules/main/lib/data/connection.php:53
 from Bitrix\Main\Data\Connection->getResource() /home/bitrix/www/bitrix/modules/main/classes/general/database.php:283
 from CAllDatabase->DoConnect() /home/bitrix/www/bitrix/modules/main/classes/mysql/database_mysqli.php:73
 from CDatabase->ForSql() /home/bitrix/www/bitrix/modules/main/classes/general/sqlwhere.php:713
----------------------------------------------------------

TIME: 0.00204 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SELECT 
	`abtest_a_btest`.`ID` AS `ID`,
	`abtest_a_btest`.`SITE_ID` AS `SITE_ID`,
	`abtest_a_btest`.`ACTIVE` AS `ACTIVE`,
	`abtest_a_btest`.`ENABLED` AS `ENABLED`,
	`abtest_a_btest`.`NAME` AS `NAME`,
	`abtest_a_btest`.`DESCR` AS `DESCR`,
	`abtest_a_btest`.`TEST_DATA` AS `TEST_DATA`,
	`abtest_a_btest`.`START_DATE` AS `START_DATE`,
	`abtest_a_btest`.`STOP_DATE` AS `STOP_DATE`,
	`abtest_a_btest`.`DURATION` AS `DURATION`,
	`abtest_a_btest`.`PORTION` AS `PORTION`,
	`abtest_a_btest`.`MIN_AMOUNT` AS `MIN_AMOUNT`,
	`abtest_a_btest`.`USER_ID` AS `USER_ID`,
	`abtest_a_btest`.`SORT` AS `SORT`
FROM `b_abtest` `abtest_a_btest` 

WHERE `abtest_a_btest`.`SITE_ID` = 'w3'
AND `abtest_a_btest`.`ACTIVE` = 'Y'
AND `abtest_a_btest`.`START_DATE` <= '2022-03-17 01:30:56'
ORDER BY `SORT` ASC
LIMIT 0, 1


 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/orm/query/query.php:3558
 from Bitrix\Main\ORM\Query\Query->query() /home/bitrix/www/bitrix/modules/main/lib/orm/query/query.php:952
 from Bitrix\Main\ORM\Query\Query->exec() /home/bitrix/www/bitrix/modules/main/lib/orm/data/datamanager.php:513
 from Bitrix\Main\ORM\Data\DataManager::getList() /home/bitrix/www/bitrix/modules/abtest/lib/helper.php:41
 from Bitrix\ABTest\Helper::getActiveTest() /home/bitrix/www/bitrix/modules/abtest/lib/helper.php:127
 from Bitrix\ABTest\Helper::getContext() /home/bitrix/www/bitrix/modules/abtest/lib/eventhandler.php:37
 from Bitrix\ABTest\EventHandler::onGetCurrentSiteTemplate()
 from call_user_func_array() /home/bitrix/www/bitrix/modules/main/lib/eventmanager.php:448
---------------------------------------------------------

TIME: 0.000547 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SELECT GET_LOCK('2dcab33c20aabfc9efab2b40eade80f1d876a3a5b5ef2e29184eba200ebedb0a', 0) as L

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/db/mysqlcommonconnection.php:251
 from Bitrix\Main\DB\MysqlCommonConnection->lock() /home/bitrix/www/bitrix/modules/main/classes/mysql/user_counter.php:523
 from CUserCounterPage::checkSendCounter() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3550
 from CAllMain::RunFinalActionsInternal() /home/bitrix/www/bitrix/modules/main/lib/application.php:285
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
 from CAllMain::FinalActions() /home/bitrix/www/bitrix/modules/main/include/epilog_after.php:58
 from require() /home/bitrix/www/bitrix/modules/main/include/epilog.php:3
----------------------------------------------------------

TIME: 0.000146 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G CONN: 5782

SELECT USER_ID FROM b_user_counter WHERE SENT='0' GROUP BY USER_ID LIMIT 100

 from CDatabaseMysql->Query() /home/bitrix/www/bitrix/modules/main/classes/mysql/user_counter.php:531
 from CUserCounterPage::checkSendCounter() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3550
 from CAllMain::RunFinalActionsInternal() /home/bitrix/www/bitrix/modules/main/lib/application.php:285
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
 from CAllMain::FinalActions() /home/bitrix/www/bitrix/modules/main/include/epilog_after.php:58
 from require() /home/bitrix/www/bitrix/modules/main/include/epilog.php:3
 from require_once() /home/bitrix/www/bitrix/footer.php:4
--------------------------------------------------------------------

TIME: 0.000429 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SELECT RELEASE_LOCK('2dcab33c20aabfc9efab2b40eade80f1d876a3a5b5ef2e29184eba200ebedb0a') as L

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/db/mysqlcommonconnection.php:263
 from Bitrix\Main\DB\MysqlCommonConnection->unlock() /home/bitrix/www/bitrix/modules/main/classes/mysql/user_counter.php:601
 from CUserCounterPage::checkSendCounter() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3550
 from CAllMain::RunFinalActionsInternal() /home/bitrix/www/bitrix/modules/main/lib/application.php:285
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
 from CAllMain::FinalActions() /home/bitrix/www/bitrix/modules/main/include/epilog_after.php:58
 from require() /home/bitrix/www/bitrix/modules/main/include/epilog.php:3
----------------------------------------------------------

TIME: 0.001065 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SELECT 1 FROM b_messageservice_message WHERE SUCCESS_EXEC='N' AND (NEXT_EXEC < '2022-03-17 01:30:56' OR NEXT_EXEC IS NULL) LIMIT 1

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/messageservice/lib/queue.php:23
 from Bitrix\MessageService\Queue::hasMessages() /home/bitrix/www/bitrix/modules/messageservice/lib/queue.php:43
 from Bitrix\MessageService\Queue::run() /home/bitrix/www/bitrix/modules/main/classes/general/module.php:480
 from ExecuteModuleEventEx() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3560
 from CAllMain::RunFinalActionsInternal() /home/bitrix/www/bitrix/modules/main/lib/application.php:285
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
 from CAllMain::FinalActions() /home/bitrix/www/bitrix/modules/main/include/epilog_after.php:58
----------------------------------------------------------

TIME: 0.00054 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G CONN: 5782

SELECT 'x'
FROM b_agent
WHERE
	ACTIVE = 'Y'
	AND NEXT_EXEC <= now()
	AND (DATE_CHECK IS NULL OR DATE_CHECK <= now())
	 AND IS_PERIOD='Y' 
LIMIT 1

 from CDatabaseMysql->Query() /home/bitrix/www/bitrix/modules/main/classes/mysql/agent.php:63
 from CAgent::ExecuteAgents() /home/bitrix/www/bitrix/modules/main/classes/mysql/agent.php:21
 from CAgent::CheckAgents()
 from call_user_func_array() /home/bitrix/www/bitrix/modules/main/lib/application.php:690
 from Bitrix\Main\Application->runBackgroundJobs() /home/bitrix/www/bitrix/modules/main/lib/application.php:294
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
 from CAllMain::FinalActions() /home/bitrix/www/bitrix/modules/main/include/epilog_after.php:58
-------------------------------------------------------------------

TIME: 0.000619 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G CONN: 5782

SELECT UNIX_TIMESTAMP(NEXT_EXEC)-UNIX_TIMESTAMP(NOW()) DATE_DIFF FROM b_agent WHERE ACTIVE = 'Y'  AND IS_PERIOD='Y'  ORDER BY NEXT_EXEC ASC LIMIT 1

 from CDatabaseMysql->Query() /home/bitrix/www/bitrix/modules/main/classes/mysql/agent.php:73
 from CAgent::ExecuteAgents() /home/bitrix/www/bitrix/modules/main/classes/mysql/agent.php:21
 from CAgent::CheckAgents()
 from call_user_func_array() /home/bitrix/www/bitrix/modules/main/lib/application.php:690
 from Bitrix\Main\Application->runBackgroundJobs() /home/bitrix/www/bitrix/modules/main/lib/application.php:294
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
 from CAllMain::FinalActions() /home/bitrix/www/bitrix/modules/main/include/epilog_after.php:58
--------------------------------------------------------------------

TIME: 0.00017 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SET NAMES 'utf8'

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/db/connection.php:376
 from Bitrix\Main\DB\Connection->queryExecute() /home/bitrix/www/bitrix/php_interface/after_connect_d7.php:3
 from include() /home/bitrix/www/bitrix/modules/main/lib/db/connection.php:1016
 from Bitrix\Main\DB\Connection->afterConnected() /home/bitrix/www/bitrix/modules/main/lib/db/mysqliconnection.php:101
 from Bitrix\Main\DB\MysqliConnection->connectInternal() /home/bitrix/www/bitrix/modules/main/lib/data/connection.php:53
 from Bitrix\Main\Data\Connection->getResource() /home/bitrix/www/bitrix/modules/main/classes/general/database.php:283
 from CAllDatabase->DoConnect() /home/bitrix/www/bitrix/modules/main/classes/mysql/database_mysqli.php:73
 from CDatabase->ForSql() /home/bitrix/www/bitrix/modules/main/classes/general/sqlwhere.php:713
---------------------------------------------------------

TIME: 9.9E-5 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SET collation_connection = "utf8_unicode_ci"

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/db/connection.php:376
 from Bitrix\Main\DB\Connection->queryExecute() /home/bitrix/www/bitrix/php_interface/after_connect_d7.php:4
 from include() /home/bitrix/www/bitrix/modules/main/lib/db/connection.php:1016
 from Bitrix\Main\DB\Connection->afterConnected() /home/bitrix/www/bitrix/modules/main/lib/db/mysqliconnection.php:101
 from Bitrix\Main\DB\MysqliConnection->connectInternal() /home/bitrix/www/bitrix/modules/main/lib/data/connection.php:53
 from Bitrix\Main\Data\Connection->getResource() /home/bitrix/www/bitrix/modules/main/classes/general/database.php:283
 from CAllDatabase->DoConnect() /home/bitrix/www/bitrix/modules/main/classes/mysql/database_mysqli.php:73
 from CDatabase->ForSql() /home/bitrix/www/bitrix/modules/main/classes/general/sqlwhere.php:713
--------------------------------------------------------

TIME: 0.00096 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SELECT 
	`abtest_a_btest`.`ID` AS `ID`,
	`abtest_a_btest`.`SITE_ID` AS `SITE_ID`,
	`abtest_a_btest`.`ACTIVE` AS `ACTIVE`,
	`abtest_a_btest`.`ENABLED` AS `ENABLED`,
	`abtest_a_btest`.`NAME` AS `NAME`,
	`abtest_a_btest`.`DESCR` AS `DESCR`,
	`abtest_a_btest`.`TEST_DATA` AS `TEST_DATA`,
	`abtest_a_btest`.`START_DATE` AS `START_DATE`,
	`abtest_a_btest`.`STOP_DATE` AS `STOP_DATE`,
	`abtest_a_btest`.`DURATION` AS `DURATION`,
	`abtest_a_btest`.`PORTION` AS `PORTION`,
	`abtest_a_btest`.`MIN_AMOUNT` AS `MIN_AMOUNT`,
	`abtest_a_btest`.`USER_ID` AS `USER_ID`,
	`abtest_a_btest`.`SORT` AS `SORT`
FROM `b_abtest` `abtest_a_btest` 

WHERE `abtest_a_btest`.`SITE_ID` = 'w3'
AND `abtest_a_btest`.`ACTIVE` = 'Y'
AND `abtest_a_btest`.`START_DATE` <= '2022-03-17 01:31:14'
ORDER BY `SORT` ASC
LIMIT 0, 1


 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/orm/query/query.php:3558
 from Bitrix\Main\ORM\Query\Query->query() /home/bitrix/www/bitrix/modules/main/lib/orm/query/query.php:952
 from Bitrix\Main\ORM\Query\Query->exec() /home/bitrix/www/bitrix/modules/main/lib/orm/data/datamanager.php:513
 from Bitrix\Main\ORM\Data\DataManager::getList() /home/bitrix/www/bitrix/modules/abtest/lib/helper.php:41
 from Bitrix\ABTest\Helper::getActiveTest() /home/bitrix/www/bitrix/modules/abtest/lib/helper.php:127
 from Bitrix\ABTest\Helper::getContext() /home/bitrix/www/bitrix/modules/abtest/lib/eventhandler.php:37
 from Bitrix\ABTest\EventHandler::onGetCurrentSiteTemplate()
 from call_user_func_array() /home/bitrix/www/bitrix/modules/main/lib/eventmanager.php:448
---------------------------------------------------------

TIME: 0.000164 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G CONN: 5784

SELECT VALUE FROM b_option WHERE NAME='~PARAM_MAX_USERS' AND MODULE_ID='main' AND SITE_ID IS NULL

 from CDatabaseMysql->Query() /home/bitrix/www/bitrix/modules/main/include.php:509
 from require_once() /home/bitrix/www/bitrix/modules/main/include/prolog_before.php:14
 from require_once() /home/bitrix/www/bitrix/modules/main/include/prolog.php:10
 from require_once() /home/bitrix/www/bitrix/header.php:1
 from require() /home/bitrix/ext_www/thevalet.ru/index.php:2
--------------------------------------------------------------------

TIME: 0.000205 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SELECT GET_LOCK('2dcab33c20aabfc9efab2b40eade80f1d876a3a5b5ef2e29184eba200ebedb0a', 0) as L

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/db/mysqlcommonconnection.php:251
 from Bitrix\Main\DB\MysqlCommonConnection->lock() /home/bitrix/www/bitrix/modules/main/classes/mysql/user_counter.php:523
 from CUserCounterPage::checkSendCounter() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3550
 from CAllMain::RunFinalActionsInternal() /home/bitrix/www/bitrix/modules/main/lib/application.php:285
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
 from CAllMain::FinalActions() /home/bitrix/www/bitrix/modules/main/include/epilog_after.php:58
 from require() /home/bitrix/www/bitrix/modules/main/include/epilog.php:3
----------------------------------------------------------

TIME: 0.000113 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G CONN: 5784

SELECT USER_ID FROM b_user_counter WHERE SENT='0' GROUP BY USER_ID LIMIT 100

 from CDatabaseMysql->Query() /home/bitrix/www/bitrix/modules/main/classes/mysql/user_counter.php:531
 from CUserCounterPage::checkSendCounter() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3550
 from CAllMain::RunFinalActionsInternal() /home/bitrix/www/bitrix/modules/main/lib/application.php:285
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
 from CAllMain::FinalActions() /home/bitrix/www/bitrix/modules/main/include/epilog_after.php:58
 from require() /home/bitrix/www/bitrix/modules/main/include/epilog.php:3
 from require_once() /home/bitrix/www/bitrix/footer.php:4
--------------------------------------------------------------------

TIME: 0.000115 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SELECT RELEASE_LOCK('2dcab33c20aabfc9efab2b40eade80f1d876a3a5b5ef2e29184eba200ebedb0a') as L

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/db/mysqlcommonconnection.php:263
 from Bitrix\Main\DB\MysqlCommonConnection->unlock() /home/bitrix/www/bitrix/modules/main/classes/mysql/user_counter.php:601
 from CUserCounterPage::checkSendCounter() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3550
 from CAllMain::RunFinalActionsInternal() /home/bitrix/www/bitrix/modules/main/lib/application.php:285
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
 from CAllMain::FinalActions() /home/bitrix/www/bitrix/modules/main/include/epilog_after.php:58
 from require() /home/bitrix/www/bitrix/modules/main/include/epilog.php:3
----------------------------------------------------------

TIME: 0.000702 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SELECT 1 FROM b_messageservice_message WHERE SUCCESS_EXEC='N' AND (NEXT_EXEC < '2022-03-17 01:31:14' OR NEXT_EXEC IS NULL) LIMIT 1

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/messageservice/lib/queue.php:23
 from Bitrix\MessageService\Queue::hasMessages() /home/bitrix/www/bitrix/modules/messageservice/lib/queue.php:43
 from Bitrix\MessageService\Queue::run() /home/bitrix/www/bitrix/modules/main/classes/general/module.php:480
 from ExecuteModuleEventEx() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3560
 from CAllMain::RunFinalActionsInternal() /home/bitrix/www/bitrix/modules/main/lib/application.php:285
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
 from CAllMain::FinalActions() /home/bitrix/www/bitrix/modules/main/include/epilog_after.php:58
----------------------------------------------------------

TIME: 0.000212 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SET NAMES 'utf8'

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/db/connection.php:376
 from Bitrix\Main\DB\Connection->queryExecute() /home/bitrix/www/bitrix/php_interface/after_connect_d7.php:3
 from include() /home/bitrix/www/bitrix/modules/main/lib/db/connection.php:1016
 from Bitrix\Main\DB\Connection->afterConnected() /home/bitrix/www/bitrix/modules/main/lib/db/mysqliconnection.php:101
 from Bitrix\Main\DB\MysqliConnection->connectInternal() /home/bitrix/www/bitrix/modules/main/lib/data/connection.php:53
 from Bitrix\Main\Data\Connection->getResource() /home/bitrix/www/bitrix/modules/main/classes/general/database.php:283
 from CAllDatabase->DoConnect() /home/bitrix/www/bitrix/modules/main/classes/mysql/database_mysqli.php:73
 from CDatabase->ForSql() /home/bitrix/www/bitrix/modules/main/classes/general/sqlwhere.php:713
----------------------------------------------------------

TIME: 0.000126 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SET collation_connection = "utf8_unicode_ci"

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/db/connection.php:376
 from Bitrix\Main\DB\Connection->queryExecute() /home/bitrix/www/bitrix/php_interface/after_connect_d7.php:4
 from include() /home/bitrix/www/bitrix/modules/main/lib/db/connection.php:1016
 from Bitrix\Main\DB\Connection->afterConnected() /home/bitrix/www/bitrix/modules/main/lib/db/mysqliconnection.php:101
 from Bitrix\Main\DB\MysqliConnection->connectInternal() /home/bitrix/www/bitrix/modules/main/lib/data/connection.php:53
 from Bitrix\Main\Data\Connection->getResource() /home/bitrix/www/bitrix/modules/main/classes/general/database.php:283
 from CAllDatabase->DoConnect() /home/bitrix/www/bitrix/modules/main/classes/mysql/database_mysqli.php:73
 from CDatabase->ForSql() /home/bitrix/www/bitrix/modules/main/classes/general/sqlwhere.php:713
----------------------------------------------------------

TIME: 0.001106 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SELECT 
	`abtest_a_btest`.`ID` AS `ID`,
	`abtest_a_btest`.`SITE_ID` AS `SITE_ID`,
	`abtest_a_btest`.`ACTIVE` AS `ACTIVE`,
	`abtest_a_btest`.`ENABLED` AS `ENABLED`,
	`abtest_a_btest`.`NAME` AS `NAME`,
	`abtest_a_btest`.`DESCR` AS `DESCR`,
	`abtest_a_btest`.`TEST_DATA` AS `TEST_DATA`,
	`abtest_a_btest`.`START_DATE` AS `START_DATE`,
	`abtest_a_btest`.`STOP_DATE` AS `STOP_DATE`,
	`abtest_a_btest`.`DURATION` AS `DURATION`,
	`abtest_a_btest`.`PORTION` AS `PORTION`,
	`abtest_a_btest`.`MIN_AMOUNT` AS `MIN_AMOUNT`,
	`abtest_a_btest`.`USER_ID` AS `USER_ID`,
	`abtest_a_btest`.`SORT` AS `SORT`
FROM `b_abtest` `abtest_a_btest` 

WHERE `abtest_a_btest`.`SITE_ID` = 'w3'
AND `abtest_a_btest`.`ACTIVE` = 'Y'
AND `abtest_a_btest`.`START_DATE` <= '2022-03-17 01:34:46'
ORDER BY `SORT` ASC
LIMIT 0, 1


 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/orm/query/query.php:3558
 from Bitrix\Main\ORM\Query\Query->query() /home/bitrix/www/bitrix/modules/main/lib/orm/query/query.php:952
 from Bitrix\Main\ORM\Query\Query->exec() /home/bitrix/www/bitrix/modules/main/lib/orm/data/datamanager.php:513
 from Bitrix\Main\ORM\Data\DataManager::getList() /home/bitrix/www/bitrix/modules/abtest/lib/helper.php:41
 from Bitrix\ABTest\Helper::getActiveTest() /home/bitrix/www/bitrix/modules/abtest/lib/helper.php:127
 from Bitrix\ABTest\Helper::getContext() /home/bitrix/www/bitrix/modules/abtest/lib/eventhandler.php:37
 from Bitrix\ABTest\EventHandler::onGetCurrentSiteTemplate()
 from call_user_func_array() /home/bitrix/www/bitrix/modules/main/lib/eventmanager.php:448
----------------------------------------------------------

TIME: 0.000283 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SELECT GET_LOCK('2dcab33c20aabfc9efab2b40eade80f1d876a3a5b5ef2e29184eba200ebedb0a', 0) as L

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/db/mysqlcommonconnection.php:251
 from Bitrix\Main\DB\MysqlCommonConnection->lock() /home/bitrix/www/bitrix/modules/main/classes/mysql/user_counter.php:523
 from CUserCounterPage::checkSendCounter() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3550
 from CAllMain::RunFinalActionsInternal() /home/bitrix/www/bitrix/modules/main/lib/application.php:285
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
 from CAllMain::FinalActions() /home/bitrix/www/bitrix/modules/main/include/epilog_after.php:58
 from require() /home/bitrix/www/bitrix/modules/main/include/epilog.php:3
----------------------------------------------------------

TIME: 8.8E-5 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G CONN: 5789

SELECT USER_ID FROM b_user_counter WHERE SENT='0' GROUP BY USER_ID LIMIT 100

 from CDatabaseMysql->Query() /home/bitrix/www/bitrix/modules/main/classes/mysql/user_counter.php:531
 from CUserCounterPage::checkSendCounter() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3550
 from CAllMain::RunFinalActionsInternal() /home/bitrix/www/bitrix/modules/main/lib/application.php:285
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
 from CAllMain::FinalActions() /home/bitrix/www/bitrix/modules/main/include/epilog_after.php:58
 from require() /home/bitrix/www/bitrix/modules/main/include/epilog.php:3
 from require_once() /home/bitrix/www/bitrix/footer.php:4
------------------------------------------------------------------

TIME: 0.000198 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SELECT RELEASE_LOCK('2dcab33c20aabfc9efab2b40eade80f1d876a3a5b5ef2e29184eba200ebedb0a') as L

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/db/mysqlcommonconnection.php:263
 from Bitrix\Main\DB\MysqlCommonConnection->unlock() /home/bitrix/www/bitrix/modules/main/classes/mysql/user_counter.php:601
 from CUserCounterPage::checkSendCounter() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3550
 from CAllMain::RunFinalActionsInternal() /home/bitrix/www/bitrix/modules/main/lib/application.php:285
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
 from CAllMain::FinalActions() /home/bitrix/www/bitrix/modules/main/include/epilog_after.php:58
 from require() /home/bitrix/www/bitrix/modules/main/include/epilog.php:3
----------------------------------------------------------

TIME: 0.000763 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SELECT 1 FROM b_messageservice_message WHERE SUCCESS_EXEC='N' AND (NEXT_EXEC < '2022-03-17 01:34:46' OR NEXT_EXEC IS NULL) LIMIT 1

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/messageservice/lib/queue.php:23
 from Bitrix\MessageService\Queue::hasMessages() /home/bitrix/www/bitrix/modules/messageservice/lib/queue.php:43
 from Bitrix\MessageService\Queue::run() /home/bitrix/www/bitrix/modules/main/classes/general/module.php:480
 from ExecuteModuleEventEx() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3560
 from CAllMain::RunFinalActionsInternal() /home/bitrix/www/bitrix/modules/main/lib/application.php:285
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
 from CAllMain::FinalActions() /home/bitrix/www/bitrix/modules/main/include/epilog_after.php:58
----------------------------------------------------------

TIME: 0.000137 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SET NAMES 'utf8'

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/db/connection.php:376
 from Bitrix\Main\DB\Connection->queryExecute() /home/bitrix/www/bitrix/php_interface/after_connect_d7.php:3
 from include() /home/bitrix/www/bitrix/modules/main/lib/db/connection.php:1016
 from Bitrix\Main\DB\Connection->afterConnected() /home/bitrix/www/bitrix/modules/main/lib/db/mysqliconnection.php:101
 from Bitrix\Main\DB\MysqliConnection->connectInternal() /home/bitrix/www/bitrix/modules/main/lib/data/connection.php:53
 from Bitrix\Main\Data\Connection->getResource() /home/bitrix/www/bitrix/modules/main/classes/general/database.php:283
 from CAllDatabase->DoConnect() /home/bitrix/www/bitrix/modules/main/classes/mysql/database_mysqli.php:73
 from CDatabase->ForSql() /home/bitrix/www/bitrix/modules/main/classes/general/sqlwhere.php:713
----------------------------------------------------------

TIME: 8.7E-5 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SET collation_connection = "utf8_unicode_ci"

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/db/connection.php:376
 from Bitrix\Main\DB\Connection->queryExecute() /home/bitrix/www/bitrix/php_interface/after_connect_d7.php:4
 from include() /home/bitrix/www/bitrix/modules/main/lib/db/connection.php:1016
 from Bitrix\Main\DB\Connection->afterConnected() /home/bitrix/www/bitrix/modules/main/lib/db/mysqliconnection.php:101
 from Bitrix\Main\DB\MysqliConnection->connectInternal() /home/bitrix/www/bitrix/modules/main/lib/data/connection.php:53
 from Bitrix\Main\Data\Connection->getResource() /home/bitrix/www/bitrix/modules/main/classes/general/database.php:283
 from CAllDatabase->DoConnect() /home/bitrix/www/bitrix/modules/main/classes/mysql/database_mysqli.php:73
 from CDatabase->ForSql() /home/bitrix/www/bitrix/modules/main/classes/general/sqlwhere.php:713
--------------------------------------------------------

TIME: 0.000858 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SELECT 
	`abtest_a_btest`.`ID` AS `ID`,
	`abtest_a_btest`.`SITE_ID` AS `SITE_ID`,
	`abtest_a_btest`.`ACTIVE` AS `ACTIVE`,
	`abtest_a_btest`.`ENABLED` AS `ENABLED`,
	`abtest_a_btest`.`NAME` AS `NAME`,
	`abtest_a_btest`.`DESCR` AS `DESCR`,
	`abtest_a_btest`.`TEST_DATA` AS `TEST_DATA`,
	`abtest_a_btest`.`START_DATE` AS `START_DATE`,
	`abtest_a_btest`.`STOP_DATE` AS `STOP_DATE`,
	`abtest_a_btest`.`DURATION` AS `DURATION`,
	`abtest_a_btest`.`PORTION` AS `PORTION`,
	`abtest_a_btest`.`MIN_AMOUNT` AS `MIN_AMOUNT`,
	`abtest_a_btest`.`USER_ID` AS `USER_ID`,
	`abtest_a_btest`.`SORT` AS `SORT`
FROM `b_abtest` `abtest_a_btest` 

WHERE `abtest_a_btest`.`SITE_ID` = 'w3'
AND `abtest_a_btest`.`ACTIVE` = 'Y'
AND `abtest_a_btest`.`START_DATE` <= '2022-03-17 01:35:25'
ORDER BY `SORT` ASC
LIMIT 0, 1


 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/orm/query/query.php:3558
 from Bitrix\Main\ORM\Query\Query->query() /home/bitrix/www/bitrix/modules/main/lib/orm/query/query.php:952
 from Bitrix\Main\ORM\Query\Query->exec() /home/bitrix/www/bitrix/modules/main/lib/orm/data/datamanager.php:513
 from Bitrix\Main\ORM\Data\DataManager::getList() /home/bitrix/www/bitrix/modules/abtest/lib/helper.php:41
 from Bitrix\ABTest\Helper::getActiveTest() /home/bitrix/www/bitrix/modules/abtest/lib/helper.php:127
 from Bitrix\ABTest\Helper::getContext() /home/bitrix/www/bitrix/modules/abtest/lib/eventhandler.php:37
 from Bitrix\ABTest\EventHandler::onGetCurrentSiteTemplate()
 from call_user_func_array() /home/bitrix/www/bitrix/modules/main/lib/eventmanager.php:448
----------------------------------------------------------

TIME: 0.000281 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SELECT GET_LOCK('2dcab33c20aabfc9efab2b40eade80f1d876a3a5b5ef2e29184eba200ebedb0a', 0) as L

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/db/mysqlcommonconnection.php:251
 from Bitrix\Main\DB\MysqlCommonConnection->lock() /home/bitrix/www/bitrix/modules/main/classes/mysql/user_counter.php:523
 from CUserCounterPage::checkSendCounter() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3550
 from CAllMain::RunFinalActionsInternal() /home/bitrix/www/bitrix/modules/main/lib/application.php:285
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
 from CAllMain::FinalActions() /home/bitrix/www/bitrix/modules/main/include/epilog_after.php:58
 from require() /home/bitrix/www/bitrix/modules/main/include/epilog.php:3
----------------------------------------------------------

TIME: 7.8E-5 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G CONN: 5791

SELECT USER_ID FROM b_user_counter WHERE SENT='0' GROUP BY USER_ID LIMIT 100

 from CDatabaseMysql->Query() /home/bitrix/www/bitrix/modules/main/classes/mysql/user_counter.php:531
 from CUserCounterPage::checkSendCounter() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3550
 from CAllMain::RunFinalActionsInternal() /home/bitrix/www/bitrix/modules/main/lib/application.php:285
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
 from CAllMain::FinalActions() /home/bitrix/www/bitrix/modules/main/include/epilog_after.php:58
 from require() /home/bitrix/www/bitrix/modules/main/include/epilog.php:3
 from require_once() /home/bitrix/www/bitrix/footer.php:4
------------------------------------------------------------------

TIME: 0.000178 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SELECT RELEASE_LOCK('2dcab33c20aabfc9efab2b40eade80f1d876a3a5b5ef2e29184eba200ebedb0a') as L

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/db/mysqlcommonconnection.php:263
 from Bitrix\Main\DB\MysqlCommonConnection->unlock() /home/bitrix/www/bitrix/modules/main/classes/mysql/user_counter.php:601
 from CUserCounterPage::checkSendCounter() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3550
 from CAllMain::RunFinalActionsInternal() /home/bitrix/www/bitrix/modules/main/lib/application.php:285
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
 from CAllMain::FinalActions() /home/bitrix/www/bitrix/modules/main/include/epilog_after.php:58
 from require() /home/bitrix/www/bitrix/modules/main/include/epilog.php:3
----------------------------------------------------------

TIME: 0.000558 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SELECT 1 FROM b_messageservice_message WHERE SUCCESS_EXEC='N' AND (NEXT_EXEC < '2022-03-17 01:35:25' OR NEXT_EXEC IS NULL) LIMIT 1

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/messageservice/lib/queue.php:23
 from Bitrix\MessageService\Queue::hasMessages() /home/bitrix/www/bitrix/modules/messageservice/lib/queue.php:43
 from Bitrix\MessageService\Queue::run() /home/bitrix/www/bitrix/modules/main/classes/general/module.php:480
 from ExecuteModuleEventEx() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3560
 from CAllMain::RunFinalActionsInternal() /home/bitrix/www/bitrix/modules/main/lib/application.php:285
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
 from CAllMain::FinalActions() /home/bitrix/www/bitrix/modules/main/include/epilog_after.php:58
----------------------------------------------------------

TIME: 0.000119 SESSION:  

SET NAMES 'utf8'

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/db/connection.php:376
 from Bitrix\Main\DB\Connection->queryExecute() /home/bitrix/www/bitrix/php_interface/after_connect_d7.php:3
 from include() /home/bitrix/www/bitrix/modules/main/lib/db/connection.php:1016
 from Bitrix\Main\DB\Connection->afterConnected() /home/bitrix/www/bitrix/modules/main/lib/db/mysqliconnection.php:101
 from Bitrix\Main\DB\MysqliConnection->connectInternal() /home/bitrix/www/bitrix/modules/main/lib/db/mysqliconnection.php:128
 from Bitrix\Main\DB\MysqliConnection->queryInternal() /home/bitrix/www/bitrix/modules/main/lib/db/connection.php:327
 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/orm/query/query.php:3558
 from Bitrix\Main\ORM\Query\Query->query() /home/bitrix/www/bitrix/modules/main/lib/orm/query/query.php:952
--------------------------

TIME: 0.00011 SESSION:  

SET collation_connection = "utf8_unicode_ci"

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/db/connection.php:376
 from Bitrix\Main\DB\Connection->queryExecute() /home/bitrix/www/bitrix/php_interface/after_connect_d7.php:4
 from include() /home/bitrix/www/bitrix/modules/main/lib/db/connection.php:1016
 from Bitrix\Main\DB\Connection->afterConnected() /home/bitrix/www/bitrix/modules/main/lib/db/mysqliconnection.php:101
 from Bitrix\Main\DB\MysqliConnection->connectInternal() /home/bitrix/www/bitrix/modules/main/lib/db/mysqliconnection.php:128
 from Bitrix\Main\DB\MysqliConnection->queryInternal() /home/bitrix/www/bitrix/modules/main/lib/db/connection.php:327
 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/orm/query/query.php:3558
 from Bitrix\Main\ORM\Query\Query->query() /home/bitrix/www/bitrix/modules/main/lib/orm/query/query.php:952
-------------------------

TIME: 0.000251 SESSION:  

SELECT 
	`main_localization_culture`.`ID` AS `ID`,
	`main_localization_culture`.`CODE` AS `CODE`,
	`main_localization_culture`.`NAME` AS `NAME`,
	`main_localization_culture`.`FORMAT_DATE` AS `FORMAT_DATE`,
	`main_localization_culture`.`FORMAT_DATETIME` AS `FORMAT_DATETIME`,
	`main_localization_culture`.`FORMAT_NAME` AS `FORMAT_NAME`,
	`main_localization_culture`.`WEEK_START` AS `WEEK_START`,
	`main_localization_culture`.`CHARSET` AS `CHARSET`,
	`main_localization_culture`.`DIRECTION` AS `DIRECTION`,
	`main_localization_culture`.`SHORT_DATE_FORMAT` AS `SHORT_DATE_FORMAT`,
	`main_localization_culture`.`MEDIUM_DATE_FORMAT` AS `MEDIUM_DATE_FORMAT`,
	`main_localization_culture`.`LONG_DATE_FORMAT` AS `LONG_DATE_FORMAT`,
	`main_localization_culture`.`FULL_DATE_FORMAT` AS `FULL_DATE_FORMAT`,
	`main_localization_culture`.`DAY_MONTH_FORMAT` AS `DAY_MONTH_FORMAT`,
	`main_localization_culture`.`DAY_SHORT_MONTH_FORMAT` AS `DAY_SHORT_MONTH_FORMAT`,
	`main_localization_culture`.`DAY_OF_WEEK_MONTH_FORMAT` AS `DAY_OF_WEEK_MONTH_FORMAT`,
	`main_localization_culture`.`SHORT_DAY_OF_WEEK_MONTH_FORMAT` AS `SHORT_DAY_OF_WEEK_MONTH_FORMAT`,
	`main_localization_culture`.`SHORT_DAY_OF_WEEK_SHORT_MONTH_FORMAT` AS `SHORT_DAY_OF_WEEK_SHORT_MONTH_FORMAT`,
	`main_localization_culture`.`SHORT_TIME_FORMAT` AS `SHORT_TIME_FORMAT`,
	`main_localization_culture`.`LONG_TIME_FORMAT` AS `LONG_TIME_FORMAT`,
	`main_localization_culture`.`AM_VALUE` AS `AM_VALUE`,
	`main_localization_culture`.`PM_VALUE` AS `PM_VALUE`,
	`main_localization_culture`.`NUMBER_THOUSANDS_SEPARATOR` AS `NUMBER_THOUSANDS_SEPARATOR`,
	`main_localization_culture`.`NUMBER_DECIMAL_SEPARATOR` AS `NUMBER_DECIMAL_SEPARATOR`,
	`main_localization_culture`.`NUMBER_DECIMALS` AS `NUMBER_DECIMALS`
FROM `b_culture` `main_localization_culture` 

WHERE `main_localization_culture`.`ID` = 1

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/orm/query/query.php:3558
 from Bitrix\Main\ORM\Query\Query->query() /home/bitrix/www/bitrix/modules/main/lib/orm/query/query.php:952
 from Bitrix\Main\ORM\Query\Query->exec() /home/bitrix/www/bitrix/modules/main/lib/orm/data/datamanager.php:513
 from Bitrix\Main\ORM\Data\DataManager::getList() /home/bitrix/www/bitrix/modules/main/lib/orm/data/datamanager.php:364
 from Bitrix\Main\ORM\Data\DataManager::getByPrimary() /home/bitrix/www/bitrix/modules/main/include.php:68
 from require_once() /home/bitrix/www/bitrix/modules/main/include/prolog_before.php:14
 from require_once() /home/bitrix/www/bitrix/modules/main/include/prolog.php:10
 from require_once() /home/bitrix/www/bitrix/header.php:1
--------------------------

TIME: 0.000817 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SELECT 
	`abtest_a_btest`.`ID` AS `ID`,
	`abtest_a_btest`.`SITE_ID` AS `SITE_ID`,
	`abtest_a_btest`.`ACTIVE` AS `ACTIVE`,
	`abtest_a_btest`.`ENABLED` AS `ENABLED`,
	`abtest_a_btest`.`NAME` AS `NAME`,
	`abtest_a_btest`.`DESCR` AS `DESCR`,
	`abtest_a_btest`.`TEST_DATA` AS `TEST_DATA`,
	`abtest_a_btest`.`START_DATE` AS `START_DATE`,
	`abtest_a_btest`.`STOP_DATE` AS `STOP_DATE`,
	`abtest_a_btest`.`DURATION` AS `DURATION`,
	`abtest_a_btest`.`PORTION` AS `PORTION`,
	`abtest_a_btest`.`MIN_AMOUNT` AS `MIN_AMOUNT`,
	`abtest_a_btest`.`USER_ID` AS `USER_ID`,
	`abtest_a_btest`.`SORT` AS `SORT`
FROM `b_abtest` `abtest_a_btest` 

WHERE `abtest_a_btest`.`SITE_ID` = 'w3'
AND `abtest_a_btest`.`ACTIVE` = 'Y'
AND `abtest_a_btest`.`START_DATE` <= '2022-03-17 01:36:22'
ORDER BY `SORT` ASC
LIMIT 0, 1


 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/orm/query/query.php:3558
 from Bitrix\Main\ORM\Query\Query->query() /home/bitrix/www/bitrix/modules/main/lib/orm/query/query.php:952
 from Bitrix\Main\ORM\Query\Query->exec() /home/bitrix/www/bitrix/modules/main/lib/orm/data/datamanager.php:513
 from Bitrix\Main\ORM\Data\DataManager::getList() /home/bitrix/www/bitrix/modules/abtest/lib/helper.php:41
 from Bitrix\ABTest\Helper::getActiveTest() /home/bitrix/www/bitrix/modules/abtest/lib/helper.php:127
 from Bitrix\ABTest\Helper::getContext() /home/bitrix/www/bitrix/modules/abtest/lib/eventhandler.php:37
 from Bitrix\ABTest\EventHandler::onGetCurrentSiteTemplate()
 from call_user_func_array() /home/bitrix/www/bitrix/modules/main/lib/eventmanager.php:448
----------------------------------------------------------

TIME: 0.000259 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SELECT GET_LOCK('2dcab33c20aabfc9efab2b40eade80f1d876a3a5b5ef2e29184eba200ebedb0a', 0) as L

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/db/mysqlcommonconnection.php:251
 from Bitrix\Main\DB\MysqlCommonConnection->lock() /home/bitrix/www/bitrix/modules/main/classes/mysql/user_counter.php:523
 from CUserCounterPage::checkSendCounter() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3550
 from CAllMain::RunFinalActionsInternal() /home/bitrix/www/bitrix/modules/main/lib/application.php:285
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
 from CAllMain::FinalActions() /home/bitrix/www/bitrix/modules/main/include/epilog_after.php:58
 from require() /home/bitrix/www/bitrix/modules/main/include/epilog.php:3
----------------------------------------------------------

TIME: 9.4E-5 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G CONN: 5793

SELECT USER_ID FROM b_user_counter WHERE SENT='0' GROUP BY USER_ID LIMIT 100

 from CDatabaseMysql->Query() /home/bitrix/www/bitrix/modules/main/classes/mysql/user_counter.php:531
 from CUserCounterPage::checkSendCounter() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3550
 from CAllMain::RunFinalActionsInternal() /home/bitrix/www/bitrix/modules/main/lib/application.php:285
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
 from CAllMain::FinalActions() /home/bitrix/www/bitrix/modules/main/include/epilog_after.php:58
 from require() /home/bitrix/www/bitrix/modules/main/include/epilog.php:3
 from require_once() /home/bitrix/www/bitrix/footer.php:4
------------------------------------------------------------------

TIME: 0.000122 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SELECT RELEASE_LOCK('2dcab33c20aabfc9efab2b40eade80f1d876a3a5b5ef2e29184eba200ebedb0a') as L

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/db/mysqlcommonconnection.php:263
 from Bitrix\Main\DB\MysqlCommonConnection->unlock() /home/bitrix/www/bitrix/modules/main/classes/mysql/user_counter.php:601
 from CUserCounterPage::checkSendCounter() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3550
 from CAllMain::RunFinalActionsInternal() /home/bitrix/www/bitrix/modules/main/lib/application.php:285
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
 from CAllMain::FinalActions() /home/bitrix/www/bitrix/modules/main/include/epilog_after.php:58
 from require() /home/bitrix/www/bitrix/modules/main/include/epilog.php:3
----------------------------------------------------------

TIME: 0.0005 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SELECT 1 FROM b_messageservice_message WHERE SUCCESS_EXEC='N' AND (NEXT_EXEC < '2022-03-17 01:36:22' OR NEXT_EXEC IS NULL) LIMIT 1

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/messageservice/lib/queue.php:23
 from Bitrix\MessageService\Queue::hasMessages() /home/bitrix/www/bitrix/modules/messageservice/lib/queue.php:43
 from Bitrix\MessageService\Queue::run() /home/bitrix/www/bitrix/modules/main/classes/general/module.php:480
 from ExecuteModuleEventEx() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3560
 from CAllMain::RunFinalActionsInternal() /home/bitrix/www/bitrix/modules/main/lib/application.php:285
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
 from CAllMain::FinalActions() /home/bitrix/www/bitrix/modules/main/include/epilog_after.php:58
--------------------------------------------------------

TIME: 0.000139 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SET NAMES 'utf8'

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/db/connection.php:376
 from Bitrix\Main\DB\Connection->queryExecute() /home/bitrix/www/bitrix/php_interface/after_connect_d7.php:3
 from include() /home/bitrix/www/bitrix/modules/main/lib/db/connection.php:1016
 from Bitrix\Main\DB\Connection->afterConnected() /home/bitrix/www/bitrix/modules/main/lib/db/mysqliconnection.php:101
 from Bitrix\Main\DB\MysqliConnection->connectInternal() /home/bitrix/www/bitrix/modules/main/lib/data/connection.php:53
 from Bitrix\Main\Data\Connection->getResource() /home/bitrix/www/bitrix/modules/main/classes/general/database.php:283
 from CAllDatabase->DoConnect() /home/bitrix/www/bitrix/modules/main/classes/mysql/database_mysqli.php:73
 from CDatabase->ForSql() /home/bitrix/www/bitrix/modules/main/classes/general/sqlwhere.php:713
----------------------------------------------------------

TIME: 9.2E-5 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SET collation_connection = "utf8_unicode_ci"

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/db/connection.php:376
 from Bitrix\Main\DB\Connection->queryExecute() /home/bitrix/www/bitrix/php_interface/after_connect_d7.php:4
 from include() /home/bitrix/www/bitrix/modules/main/lib/db/connection.php:1016
 from Bitrix\Main\DB\Connection->afterConnected() /home/bitrix/www/bitrix/modules/main/lib/db/mysqliconnection.php:101
 from Bitrix\Main\DB\MysqliConnection->connectInternal() /home/bitrix/www/bitrix/modules/main/lib/data/connection.php:53
 from Bitrix\Main\Data\Connection->getResource() /home/bitrix/www/bitrix/modules/main/classes/general/database.php:283
 from CAllDatabase->DoConnect() /home/bitrix/www/bitrix/modules/main/classes/mysql/database_mysqli.php:73
 from CDatabase->ForSql() /home/bitrix/www/bitrix/modules/main/classes/general/sqlwhere.php:713
--------------------------------------------------------

TIME: 0.000779 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SELECT 
	`abtest_a_btest`.`ID` AS `ID`,
	`abtest_a_btest`.`SITE_ID` AS `SITE_ID`,
	`abtest_a_btest`.`ACTIVE` AS `ACTIVE`,
	`abtest_a_btest`.`ENABLED` AS `ENABLED`,
	`abtest_a_btest`.`NAME` AS `NAME`,
	`abtest_a_btest`.`DESCR` AS `DESCR`,
	`abtest_a_btest`.`TEST_DATA` AS `TEST_DATA`,
	`abtest_a_btest`.`START_DATE` AS `START_DATE`,
	`abtest_a_btest`.`STOP_DATE` AS `STOP_DATE`,
	`abtest_a_btest`.`DURATION` AS `DURATION`,
	`abtest_a_btest`.`PORTION` AS `PORTION`,
	`abtest_a_btest`.`MIN_AMOUNT` AS `MIN_AMOUNT`,
	`abtest_a_btest`.`USER_ID` AS `USER_ID`,
	`abtest_a_btest`.`SORT` AS `SORT`
FROM `b_abtest` `abtest_a_btest` 

WHERE `abtest_a_btest`.`SITE_ID` = 'w3'
AND `abtest_a_btest`.`ACTIVE` = 'Y'
AND `abtest_a_btest`.`START_DATE` <= '2022-03-17 01:36:41'
ORDER BY `SORT` ASC
LIMIT 0, 1


 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/orm/query/query.php:3558
 from Bitrix\Main\ORM\Query\Query->query() /home/bitrix/www/bitrix/modules/main/lib/orm/query/query.php:952
 from Bitrix\Main\ORM\Query\Query->exec() /home/bitrix/www/bitrix/modules/main/lib/orm/data/datamanager.php:513
 from Bitrix\Main\ORM\Data\DataManager::getList() /home/bitrix/www/bitrix/modules/abtest/lib/helper.php:41
 from Bitrix\ABTest\Helper::getActiveTest() /home/bitrix/www/bitrix/modules/abtest/lib/helper.php:127
 from Bitrix\ABTest\Helper::getContext() /home/bitrix/www/bitrix/modules/abtest/lib/eventhandler.php:37
 from Bitrix\ABTest\EventHandler::onGetCurrentSiteTemplate()
 from call_user_func_array() /home/bitrix/www/bitrix/modules/main/lib/eventmanager.php:448
----------------------------------------------------------

TIME: 0.000265 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SELECT GET_LOCK('2dcab33c20aabfc9efab2b40eade80f1d876a3a5b5ef2e29184eba200ebedb0a', 0) as L

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/db/mysqlcommonconnection.php:251
 from Bitrix\Main\DB\MysqlCommonConnection->lock() /home/bitrix/www/bitrix/modules/main/classes/mysql/user_counter.php:523
 from CUserCounterPage::checkSendCounter() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3550
 from CAllMain::RunFinalActionsInternal() /home/bitrix/www/bitrix/modules/main/lib/application.php:285
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
 from CAllMain::FinalActions() /home/bitrix/www/bitrix/modules/main/include/epilog_after.php:58
 from require() /home/bitrix/www/bitrix/modules/main/include/epilog.php:3
----------------------------------------------------------

TIME: 8.5E-5 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G CONN: 5794

SELECT USER_ID FROM b_user_counter WHERE SENT='0' GROUP BY USER_ID LIMIT 100

 from CDatabaseMysql->Query() /home/bitrix/www/bitrix/modules/main/classes/mysql/user_counter.php:531
 from CUserCounterPage::checkSendCounter() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3550
 from CAllMain::RunFinalActionsInternal() /home/bitrix/www/bitrix/modules/main/lib/application.php:285
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
 from CAllMain::FinalActions() /home/bitrix/www/bitrix/modules/main/include/epilog_after.php:58
 from require() /home/bitrix/www/bitrix/modules/main/include/epilog.php:3
 from require_once() /home/bitrix/www/bitrix/footer.php:4
------------------------------------------------------------------

TIME: 0.00019 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SELECT RELEASE_LOCK('2dcab33c20aabfc9efab2b40eade80f1d876a3a5b5ef2e29184eba200ebedb0a') as L

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/db/mysqlcommonconnection.php:263
 from Bitrix\Main\DB\MysqlCommonConnection->unlock() /home/bitrix/www/bitrix/modules/main/classes/mysql/user_counter.php:601
 from CUserCounterPage::checkSendCounter() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3550
 from CAllMain::RunFinalActionsInternal() /home/bitrix/www/bitrix/modules/main/lib/application.php:285
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
 from CAllMain::FinalActions() /home/bitrix/www/bitrix/modules/main/include/epilog_after.php:58
 from require() /home/bitrix/www/bitrix/modules/main/include/epilog.php:3
---------------------------------------------------------

TIME: 0.000524 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SELECT 1 FROM b_messageservice_message WHERE SUCCESS_EXEC='N' AND (NEXT_EXEC < '2022-03-17 01:36:41' OR NEXT_EXEC IS NULL) LIMIT 1

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/messageservice/lib/queue.php:23
 from Bitrix\MessageService\Queue::hasMessages() /home/bitrix/www/bitrix/modules/messageservice/lib/queue.php:43
 from Bitrix\MessageService\Queue::run() /home/bitrix/www/bitrix/modules/main/classes/general/module.php:480
 from ExecuteModuleEventEx() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3560
 from CAllMain::RunFinalActionsInternal() /home/bitrix/www/bitrix/modules/main/lib/application.php:285
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
 from CAllMain::FinalActions() /home/bitrix/www/bitrix/modules/main/include/epilog_after.php:58
----------------------------------------------------------

TIME: 0.00015 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SET NAMES 'utf8'

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/db/connection.php:376
 from Bitrix\Main\DB\Connection->queryExecute() /home/bitrix/www/bitrix/php_interface/after_connect_d7.php:3
 from include() /home/bitrix/www/bitrix/modules/main/lib/db/connection.php:1016
 from Bitrix\Main\DB\Connection->afterConnected() /home/bitrix/www/bitrix/modules/main/lib/db/mysqliconnection.php:101
 from Bitrix\Main\DB\MysqliConnection->connectInternal() /home/bitrix/www/bitrix/modules/main/lib/data/connection.php:53
 from Bitrix\Main\Data\Connection->getResource() /home/bitrix/www/bitrix/modules/main/classes/general/database.php:283
 from CAllDatabase->DoConnect() /home/bitrix/www/bitrix/modules/main/classes/mysql/database_mysqli.php:73
 from CDatabase->ForSql() /home/bitrix/www/bitrix/modules/main/classes/general/sqlwhere.php:713
---------------------------------------------------------

TIME: 0.000164 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SET collation_connection = "utf8_unicode_ci"

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/db/connection.php:376
 from Bitrix\Main\DB\Connection->queryExecute() /home/bitrix/www/bitrix/php_interface/after_connect_d7.php:4
 from include() /home/bitrix/www/bitrix/modules/main/lib/db/connection.php:1016
 from Bitrix\Main\DB\Connection->afterConnected() /home/bitrix/www/bitrix/modules/main/lib/db/mysqliconnection.php:101
 from Bitrix\Main\DB\MysqliConnection->connectInternal() /home/bitrix/www/bitrix/modules/main/lib/data/connection.php:53
 from Bitrix\Main\Data\Connection->getResource() /home/bitrix/www/bitrix/modules/main/classes/general/database.php:283
 from CAllDatabase->DoConnect() /home/bitrix/www/bitrix/modules/main/classes/mysql/database_mysqli.php:73
 from CDatabase->ForSql() /home/bitrix/www/bitrix/modules/main/classes/general/sqlwhere.php:713
----------------------------------------------------------

TIME: 0.001272 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SELECT 
	`abtest_a_btest`.`ID` AS `ID`,
	`abtest_a_btest`.`SITE_ID` AS `SITE_ID`,
	`abtest_a_btest`.`ACTIVE` AS `ACTIVE`,
	`abtest_a_btest`.`ENABLED` AS `ENABLED`,
	`abtest_a_btest`.`NAME` AS `NAME`,
	`abtest_a_btest`.`DESCR` AS `DESCR`,
	`abtest_a_btest`.`TEST_DATA` AS `TEST_DATA`,
	`abtest_a_btest`.`START_DATE` AS `START_DATE`,
	`abtest_a_btest`.`STOP_DATE` AS `STOP_DATE`,
	`abtest_a_btest`.`DURATION` AS `DURATION`,
	`abtest_a_btest`.`PORTION` AS `PORTION`,
	`abtest_a_btest`.`MIN_AMOUNT` AS `MIN_AMOUNT`,
	`abtest_a_btest`.`USER_ID` AS `USER_ID`,
	`abtest_a_btest`.`SORT` AS `SORT`
FROM `b_abtest` `abtest_a_btest` 

WHERE `abtest_a_btest`.`SITE_ID` = 'w3'
AND `abtest_a_btest`.`ACTIVE` = 'Y'
AND `abtest_a_btest`.`START_DATE` <= '2022-03-17 01:37:23'
ORDER BY `SORT` ASC
LIMIT 0, 1


 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/orm/query/query.php:3558
 from Bitrix\Main\ORM\Query\Query->query() /home/bitrix/www/bitrix/modules/main/lib/orm/query/query.php:952
 from Bitrix\Main\ORM\Query\Query->exec() /home/bitrix/www/bitrix/modules/main/lib/orm/data/datamanager.php:513
 from Bitrix\Main\ORM\Data\DataManager::getList() /home/bitrix/www/bitrix/modules/abtest/lib/helper.php:41
 from Bitrix\ABTest\Helper::getActiveTest() /home/bitrix/www/bitrix/modules/abtest/lib/helper.php:127
 from Bitrix\ABTest\Helper::getContext() /home/bitrix/www/bitrix/modules/abtest/lib/eventhandler.php:37
 from Bitrix\ABTest\EventHandler::onGetCurrentSiteTemplate()
 from call_user_func_array() /home/bitrix/www/bitrix/modules/main/lib/eventmanager.php:448
----------------------------------------------------------

TIME: 0.000262 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SELECT GET_LOCK('2dcab33c20aabfc9efab2b40eade80f1d876a3a5b5ef2e29184eba200ebedb0a', 0) as L

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/db/mysqlcommonconnection.php:251
 from Bitrix\Main\DB\MysqlCommonConnection->lock() /home/bitrix/www/bitrix/modules/main/classes/mysql/user_counter.php:523
 from CUserCounterPage::checkSendCounter() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3550
 from CAllMain::RunFinalActionsInternal() /home/bitrix/www/bitrix/modules/main/lib/application.php:285
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
 from CAllMain::FinalActions() /home/bitrix/www/bitrix/modules/main/include/epilog_after.php:58
 from require() /home/bitrix/www/bitrix/modules/main/include/epilog.php:3
----------------------------------------------------------

TIME: 0.000103 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G CONN: 5796

SELECT USER_ID FROM b_user_counter WHERE SENT='0' GROUP BY USER_ID LIMIT 100

 from CDatabaseMysql->Query() /home/bitrix/www/bitrix/modules/main/classes/mysql/user_counter.php:531
 from CUserCounterPage::checkSendCounter() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3550
 from CAllMain::RunFinalActionsInternal() /home/bitrix/www/bitrix/modules/main/lib/application.php:285
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
 from CAllMain::FinalActions() /home/bitrix/www/bitrix/modules/main/include/epilog_after.php:58
 from require() /home/bitrix/www/bitrix/modules/main/include/epilog.php:3
 from require_once() /home/bitrix/www/bitrix/footer.php:4
--------------------------------------------------------------------

TIME: 0.000193 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SELECT RELEASE_LOCK('2dcab33c20aabfc9efab2b40eade80f1d876a3a5b5ef2e29184eba200ebedb0a') as L

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/db/mysqlcommonconnection.php:263
 from Bitrix\Main\DB\MysqlCommonConnection->unlock() /home/bitrix/www/bitrix/modules/main/classes/mysql/user_counter.php:601
 from CUserCounterPage::checkSendCounter() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3550
 from CAllMain::RunFinalActionsInternal() /home/bitrix/www/bitrix/modules/main/lib/application.php:285
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
 from CAllMain::FinalActions() /home/bitrix/www/bitrix/modules/main/include/epilog_after.php:58
 from require() /home/bitrix/www/bitrix/modules/main/include/epilog.php:3
----------------------------------------------------------

TIME: 0.000615 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SELECT 1 FROM b_messageservice_message WHERE SUCCESS_EXEC='N' AND (NEXT_EXEC < '2022-03-17 01:37:23' OR NEXT_EXEC IS NULL) LIMIT 1

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/messageservice/lib/queue.php:23
 from Bitrix\MessageService\Queue::hasMessages() /home/bitrix/www/bitrix/modules/messageservice/lib/queue.php:43
 from Bitrix\MessageService\Queue::run() /home/bitrix/www/bitrix/modules/main/classes/general/module.php:480
 from ExecuteModuleEventEx() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3560
 from CAllMain::RunFinalActionsInternal() /home/bitrix/www/bitrix/modules/main/lib/application.php:285
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
 from CAllMain::FinalActions() /home/bitrix/www/bitrix/modules/main/include/epilog_after.php:58
----------------------------------------------------------

TIME: 0.000148 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SET NAMES 'utf8'

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/db/connection.php:376
 from Bitrix\Main\DB\Connection->queryExecute() /home/bitrix/www/bitrix/php_interface/after_connect_d7.php:3
 from include() /home/bitrix/www/bitrix/modules/main/lib/db/connection.php:1016
 from Bitrix\Main\DB\Connection->afterConnected() /home/bitrix/www/bitrix/modules/main/lib/db/mysqliconnection.php:101
 from Bitrix\Main\DB\MysqliConnection->connectInternal() /home/bitrix/www/bitrix/modules/main/lib/data/connection.php:53
 from Bitrix\Main\Data\Connection->getResource() /home/bitrix/www/bitrix/modules/main/classes/general/database.php:283
 from CAllDatabase->DoConnect() /home/bitrix/www/bitrix/modules/main/classes/mysql/database_mysqli.php:73
 from CDatabase->ForSql() /home/bitrix/www/bitrix/modules/main/classes/general/sqlwhere.php:713
----------------------------------------------------------

TIME: 8.1E-5 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SET collation_connection = "utf8_unicode_ci"

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/db/connection.php:376
 from Bitrix\Main\DB\Connection->queryExecute() /home/bitrix/www/bitrix/php_interface/after_connect_d7.php:4
 from include() /home/bitrix/www/bitrix/modules/main/lib/db/connection.php:1016
 from Bitrix\Main\DB\Connection->afterConnected() /home/bitrix/www/bitrix/modules/main/lib/db/mysqliconnection.php:101
 from Bitrix\Main\DB\MysqliConnection->connectInternal() /home/bitrix/www/bitrix/modules/main/lib/data/connection.php:53
 from Bitrix\Main\Data\Connection->getResource() /home/bitrix/www/bitrix/modules/main/classes/general/database.php:283
 from CAllDatabase->DoConnect() /home/bitrix/www/bitrix/modules/main/classes/mysql/database_mysqli.php:73
 from CDatabase->ForSql() /home/bitrix/www/bitrix/modules/main/classes/general/sqlwhere.php:713
--------------------------------------------------------

TIME: 0.000758 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SELECT 
	`abtest_a_btest`.`ID` AS `ID`,
	`abtest_a_btest`.`SITE_ID` AS `SITE_ID`,
	`abtest_a_btest`.`ACTIVE` AS `ACTIVE`,
	`abtest_a_btest`.`ENABLED` AS `ENABLED`,
	`abtest_a_btest`.`NAME` AS `NAME`,
	`abtest_a_btest`.`DESCR` AS `DESCR`,
	`abtest_a_btest`.`TEST_DATA` AS `TEST_DATA`,
	`abtest_a_btest`.`START_DATE` AS `START_DATE`,
	`abtest_a_btest`.`STOP_DATE` AS `STOP_DATE`,
	`abtest_a_btest`.`DURATION` AS `DURATION`,
	`abtest_a_btest`.`PORTION` AS `PORTION`,
	`abtest_a_btest`.`MIN_AMOUNT` AS `MIN_AMOUNT`,
	`abtest_a_btest`.`USER_ID` AS `USER_ID`,
	`abtest_a_btest`.`SORT` AS `SORT`
FROM `b_abtest` `abtest_a_btest` 

WHERE `abtest_a_btest`.`SITE_ID` = 'w3'
AND `abtest_a_btest`.`ACTIVE` = 'Y'
AND `abtest_a_btest`.`START_DATE` <= '2022-03-17 01:37:49'
ORDER BY `SORT` ASC
LIMIT 0, 1


 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/orm/query/query.php:3558
 from Bitrix\Main\ORM\Query\Query->query() /home/bitrix/www/bitrix/modules/main/lib/orm/query/query.php:952
 from Bitrix\Main\ORM\Query\Query->exec() /home/bitrix/www/bitrix/modules/main/lib/orm/data/datamanager.php:513
 from Bitrix\Main\ORM\Data\DataManager::getList() /home/bitrix/www/bitrix/modules/abtest/lib/helper.php:41
 from Bitrix\ABTest\Helper::getActiveTest() /home/bitrix/www/bitrix/modules/abtest/lib/helper.php:127
 from Bitrix\ABTest\Helper::getContext() /home/bitrix/www/bitrix/modules/abtest/lib/eventhandler.php:37
 from Bitrix\ABTest\EventHandler::onGetCurrentSiteTemplate()
 from call_user_func_array() /home/bitrix/www/bitrix/modules/main/lib/eventmanager.php:448
----------------------------------------------------------

TIME: 0.000291 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SELECT GET_LOCK('2dcab33c20aabfc9efab2b40eade80f1d876a3a5b5ef2e29184eba200ebedb0a', 0) as L

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/db/mysqlcommonconnection.php:251
 from Bitrix\Main\DB\MysqlCommonConnection->lock() /home/bitrix/www/bitrix/modules/main/classes/mysql/user_counter.php:523
 from CUserCounterPage::checkSendCounter() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3550
 from CAllMain::RunFinalActionsInternal() /home/bitrix/www/bitrix/modules/main/lib/application.php:285
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
 from CAllMain::FinalActions() /home/bitrix/www/bitrix/modules/main/include/epilog_after.php:58
 from require() /home/bitrix/www/bitrix/modules/main/include/epilog.php:3
----------------------------------------------------------

TIME: 8.9E-5 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G CONN: 5797

SELECT USER_ID FROM b_user_counter WHERE SENT='0' GROUP BY USER_ID LIMIT 100

 from CDatabaseMysql->Query() /home/bitrix/www/bitrix/modules/main/classes/mysql/user_counter.php:531
 from CUserCounterPage::checkSendCounter() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3550
 from CAllMain::RunFinalActionsInternal() /home/bitrix/www/bitrix/modules/main/lib/application.php:285
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
 from CAllMain::FinalActions() /home/bitrix/www/bitrix/modules/main/include/epilog_after.php:58
 from require() /home/bitrix/www/bitrix/modules/main/include/epilog.php:3
 from require_once() /home/bitrix/www/bitrix/footer.php:4
------------------------------------------------------------------

TIME: 0.000174 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SELECT RELEASE_LOCK('2dcab33c20aabfc9efab2b40eade80f1d876a3a5b5ef2e29184eba200ebedb0a') as L

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/db/mysqlcommonconnection.php:263
 from Bitrix\Main\DB\MysqlCommonConnection->unlock() /home/bitrix/www/bitrix/modules/main/classes/mysql/user_counter.php:601
 from CUserCounterPage::checkSendCounter() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3550
 from CAllMain::RunFinalActionsInternal() /home/bitrix/www/bitrix/modules/main/lib/application.php:285
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
 from CAllMain::FinalActions() /home/bitrix/www/bitrix/modules/main/include/epilog_after.php:58
 from require() /home/bitrix/www/bitrix/modules/main/include/epilog.php:3
----------------------------------------------------------

TIME: 0.000528 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SELECT 1 FROM b_messageservice_message WHERE SUCCESS_EXEC='N' AND (NEXT_EXEC < '2022-03-17 01:37:49' OR NEXT_EXEC IS NULL) LIMIT 1

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/messageservice/lib/queue.php:23
 from Bitrix\MessageService\Queue::hasMessages() /home/bitrix/www/bitrix/modules/messageservice/lib/queue.php:43
 from Bitrix\MessageService\Queue::run() /home/bitrix/www/bitrix/modules/main/classes/general/module.php:480
 from ExecuteModuleEventEx() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3560
 from CAllMain::RunFinalActionsInternal() /home/bitrix/www/bitrix/modules/main/lib/application.php:285
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
 from CAllMain::FinalActions() /home/bitrix/www/bitrix/modules/main/include/epilog_after.php:58
----------------------------------------------------------

TIME: 0.000231 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SET NAMES 'utf8'

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/db/connection.php:376
 from Bitrix\Main\DB\Connection->queryExecute() /home/bitrix/www/bitrix/php_interface/after_connect_d7.php:3
 from include() /home/bitrix/www/bitrix/modules/main/lib/db/connection.php:1016
 from Bitrix\Main\DB\Connection->afterConnected() /home/bitrix/www/bitrix/modules/main/lib/db/mysqliconnection.php:101
 from Bitrix\Main\DB\MysqliConnection->connectInternal() /home/bitrix/www/bitrix/modules/main/lib/data/connection.php:53
 from Bitrix\Main\Data\Connection->getResource() /home/bitrix/www/bitrix/modules/main/classes/general/database.php:283
 from CAllDatabase->DoConnect() /home/bitrix/www/bitrix/modules/main/classes/mysql/database_mysqli.php:73
 from CDatabase->ForSql() /home/bitrix/www/bitrix/modules/main/classes/general/sqlwhere.php:713
----------------------------------------------------------

TIME: 0.000141 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SET collation_connection = "utf8_unicode_ci"

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/db/connection.php:376
 from Bitrix\Main\DB\Connection->queryExecute() /home/bitrix/www/bitrix/php_interface/after_connect_d7.php:4
 from include() /home/bitrix/www/bitrix/modules/main/lib/db/connection.php:1016
 from Bitrix\Main\DB\Connection->afterConnected() /home/bitrix/www/bitrix/modules/main/lib/db/mysqliconnection.php:101
 from Bitrix\Main\DB\MysqliConnection->connectInternal() /home/bitrix/www/bitrix/modules/main/lib/data/connection.php:53
 from Bitrix\Main\Data\Connection->getResource() /home/bitrix/www/bitrix/modules/main/classes/general/database.php:283
 from CAllDatabase->DoConnect() /home/bitrix/www/bitrix/modules/main/classes/mysql/database_mysqli.php:73
 from CDatabase->ForSql() /home/bitrix/www/bitrix/modules/main/classes/general/sqlwhere.php:713
----------------------------------------------------------

TIME: 0.006515 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SELECT 
	`abtest_a_btest`.`ID` AS `ID`,
	`abtest_a_btest`.`SITE_ID` AS `SITE_ID`,
	`abtest_a_btest`.`ACTIVE` AS `ACTIVE`,
	`abtest_a_btest`.`ENABLED` AS `ENABLED`,
	`abtest_a_btest`.`NAME` AS `NAME`,
	`abtest_a_btest`.`DESCR` AS `DESCR`,
	`abtest_a_btest`.`TEST_DATA` AS `TEST_DATA`,
	`abtest_a_btest`.`START_DATE` AS `START_DATE`,
	`abtest_a_btest`.`STOP_DATE` AS `STOP_DATE`,
	`abtest_a_btest`.`DURATION` AS `DURATION`,
	`abtest_a_btest`.`PORTION` AS `PORTION`,
	`abtest_a_btest`.`MIN_AMOUNT` AS `MIN_AMOUNT`,
	`abtest_a_btest`.`USER_ID` AS `USER_ID`,
	`abtest_a_btest`.`SORT` AS `SORT`
FROM `b_abtest` `abtest_a_btest` 

WHERE `abtest_a_btest`.`SITE_ID` = 'w3'
AND `abtest_a_btest`.`ACTIVE` = 'Y'
AND `abtest_a_btest`.`START_DATE` <= '2022-03-17 01:38:53'
ORDER BY `SORT` ASC
LIMIT 0, 1


 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/orm/query/query.php:3558
 from Bitrix\Main\ORM\Query\Query->query() /home/bitrix/www/bitrix/modules/main/lib/orm/query/query.php:952
 from Bitrix\Main\ORM\Query\Query->exec() /home/bitrix/www/bitrix/modules/main/lib/orm/data/datamanager.php:513
 from Bitrix\Main\ORM\Data\DataManager::getList() /home/bitrix/www/bitrix/modules/abtest/lib/helper.php:41
 from Bitrix\ABTest\Helper::getActiveTest() /home/bitrix/www/bitrix/modules/abtest/lib/helper.php:127
 from Bitrix\ABTest\Helper::getContext() /home/bitrix/www/bitrix/modules/abtest/lib/eventhandler.php:37
 from Bitrix\ABTest\EventHandler::onGetCurrentSiteTemplate()
 from call_user_func_array() /home/bitrix/www/bitrix/modules/main/lib/eventmanager.php:448
----------------------------------------------------------

TIME: 0.000277 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SELECT GET_LOCK('2dcab33c20aabfc9efab2b40eade80f1d876a3a5b5ef2e29184eba200ebedb0a', 0) as L

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/db/mysqlcommonconnection.php:251
 from Bitrix\Main\DB\MysqlCommonConnection->lock() /home/bitrix/www/bitrix/modules/main/classes/mysql/user_counter.php:523
 from CUserCounterPage::checkSendCounter() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3550
 from CAllMain::RunFinalActionsInternal() /home/bitrix/www/bitrix/modules/main/lib/application.php:285
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
 from CAllMain::FinalActions() /home/bitrix/www/bitrix/modules/main/include/epilog_after.php:58
 from require() /home/bitrix/www/bitrix/modules/main/include/epilog.php:3
----------------------------------------------------------

TIME: 8.6E-5 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G CONN: 5799

SELECT USER_ID FROM b_user_counter WHERE SENT='0' GROUP BY USER_ID LIMIT 100

 from CDatabaseMysql->Query() /home/bitrix/www/bitrix/modules/main/classes/mysql/user_counter.php:531
 from CUserCounterPage::checkSendCounter() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3550
 from CAllMain::RunFinalActionsInternal() /home/bitrix/www/bitrix/modules/main/lib/application.php:285
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
 from CAllMain::FinalActions() /home/bitrix/www/bitrix/modules/main/include/epilog_after.php:58
 from require() /home/bitrix/www/bitrix/modules/main/include/epilog.php:3
 from require_once() /home/bitrix/www/bitrix/footer.php:4
------------------------------------------------------------------

TIME: 0.000189 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SELECT RELEASE_LOCK('2dcab33c20aabfc9efab2b40eade80f1d876a3a5b5ef2e29184eba200ebedb0a') as L

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/db/mysqlcommonconnection.php:263
 from Bitrix\Main\DB\MysqlCommonConnection->unlock() /home/bitrix/www/bitrix/modules/main/classes/mysql/user_counter.php:601
 from CUserCounterPage::checkSendCounter() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3550
 from CAllMain::RunFinalActionsInternal() /home/bitrix/www/bitrix/modules/main/lib/application.php:285
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
 from CAllMain::FinalActions() /home/bitrix/www/bitrix/modules/main/include/epilog_after.php:58
 from require() /home/bitrix/www/bitrix/modules/main/include/epilog.php:3
----------------------------------------------------------

TIME: 0.000554 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SELECT 1 FROM b_messageservice_message WHERE SUCCESS_EXEC='N' AND (NEXT_EXEC < '2022-03-17 01:38:53' OR NEXT_EXEC IS NULL) LIMIT 1

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/messageservice/lib/queue.php:23
 from Bitrix\MessageService\Queue::hasMessages() /home/bitrix/www/bitrix/modules/messageservice/lib/queue.php:43
 from Bitrix\MessageService\Queue::run() /home/bitrix/www/bitrix/modules/main/classes/general/module.php:480
 from ExecuteModuleEventEx() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3560
 from CAllMain::RunFinalActionsInternal() /home/bitrix/www/bitrix/modules/main/lib/application.php:285
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
 from CAllMain::FinalActions() /home/bitrix/www/bitrix/modules/main/include/epilog_after.php:58
----------------------------------------------------------

TIME: 0.00027 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SET NAMES 'utf8'

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/db/connection.php:376
 from Bitrix\Main\DB\Connection->queryExecute() /home/bitrix/www/bitrix/php_interface/after_connect_d7.php:3
 from include() /home/bitrix/www/bitrix/modules/main/lib/db/connection.php:1016
 from Bitrix\Main\DB\Connection->afterConnected() /home/bitrix/www/bitrix/modules/main/lib/db/mysqliconnection.php:101
 from Bitrix\Main\DB\MysqliConnection->connectInternal() /home/bitrix/www/bitrix/modules/main/lib/data/connection.php:53
 from Bitrix\Main\Data\Connection->getResource() /home/bitrix/www/bitrix/modules/main/classes/general/database.php:283
 from CAllDatabase->DoConnect() /home/bitrix/www/bitrix/modules/main/classes/mysql/database_mysqli.php:73
 from CDatabase->ForSql() /home/bitrix/www/bitrix/modules/main/classes/general/sqlwhere.php:713
---------------------------------------------------------

TIME: 0.000175 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SET collation_connection = "utf8_unicode_ci"

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/db/connection.php:376
 from Bitrix\Main\DB\Connection->queryExecute() /home/bitrix/www/bitrix/php_interface/after_connect_d7.php:4
 from include() /home/bitrix/www/bitrix/modules/main/lib/db/connection.php:1016
 from Bitrix\Main\DB\Connection->afterConnected() /home/bitrix/www/bitrix/modules/main/lib/db/mysqliconnection.php:101
 from Bitrix\Main\DB\MysqliConnection->connectInternal() /home/bitrix/www/bitrix/modules/main/lib/data/connection.php:53
 from Bitrix\Main\Data\Connection->getResource() /home/bitrix/www/bitrix/modules/main/classes/general/database.php:283
 from CAllDatabase->DoConnect() /home/bitrix/www/bitrix/modules/main/classes/mysql/database_mysqli.php:73
 from CDatabase->ForSql() /home/bitrix/www/bitrix/modules/main/classes/general/sqlwhere.php:713
----------------------------------------------------------

TIME: 0.002666 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SELECT 
	`abtest_a_btest`.`ID` AS `ID`,
	`abtest_a_btest`.`SITE_ID` AS `SITE_ID`,
	`abtest_a_btest`.`ACTIVE` AS `ACTIVE`,
	`abtest_a_btest`.`ENABLED` AS `ENABLED`,
	`abtest_a_btest`.`NAME` AS `NAME`,
	`abtest_a_btest`.`DESCR` AS `DESCR`,
	`abtest_a_btest`.`TEST_DATA` AS `TEST_DATA`,
	`abtest_a_btest`.`START_DATE` AS `START_DATE`,
	`abtest_a_btest`.`STOP_DATE` AS `STOP_DATE`,
	`abtest_a_btest`.`DURATION` AS `DURATION`,
	`abtest_a_btest`.`PORTION` AS `PORTION`,
	`abtest_a_btest`.`MIN_AMOUNT` AS `MIN_AMOUNT`,
	`abtest_a_btest`.`USER_ID` AS `USER_ID`,
	`abtest_a_btest`.`SORT` AS `SORT`
FROM `b_abtest` `abtest_a_btest` 

WHERE `abtest_a_btest`.`SITE_ID` = 'w3'
AND `abtest_a_btest`.`ACTIVE` = 'Y'
AND `abtest_a_btest`.`START_DATE` <= '2022-03-17 01:39:28'
ORDER BY `SORT` ASC
LIMIT 0, 1


 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/orm/query/query.php:3558
 from Bitrix\Main\ORM\Query\Query->query() /home/bitrix/www/bitrix/modules/main/lib/orm/query/query.php:952
 from Bitrix\Main\ORM\Query\Query->exec() /home/bitrix/www/bitrix/modules/main/lib/orm/data/datamanager.php:513
 from Bitrix\Main\ORM\Data\DataManager::getList() /home/bitrix/www/bitrix/modules/abtest/lib/helper.php:41
 from Bitrix\ABTest\Helper::getActiveTest() /home/bitrix/www/bitrix/modules/abtest/lib/helper.php:127
 from Bitrix\ABTest\Helper::getContext() /home/bitrix/www/bitrix/modules/abtest/lib/eventhandler.php:37
 from Bitrix\ABTest\EventHandler::onGetCurrentSiteTemplate()
 from call_user_func_array() /home/bitrix/www/bitrix/modules/main/lib/eventmanager.php:448
----------------------------------------------------------

TIME: 0.000279 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SELECT GET_LOCK('2dcab33c20aabfc9efab2b40eade80f1d876a3a5b5ef2e29184eba200ebedb0a', 0) as L

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/db/mysqlcommonconnection.php:251
 from Bitrix\Main\DB\MysqlCommonConnection->lock() /home/bitrix/www/bitrix/modules/main/classes/mysql/user_counter.php:523
 from CUserCounterPage::checkSendCounter() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3550
 from CAllMain::RunFinalActionsInternal() /home/bitrix/www/bitrix/modules/main/lib/application.php:285
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
 from CAllMain::FinalActions() /home/bitrix/www/bitrix/modules/main/include/epilog_after.php:58
 from require() /home/bitrix/www/bitrix/modules/main/include/epilog.php:3
----------------------------------------------------------

TIME: 7.3E-5 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G CONN: 5801

SELECT USER_ID FROM b_user_counter WHERE SENT='0' GROUP BY USER_ID LIMIT 100

 from CDatabaseMysql->Query() /home/bitrix/www/bitrix/modules/main/classes/mysql/user_counter.php:531
 from CUserCounterPage::checkSendCounter() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3550
 from CAllMain::RunFinalActionsInternal() /home/bitrix/www/bitrix/modules/main/lib/application.php:285
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
 from CAllMain::FinalActions() /home/bitrix/www/bitrix/modules/main/include/epilog_after.php:58
 from require() /home/bitrix/www/bitrix/modules/main/include/epilog.php:3
 from require_once() /home/bitrix/www/bitrix/footer.php:4
------------------------------------------------------------------

TIME: 0.000144 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SELECT RELEASE_LOCK('2dcab33c20aabfc9efab2b40eade80f1d876a3a5b5ef2e29184eba200ebedb0a') as L

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/db/mysqlcommonconnection.php:263
 from Bitrix\Main\DB\MysqlCommonConnection->unlock() /home/bitrix/www/bitrix/modules/main/classes/mysql/user_counter.php:601
 from CUserCounterPage::checkSendCounter() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3550
 from CAllMain::RunFinalActionsInternal() /home/bitrix/www/bitrix/modules/main/lib/application.php:285
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
 from CAllMain::FinalActions() /home/bitrix/www/bitrix/modules/main/include/epilog_after.php:58
 from require() /home/bitrix/www/bitrix/modules/main/include/epilog.php:3
----------------------------------------------------------

TIME: 0.000534 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SELECT 1 FROM b_messageservice_message WHERE SUCCESS_EXEC='N' AND (NEXT_EXEC < '2022-03-17 01:39:28' OR NEXT_EXEC IS NULL) LIMIT 1

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/messageservice/lib/queue.php:23
 from Bitrix\MessageService\Queue::hasMessages() /home/bitrix/www/bitrix/modules/messageservice/lib/queue.php:43
 from Bitrix\MessageService\Queue::run() /home/bitrix/www/bitrix/modules/main/classes/general/module.php:480
 from ExecuteModuleEventEx() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3560
 from CAllMain::RunFinalActionsInternal() /home/bitrix/www/bitrix/modules/main/lib/application.php:285
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
 from CAllMain::FinalActions() /home/bitrix/www/bitrix/modules/main/include/epilog_after.php:58
----------------------------------------------------------

TIME: 0.000308 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SET NAMES 'utf8'

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/db/connection.php:376
 from Bitrix\Main\DB\Connection->queryExecute() /home/bitrix/www/bitrix/php_interface/after_connect_d7.php:3
 from include() /home/bitrix/www/bitrix/modules/main/lib/db/connection.php:1016
 from Bitrix\Main\DB\Connection->afterConnected() /home/bitrix/www/bitrix/modules/main/lib/db/mysqliconnection.php:101
 from Bitrix\Main\DB\MysqliConnection->connectInternal() /home/bitrix/www/bitrix/modules/main/lib/data/connection.php:53
 from Bitrix\Main\Data\Connection->getResource() /home/bitrix/www/bitrix/modules/main/classes/general/database.php:283
 from CAllDatabase->DoConnect() /home/bitrix/www/bitrix/modules/main/classes/mysql/database_mysqli.php:73
 from CDatabase->ForSql() /home/bitrix/www/bitrix/modules/main/classes/general/sqlwhere.php:713
----------------------------------------------------------

TIME: 0.000165 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SET collation_connection = "utf8_unicode_ci"

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/db/connection.php:376
 from Bitrix\Main\DB\Connection->queryExecute() /home/bitrix/www/bitrix/php_interface/after_connect_d7.php:4
 from include() /home/bitrix/www/bitrix/modules/main/lib/db/connection.php:1016
 from Bitrix\Main\DB\Connection->afterConnected() /home/bitrix/www/bitrix/modules/main/lib/db/mysqliconnection.php:101
 from Bitrix\Main\DB\MysqliConnection->connectInternal() /home/bitrix/www/bitrix/modules/main/lib/data/connection.php:53
 from Bitrix\Main\Data\Connection->getResource() /home/bitrix/www/bitrix/modules/main/classes/general/database.php:283
 from CAllDatabase->DoConnect() /home/bitrix/www/bitrix/modules/main/classes/mysql/database_mysqli.php:73
 from CDatabase->ForSql() /home/bitrix/www/bitrix/modules/main/classes/general/sqlwhere.php:713
----------------------------------------------------------

TIME: 0.004348 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SELECT 
	`abtest_a_btest`.`ID` AS `ID`,
	`abtest_a_btest`.`SITE_ID` AS `SITE_ID`,
	`abtest_a_btest`.`ACTIVE` AS `ACTIVE`,
	`abtest_a_btest`.`ENABLED` AS `ENABLED`,
	`abtest_a_btest`.`NAME` AS `NAME`,
	`abtest_a_btest`.`DESCR` AS `DESCR`,
	`abtest_a_btest`.`TEST_DATA` AS `TEST_DATA`,
	`abtest_a_btest`.`START_DATE` AS `START_DATE`,
	`abtest_a_btest`.`STOP_DATE` AS `STOP_DATE`,
	`abtest_a_btest`.`DURATION` AS `DURATION`,
	`abtest_a_btest`.`PORTION` AS `PORTION`,
	`abtest_a_btest`.`MIN_AMOUNT` AS `MIN_AMOUNT`,
	`abtest_a_btest`.`USER_ID` AS `USER_ID`,
	`abtest_a_btest`.`SORT` AS `SORT`
FROM `b_abtest` `abtest_a_btest` 

WHERE `abtest_a_btest`.`SITE_ID` = 'w3'
AND `abtest_a_btest`.`ACTIVE` = 'Y'
AND `abtest_a_btest`.`START_DATE` <= '2022-03-17 01:40:16'
ORDER BY `SORT` ASC
LIMIT 0, 1


 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/orm/query/query.php:3558
 from Bitrix\Main\ORM\Query\Query->query() /home/bitrix/www/bitrix/modules/main/lib/orm/query/query.php:952
 from Bitrix\Main\ORM\Query\Query->exec() /home/bitrix/www/bitrix/modules/main/lib/orm/data/datamanager.php:513
 from Bitrix\Main\ORM\Data\DataManager::getList() /home/bitrix/www/bitrix/modules/abtest/lib/helper.php:41
 from Bitrix\ABTest\Helper::getActiveTest() /home/bitrix/www/bitrix/modules/abtest/lib/helper.php:127
 from Bitrix\ABTest\Helper::getContext() /home/bitrix/www/bitrix/modules/abtest/lib/eventhandler.php:37
 from Bitrix\ABTest\EventHandler::onGetCurrentSiteTemplate()
 from call_user_func_array() /home/bitrix/www/bitrix/modules/main/lib/eventmanager.php:448
----------------------------------------------------------

TIME: 0.000232 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G CONN: 5803

SELECT VALUE FROM b_option WHERE NAME='~PARAM_MAX_USERS' AND MODULE_ID='main' AND SITE_ID IS NULL

 from CDatabaseMysql->Query() /home/bitrix/www/bitrix/modules/main/include.php:509
 from require_once() /home/bitrix/www/bitrix/modules/main/include/prolog_before.php:14
 from require_once() /home/bitrix/www/bitrix/modules/main/include/prolog.php:10
 from require_once() /home/bitrix/www/bitrix/header.php:1
 from require() /home/bitrix/ext_www/thevalet.ru/index.php:3
--------------------------------------------------------------------

TIME: 0.001536 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SELECT GET_LOCK('2dcab33c20aabfc9efab2b40eade80f1d876a3a5b5ef2e29184eba200ebedb0a', 0) as L

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/db/mysqlcommonconnection.php:251
 from Bitrix\Main\DB\MysqlCommonConnection->lock() /home/bitrix/www/bitrix/modules/main/classes/mysql/user_counter.php:523
 from CUserCounterPage::checkSendCounter() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3550
 from CAllMain::RunFinalActionsInternal() /home/bitrix/www/bitrix/modules/main/lib/application.php:285
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
 from CAllMain::FinalActions() /home/bitrix/www/bitrix/modules/main/include/epilog_after.php:58
 from require() /home/bitrix/www/bitrix/modules/main/include/epilog.php:3
----------------------------------------------------------

TIME: 9.0E-5 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G CONN: 5803

SELECT USER_ID FROM b_user_counter WHERE SENT='0' GROUP BY USER_ID LIMIT 100

 from CDatabaseMysql->Query() /home/bitrix/www/bitrix/modules/main/classes/mysql/user_counter.php:531
 from CUserCounterPage::checkSendCounter() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3550
 from CAllMain::RunFinalActionsInternal() /home/bitrix/www/bitrix/modules/main/lib/application.php:285
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
 from CAllMain::FinalActions() /home/bitrix/www/bitrix/modules/main/include/epilog_after.php:58
 from require() /home/bitrix/www/bitrix/modules/main/include/epilog.php:3
 from require_once() /home/bitrix/www/bitrix/footer.php:4
------------------------------------------------------------------

TIME: 0.000163 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SELECT RELEASE_LOCK('2dcab33c20aabfc9efab2b40eade80f1d876a3a5b5ef2e29184eba200ebedb0a') as L

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/db/mysqlcommonconnection.php:263
 from Bitrix\Main\DB\MysqlCommonConnection->unlock() /home/bitrix/www/bitrix/modules/main/classes/mysql/user_counter.php:601
 from CUserCounterPage::checkSendCounter() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3550
 from CAllMain::RunFinalActionsInternal() /home/bitrix/www/bitrix/modules/main/lib/application.php:285
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
 from CAllMain::FinalActions() /home/bitrix/www/bitrix/modules/main/include/epilog_after.php:58
 from require() /home/bitrix/www/bitrix/modules/main/include/epilog.php:3
----------------------------------------------------------

TIME: 0.000517 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SELECT 1 FROM b_messageservice_message WHERE SUCCESS_EXEC='N' AND (NEXT_EXEC < '2022-03-17 01:40:16' OR NEXT_EXEC IS NULL) LIMIT 1

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/messageservice/lib/queue.php:23
 from Bitrix\MessageService\Queue::hasMessages() /home/bitrix/www/bitrix/modules/messageservice/lib/queue.php:43
 from Bitrix\MessageService\Queue::run() /home/bitrix/www/bitrix/modules/main/classes/general/module.php:480
 from ExecuteModuleEventEx() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3560
 from CAllMain::RunFinalActionsInternal() /home/bitrix/www/bitrix/modules/main/lib/application.php:285
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
 from CAllMain::FinalActions() /home/bitrix/www/bitrix/modules/main/include/epilog_after.php:58
----------------------------------------------------------

TIME: 0.000295 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SET NAMES 'utf8'

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/db/connection.php:376
 from Bitrix\Main\DB\Connection->queryExecute() /home/bitrix/www/bitrix/php_interface/after_connect_d7.php:3
 from include() /home/bitrix/www/bitrix/modules/main/lib/db/connection.php:1016
 from Bitrix\Main\DB\Connection->afterConnected() /home/bitrix/www/bitrix/modules/main/lib/db/mysqliconnection.php:101
 from Bitrix\Main\DB\MysqliConnection->connectInternal() /home/bitrix/www/bitrix/modules/main/lib/data/connection.php:53
 from Bitrix\Main\Data\Connection->getResource() /home/bitrix/www/bitrix/modules/main/classes/general/database.php:283
 from CAllDatabase->DoConnect() /home/bitrix/www/bitrix/modules/main/classes/mysql/database_mysqli.php:73
 from CDatabase->ForSql() /home/bitrix/www/bitrix/modules/main/classes/general/sqlwhere.php:713
----------------------------------------------------------

TIME: 0.000127 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SET collation_connection = "utf8_unicode_ci"

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/db/connection.php:376
 from Bitrix\Main\DB\Connection->queryExecute() /home/bitrix/www/bitrix/php_interface/after_connect_d7.php:4
 from include() /home/bitrix/www/bitrix/modules/main/lib/db/connection.php:1016
 from Bitrix\Main\DB\Connection->afterConnected() /home/bitrix/www/bitrix/modules/main/lib/db/mysqliconnection.php:101
 from Bitrix\Main\DB\MysqliConnection->connectInternal() /home/bitrix/www/bitrix/modules/main/lib/data/connection.php:53
 from Bitrix\Main\Data\Connection->getResource() /home/bitrix/www/bitrix/modules/main/classes/general/database.php:283
 from CAllDatabase->DoConnect() /home/bitrix/www/bitrix/modules/main/classes/mysql/database_mysqli.php:73
 from CDatabase->ForSql() /home/bitrix/www/bitrix/modules/main/classes/general/sqlwhere.php:713
----------------------------------------------------------

TIME: 0.002862 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SELECT 
	`abtest_a_btest`.`ID` AS `ID`,
	`abtest_a_btest`.`SITE_ID` AS `SITE_ID`,
	`abtest_a_btest`.`ACTIVE` AS `ACTIVE`,
	`abtest_a_btest`.`ENABLED` AS `ENABLED`,
	`abtest_a_btest`.`NAME` AS `NAME`,
	`abtest_a_btest`.`DESCR` AS `DESCR`,
	`abtest_a_btest`.`TEST_DATA` AS `TEST_DATA`,
	`abtest_a_btest`.`START_DATE` AS `START_DATE`,
	`abtest_a_btest`.`STOP_DATE` AS `STOP_DATE`,
	`abtest_a_btest`.`DURATION` AS `DURATION`,
	`abtest_a_btest`.`PORTION` AS `PORTION`,
	`abtest_a_btest`.`MIN_AMOUNT` AS `MIN_AMOUNT`,
	`abtest_a_btest`.`USER_ID` AS `USER_ID`,
	`abtest_a_btest`.`SORT` AS `SORT`
FROM `b_abtest` `abtest_a_btest` 

WHERE `abtest_a_btest`.`SITE_ID` = 'w3'
AND `abtest_a_btest`.`ACTIVE` = 'Y'
AND `abtest_a_btest`.`START_DATE` <= '2022-03-17 01:40:40'
ORDER BY `SORT` ASC
LIMIT 0, 1


 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/orm/query/query.php:3558
 from Bitrix\Main\ORM\Query\Query->query() /home/bitrix/www/bitrix/modules/main/lib/orm/query/query.php:952
 from Bitrix\Main\ORM\Query\Query->exec() /home/bitrix/www/bitrix/modules/main/lib/orm/data/datamanager.php:513
 from Bitrix\Main\ORM\Data\DataManager::getList() /home/bitrix/www/bitrix/modules/abtest/lib/helper.php:41
 from Bitrix\ABTest\Helper::getActiveTest() /home/bitrix/www/bitrix/modules/abtest/lib/helper.php:127
 from Bitrix\ABTest\Helper::getContext() /home/bitrix/www/bitrix/modules/abtest/lib/eventhandler.php:37
 from Bitrix\ABTest\EventHandler::onGetCurrentSiteTemplate()
 from call_user_func_array() /home/bitrix/www/bitrix/modules/main/lib/eventmanager.php:448
----------------------------------------------------------

TIME: 0.00024 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SELECT GET_LOCK('2dcab33c20aabfc9efab2b40eade80f1d876a3a5b5ef2e29184eba200ebedb0a', 0) as L

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/db/mysqlcommonconnection.php:251
 from Bitrix\Main\DB\MysqlCommonConnection->lock() /home/bitrix/www/bitrix/modules/main/classes/mysql/user_counter.php:523
 from CUserCounterPage::checkSendCounter() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3550
 from CAllMain::RunFinalActionsInternal() /home/bitrix/www/bitrix/modules/main/lib/application.php:285
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
 from CAllMain::FinalActions() /home/bitrix/www/bitrix/modules/main/include/epilog_after.php:58
 from require() /home/bitrix/www/bitrix/modules/main/include/epilog.php:3
---------------------------------------------------------

TIME: 7.9E-5 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G CONN: 5804

SELECT USER_ID FROM b_user_counter WHERE SENT='0' GROUP BY USER_ID LIMIT 100

 from CDatabaseMysql->Query() /home/bitrix/www/bitrix/modules/main/classes/mysql/user_counter.php:531
 from CUserCounterPage::checkSendCounter() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3550
 from CAllMain::RunFinalActionsInternal() /home/bitrix/www/bitrix/modules/main/lib/application.php:285
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
 from CAllMain::FinalActions() /home/bitrix/www/bitrix/modules/main/include/epilog_after.php:58
 from require() /home/bitrix/www/bitrix/modules/main/include/epilog.php:3
 from require_once() /home/bitrix/www/bitrix/footer.php:4
------------------------------------------------------------------

TIME: 0.000172 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SELECT RELEASE_LOCK('2dcab33c20aabfc9efab2b40eade80f1d876a3a5b5ef2e29184eba200ebedb0a') as L

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/main/lib/db/mysqlcommonconnection.php:263
 from Bitrix\Main\DB\MysqlCommonConnection->unlock() /home/bitrix/www/bitrix/modules/main/classes/mysql/user_counter.php:601
 from CUserCounterPage::checkSendCounter() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3550
 from CAllMain::RunFinalActionsInternal() /home/bitrix/www/bitrix/modules/main/lib/application.php:285
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
 from CAllMain::FinalActions() /home/bitrix/www/bitrix/modules/main/include/epilog_after.php:58
 from require() /home/bitrix/www/bitrix/modules/main/include/epilog.php:3
----------------------------------------------------------

TIME: 0.000492 SESSION: W4DrLqto6pxCt5nacJ8XZfruevbRpX5G 

SELECT 1 FROM b_messageservice_message WHERE SUCCESS_EXEC='N' AND (NEXT_EXEC < '2022-03-17 01:40:40' OR NEXT_EXEC IS NULL) LIMIT 1

 from Bitrix\Main\DB\Connection->query() /home/bitrix/www/bitrix/modules/messageservice/lib/queue.php:23
 from Bitrix\MessageService\Queue::hasMessages() /home/bitrix/www/bitrix/modules/messageservice/lib/queue.php:43
 from Bitrix\MessageService\Queue::run() /home/bitrix/www/bitrix/modules/main/classes/general/module.php:480
 from ExecuteModuleEventEx() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3560
 from CAllMain::RunFinalActionsInternal() /home/bitrix/www/bitrix/modules/main/lib/application.php:285
 from Bitrix\Main\Application->terminate() /home/bitrix/www/bitrix/modules/main/lib/application.php:261
 from Bitrix\Main\Application->end() /home/bitrix/www/bitrix/modules/main/classes/general/main.php:3526
 from CAllMain::FinalActions() /home/bitrix/www/bitrix/modules/main/include/epilog_after.php:58
----------------------------------------------------------
