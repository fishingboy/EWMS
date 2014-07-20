<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<title>單字管理系統</title>
<script type="text/javascript" src="sys/js/jquery.js"></script>
<script type="text/javascript" src="sys/js/jquery.fancybox.js"></script>
<style type="text/css">@import URL("sys/css/main.css");</style>
<style type="text/css">@import URL("sys/css/jquery.fancybox.css");</style>
<script>
var page = 
{
	init : function() 
	{
        // 新增工作
        $('#fm_add').bind('click', this, this.add);
	},

	add :function() 
	{
        $.fancybox(
        {
            'type'      : 'iframe',
            'href'      : 'form/word_editor/add',
            'width'     : 900,
            'height'    : 500,
            'autoSize'  : false
        });
	}	
}

$(function() 
{
	page.init();
});
</script>
</head>
<body>
<div id='base'>
	<input id='fm_add'    class='button' type='button' value='新增單字'>
	<input id='fm_export' class='button' type='button' value='匯入單字'>
	<input id='fm_import' class='button' type='button' value='匯出單字'>
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