<script type="text/javascript">
<!--

//-->
$(document).ready(function() {

    $(function(){
        var datepicker = $.fn.datepicker.noConflict();
        $.fn.bootstrapDP = datepicker;  
        $('.datepicker').bootstrapDP();    
    });

    $('.datepicker').datepicker({
        format: "dd/mm/yy",
        language: "es",
        todayHighlight: true,
        autoclose: true
    });

});
</script>