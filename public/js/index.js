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

        $('.index-records').css(
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
                $("#index-menu_steps").removeClass("active");
                $.ajax({
                    url : "/fetchProfile",
                    beforeSend : function(data) {
                        // $("#index-content").hide();
                        // $("#index-records").hide();
                        // $("#loading").show();
                    }
                }).done(
                    function(data) {
                        var user = JSON.parse(data);
                        $("#index-content").show();
                        $("#index-records").hide();
                        $("#index-steps").hide();   
                        // var date = user.birthdate.birthMonth + "/" + (user.birthdate.birthDay + 1) + "/" + user.birthdate.birthYear;
                        $("#mainName").html(user.name.firstName + " " + user.name.lastName);
                        $("#firstName").val(user.name.firstName);
                        $("#middleName").val(user.name.middleName);
                        $("#lastName").val(user.name.lastName);
                        $("#age").val(user.age);
                        $("#bday").val(user.birthdate);
                        $("#email").val(user.email);
                        $("#phoneNumber").val(user.phoneNumber);
                        $("#address").val(user.address);
                        $("#gender").val(user.sex);

                        var contacts = "";
                        contacts += '<div class="item">';
                        contacts += '<img class="ui avatar image" src="https://semantic-ui.com/images/avatar2/small/rachel.png"' +
                                    'style="' +
                                        'width: 50px;' +
                                        'height: 50px;"' +
                                        '>';
                        contacts += '<div class="content">';
                        contacts += '<a class="header">'+ user.emergencyContact.name +'</a>';
                        contacts += '<a class="header">'+ user.emergencyContact.relationship +'</a>';
                        contacts += '<div class="description">'+ '<b>Phone: </b>' + user.emergencyContact.phone + '</div>';
                        // contacts += '</div></div>';
                        $("#emergencyContacts").html(contacts);
                    }
                );
            }
        );
        
        $("#index-menu_medicalRecords").on("click",
            function(e) {
                e.preventDefault(); // will not switch page
                $("#index-menu_medicalRecords").addClass("active");
                $("#index-menu_profile").removeClass("active");
                $("#index-menu_steps").removeClass("active");
                $("#index-records").show();
                $("#index-content").hide();
                $("#index-steps").hide();
                
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
                        $("#index-steps").hide();

                        $("#diabetes").val(user.pastMedicalHistory.diabetes);
                        $("#hepatitis").val(user.pastMedicalHistory.hepatitis);
                        $("#hypertension").val(user.pastMedicalHistory.hypertension);
                        $("#others").val(user.pastMedicalHistory.others);
                        $("#bronchialAsthma").val(user.familyHistory.bronchialAsthma);
                        $("#hypertension").val(user.familyHistory.hypertension);
                        $("#tubercolosis").val(user.familyHistory.tubercolosis);
                        $("#others").val(user.familyHistory.others);


                        str = "";
                        $.each(user["pastMedicalHistory"], function(key, value) {
                            str += key + ":" + value[0] + "," + value[1] + "," +value[2] + "<br><br>";
                            console.log(key);
                            if (key == "allergies") {
                                str = "";
                                $.each(value, function(qwe) {
                                    console.log(value[qwe]);
                                    str += '<div class="four wide field">';
                                    str += '<input type="text" class="two" value='+ value[qwe] +'>';
                                    str += '</div>';
                                })
                                $("#allergies").html(str);
                            }
                            if (key == "skinDisease") {
                                str = "";
                                $.each(value, function(qwe) {
                                    console.log(value[qwe]);
                                    str += '<div class="four wide field">';
                                    str += '<input type="text" class="two" value='+ value[qwe] +'>';
                                    str += '</div>';
                                })
                                $("#skinDiseases").html(str);
                            }
                        });
                    }
                    
                );
            }
        );

        $("#index-menu_steps").on("click",
            function(e) {
                e.preventDefault(); // will not switch page
                $("#index-menu_steps").addClass("active");
                $("#index-menu_profile").removeClass("active");
                $("#index-menu_medicalRecords").removeClass("active");
                $("#index-steps").show();
                $("#index-records").hide();
                $("#index-content").hide();
                
                // $.ajax({
                //     // url : "/fetchRecords",
                //     beforeSend : function() {
                //         // $("#index-content").html(
                //         //     '<div class="ui active centered inline loader"></div>'
                //         // );
                //     }
                // }).done(
                //     function(data) {
                //         var user = JSON.parse(data);
                //         $("#index-steps").show();
                //         $("#index-records").hide();
                //         $("#index-content").hide();
                //     }
                    
                // );
            }
        );

        $(".grid_item").draggable({helper: "clone"});

        $("#drop_zonee").droppable(
            {
                accept:".grid_item",
                drop: function(ev, ui) {
                    var droppedItem = $(ui.draggable).clone();
                    droppedItem.addClass(" grid_item");
                    $("#drop_zonee").find("#drop_here").append(droppedItem);
                }
            }
        )

        $('#navbarDropdown').on('click', function() {
            $('#logoutDrop').toggle();
        });
        
        $("#index-menu_profile").trigger("click");
        // $("#index-menu_medicalRecord").trigger("click");

        var doc = "";
        while (doc != "0218") {
            doc = prompt("Please Enter your OTP:"); 
        }

        $("#reisterRuedas").removeClass("addBlur");
    }
);   