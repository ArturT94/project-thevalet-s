<?
use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

Class mymode extends CModule
{
    var $MODULE_ID = "mymode";
    var $MODULE_VERSION;
    var $MODULE_VERSION_DATE;
    var $MODULE_NAME;
    var $MODULE_DESCRIPTION;
    var $MODULE_CSS;
    var $MODULE_GROUP_RIGHTS = "Y";

    public function __construct()
    {
        $arModuleVersion = array();

        include(__DIR__.'/version.php');

        $this->MODULE_VERSION = $arModuleVersion["VERSION"];
        $this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];

        $this->MODULE_NAME = "Мой модуль";
        $this->MODULE_DESCRIPTION = "Описание модуля";
    }


    function InstallDB($install_wizard = true)
    {
        RegisterModule("mymode");
        return true;
    }

    function UnInstallDB($arParams = Array())
    {
        UnRegisterModule("mymode");

        return true;
    }

    function InstallEvents()
    {
        return true;
    }

    function UnInstallEvents()
    {
        return true;
    }

    function InstallFiles()
    {
    }

    function UnInstallFiles()
    {
        return true;
    }

    function DoInstall()
    {
        $this->InstallFiles();
        $this->InstallDB(false);
    }

    function DoUninstall()
    {
        $this->UnInstallDB(false);
    }
}
?>