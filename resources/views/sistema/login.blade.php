<html>
<body>
<h1>Inicio de Sesion</h1>
<br>
<form action = "{{route('iniciasesion')}}" method= "POST">
{{csrf_field()}}
Teclea Usuario <input type = 'text' name = 'usuario'>
<br>
Teclea Password<input type = 'text' name ='password'>
<br>
<input type ='submit' value = 'Inicia Sesion'>
</form>
</body>
</html>