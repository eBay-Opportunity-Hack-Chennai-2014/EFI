var efi = angular.module("efi", []);

efi.controller('masterCtrl', ['$scope', '$http', function($scope, $http) {

    $scope.posts = [
        {
            id: 1,
            title: "This is a title of the post, it can be larger like this",
            desc: "This is a description of the post, it says something about the post, which is answered by a trusted user.",
            likes: 15,
            comments: 5,
            shares: 51,
            created: 1413068813
        }
    ];

    $http.get('getposts.php').success(function(response) {
        console.log(response);

        $scope.posts = response;

        if(!$scope.$$phase) {
            $scope.$apply();
        }
    });

}]);

efi.directive('efiPost', function() {
    return {
        templateUrl: 'js/templates/post.html',
        restrict: 'E'
    };
});

efi.filter('fromNow', function(){
    return function(ts) {
        return moment.unix(ts).fromNow();
    };
});