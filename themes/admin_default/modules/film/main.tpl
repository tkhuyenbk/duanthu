<!-- BEGIN: main -->
	<form action="{NV_BASE_ADMINURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&amp;{NV_NAME_VARIABLE}={MODULE_NAME}&amp;{NV_OP_VARIABLE}={OP}" method="post">
		<table class="tab1">
			<tbody>
			<tr>
				<td class="right strong">Tiêu đề</td>
				<td><input class="w500" type="text" value="{DATA.title}" name="title" id="idtitle" maxlength="255" /></td>
			</tr>
			</tbody>
		</table>	
		<div style="text-align: center"><input name="submit" type="submit" value="{LANG.save}" /></div>
	</form>
<!-- END: main -->
