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
                <label>Department:&nbsp;&nbsp;</label> \
                <div class="ui compact menu"> \
                <div class="ui simple dropdown item"> \
                    <i class="dropdown icon"></i> \
                    <div class="menu"> \
                        <div class="item">X-Ray</div> \
                        <div class="item">MRI</div> \
                        <div class="item">Check Up</div> \
                    </div> \
                </div> \
                </div> <br><br> \
                <label>Status:&nbsp;&nbsp;</label> \
                <div class="ui compact menu"> \
                <div class="ui simple dropdown item"> \
                    <i class="dropdown icon"></i> \
                    <div class="menu"> \
                    <div class="item">Finished</div> \
                    <div class="item">Pending</div> \
                    </div> \
                </div> \
                </div> <br> <br>\
                <label>Description:</label> \
                <div class="ui form"> \
                    <div class="field"> \
                        <input type="text"> \
                    </div> \
                </div> <br> \
                <div><button class="ui button">Okay</button></div>'
              );
            }
        );
    }
);   