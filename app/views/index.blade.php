<!doctype html>
<html ng-app>
<head>
    <title>Made With Love Test</title>
</head>
<body>


    <section ng-controller="TasksController">
        <ul>
            <li ng-repeat="task in tasks">{{ task.name }}</li>
        </ul>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.27/angular.min.js"></script>
    <script src="/js/task.js"></script>
</body>
</html>