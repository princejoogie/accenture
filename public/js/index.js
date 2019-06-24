//Javascipt
$(document).ready(
    function() {
        var height = $(window).height();
        $('.profile-content').css(
            {
                "overflow-y" : "auto",
                "height" :(height - 140) + 'px'
            }
        );

        $("#index-menu_profile").on("click",
            function(e) {
                //debugger;
                e.preventDefault(); // will not switch page
                $("#index-menu_profile").addClass("active");
                $("#index-menu_medicalRecords").removeClass("active");
                $.ajax({
                    url : "/fetchProfile",
                    beforeSend : function() {
                        // $("#index-content").html(
                        //    '<div class="ui active centered inline loader"></div>'
                        // );
                    }
                }).done(
                    function(data) {
                        var user = JSON.parse(data);
                        $("#index-content").show();
                        $("#index-records").hide();

                        $("#name").html(user.name.firstName + " " + user.name.lastName);
                        $("#email").html(user.email);
                        $("#bloodType").html(user.bloodType);
                        $("#phoneNumber").html(user.phoneNumber);
                        document.getElementById('firstName').value = user.name.firstName;
                        document.getElementById('middleName').value = user.name.middleName;
                        document.getElementById('lastName').value = user.name.lastName;
                        document.getElementById('age').value = user.age;
                        document.getElementById('address').value = user.address;
                        document.getElementById('datePicker').value = user.birthdate.birthMonth + "/" + (user.birthdate.birthDay + 1) + "/" + user.birthdate.birthYear;
                    }
                );
            }
        );
        
        // $("#index-menu_steps").click(
        //     function(e) {
        //         e.preventDefault(); // will not switch page
        //         $("#index-menu_steps").addClass("active");
        //         $("#index-menu_profile").removeClass("active");
        //         $("#index-menu_addsteps").removeClass("active");
        //         $("#index-menu_medicalRecors").removeClass("active");
        //         $("#index-content").html("");

        //         $.ajax({
        //             url : "/fetchSteps",
        //             beforeSend : function() {
        //                 $("#index-content").html(
        //                     '<div class="ui active centered inline loader"></div>'
        //                 );
        //             }
        //         }).done(
        //             function(data) {
        //                 var user = JSON.parse(data);
        //                 $("#index-content").show();
        //                 $("#index-addstep").hide();
        //                 if (data == '[""]') {
        //                     $("#index-content").html(
        //                         '<h1>No Steps</h1>'
        //                     );
        //                 } else {
        //                     var str = '<div class="ui ordered steps">';
                        
        //                     $.each(user, function(key, value) {
        //                         //str += key + ":" + value[0] + "," + value[1] + "," +value[2] + "<br><br>";
        //                         if(value[2] == true) {
        //                             str += '<div class="completed step">';
        //                         } else {
        //                             str += '<div class="active step">';
        //                         }
        //                         str += '<div class="content">';
        //                         str += '<div class="title">' + value[0] + '</div>';
        //                         str += '<div class="description">' + value[1] + '</div>';
        //                         str += '</div></div>';
        //                     });
    
        //                     str += '</div>';
                            
        //                     $("#index-content").html(
        //                        str
        //                     );
        //                 }

        //             }
        //         );
        //     }
        // );
        $("#index-menu_medicalRecords").on("click",
            function(e) {
                e.preventDefault(); // will not switch page
                $("#index-menu_medicalRecords").addClass("active");
                $("#index-menu_profile").removeClass("active");

                $.ajax({
                    url : "/fetchRecords",
                    beforeSend : function() {
                        // $("#index-content").html(
                        //     '<div class="ui active centered inline loader"></div>'
                        // );
                    }
                }).done(
                    function(data) {
                        var user = JSON.parse(data);
                        $("#index-records").show();
                        $("#index-content").hide();

                        str = "";
                        $.each(user["pastMedicalHistory"], function(key, value) {
                            //str += key + ":" + value[0] + "," + value[1] + "," +value[2] + "<br><br>";
                            console.log(key);
                            if (key == "allergies") {
                                $.each(value, function(qwe) {
                                    console.log(value[qwe]);
                                    str += '<div class="thirteen wide field">';
                                    str += '<input type="text" class="two" value='+ value[qwe] +'>';
                                    str += '</div>';
                                })
                            }
                            
                        });
                        $("#allergies").html(str);
                    }
                );
            }
        );

        $('#navbarDropdown').on('click', function() {
            $('#logoutDrop').toggle();
        });
        
        $("#index-menu_profile").trigger("click");
        $("#index-menu_medicalRecord").trigger("click");

    }
);   