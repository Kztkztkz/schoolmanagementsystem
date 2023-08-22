<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
    .custom-border-bottom {
      /* display: flex; */
      width: 95%;
      border-bottom: 3px solid gray;
      margin: 0 auto;
    }

    .footer{
      height: 200px;
    }
    .w-65{
      width: 65%;
    }
    .w-35{
      width: 35%;
    }
    </style>
</head>
<body>
{{-- First --}}
  <div class="p-5 bg-primary">
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col-6 d-flex">
        <b class="logo-icon">
          <img src="http://localhost:8000/admin/assets/images/[removal.ai]_535d621a-bef4-4b84-a129-576bf5f0ac1f-o-technique200.png" alt="homepage" class="light-logo">
          <h3 class="text-white text-center" >Invoice</h3>
        </b>
      </div>
      <div class="col-6 flex-column justify-content-end text-white ">
          <h3 class="d-flex justify-content-end">O technique</h3>

          <div class="d-flex justify-content-end py-5">
            <h5 class="text-end w-75">
              No(313),7th Floor,Corner of Banyardala Road & 145 Street, Ahyoegone Qtr,Tamwe Township
            </h5>
          </div>
          <h5 class="d-flex justify-content-end">09 40934 9911</h5>


      </div>
    </div>
  </div>
{{-- First --}}

{{-- Second --}}
  <div class=" d-flex p-5">
    <div class="col-6">
      <div class="row p-2">
        <div class="col-3">Name</div>
        <div class="col-1">-</div>
        <div class="col-8">Michael Michael</div>
      </div>
      <div class="row p-2">
        <div class="col-3">Ph No</div>
        <div class="col-1">-</div>
        <div class="col-8">09987456123</div>
      </div>
      <div class="row p-2">
        <div class="col-3">Address</div>
        <div class="col-1">-</div>
        <div class="col-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate officia et voluptates illo? .</div>
      </div>
    </div>
    <div class="col-6 d-flex flex-column ">
      <div class="row p-2 ">
        <div class="col-8 text-end">Invoice No</div>
        <div class="col-1 text-end">-</div>
        <div class="col-3 text-end">#007007</div>
      </div>
      <div class="row p-2 ">
        <div class="col-8 text-end">Invoice Date</div>
        <div class="col-1 text-end">-</div>
        <div class="col-3 text-end">22.8.2023</div>
      </div>
      <div class="row p-2 ">
        <div class="col-8 text-end">Class Name</div>
        <div class="col-1 text-end">-</div>
        <div class="col-3 text-end">PHP</div>
      </div>
    </div>
  </div>
  {{-- border-bottom --}}
  <div class="custom-border-bottom"></div>
  {{-- border-bottom --}}
{{-- Second --}}

{{-- Third --}}
<div class="p-4">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Date</th>
        <th scope="col">Fee</th>
        <th scope="col">Paid</th>
        <th scope="col">Due Amount</th>
        <th scope="col">Type</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row"></th>
        <td>22.8.2023</td>
        <td>500,000</td>
        <td>400,000</td>
        <td>100,000</td>
        <td>Paid</td>
      </tr>
    </tbody>
  </table>
</div>
{{-- Third --}}

{{-- Fourth --}}
<div class="d-flex footer">
  <div class="w-100 bg-primary p-5">
    <h5 class="text-white">Note</h5>
  </div>
\
    
  </div>
</div>
{{-- Fourth --}}

</body>
</html>