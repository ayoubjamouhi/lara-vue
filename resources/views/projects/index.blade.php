<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    index
    @foreach($projects as $project)
        <p>{{$project->name}}</p>
        <ul>
            @foreach($project->users as $user)
            <li style="color: #4fcc90">{{$user->name}}</li>
        @endforeach
        </ul>
    @endforeach
    @can('project_store')
        <a href="/projects/create">Create</a>
    @endcan
</body>
</html>
