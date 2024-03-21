<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kopi Alumni</title>
  <link rel="shortcut icon" type="image/png" href="{{asset('images/logos/mukena.png')}}" />
  <link rel="stylesheet" href="{{asset('css/styles.min.css')}}" />

  <style>
    /* Optional: Custom CSS for DataTables */
    table.dataTable thead tr {
      background-color: LightGray;
    }
    table.dataTable tfoot tr {
      background-color: LightGray;
    }
  </style>
  
  <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}"rel="stylesheet">  
  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  
  <!-- Untuk sweet alert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- Tambahan form validation pop up -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

</head>