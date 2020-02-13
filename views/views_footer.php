<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

<script>
    $('#exampleModal').on('show.bs.modal', function (e) {
        let name = $('#exampleInputName1').val();
        let email = $('#exampleInputEmail1').val();
        let message = $('#exampleFormControlTextarea1').val();
        $('#name_p').text(name + ' (' + email + ')');
        $('#message_p').text(message);


        // reader.readAsDataURL(input.files[0]);

    });

    function readURL(input) {

        if (input.files && input.files[0]) {
            let reader = new FileReader();
            reader.onload = function (e) {
                $('#img_modal')
                    .attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }




</script>

</body>
</html>