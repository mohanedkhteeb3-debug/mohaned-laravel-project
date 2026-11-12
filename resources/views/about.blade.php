<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <h1>hello, <?php echo $name?></h1>
  <form action="about" method="post">
    <input type="text" name="name" id="name"><br>
    <select name="departments" id="departments">
        @foreach ($departments as $key=> $department)
 <option value="{{$key}}">{{$department}}</option>
        @endforeach

        <option value="2">Financial</option>
        <option value="3">Sales</option>
    </select><br>
    <input type="submit" value="send">
  </form>
</body>
</html>
