</div>

<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script>
    function checkform() {
        var contact_no = document.getElementById("contact").value;
        var anydesk = document.getElementById("anydesk").value;
        if (contact_no.length == 10 && !isNaN(contact_no) && !isNaN(anydesk)) {
            return true;
        } 
        else{

                alert("Contact No contain only 10 numbers after +92 code and Contact No or Anydesk ID must be an numbers");
            return false;
        }
    }

    function checkform_edit() {
        var contact_no_edit = document.getElementById("contact_edit").value;
        var anydesk_edit = document.getElementById("anydesk_edit").value;
        if (contact_no_edit.length == 10 && !isNaN(contact_no_edit) && !isNaN(anydesk_edit)) {
            return true;
        } 
        else{
            alert("Contact No contain only 10 numbers after +92 code and Contact No or Anydesk ID must be an numbers");
            return false;
        }    
        }
</script>
</body>

</html>