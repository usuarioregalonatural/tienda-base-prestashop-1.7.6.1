<?php
/* Smarty version 3.1.33, created on 2019-11-17 20:26:31
  from '/var/www/html/admin23874crkw/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd19ee7a21425_13786150',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36507b1ce97980c052ee43739650a02bb79dbbfd' => 
    array (
      0 => '/var/www/html/admin23874crkw/themes/default/template/content.tpl',
      1 => 1566837319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd19ee7a21425_13786150 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
