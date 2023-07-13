@section('custom')
<link rel="stylesheet" href="{{ asset('css/payment.css') }}">
@endsection
@extends('layout.template')

@section('content')
{{-- <div class="page-breadcrumb">
    
</div> --}}
<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Overlay Example</title>
  <!-- Include Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>

  <!-- Button to trigger the overlay -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#overlayModal">
    Open Overlay
  </button>

  <!-- Overlay Modal -->
  <div class="modal fade" id="overlayModal" tabindex="-1" role="dialog" aria-labelledby="overlayModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <!-- Content to display in the overlay -->
          <h4>Overlay Content</h4>
          <p>This is the content that will be displayed on top of the page.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Include Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>


@endsection