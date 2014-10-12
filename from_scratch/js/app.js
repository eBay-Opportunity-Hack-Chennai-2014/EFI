'use strict';
var efi = angular.module("efi", []);

efi.controller('masterCtrl', ['$scope','$http', function($scope,$http) {

    var request = $http({
                    method: 'post',
                    url: 'home1.php',
                    
                });
                request.success(
                    function( data ) {
                       $scope.posts=data; 
                    }
                );

  /*  $scope.posts = [
        {
            id: 1,
            title: "This is a title of the post, it can be larger like this",
            desc: "This is a description of the post, it says something about the post, which is answered by a trusted user. This is a description of the post, it says something about the post, which is answered by a trusted user.This is a description of the post, it says something about the post, which is answered by a trusted user.This is a description of the post, it says something about the post, which is answered by a trusted user. This is a description of the post, it says something about the post, which is answered by a trusted user.This is a description of the post, it says something about the post, which is answered by a trusted user.",
            likes: 15,
            comments: 5,
            shares: 51,
            created: "47 minutes ago",
            imgPath:"screen.png"
        },
         {
            id: 1,
            title: "This says something about the post's Title",
            desc: "This is a description of the post, it says something about the post, which is answered by a trusted user. This is a description of the post, it says something about the post, which is answered by a trusted user.This is a description of the post, it says something about the post, which is answered by a trusted user.This is a description of the post, it says something about the post, which is answered by a trusted user. This is a description of the post, it says something about the post, which is answered by a trusted user.This is a description of the post, it says something about the post, which is answered by a trusted user.",
            likes: 15,
            comments: 5,
            shares: 51,
            created: "47 minutes ago",
            imgPath:"icon.png"
        }

    ];*/

}]);

efi.directive('efiPost', function() {
    return {
        templateUrl: 'js/templates/post.html',
        restrict: 'E'
    };
});