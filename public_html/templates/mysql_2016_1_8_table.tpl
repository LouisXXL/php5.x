<!DOCTYPE html>


<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<title></title>
</head>
<body>
<table border="1">
{foreach from=$list item=row}
<tr>
<td>{$row.sno}</td>
<td>{$row.name}</td>
<td>{$row.chi}</td>
<td>{$row.eng}</td>
<td>{$row.math}</td>
</tr>
{/foreach}
</table>
</body>
</html>