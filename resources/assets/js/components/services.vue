<script>
	
	export default {

		props: ['users'],

		data () {
			return {
				//list: [],
				sortProperty: 'name',
				sortDirection: 1,
				filterTerm: ''
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
			}

		},

		ready () {
			//this.list = JSON.parse(this.users)
			this.$http.get('/usuarios/listar').then((req) => this.users = req.data)
		}

	} 

</script>

<template>

	<div class="well">
		<input type="text" class="form-control" placeholder="Filtrar" v-model="filterTerm">
	</div>

	<div>

	 <table class="table table-bordered table-striped table-hover">
	 	
		<thead>
			<tr>
				<th><a href="#" @click="sort($event, 'id')">Nome</a></th>
				<th><a href="#" @click="sort($event, 'name')">Nome</a></th>
				<th><a href="#" @click="sort($event, 'email')">Email</a></th>
				
			</tr>
		</thead>
		<tbody>
	
			<tr v-for="u in users | filterBy filterTerm| orderBy sortProperty sortDirection">
				<td>{{u.id}}</td>
				<td>{{u.name}}</td>
				<td>{{u.email}}</td>

			</tr>
		</tbody>
		

	 </table> 

	</div>

</template>
<style scoped=""></style>
