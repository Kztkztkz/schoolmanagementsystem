@extends('layout.template')

@section('custom')
<style>
.body{
    font-family     : 'Nunito Sans' , sans-serif;
}

.default-font-size{
    font-size:1em;
}
.main-header{
    font-size: 1.5em;
}
.sub-header{
    font-size: 1.25em;
}
.small-header{
    font-size: 1.125em;
}
.border-radius{
    border-radius: 6px;
}


.page-title{
    font-size: 1.5rem;
}
.btn-primary{
    background-color:  #007AFF;

}


.row{
    margin-bottom: 10px;
}

</style>
@endsection


@section('content')
<div class="page-breadcrumb">    
    <div class="row">
        
    </div>
</div>


@endsection
