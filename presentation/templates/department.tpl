{* department.tpl *}
{load_presentation_object filename="department" assign="obj"}
<h1 class="title">{$obj->mName}</h1>
<p class="description">{$obj->mDescription}</p>
{*{include file="../../presentation/templates/products_list.tpl"}*}