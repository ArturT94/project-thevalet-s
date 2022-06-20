<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);

\Bitrix\Main\Page\Asset::getInstance()->addCss(
	'/bitrix/css/main/system.auth/flat/style.css'
);

if ($arResult['AUTHORIZED'])
{
	echo Loc::getMessage('MAIN_AUTH_FORM_SUCCESS');
	return;
}
?>
	<?if ($arResult['ERRORS']):?>
	<div class="alert alert-danger">
		<? foreach ($arResult['ERRORS'] as $error)
		{
			echo $error;
		}
		?>
	</div>
	<?endif;?>

	<?if ($arResult['AUTH_SERVICES']):?>
		<?$APPLICATION->IncludeComponent('bitrix:socserv.auth.form',
			'flat',
			array(
				'AUTH_SERVICES' => $arResult['AUTH_SERVICES'],
				'AUTH_URL' => $arResult['CURR_URI']
	   		),
			$component,
			array('HIDE_ICONS' => 'Y')
		);
		?>
	<?endif?>
<div class="auth__wrapper">
    <main class="main__auth">
        <section class="auth">
            <h2 class="auth__title">авторизация</h2>
            <p class="auth__desc">Введите Ваш номер телефона для авторизации</p>
            <form name="<?= $arResult['FORM_ID'];?>" method="post" target="_top" action="<?= POST_FORM_ACTION_URI;?> class="auth__form">
                <fieldset class="fieldset auth__phone">
                    <div class="select__wrapper">
                        <select class="input__field auth__country">
                            <option selected value="RU" class="auth__option">RU</option>
                        </select>
                    </div>
                    <input class="input__field auth__number" type="text"  name="<?= $arResult['FIELDS']['login'];?>" maxlength="255" id="auth-phone"
                           placeholder="+7 (999) 999 99 99">
                </fieldset>
                <input style="border: none; cursor: pointer" type="submit" name="<?= $arResult['FIELDS']['action'];?>" class="button auth__submit" type="submit" value="отправить код" />
                <p class="auth__agreement">Регистрируясь, Вы принимаете <a class="auth__link" href="#">условия
                        использования</a> и <a class="auth__link" href="#">политику конфиденциальности.</a></p>
		<?if ($arResult['CAPTCHA_CODE']):?>
			<input type="hidden" name="captcha_sid" value="<?= \htmlspecialcharsbx($arResult['CAPTCHA_CODE']);?>" />
			<div class="bx-authform-formgroup-container dbg_captha">
				<div class="bx-authform-label-container">
					<?= Loc::getMessage('MAIN_AUTH_FORM_FIELD_CAPTCHA');?>
				</div>
				<div class="bx-captcha"><img src="/bitrix/tools/captcha.php?captcha_sid=<?= \htmlspecialcharsbx($arResult['CAPTCHA_CODE']);?>" width="180" height="40" alt="CAPTCHA" /></div>
				<div class="bx-authform-input-container">
					<input type="text" name="captcha_word" maxlength="50" value="" autocomplete="off" />
				</div>
			</div>
		<?endif;?>

	</form>
        </section>
    </main>
</div>

<script type="text/javascript">
	<?if ($arResult['LAST_LOGIN'] != ''):?>
	try{document.<?= $arResult['FORM_ID'];?>.USER_PASSWORD.focus();}catch(e){}
	<?else:?>
	try{document.<?= $arResult['FORM_ID'];?>.USER_LOGIN.focus();}catch(e){}
	<?endif?>
</script>