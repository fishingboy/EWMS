<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<title>單字管理系統</title>
<style>
#base {width:960px; margin: 0 auto;}
#word_list {border: 1px solid #ccc; padding: 5px;}
</style>
</head>
<body>
<div id='base'>
	<input type='button' value='新增單字'>
	<input type='button' value='匯入單字'>
	<input type='button' value='匯出單字'>
	<div id='word_list'>
		{list}	
		<div>
			<div>{word} [{symbol}] {word_type} {meaning}</div>
		</div>
		{/list}
	<div>
</div>
</body>
</html>