<?php
/* Smarty version 3.1.28, created on 2016-04-24 13:45:32
  from "/var/www/html/estruturaMVC/view/test.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_571cf82cf3da90_86330254',
  'file_dependency' => 
  array (
    'f84315967e3f33732ead77c07740cfdbb6e3550a' => 
    array (
      0 => '/var/www/html/estruturaMVC/view/test.html',
      1 => 1461516331,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:inicio.html' => 1,
  ),
),false)) {
function content_571cf82cf3da90_86330254 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:inicio.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<table>
    <tr>
        <td>Nome</td>
        <td>Açoes</td>
    </tr>
    <?php
$_from = $_smarty_tpl->tpl_vars['lista']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_row_0_saved_item = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$__foreach_row_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_row_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$__foreach_row_0_saved_local_item = $_smarty_tpl->tpl_vars['row'];
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['nome'];?>
</td>
        <td>Editar | Excluir</td>
    </tr>
    <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_local_item;
}
}
if ($__foreach_row_0_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_item;
}
?>
</table>

<?php }
}
