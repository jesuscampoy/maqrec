<script type="text/javascript">

    $('#confirmDeleteButton').click(function () {
       var data_name = '';
       var data_action = '';

       if (typeof $(this).data('name') !== 'undefined'){
          data_name = $(this).data('name');
          $("#confirmDeleteLabel").text("<?= $title_modal ?>: " + data_name);
      }

      if (typeof $(this).data('action') !== 'undefined'){
          data_action = $(this).data('action');
          $("form").attr('action', data_action);
      }
  });

</script>
