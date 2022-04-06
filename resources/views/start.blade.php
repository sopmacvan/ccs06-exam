<html>
<head>
    <title>Begin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container-sm" style="width:30%">
    <h1>Enter 5 student names</h1>
    <form action="/enter-grades" method="POST">
        @csrf
        @for($i = 1; $i <= 5; $i++)
            <div class="row input-group mb-3" >
                <span class="input-group-text" id="basic-addon1">Student {{$i}}</span>
                <input class="form-control" required type="text" name="name_{{$i}}" placeholder="Enter name here">
            </div>
        @endfor
        <hr>
        <div class="row">
            <button class="btn btn-primary btn-lg">Submit</button>
        </div>
    </form>
</div>
</body>
</html>
