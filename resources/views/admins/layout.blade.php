<!DOCTYPE html>
<html>

<head>
    <title>Laravel 9 CRUD Application - ItSolutionStuff.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet">
    <style type="text/css">
        body {
            padding: 50px;
            background: #f2f5f2;
        }

    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    {{-- selec2 cdn --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css"
        rel="stylesheet" />
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css"
        rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
</head>

<body>

    <div class="container">
        @yield('content')
    </div>

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

    <script>
        $(function() {
           $('.toggle-class').change(function() {
           var status = $(this).prop('checked') == true ? 1 : 0;
           var categories_id = $(this).data('id');
           $.ajax({

               type: "GET",
               dataType: "json",
               url: '/status/update',
               data: {'status': status, 'categories_id': categories_id},
               success: function(data){
               console.log(data.success)
            }
         });
      })
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
