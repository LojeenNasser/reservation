
<!DOCTYPE html>

@if (\Request::is('rtl'))
  <html dir="rtl" lang="ar">
@else
  <html lang="en" >
@endif

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  @if (env('IS_DEMO'))
      <x-demo-metas></x-demo-metas>
  @endif

  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Soft UI Dashboard by Creative Tim
  </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
{{-- selec2 cdn --}}
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css"
    rel="stylesheet" />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/style.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>

<body class="g-sidenav-show  bg-gray-100 {{ (\Request::is('rtl') ? 'rtl' : (Request::is('virtual-reality') ? 'virtual-reality' : '')) }} ">
  @auth
    @yield('auth')
  @endauth
  @guest
    @yield('guest')
  @endguest

  @if(session()->has('success'))
    <div x-data="{ show: true}"
        x-init="setTimeout(() => show = false, 4000)"
        x-show="show"
        class="position-fixed bg-success rounded right-3 text-sm py-2 px-4">
      <p class="m-0">{{ session('success')}}</p>
    </div>
  @endif
    <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/fullcalendar.min.js"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <script src="../assets/js/script"></script>
  <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>

<!-- Include Choices JavaScript -->
<script src="assets/vendors/choices.js/choices.min.js"></script>

<script src="assets/js/main.js"></script>
  @stack('rtl')
  @stack('dashboard')
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>

  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
            // Select2 Multiple
            $('.select2-multiple').select2({
                placeholder: "Select",
                allowClear: true
            });

        });

</script>

<script type="text/javascript">
    var i = 0;

    $("#add").click(function(){

        ++i;

        $("#dynamicTable").append('<tr><td><input type="time"name="availabilities['+i+'][start]"placeholder="Enter your Name"class="form-control" /><td> <td><input type="time"name="availabilities['+i+'][end]"placeholder="Enter your Qty"class="form-control" ><td><td><button type="button"class="btn btn-danger remove-tr">Remove</button></td></tr>');
    });

    $(document).on('click', '.remove-tr', function(){
         $(this).parents('tr').remove();
    });

    $("#add1").click(function(){

        ++i;

        $("#dynamicTable1").append('<tr><td><input type="time"name="availabilities['+i+'][start]"placeholder="Enter your Name"class="form-control" /><td> <td><input type="time"name="availabilities['+i+'][end]"placeholder="Enter your Qty"class="form-control" ><td><td><button type="button"class="btn btn-danger remove-tr">Remove</button></td></tr>');
    });
    $("#add2").click(function(){

        ++i;

        $("#dynamicTable2").append('<tr><td><input type="time"name="availabilities['+i+'][start]"placeholder="Enter your Name"class="form-control" /><td> <td><input type="time"name="availabilities['+i+'][end]"placeholder="Enter your Qty"class="form-control" ><td><td><button type="button"class="btn btn-danger remove-tr">Remove</button></td></tr>');
    });
    $("#add3").click(function(){

        ++i;

        $("#dynamicTable3").append('<tr><td><input type="time"name="availabilities['+i+'][start]"placeholder="Enter your Name"class="form-control" /><td> <td><input type="time"name="availabilities['+i+'][end]"placeholder="Enter your Qty"class="form-control" ><td><td><button type="button"class="btn btn-danger remove-tr">Remove</button></td></tr>');
    });
    $("#add4").click(function(){

        ++i;

        $("#dynamicTable4").append('<tr><td><input type="time"name="availabilities['+i+'][start]"placeholder="Enter your Name"class="form-control" /><td> <td><input type="time"name="availabilities['+i+'][end]"placeholder="Enter your Qty"class="form-control" ><td><td><button type="button"class="btn btn-danger remove-tr">Remove</button></td></tr>');
    });
    $("#add5").click(function(){

        ++i;

        $("#dynamicTable5").append('<tr><td><input type="time"name="availabilities['+i+'][start]"placeholder="Enter your Name"class="form-control" /><td> <td><input type="time"name="availabilities['+i+'][end]"placeholder="Enter your Qty"class="form-control" ><td><td><button type="button"class="btn btn-danger remove-tr">Remove</button></td></tr>');
    });
    $("#add6").click(function(){

        ++i;

        $("#dynamicTable6").append('<tr><td><input type="time"name="availabilities['+i+'][start]"placeholder="Enter your Name"class="form-control" /><td> <td><input type="time"name="availabilities['+i+'][end]"placeholder="Enter your Qty"class="form-control" ><td><td><button type="button"class="btn btn-danger remove-tr">Remove</button></td></tr>');
    });
</script>


<script type="text/javascript">
    function isChecked(checkbox){
                console.log(isChecked.checked);
                if(document.getElementById("my-checkbox").checked){
                    document.getElementById('carbrand').classList.add('d-none');
                    document.getElementById('dynamicTable').classList.add('d-none');
                    document.getElementById('for').classList.add('d-none');
                }
                else if(document.getElementById("hide").checked){
                    document.getElementById('carbrand').classList.remove('d-none');
                    document.getElementById('dynamicTable').classList.remove('d-none');
                    document.getElementById('for').classList.remove('d-none');
                }

            };
        function isChecked1(checkbox){
                console.log(isChecked1.checked);
                if(document.getElementById("my-checkbox1").checked){
                    document.getElementById('carbrand1').classList.add('d-none');
                    document.getElementById('dynamicTable1').classList.add('d-none');
                    document.getElementById('for1').classList.add('d-none');
                }
                else if(document.getElementById("hide1").checked){
                    document.getElementById('carbrand1').classList.remove('d-none');
                    document.getElementById('dynamicTable1').classList.remove('d-none');
                    document.getElementById('for1').classList.remove('d-none');
                }

            };
        function isChecked2(checkbox){
                console.log(isChecked2.checked);
                if(document.getElementById("my-checkbox2").checked){
                    document.getElementById('carbrand2').classList.add('d-none');
                    document.getElementById('dynamicTable2').classList.add('d-none');
                    document.getElementById('for2').classList.add('d-none');
                }
                else if(document.getElementById("hide2").checked){
                    document.getElementById('carbrand2').classList.remove('d-none');
                    document.getElementById('dynamicTable2').classList.remove('d-none');
                    document.getElementById('for2').classList.remove('d-none');
                }

            };
        function isChecked3(checkbox){
                console.log(isChecked3.checked);
                if(document.getElementById("my-checkbox3").checked){
                    document.getElementById('carbrand3').classList.add('d-none');
                    document.getElementById('dynamicTable3').classList.add('d-none');
                    document.getElementById('for3').classList.add('d-none');
                }
                else if(document.getElementById("hide3").checked){
                    document.getElementById('carbrand3').classList.remove('d-none');
                    document.getElementById('dynamicTable3').classList.remove('d-none');
                    document.getElementById('for3').classList.remove('d-none');
                }

            };
        function isChecked4(checkbox){
                console.log(isChecked4.checked);
                if(document.getElementById("my-checkbox4").checked){
                    document.getElementById('carbrand4').classList.add('d-none');
                    document.getElementById('dynamicTable4').classList.add('d-none');
                    document.getElementById('for4').classList.add('d-none');
                }
                else if(document.getElementById("hide4").checked){
                    document.getElementById('carbrand4').classList.remove('d-none');
                    document.getElementById('dynamicTable4').classList.remove('d-none');
                    document.getElementById('for4').classList.remove('d-none');
                }

            };
        function isChecked5(checkbox){
                console.log(isChecked5.checked);
                if(document.getElementById("my-checkbox5").checked){
                    document.getElementById('carbrand5').classList.add('d-none');
                    document.getElementById('dynamicTable5').classList.add('d-none');
                    document.getElementById('for5').classList.add('d-none');
                }
                else if(document.getElementById("hide5").checked){
                    document.getElementById('carbrand5').classList.remove('d-none');
                    document.getElementById('dynamicTable5').classList.remove('d-none');
                    document.getElementById('for5').classList.remove('d-none');
                }

            };
        function isChecked6(checkbox){
                console.log(isChecked6.checked);
                if(document.getElementById("my-checkbox6").checked){
                    document.getElementById('carbrand6').classList.add('d-none');
                    document.getElementById('dynamicTable6').classList.add('d-none');
                    document.getElementById('for6').classList.add('d-none');
                }
                else if(document.getElementById("hide6").checked){
                    document.getElementById('carbrand6').classList.remove('d-none');
                    document.getElementById('dynamicTable6').classList.remove('d-none');
                    document.getElementById('for6').classList.remove('d-none');
                }

            };
</script>

<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
       $('.ckeditor').ckeditor();
    });
</script>
</body>

</html>
