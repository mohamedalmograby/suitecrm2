<?php /* Smarty version 2.6.31, created on 2021-12-06 11:59:17
         compiled from themes/suite8/tpls/header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'themes/suite8/tpls/header.tpl', 63, false),)), $this); ?>
<?php if (file_exists ( 'custom/themes/suite8/tpls/_head.tpl' )): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "custom/themes/suite8/tpls/_head.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "themes/suite8/tpls/_head.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>
<body onMouseOut="closeMenus();">

<?php echo '
<input id=\'ajaxUI-history-field\' type=\'hidden\'>
<script type=\'text/javascript\'>
    if (SUGAR.ajaxUI && !SUGAR.ajaxUI.hist_loaded) {
        YAHOO.util.History.register(\'ajaxUILoc\', "", SUGAR.ajaxUI.go);
        '; ?>
<?php if ($_REQUEST['module'] != 'ModuleBuilder'): ?>        YAHOO.util.History.initialize("ajaxUI-history-field", "ajaxUI-history-iframe");
        <?php endif; ?><?php echo '
    }
</script>
'; ?>

<!-- Start of page content -->
<?php if ($this->_tpl_vars['AUTHENTICATED']): ?>
<div id="bootstrap-container">
    <div id="content" class="content">
        <div id="pagecontent" class="pagecontent view-module-<?php echo ((is_array($_tmp=@$_REQUEST['module'])) ? $this->_run_mod_handler('default', true, $_tmp, 'default') : smarty_modifier_default($_tmp, 'default')); ?>
 view-action-<?php echo ((is_array($_tmp=@$_REQUEST['action'])) ? $this->_run_mod_handler('default', true, $_tmp, 'default') : smarty_modifier_default($_tmp, 'default')); ?>
">
<?php endif; ?>