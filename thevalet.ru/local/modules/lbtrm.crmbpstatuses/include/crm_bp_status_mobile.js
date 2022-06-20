function add_bp_statuses(){
    $(".mobile-grid-entity").prepend('<div class="bp_lbtrm_statuses_container" style="display: none;"></div>');
}

function confirmaction (action_text, action_name) {
    crmBPAction = new BX.PopupWindow('lbtrm_crmbp_action_confirm', '', {
        autoHide: false,
        titleBar: {
            content: BX.create("span", {
                html: BX.message("LBTRM_CRMBPSTATUS_TITLE"),
                'props': {'className': 'popup-window-titlebar-text'}
            })
        },
        offsetTop: 1,
        lightShadow: true,
        closeIcon: false,
        closeByEsc: false,
        overlay: true,
        buttons: [
            new BX.PopupWindowButton({
                text: BX.message("LBTRM_CRMBPSTATUS_DIALOG_Y"),
                className: "popup-window-button-accept",
                events: {
                    click: function () {
                        $('#bp-action-' + action_name).submit();
                    }
                }
            }),
            new BX.PopupWindowButton({
                text: BX.message("LBTRM_CRMBPSTATUS_DIALOG_CANCEL"),
                className: "webform-button-link-cancel",
                events: {
                    click: function () {
                        this.popupWindow.destroy(); // закрытие окна
                    }
                }
            })
        ]
    });

    crmBPAction.setContent(action_text+'?');
    crmBPAction.show();
}

BX.ready(function() {
    add_bp_statuses();

    var post = {};
    post['id'] = BX.message("CRMBPREPORTS_ITEM_ID");
    post['type'] = BX.message("CRMBPREPORTS_ITEM_TYPE");
    post['action'] = "show";

    BX.ajax.post(
        BX.message("CRMBPREPORTS_AJAX_URL"),
        post,
        function (data) {
            $(".bp_lbtrm_statuses_container").html(data);
            $(".bp_lbtrm_statuses_container").show();
        }
    );

});