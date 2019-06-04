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
                        $("#index-content").html(
                            "Name: <strong>"+user.name +"</strong>" +
                            "<br>" +
                            "Email: <strong>"+user.email + "</strong>"
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
                        console.log(data);
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
                
              $("#index-content").html('\
                <form action="/AddStep" method="post"> \
                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">\
                <label>Department:&nbsp;&nbsp;</label> \
                <input type="text" name="department" />\
                <label>Status:&nbsp;&nbsp;</label> \
                <input type="text" name="status" />\
                <label>Description:</label> \
                <div class="ui form"> \
                    <div class="field"> \
                        <input type="text" name="description"> \
                    </div> \
                </div> <br> \
                <div><button type="submit" class="ui button">Okay</button></div>'
              );
            }
        );
    }
);   