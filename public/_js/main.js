(function($) {
    function floatLabel(inputType) {
        $(inputType).each(function() {
            var $this = $(this);
            if ($this.val() != '' || $this.val() != 'blank'){
                $this.next().addClass("active");
            }

            // on focus add cladd active to label
            $this.focus(function() {
                $this.next().addClass("active");
            });
            //on blur check field and remove class if needed
            $this.blur(function() {
                if ($this.val() === '' || $this.val() === 'blank') {
                    $this.next().removeClass();
                }
                else{

                }
            });
        });
    }
    // just add a class of "floatLabel to the input field!"
    floatLabel(".floatLabel");
})(jQuery);

$(".placeholder-input").on("blur", function() {
    $(this).toggleClass("not-empty", !!$(this).val());
});


(function($) {

    $("#sortby").change(function() {
        var val = $('#sortby').val();
        if(val == 2){
            window.location.href = 'viewbyDs';
        }
        else if(val == 1){
            window.location.href = 'viewbyAs';
        }
        else if(val == 3){
            window.location.href = 'viewbyPrice';
        }
        else if(val == 4){
            window.location.href = 'viewbyPriceDs';
        }
    });


    

})(jQuery);

$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})

$(document).ready(function($) {

    $('#password-reg').strength({
        strengthClass: 'strength',
        strengthMeterClass: 'strength_meter',
        strengthButtonClass: '',
        strengthButtonText: '',
        strengthButtonTextToggle: 'Hide Password'
    });

});