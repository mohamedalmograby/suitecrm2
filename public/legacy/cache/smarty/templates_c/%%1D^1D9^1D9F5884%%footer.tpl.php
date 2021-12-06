<?php /* Smarty version 2.6.31, created on 2021-12-06 11:59:17
         compiled from themes/suite8/tpls/footer.tpl */ ?>
</div>
</div>
<!-- END of container-fluid, pageContainer divs -->
<!-- END Footer Section -->
<?php echo '
    <script>
        SUGAR_callsInProgress++;
        SUGAR._ajax_hist_loaded = true;
        if (SUGAR.ajaxUI)
            YAHOO.util.Event.onContentReady(\'ajaxUI-history-field\', SUGAR.ajaxUI.firstLoad);

        $(function(){

            // fix for campaign wizard
            if($(\'#wizard\').length) {

                // footer fix
                var bodyHeight = $(\'body\').height();
                var contentHeight = $(\'#pagecontent\').height() + $(\'#wizard\').height();
                var fieldsetHeight = $(\'#pagecontent\').height() + $(\'#wizard fieldset\').height();
                var height = bodyHeight < contentHeight ? contentHeight : bodyHeight;
                if(fieldsetHeight > height) {
                    height = fieldsetHeight;
                }
                height += 50;
                $(\'#content\').css({
                    \'min-height\': height + \'px\'
                });

                // uploader fix
                $(\'#step1_uploader\').css({
                    position: \'relative\',
                    top: ($(\'#wizard\').height() - 90) + \'px\'
                });
            }
        });

    </script>
'; ?>

<div class="modal fade modal-generic" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="title-generic"><?php echo $this->_tpl_vars['APP']['LBL_GENERATE_PASSWORD_BUTTON_TITLE']; ?>
</h4>
            </div>
            <div class="modal-body">
                <div class="container-fluid">

                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" type="button" data-dismiss="modal"><?php echo $this->_tpl_vars['APP']['LBL_CANCEL']; ?>
</button>
                <button id="btn-generic" class="btn btn-danger" type="button"><?php echo $this->_tpl_vars['APP']['LBL_OK']; ?>
</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
</body>
</html>