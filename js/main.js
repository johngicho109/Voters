// backend logic/business logic
// forms data collection

$(document).ready(function(){
    $("form").submit(function(event){
        // preventing default form submission to itself
        event.preventDefault();

        // acquiring inputed values
        let firstName = $("#mce-FNAME").val();
        let lastName = $("#mce-LNAME").val();
        let email = $("#mce-EMAIL").val();
        let comments = $("#comments").val();
        
        alert("Thank You" + " " + firstName + " " + lastName + " " + "for reaching you us.")
    });
    (function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';}(jQuery));var $mcj = jQuery.noConflict(true)
});

// frontend logic/UI/UX

// toggle effect on the what we do section
$(document).ready(function(){
    $("#design-icon").click(function(){
        $("#design-descr").toggle();
        $("#design-icon").hide();

        $("#design-descr").click(function(){
            $("#design-icon").show();
            $("#design-descr").hide();
        });
    });
    
    

    $("#development-icon").click(function(){
        $("#dev-descr").toggle();
        $("#development-icon").hide();

        $("#dev-descr").click(function(){
            $("#development-icon").show();
            $("#dev-descr").hide();
        });
    });

    $("#product-icon").click(function(){
        $("#product-descr").toggle();
        $("#product-icon").hide();

        $("#product-descr").click(function(){
            $("#product-icon").show();
            $("#product-descr").hide();
        });
    });
});

// hover effect on the portfilio section

$("document").ready(function(){
    $(".portfolio-items>div>img").hover(function(){
        $(".portfolio-items>div>img").addClass("portFolio-hover");
    },function(){
        $(".portfolio-items>div>img").removeClass("portFolio-hover");
    });
});

