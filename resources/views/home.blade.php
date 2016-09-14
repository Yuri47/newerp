@extends('layouts.app')

@section('content')
<div class="container">
  

 
<h1>Cadastrar</h1>
 <vc-clients></vc-clients>
 
 
 
  <form action="#" method="POST" role="form">
    <legend> </legend>

    <div class="form-group">
        <label for="">Name</label>
        <input type="text" class="form-control" id="" placeholder=" Name"  v-model="ist.name">
    </div>
    <div class="form-group">
        <label for="">Fone</label>
        <input type="text" class="form-control" id="" placeholder="Fone"   v-model="ist.fone">
    </div>
    <div class="form-group">
        <label for="">Address</label>
        <input type="text" class="form-control" id="" placeholder="Address"   v-model="ist.adress">
    </div>

    

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
   


  <script src="/js/main.js"></script>
</div>
@endsection
