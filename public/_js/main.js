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


