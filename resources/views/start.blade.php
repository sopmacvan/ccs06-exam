<html>
<head>

</head>
<body>
<div>
    <h1>Enter 5 student names</h1>
    <form action="/enter-grades" method="POST">
        @csrf
        @for($i = 1; $i <= 5; $i++)
            <label> Student {{$i}}</label> Name:
            <input required type="text" name="name_{{$i}}">
        @endfor
        <hr>
        <button>Submit</button>
    </form>
</div>
</body>
</html>
