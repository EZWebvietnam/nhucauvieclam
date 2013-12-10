$(document).ready(function () {
    
    $('input').keyup(function() {
        var $th = $(this);
        $th.val( $th.val().replace(/[^a-zA-Z0-9]/g, function(str) {
        alert('You typed " ' + str + ' ".\n\nPlease use only letters and numbers.');
        return ''; 
        }));
    });
});

$(document).ready(function(){
	$('select[name="City"]').change(function(){
		var op = $(this).val();
		if(op!=''){
			$('input[name="changediv"]').prop('disabled',false);
		}else{
			$('input[name="changediv"]').prop('disabled',true);
		}
	})
})

$(document).ready(function(){
	$('textarea').keyup(function(){
		var $chars = $(this).val().length;
		if(chars>=10){
			alert('so ky tu khong duoc vuot qua 100.')
		}
	})
})

(function () {
    'use strict';

    var isOnGitHub = window.location.hostname === 'blueimp.github.io',
        url = isOnGitHub ? '//jquery-file-upload.appspot.com/' : 'server/php/';

    angular.module('demo', [
        'blueimp.fileupload'
    ])
        .config([
            '$httpProvider', 'fileUploadProvider',
            function ($httpProvider, fileUploadProvider) {
                if (isOnGitHub) {
                    // Demo settings:
                    delete $httpProvider.defaults.headers.common['X-Requested-With'];
                    angular.extend(fileUploadProvider.defaults, {
                        // Enable image resizing, except for Android and Opera,
                        // which actually support image resizing, but fail to
                        // send Blob objects via XHR requests:
                        disableImageResize: /Android(?!.*Chrome)|Opera/
                            .test(window.navigator && navigator.userAgent),
                        maxFileSize: 5000000,
                        acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i
                    });
                }
            }
        ])

        .controller('DemoFileUploadController', [
            '$scope', '$http',
            function ($scope, $http) {
                if (!isOnGitHub) {
                    $scope.loadingFiles = true;
                    $scope.options = {
                        url: url
                    };
                    $http.get(url)
                        .then(
                            function (response) {
                                $scope.loadingFiles = false;
                                $scope.queue = response.data.files || [];
                            },
                            function () {
                                $scope.loadingFiles = false;
                            }
                        );
                }
            }
        ])

        .controller('FileDestroyController', [
            '$scope', '$http',
            function ($scope, $http) {
                var file = $scope.file,
                    state;
                if (file.url) {
                    file.$state = function () {
                        return state;
                    };
                    file.$destroy = function () {
                        state = 'pending';
                        return $http({
                            url: file.delete_url,
                            method: file.delete_type
                        }).then(
                            function () {
                                state = 'resolved';
                                $scope.clear(file);
                            },
                            function () {
                                state = 'rejected';
                            }
                        );
                    };
                } else if (!file.$cancel) {
                    file.$cancel = function () {
                        $scope.clear(file);
                    };
                }
            }
        ]);

}());