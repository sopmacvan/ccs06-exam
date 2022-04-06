<html lang="eng">
<head>
    <title>Enter Grades</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container-sm" style="width:40%">
    <h1>Enter their Grades</h1>
    <form action="/compute-grades" method="POST">
        <input type="hidden" name="student_1" value="{{$student_1}}">
        <input type="hidden" name="student_2" value="{{$student_2}}">
        <input type="hidden" name="student_3" value="{{$student_3}}">
        <input type="hidden" name="student_4" value="{{$student_4}}">
        <input type="hidden" name="student_5" value="{{$student_5}}">
        @csrf
        <div class="row input-group mb-3">
            <label>
                <span class="input-group-text"
                      id="basic-addon1">Student 1:&nbsp&nbsp <strong>{{$student_1}}</strong> </span>
            </label>
            <div class="col col-md-4">
                <label>Midterm Grade</label>
                <input class="form-control" required type="number" name="p1_attempt1">
            </div>
            <div class="col col-md-4">
                <label>Finals Grade</label>
                <input class="form-control" required type="number" name="p1_attempt2">
            </div>
        </div>


        <div class="row input-group mb-3">
            <label>
                <span class="input-group-text"
                      id="basic-addon1">Student 2:&nbsp&nbsp <strong>{{$student_2}}</strong> </span>
            </label>
            <div class="col col-md-4">
                <label>Midterm Grade</label>
                <input class="form-control" required type="number" name="p2_attempt1">
            </div>
            <div class="col col-md-4">
                <label>Finals Grade</label>
                <input class="form-control" required type="number" name="p2_attempt2">
            </div>
        </div>


        <div class="row input-group mb-3">
            <label>
                <span class="input-group-text"
                      id="basic-addon1">Student 3:&nbsp&nbsp <strong>{{$student_3}}</strong> </span>
            </label>
            <div class="col col-md-4">
                <label>Midterm Grade</label>
                <input class="form-control" required type="number" name="p3_attempt1">
            </div>
            <div class="col col-md-4">
                <label>Finals Grade</label>
                <input class="form-control" required type="number" name="p3_attempt2">
            </div>
        </div>


        <div class="row input-group mb-3">
            <label>
                <span class="input-group-text"
                      id="basic-addon1">Student 4:&nbsp&nbsp <strong>{{$student_4}}</strong> </span>
            </label>
            <div class="col col-md-4">
                <label>Midterm Grade</label>
                <input class="form-control" required type="number" name="p4_attempt1">
            </div>
            <div class="col col-md-4">
                <label>Finals Grade</label>
                <input class="form-control" required type="number" name="p4_attempt2">
            </div>
        </div>


        <div class="row input-group mb-3">
            <label>
                <span class="input-group-text"
                      id="basic-addon1">Student 5:&nbsp&nbsp <strong>{{$student_5}}</strong> </span>
            </label>
            <div class="col col-md-4">
                <label>Midterm Grade</label>
                <input class="form-control" required type="number" name="p5_attempt1">
            </div>
            <div class="col col-md-4">
                <label>Finals Grade</label>
                <input class="form-control" required type="number" name="p5_attempt2">
            </div>

        </div>
        <hr>
        <div class="row">
            <button class="btn btn-primary btn-lg">Submit</button>
        </div>
    </form>
</div>
</body>
</html>
