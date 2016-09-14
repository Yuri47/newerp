@extends('layouts.app')

@section('content')
<div class="container">
  
<!-- :disabled="ist.id"> -->
 
<h1>Cadastrar Cliente</h1>
 <vc-clients></vc-clients>
     <button type="clean" class="btn btn-primary" @click="limp" :disabled="!ist.id">Novo</button>
 
 
  <form action="/newclient" method="POST" role="form">
    <legend> id: @{{ist.id}}</legend>
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <input type="hidden" name="id" value="@{{ist.id}}">
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" class="form-control" id="" required placeholder=" Name"  name="name" v-model="ist.name" >

    </div>
    <div class="form-group">
        <label for="">Fone</label>
        <input type="text" class="form-control" id="" required placeholder="Fone"  name="fone"  v-model="ist.fone" 
    </div>
    <div class="form-group">
        <label for="">Address</label>
        <input type="text" class="form-control" id="" required placeholder="Address" name="address"   v-model="ist.address"  >
    </div>

    

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
   


  <script src="/js/main.js"></script>
</div>
@endsection
