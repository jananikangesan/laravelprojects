<html>
<head>
<title>login</title>
</head>
<body>
<form method="post" action="{{ url('/checklogin')}}">
{{}}
<div>
<lable for="email">email Id:</label>
<input type="email" class="from-controll" name="email"/>
</div>
<div>
<lable for="password">password:</label>
<input type="password" class="from-controll" name="password"/>
</div>
<div>
<button type="submit" class="btn btn-primary-outline ">login</button>
</div>
</form>
</body>
</html>