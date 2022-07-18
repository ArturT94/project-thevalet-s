<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
if (CModule::IncludeModule("iblock")) ; ?>
<link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/css/history.css">
<div class="app__window garage-block">
    <div class="conteiner">
        <div class="global__mobile__block">
            <div class="history__block">ИСТОРИЯ ЗАКАЗОВ</div>
            <?php
            $histories = CIBlockElement::GetList(["SORT" => "ASC"], ['IBLOCK_ID' => 10], false, false);
            while ($ob = $histories->GetNextElement()):
                $arProps = $ob->GetProperties();
                $userId = CUser::GetID();
                if ($userId === $arProps['KLIENT']['VALUE']): ?>
                    <div class="elements__of__history">
                        <div class="elements__of__history2">
                            <?php
                            $arr = [
                                'ЯНВАРЯ',
                                'ФЕВРАЛЯ',
                                'МАРТА',
                                'АПРЕЛЯ',
                                'МАЯ',
                                'ИЮНЯ',
                                'ИЮЛЯ',
                                'АВГУСТА',
                                'СЕНТЯБРЯ',
                                'ОКТЯБРЯ',
                                'НОЯБРЯ',
                                'ДЕКАБРЯ'
                            ];
                            $time = explode('.', $arProps['VREMYA_SOZDANIYA_ZAKAZA']['VALUE'], 3);
                            $time[1] = $arr[$time[1]-1];
                            $time = implode(' ', $time);
                            ?>
                            <div class="data__time"><?= $time ?></div>
                            <?php if (!empty($arProps['SUMMA_ZAKAZA']['VALUE'])): ?>
                                <div class="summa"><?= $arProps['SUMMA_ZAKAZA']['VALUE'] ?> Р</div>
                            <?php endif; ?>
                        </div>
                        <div class="elements__of__history2">
                            <div class="data__time_services">
                                <?php foreach ($arProps['USLUGI']['VALUE'] as $val):
                                    $service = CIBlockElement::GetByID($val);
                                    if ($resultService = $service->GetNext()): ?>
                                        <div class="data__time"><?php echo $resultService['NAME']; ?></div>
                                    <?php endif;
                                endforeach; ?>
                            </div>
                            <div class="summa check">ЧЕК</div>
                        </div>
                        <div class="address">Г. МОСКВА, УЛ. АРБАТ, ДОМ 8</div>
                        <!--<button class="amenities__button2" type="button">Повторить</button>-->
                    </div>
                <?php endif; ?>
            <?php endwhile; ?>
        </div>
    </div>
</div>