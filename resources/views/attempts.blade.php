<html lang="eng">
<head>

</head>
<body>
<div>
    <h1>Student Grades</h1>
    <form action="/compute-grades" method="POST">
        <input type="hidden" name="student_1" value="{{$student_1}}">
        <input type="hidden" name="student_2" value="{{$student_2}}">
        <input type="hidden" name="student_3" value="{{$student_3}}">
        <input type="hidden" name="student_4" value="{{$student_4}}">
        <input type="hidden" name="student_5" value="{{$student_5}}">
        @csrf
        <label>Student: <strong>{{$student_1}}</strong></label>
        <label>Midterm Grade</label>
        <input required type="number" name="p1_attempt1">
        <label>Student: <strong>{{$student_1}}</strong></label>
        <label>Finals Grade</label>
        <input required type="number" name="p1_attempt2">
        <br><br>

        <label>Student: <strong>{{$student_2}}</strong></label>
        <label>Midterm Grade</label>
        <input required type="number" name="p1_attempt1">
        <label>Student: <strong>{{$student_2}}</strong></label>
        <label>Finals Grade</label>
        <input required type="number" name="p1_attempt2">
        <br><br>

        <label>Student: <strong>{{$student_3}}</strong></label>
        <label>Midterm Grade</label>
        <input required type="number" name="p1_attempt1">
        <label>Student: <strong>{{$student_3}}</strong></label>
        <label>Finals Grade</label>
        <input required type="number" name="p1_attempt2">
        <br><br>

        <label>Student: <strong>{{$student_4}}</strong></label>
        <label>Midterm Grade</label>
        <input required type="number" name="p1_attempt1">
        <label>Student: <strong>{{$student_4}}</strong></label>
        <label>Finals Grade</label>
        <input required type="number" name="p1_attempt2">
        <br><br>

        <label>Student: <strong>{{$student_5}}</strong></label>
        <label>Midterm Grade</label>
        <input required type="number" name="p1_attempt1">
        <label>Student: <strong>{{$student_5}}</strong></label>
        <label>Finals Grade</label>
        <input required type="number" name="p1_attempt2">
        <button>Compute Average Score</button>
    </form>
</div>
</body>
</html>
