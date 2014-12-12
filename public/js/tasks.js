
function TasksController ($scope, $http) {


    $scope.getTasks = function() {
        $http.get('/tasks').success(function(tasks){

            $scope.tasks = tasks;

        });
    }


    $scope.createTask = function() {

        var newTask = { name: $scope.newTask };

        $scope.tasks.push(newTask);
        $http.post('/tasks', newTask);

        $scope.newTask = null;

    }


    $scope.updateTask = function(task) {

        $http.get('/tasks/' + task.id).success(function (t) {

            return $http({
                method: 'PUT',
                url: 'tasks/' + t.id,
                data: {name: t.name, completed: task.completed}
            });
        })

    }


    $scope.deleteTask = function(task) {

        $http({
            method: 'DELETE',
            url: 'tasks/' + task.id
        }).success(function(){

            $scope.getTasks();

        });

    }

    $scope.getTasks();

}