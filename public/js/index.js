//Javascipt
$(document).ready(
    function() {
        $("#index-home").click(
            function(e) {
                e.preventDefault(); // will not switch page
                $("#index-home").addClass("active");
                $("#index-message").removeClass("active");
                $("#index-friends").removeClass("active");
                $("#index-content").html("");
                $.ajax({
                    url : "/fetchData",
                    beforeSend : function() {
                        $("#index-content").html(
                            '<div class="ui active centered inline loader"></div>'
                        );
                    }
                }).done(
                    function(data) {
                        var user = JSON.parse(data);
                        $("#index-step").hide();
                        $("#index-content").show();
                        $("#index-content").html(
                            '<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">' +
                            '<link href="{{ asset("css/addStep.css") }}" rel="stylesheet">' +
                            '<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans" />' +
                            '<div class="container">' +
                            '<div class="row profile">' +
                                '<div class="col-md-3">' +
                                '<div class="profile-sidebar">' +
                                    '<div class="profile-img">' +
                                    '<img src="../images/user.png" alt="" />' +
                                    '<div class="file btn btn-lg btn-primary">' +
                                        'Change Photo' +
                                        '<input type="file" name="file" />' +
                                    '</div>' +
                                    '</div>' +
                                    '<div class="profile-usertitle">' +
                                    '<div class="profile-usertitle-name">' +
                                        user.name +
                                    '</div>' +
                                    '<div class="profile-usertitle-job">' +
                                        'Developer' +
                                    '</div>' +
                                    '</div>' +
                                    '<div class="profile-userbuttons">' +
                                    '<a href="edit.html" class="btn btn-success btn-sm">Edit my profile</a>' +
                                    '</div>' +
                                    '<div class="profile-usermenu">' +
                                    '<ul class="nav">' +
                                        '<li class="active">' +
                                        '<a href="profile.html">' +
                                            '<i class="glyphicon glyphicon-home"></i>' +
                                            'Overview </a>' +
                                        '</li>' +
                                        '<li>' +
                                        '<a href="#">' +
                                            '<i class="glyphicon glyphicon-user"></i>' +
                                            'Account Settings </a>' +
                                        '</li>' +
                                        '<li>' +
                                        '<a href="#" target="_blank">' +
                                            '<i class="glyphicon glyphicon-ok"></i>' +
                                            'Tasks </a>' +
                                        '</li>' +
                                        '<li>' +
                                        '<a href="#">' +
                                            '<i class="glyphicon glyphicon-flag"></i>' +
                                            'Help </a>' +
                                        '</li>' +
                                    '</ul>' +
                                    '</div>' +
                                '</div>' +
                                '</div>' +
                                '<div class="col-md-9">' +
                                '<div class="profile-content">' +
                                    '<div class="row">' +
                                    '<div class="col-md-12">' +
                                        '<h4>Your Profile</h4>' +
                                        '<br>' +
                                    '</div>' +
                                    '</div>' +
                                    '<table class="table table-user-information">' +
                                    '<tbody>' +
                                        '<tr>' +
                                        '<td>Allergy:</td>' +
                                        '<td>None</td>' +
                                        '</tr>' +
                                        '<tr>' +
                                        '<td>Blood Type:</td>' +
                                        '<td>O+</td>' +
                                        '</tr>' +
                                        '<tr>' +
                                        '<td>Date of Birth</td>' +
                                        '<td>03/11/2009</td>' +
                                        '</tr>' +
                                        '<tr>' +
                                        '<tr>' +
                                        '<td>Gender</td>' +
                                        '<td>Male</td>' +
                                        '</tr>' +
                                        '<tr>' +
                                        '<td>Home Address</td>' +
                                        '<td>Makati City</td>' +
                                        '</tr>' +
                                        '<tr>' +
                                        '<td>Email</td>' +
                                        '<td>'
                                        + user.email +
                                        '</td>' +
                                        '</tr>' +
                                        '<tr>' +
                                        '<td>Phone Number</td>' +
                                        '<td>237-4567-890(Landline)</td>' +
                                        '</tr>' +
                                        '<tr>' +
                                        '<td>Occupation</td>' +
                                        '<td>Chemist</td>' +
                                        '</tr>' +
                                    '</tbody>' +
                                    '</table>' +
                                '</div>' +
                                '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '<br>' +
                            '<br>' +
                            '<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script> ' +
                            '<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>'
                        );
                    }
                );
            }
        );
        $("#index-message").click(
            function(e) {
                e.preventDefault(); // will not switch page
                $("#index-message").addClass("active");
                $("#index-home").removeClass("active");
                $("#index-friends").removeClass("active");
                $("#index-content").html("");

                $.ajax({
                    url : "/fetchSteps",
                    beforeSend : function() {
                        $("#index-content").html(
                            '<div class="ui active centered inline loader"></div>'
                        );
                    }
                }).done(
                    function(data) {
                        var user = JSON.parse(data);
                        $("#index-content").show();
                        $("#index-step").hide();
                        if (data == '[""]') {
                            $("#index-content").html(
                                '<h1>No Steps</h1>'
                            );
                        } else {
                            var str = '<div class="ui ordered steps">';
                        
                            $.each(user, function(key, value) {
                                //str += key + ":" + value[0] + "," + value[1] + "," +value[2] + "<br><br>";
                                if(value[2] == true) {
                                    str += '<div class="completed step">';
                                } else {
                                    str += '<div class="active step">';
                                }
                                str += '<div class="content">';
                                str += '<div class="title">' + value[0] + '</div>';
                                str += '<div class="description">' + value[1] + '</div>';
                                str += '</div></div>';
                            });
    
                            str += '</div>';
                            
                            $("#index-content").html(
                               str
                            );
                        }

                    }
                );
            }
        );
        $("#index-friends").click(
            function(e) {
                e.preventDefault(); // will not switch page
                $("#index-friends").addClass("active");
                $("#index-message").removeClass("active");
                $("#index-home").removeClass("active");
                $("#index-content").hide();
                $("#index-step").show();
            }
        );

        $('#parentDropDown').on('click', function() {
            $(this).children().toggle();
        });

        $('.dropItem').on('click', function() {
            $("#parentText").parent().removeClass('default text');
            $("#parentText").text($(this).text());
        });

        $('.dropItem').draggable({helper: 'clone'});
        
        $('#DropZone').droppable(
            {
                accept: ".dropItem",
                drop: function(ev, ui) {
                    var droppedItem = $(ui.draggable).clone();
                    $(this).append(droppedItem);
                }
            }
        );
    }
);   