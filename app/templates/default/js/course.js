	$(function () {
	    // Course offering page on dropdown change
	    $("#yearDropdown").change(function (e) {
	        $.ajax({
	            type: "POST",
	            url: "/Courses",
	            data: { courseId: $(this).val() },
	            cache: false,
	            success: function (result) {
	            	$("table").remove();
					$("#courseOfferings").html($(result).find("table"));
	            }
	        });
	    });
	});