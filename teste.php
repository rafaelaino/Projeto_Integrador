<html>
<head>
<title></title>
</head>
<body>
<form method="GET" action="">
    <select name="filtroSelect">
        <option value="a">A</option>
        <option value="b">B</option>
        <option value="c">C</option>
    </select>
<label for="a">a</label><input type="radio" id="a" name="filtro" value="a"/>
<label for="b">b</label><input type="radio" id="b" name="filtro" value="b"/>
<label for="c">c</label><input type="radio" id="c" name="filtro" value="c"/>
 
<input type="submit" value="filtrar"/>
</form>
 
<?php 
if(isset($_GET['filtroSelect'])){
    echo $_GET['filtroSelect'];
}
if(isset($_GET['filtro'])){
    echo $_GET['filtro'];
}
?> 
</body></html>