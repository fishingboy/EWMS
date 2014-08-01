<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<title>單字管理系統</title>
<style>
#base  {margin: 0 auto;}
.form  {margin:0px; border: 1px solid #ccc; border-radius: 5px; padding: 5px; background: #EEE;}
.form .row        {}
.form .actions    {text-align: center;}
.form .row .left  {padding:5px; text-align: right;}
.form .row .right {padding:5px; width:800px; float:right;}
.clearfix         {zoom: 1;}
.clearfix:before  {content: ""; display: table;}
.clearfix:after   {content: ""; display: table; clear: both;}
</style>
</head>
<body>
<div id='base'>
    <div class='form_box'>
        <form id='fm' class='form' method='POST'>
            <hidden id='fm_Word_id' name='fm_Word_id' value='{id}'>
            <div class='row clearfix'>
                <div class='right'><input type='text' id='fm_word' name='fm_word' style='width:300px' value='{word}'></div>
                <div class='left'>單字:</div>
            </div>
            <div class='row clearfix'>
                <div class='right'><input type='text' id='fm_symbol' name='fm_symbol' style='width:300px' value='{symbol}'></div>
                <div class='left'>音標:</div>
            </div>
            <div class='row clearfix'>
                <div class='right'><input type='text' id='fm_type' name='fm_type' style='width:300px' value='{type}'></div>
                <div class='left'>詞性:</div>
            </div>
            <div class='row clearfix'>
                <div class='right'><input type='text' id='fm_mean' name='fm_mean' style='width:300px' value='{mean}'></div>
                <div class='left'>意思:</div>
            </div>
            <div class='row clearfix'>
                <div class='right'><input type='text' id='fm_en1' name='fm_en1' style='width:750px' value='{en1}'></div>
                <div class='left'>例句1:</div>
            </div>
            <div class='row clearfix'>
                <div class='right'><input type='text' id='fm_ch1' name='fm_ch1' style='width:750px' value='{ch1}'></div>
                <div class='left'>翻譯1:</div>
            </div>
            <div class='row clearfix'>
                <div class='right'><input type='text' id='fm_en2' name='fm_en2' style='width:750px' value='{en2}'></div>
                <div class='left'>例句2:</div>
            </div>
            <div class='row clearfix'>
                <div class='right'><input type='text' id='fm_ch2' name='fm_ch2' style='width:750px' value='{ch2}'></div>
                <div class='left'>翻譯2:</div>
            </div>
            <div class='actions'>
                <input type='submit' value='新增'>
                <input type='button' value='取消'>
            </div>
        </form>
    </div>
</div>
</body>
</html>
