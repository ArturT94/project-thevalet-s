<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
  die();
}

use \Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

\Bitrix\Main\Page\Asset::getInstance()->addCss(
  '/bitrix/css/main/system.auth/flat/style.css'
);

if ($arResult['AUTHORIZED']) {
  echo Loc::getMessage('MAIN_AUTH_FORM_SUCCESS');
  return;
}
?>

<div class="auth__wrapper">
  <main class="main__auth">

    <? if ($arResult['ERRORS']) : ?>
      <div class="alert alert-danger">
        <? foreach ($arResult['ERRORS'] as $error) {
          echo $error;
        }
        ?>
      </div>
    <? endif; ?>

    <section class="auth">
      <h2 class="auth__title">авторизация</h2>

      <? if ($arResult['AUTH_SERVICES']) : ?>
        <? $APPLICATION->IncludeComponent(
          'bitrix:socserv.auth.form',
          'flat',
          array(
            'AUTH_SERVICES' => $arResult['AUTH_SERVICES'],
            'AUTH_URL' => $arResult['CURR_URI']
          ),
          $component,
          array('HIDE_ICONS' => 'Y')
        );
        ?>
        <hr class="bxe-light">
      <? endif ?>

      <form class="auth__form" name="<?= $arResult['FORM_ID']; ?>" method="post" target="_top" action="<?= POST_FORM_ACTION_URI; ?>">
        <fieldset class="fieldset auth__phone">
          <input placeholder="Логин" class="input__field auth__number" type="text" id="auth-phone" name="<?= $arResult['FIELDS']['login']; ?>" maxlength="255" value="<?= \htmlspecialcharsbx($arResult['LAST_LOGIN']); ?>"><br>
          <? if ($arResult['SECURE_AUTH']) : ?>
            <div class="bx-authform-psw-protected" id="bx_auth_secure" style="display:none">
              <div class="bx-authform-psw-protected-desc"><span></span>
                <?= Loc::getMessage('MAIN_AUTH_FORM_SECURE_NOTE'); ?>
              </div>
            </div>
            <script type="text/javascript">
              document.getElementById('bx_auth_secure').style.display = '';
            </script>
          <? endif ?>
          <input placeholder="Пароль" class="input__field auth__number" type="password" name="<?= $arResult['FIELDS']['password']; ?>" maxlength="255" autocomplete="off" />
        </fieldset>

        <? if ($arResult['CAPTCHA_CODE']) : ?>
          <input type="hidden" name="captcha_sid" value="<?= \htmlspecialcharsbx($arResult['CAPTCHA_CODE']); ?>" />
          <div class="bx-authform-formgroup-container dbg_captha">
            <div class="bx-authform-label-container">
              <?= Loc::getMessage('MAIN_AUTH_FORM_FIELD_CAPTCHA'); ?>
            </div>
            <div class="bx-captcha"><img src="/bitrix/tools/captcha.php?captcha_sid=<?= \htmlspecialcharsbx($arResult['CAPTCHA_CODE']); ?>" width="180" height="40" alt="CAPTCHA" /></div>
            <div class="bx-authform-input-container">
              <input type="text" name="captcha_word" maxlength="50" value="" autocomplete="off" />
            </div>
          </div>
        <? endif; ?>

        <? if ($arResult['STORE_PASSWORD'] == 'Y') : ?>
          <div class="bx-authform-formgroup-container">
            <div class="checkbox">
              <label class="bx-filter-param-label">
                <input type="checkbox" id="USER_REMEMBER" name="<?= $arResult['FIELDS']['remember']; ?>" value="Y" />
                <span class="bx-filter-param-text"><?= Loc::getMessage('MAIN_AUTH_FORM_FIELD_REMEMBER'); ?></span>
              </label>
            </div>
          </div>
        <? endif ?>
        <button class="button auth__submit" type="submit" name="<?= $arResult['FIELDS']['action']; ?>" value="<?= Loc::getMessage('MAIN_AUTH_FORM_FIELD_SUBMIT'); ?>">далее</button>
        <p class="auth__agreement">Регистрируясь, Вы принимаете <a class="auth__link" href="#">условия
            использования</a> и <a class="auth__link" href="#">политику конфиденциальности.</a></p>

        <? if ($arResult['AUTH_FORGOT_PASSWORD_URL'] || $arResult['AUTH_REGISTER_URL']) : ?>
          <hr class="bxe-light">
          <noindex>
            <? if ($arResult['AUTH_FORGOT_PASSWORD_URL']) : ?>
              <div class="bx-authform-link-container">
                <a href="<?= $arResult['AUTH_FORGOT_PASSWORD_URL']; ?>" rel="nofollow">
                  <?= Loc::getMessage('MAIN_AUTH_FORM_URL_FORGOT_PASSWORD'); ?>
                </a>
              </div>
            <? endif; ?>
            <? if ($arResult['AUTH_REGISTER_URL']) : ?>
              <div class="bx-authform-link-container">
                <a href="<?= $arResult['AUTH_REGISTER_URL']; ?>" rel="nofollow">
                  <?= Loc::getMessage('MAIN_AUTH_FORM_URL_REGISTER_URL'); ?>
                </a>
              </div>
            <? endif; ?>
          </noindex>
        <? endif; ?>

      </form>
    </section>
  </main>
</div>
</div>
<script type="text/javascript">
  <? if ($arResult['LAST_LOGIN'] != '') : ?>
    try {
      document.<?= $arResult['FORM_ID']; ?>.USER_PASSWORD.focus();
    } catch (e) {}
  <? else : ?>
    try {
      document.<?= $arResult['FORM_ID']; ?>.USER_LOGIN.focus();
    } catch (e) {}
  <? endif ?>
</script>