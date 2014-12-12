
function TasksController ($scope, $http) {

    /*$scope.tasks = [
        { name: 'Hej', completed: false },
        { name: 'Wabbane', completed: true }
    ];*/


    $http.get('/tasks').success(function(tasks){

        $scope.tasks = tasks;

    });


    $scope.createTask = function() {

        var newTask = { name: $scope.newTask };

        $scope.tasks.push(newTask);
        $http.post('/tasks');

    }


}