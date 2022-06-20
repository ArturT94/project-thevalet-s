<footer>
      <div class="desktop flex-row center">
        <div class="flex-row">
          <div class="flex-row center">
              <?$APPLICATION->IncludeComponent(
                  "bitrix:main.include",
                  ".default",
                  Array(
                      "AREA_FILE_SHOW" => "file",
                      "AREA_FILE_SUFFIX" => "inc",
                      "EDIT_TEMPLATE" => "",
                      "PATH" => "/include/footer_logo.php"
                  )
              );?>
              </div>
          <div class="flex-col">
            <div class="footer-info flex-col">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    ".default",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/footer_phone.php"
                    )
                );?>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    ".default",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/footer_email.php"
                    )
                );?>
              <!--.lang.flex-row-->
              <!--    a Rus-->
              <!--    a(href='#') Eng-->
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    ".default",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/footer_link.php"
                    )
                );?>
              <!-- <a href="/faq.php">Часто задаваемые вопросы</a> -->
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    ".default",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/footer_prava.php"
                    )
                );?>
            </div>
          </div>
        </div>
        <div class="flex-col">
          <div class="payment flex-row">
              <?$APPLICATION->IncludeComponent(
                  "bitrix:main.include",
                  ".default",
                  Array(
                      "AREA_FILE_SHOW" => "file",
                      "AREA_FILE_SUFFIX" => "inc",
                      "EDIT_TEMPLATE" => "",
                      "PATH" => "/include/footer_payment.php"
                  )
              );?>
          </div>
        </div>
      </div>
      <div class="mobile flex-row">
          <?$APPLICATION->IncludeComponent(
              "bitrix:main.include",
              ".default",
              Array(
                  "AREA_FILE_SHOW" => "file",
                  "AREA_FILE_SUFFIX" => "inc",
                  "EDIT_TEMPLATE" => "",
                  "PATH" => "/include/footer_mobile_phone.php"
              )
          );?>
        <div class="footer-info flex-col">
          <!--.lang.flex-row-->
          <!--    a Rus-->
          <!--    a(href='#') Eng-->
          <!-- <a class="link" href="/faq.php">Часто задаваемые вопросы</a> -->
            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                ".default",
                Array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => "/include/footer_mobile_link.php"
                )
            );?>
        </div>
        <div class="third flex-col">
            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                ".default",
                Array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => "/include/footer_mobile_prava.php"
                )
            );?>
        </div>
        <div class="payment flex-row">
            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                ".default",
                Array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => "/include/footer_mobile_visa.php"
                )
            );?>

        </div>
      </div>
    </footer>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/lib/jquery.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!--    <script src="--><?//=SITE_TEMPLATE_PATH?><!--/js/jquery.maskedinput.min.js"></script>-->
<script src="<?=SITE_TEMPLATE_PATH?>/js/dist/jquery.inputmask.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/lib/swiper-bundle.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/lib.min.js"></script>
<script>
    $(document).ready(function(){
        $("#phone").inputmask({"mask": "+7(999) 999-9999"}); //specifying options
    });
</script>
<!--    <script>-->
<!--      $(document).ready(function(){-->
<!--      $("#phone").mask("+7 (999) 999-99-99");-->
<!--      });-->
<!--    </script>-->

  </body>
</html>