<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cursos</title>

  </head>
  <body>
      <h1>Cursos</h1>
      <ul class="list-group">
        @foreach ($courses as $course)

          <li class="list-group-item">
            <a href="/cursos/{{$course->id}}">{{$course->name}}</a>
          </li>

        @endforeach
      </ul>
  </body>
</html>
