<!doctype html>
<html ng-app>
<head>
    <title>Made With Love Test</title>

    <style>
        html,body {
            margin: 0;
            padding: 0;
            font-family: Helvetica Neue, Helvetica, Arial;
        }
        .container {
            width: 400px;
            margin: 0 auto;
        }

        h1, small {
            text-align: center;
            display: block;
            margin-bottom: 20px;
        }

        .completed {
            text-decoration: line-through;
            opacity: .25;
        }

        .textfield, .btn {
            width: 80%;
            margin: 5px 10%;
        }
        .textfield {
            height: 24px;
            line-height: 24px;
            font-size: 16px;
            border: none;
            border-bottom: 1px dashed #f7e1b5;
        }
        .btn {
            background: #0088CC;
            height: 30px;
            display: block;
            border: none;
            color: #ffffff;
            cursor: pointer;
        }

        ul {
            list-style: none;
        }

        @media (max-width: 450px) {
            .container {
                width: 100%;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <header>
            <h1>Made With Love Test</h1>
            <small>Hack done by Jimmie Johansson</small>
        </header>


        <section ng-controller="TasksController">
            <form ng-submit="createTask()">
                <{ Form::text('name', null, ['ng-model' => 'newTask', 'placeholder' => 'Add new task', 'class' => 'textfield']) }>
                <{ Form::submit('Create new task', ['class' => 'btn']) }>
            </form>
            <ul>
                <li ng-repeat="task in tasks">
                    <input type="checkbox" ng-model="task.completed" data-task-id="{{ task.id }}" ng-click="updateTask(task)">
                    <span class="{{ task.completed ? 'completed' : '' }}">{{ task.name }} </span>
                </li>
            </ul>
        </section>
    </div>

    <{ Form::open(['action' => 'tasks.store']) }>
        <{ Form::text('name', null, ['ng-model' => 'newTask', 'placeholder' => 'Add new task', 'class' => 'textfield']) }>
        <{ Form::submit('Create new task', ['class' => 'btn']) }>
    <{ Form::close() }>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.27/angular.min.js"></script>
    <script src="/js/tasks.js"></script>

</body>
</html>