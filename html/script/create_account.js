/**
 * Created by zjh on 2017/2/25.
 */
$(function () {
	$('.alert-danger').hide();
    FormV.init();
	if(wrong_msg!=null){
		$('.alert-danger').show();
	}

});

//Form validation
var FormV = function() {
    var e = function () {
        var e = $("#create_form");
        e.validate({
            errorElement : "span",
            errorClass : "help-block help-block-error",
            focusInvalid : !1,
            rules : {
                first_name :{
                    required : !0
                },
                last_name :{
                    required : !0
                },
                email :{
                    required : !0,
                    email : !0
                },
                username : {
                    required : !0
                },
                password :{
                    required : !0
                },
                password_confirm : {
                    required : !0,
                    equalTo: "#password"
                }
            },
            highlight : function(e) {
                $(e).closest(".form-group").addClass("has-error")
            },
            unhighlight : function(e) {
                $(e).closest(".form-group").removeClass("has-error")
            },
            success : function(e) {
                e.closest(".form-group").removeClass("has-error")
            },
            submitHandler : function(e){
                if(confirm("Ready to register(⊙o⊙)？")){
                    e.submit();
                }
            }
        });
    };
    return {
        init : function(){
            e()
        }
    }
}();