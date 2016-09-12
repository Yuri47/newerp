<script>
	
	export default {

		props: ['users'],

		data: function() {
			return {
				//list: [],
				sortProperty: 'name',
				sortDirection: 1,
				filterTerm: '',
				title: 'tit',
				nameName: '', 
				emailEmail: ''
			}
		},

		methods: {

			sort (ev, property) {

				ev.preventDefault()//não deixa seguir o link do html


				this.sortProperty = property

				if (this.sortDirection == -1) {
					this.sortDirection = 1
				} else {
					this.sortDirection = -1
				}
			},
			showUser(id, name, email) {
				
				 
				this.title = id
				this.nameName = name
				this.emailEmail = email 
				console.log(name)
				 
			}
			

		},

		ready () {
			//this.list = JSON.parse(this.users)
			this.$http.get('/clients/list').then((req) => this.users = req.data)
		}

	} 

</script>

<template>

	<h1>Usuarios</h1>
	{{nameName}}
<input type="text" class="form-control" id="" placeholder="Input field"  v-model="title">


<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Lista de Clientes</button>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
       



<div class="well">
		<input type="text" class="form-control" placeholder="Filtrar" v-model="filterTerm">
	</div>
	<div>

	 <table class="table table-bordered table-striped table-hover">
	 	
		<thead>
			<tr>
				<th><a href="#" @click="sort($event, 'id')">ID</a></th>
				<th><a href="#" @click="sort($event, 'name')">Nome</a></th>
				<th><a href="#" @click="sort($event, 'fone')">Telefone</a></th>
				<th>Endereço</th>
				
			</tr>
		</thead>
		<tbody>
	
			<tr v-for="u in users | filterBy filterTerm| orderBy sortProperty sortDirection">
				
				<td>{{u.id}}</td>
				<td>{{u.name}}</td>
				<td>{{u.fone}}</td>
				<td>{{u.adress}}</td>
				<td><button class="btn btn-success" @click="showUser(u.id, u.name, u.email)">Editar</button></td>
				
			</tr>
		</tbody>
		

	 </table> 

	</div>




    </div>
  </div>
</div>

<br><hr>

	



</template>
<style scoped=""></style>
