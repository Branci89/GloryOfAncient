<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="favicon.png" type="image/png" />
    <link rel="stylesheet" href="../themes/advanced/main.css" type="text/css" />
    <title>Notepad</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<style>
body{padding:5px; margin:5px;}
textarea { height:85%; width:100%;}
input {	width:auto; float:right;}
</style>
</head>
<!-- contacaratteri -->
<body class="main_body"><center>
<form name="counter_form">
<textarea id="counter_text" onKeyUp="countChar(this)" placeholder="Blocco Note"></textarea><br/>
<span id="charNum" style="font-size:12px;">0 Caratteri</span>
<input type="reset" value="Reset">
</form></center>
<script type="text/javascript">
function countChar(val) {
var len = val.value.length;
if (len == null) {
$('#charNum').text("0 Caratteri");} else {
$('#charNum').text(len+" Caratteri");
}};
</script>
</body>