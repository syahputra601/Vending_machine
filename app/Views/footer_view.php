
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>
function sum() {
      var duaribu = document.getElementById('duaribu').value;
      var limaribu = document.getElementById('limaribu').value;
      var sepuluhribu = document.getElementById('sepuluhribu').value;
      var duapuluhribu = document.getElementById('duapuluhribu').value;
      var limapuluhribu = document.getElementById('limapuluhribu').value;
      var total_duaribu = 2000 * parseInt(duaribu);
      var total_limaribu = 5000 * parseInt(limaribu);
      var total_sepuluhribu = 10000 * parseInt(sepuluhribu);
      var total_duapuluhribu = 20000 * parseInt(duapuluhribu);
      var total_limapuluhribu = 50000 * parseInt(limapuluhribu);
      // if (!isNaN(result)) {
      //    document.getElementById('txt3').value = result;
      // }
      // alert(total_duaribu);
      var TotalAll = parseInt(total_duaribu) + parseInt(total_limaribu) + parseInt(total_sepuluhribu) + parseInt(total_duapuluhribu) + parseInt(total_limapuluhribu); 
      document.getElementById('uang_diterima').value = TotalAll;
}
</script>

  </body>

</html>