@extends('layouts.app')

@section('content')
<div class="container">
  
<!-- :disabled="ist.id"> -->
 
<h1>Cadastrar Cliente</h1>
 <vc-clients></vc-clients>
     <button type="clean" class="btn btn-primary" @click="limp" :disabled="!ist.id">Novo</button>



<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg1" :disabled="!ist.id">Editar</button>

<div class="modal fade bs-example-modal-lg1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
       
<h1>Editar Cliente</h1>

 <div id="divEdit"> 
  
     {!!(string)Session::get('temp')!!}
<!-- name: <input type="text" class="texto" id="valueText"> -->
 <div class="form-group">
        <label for="">Name</label>
        <input type="text" class="form-control"  autofocus required placeholder=" Name" id="nameEdit" name="name" v-model="ist.name" >

    </div>
     <div class="form-group">
        <label for="">Fone</label>
        <input type="text" class="form-control"  required placeholder="Fone" id="foneEdit" name="fone"  v-model="ist.fone" >
    </div>
    <div class="form-group">
        <label for="">Address</label>
        <input type="text" class="form-control"  required placeholder="Address" id="addressEdit" name="address"   v-model="ist.address"  >
    </div>
     <input type="hidden" name="id" id="id" value="@{{ist.id}}">
<br><br>
<button type="button" class="btn btn-lg btn-danger" data-dismiss="modal" aria-label="Close">Fechar</button>
 <button id="1" class="btn btn-lg btn-primary">Editar</button> <br>


<br>
<br>
<br>

</div>

<div class="alert alert-success" id="editSuccess">
<strong>Sucesso!</strong>
O cliente <strong> @{{ist.name}}</strong>  foi alterado. 
<br><br>
<button type="button" class="btn btn-lg btn-danger" data-dismiss="modal" aria-label="Close">Fechar</button>
</div>

    </div>
  </div>
</div>



















 
 
  <form action="/newclient" method="POST" role="form">
     
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <input type="hidden" name="id" value="@{{ist.id}}">
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" class="form-control" id="" required placeholder=" Name"  name="name"  v-model="ist.name" :readonly="ist.id">

    </div>
    <div class="form-group">
        <label for="">Fone</label>
        <input type="text" class="form-control" id="" required placeholder="Fone"  name="fone"   v-model="ist.fone" :readonly="ist.id">
    </div>
    <div class="form-group">
        <label for="">Address</label>
        <input type="text" class="form-control" id="" required placeholder="Address" name="address"   v-model="ist.address" :readonly="ist.id" >
    </div>

    

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
   






  <script src="/js/main.js"></script>
</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>





<script type="text/javascript" >

 

$("div#editSuccess").hide()


$("button#1").click(function() {
            //$("p").hide()
            //$("h1.dois").show("slow")
            

$.ajax({
  method: "GET",
  url: "{{ route('editclient') }}",
  data: { name: $('input#nameEdit').val(), 
          fone: $('input#foneEdit').val(), 
          address: $('input#addressEdit').val(), 
  id: $('input#id').val() 
}
})
  .done(function( msg ) {
    //alert( "Data Saved: " + msg );

var object = msg; //pega o objeto msg que vem da função ajax do servicecontroller
 
$("button#1").text(msg["name"] );
$("input#textFinal").val(msg["name"]);
$("div#divEdit").hide("slow")
$("div#editSuccess").show("slow")

  });

 
        });
 
   
  
</script>



























@endsection
