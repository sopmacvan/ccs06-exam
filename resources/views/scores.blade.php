<html>
<head>
    <title>Compute Grades</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
    </style>
</head>
<body>
<div class="container-xxl">
    <h1>Students Average Score</h1>
    <table class="table table-info table-striped table-bordered table-hover">
        <thead class="table-dark">
        <tr>
            <th>Student no.</th>
            <th scope="col">Student Name</th>
            <th scope="col">Midterm Grade</th>
            <th scope="col">Finals Grade</th>
            <th scope="col">Average Score</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>{{$student_1}}</td>
            <td>{{$p1_attempt1}}</td>
            <td>{{$p1_attempt2}}</td>
            <td>{{$st1_average}}</td>
        </tr>


        <tr>
            <th scope="row">2</th>
            <td>{{$student_2}}</td>
            <td>{{$p2_attempt1}}</td>
            <td>{{$p2_attempt2}}</td>
            <td>{{$st2_average}}</td>
        </tr>


        <tr>
            <th scope="row">3</th>
            <td>{{$student_3}}</td>
            <td>{{$p3_attempt1}}</td>
            <td>{{$p3_attempt2}}</td>
            <td>{{$st3_average}}</td>
        </tr>


        <tr>
            <th scope="row">4</th>
            <td>{{$student_4}}</td>
            <td>{{$p4_attempt1}}</td>
            <td>{{$p4_attempt2}}</td>
            <td>{{$st4_average}}</td>
        </tr>

        <tr>
            <th scope="row">5</th>
            <td>{{$student_5}}</td>
            <td>{{$p5_attempt1}}</td>
            <td>{{$p5_attempt2}}</td>
            <td>{{$st5_average}}</td>
        </tr>

        </tbody>
    </table>
</div>
</body>
</html>
