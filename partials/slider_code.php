<script src="/js/jquery.event.move.js" type="text/javascript"></script>
<script src="/js/jquery.twentytwenty.js" type="text/javascript"></script>
<script>
    jQuery(function() {
    jQuery(".twentytwenty-container").twentytwenty();
    });
</script>
<script>
    jQuery(document).ready(function(){
    jQuery('#clickhere').on('click', function(event) {        
        jQuery('.showbooking').toggle('show');
    });
    });
</script>