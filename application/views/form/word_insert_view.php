<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<title>單字管理系統</title>
<style>
#base {margin: 0 auto;}
.form  {margin:0px; border: 1px solid #ccc; border-radius: 5px; padding: 5px;}
.form .row        {}
.form .actions    {text-align: center;}
.form .row .left  {padding:5px; text-align: right;}
.form .row .right {padding:5px; width:800px; float:right;}

.clearfix        {zoom: 1;}
.clearfix:before {content: ""; display: table;}
.clearfix:after  {content: ""; display: table; clear: both;}

</style>
</head>
<body>
<div id='base'>
	<form id='fm' class='form'>
        <div class='row clearfix'>
            <div class='right'><input type='text' id='fm_word' name='fm_word' style='width:300px'></div>
            <div class='left'>單字</div>
        </div>
		<div class='row clearfix'>
			<div class='right'><input type='text' id='fm_symbol' name='fm_symbol' style='width:300px'></div>
			<div class='left'>音標</div>
		</div>
        <div class='actions'>
            <input type='submit' value='新增'>
            <input type='button' value='取消'>
        </div>
	</form>
</div>
</body>
</html>