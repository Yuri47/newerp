<script>
	
	export default {

		props: ['users'],

		data () {
			return {
				list: [],
				sortProperty: 'name',
				sortDirection: 1
			}
		},

		ready () {
			this.list = JSON.parse(this.users)
		}

	} 

</script>

<template>
<pre>{{ [sortProperty, sortDirection] | json}}</pre>
	<div>

	 <table class="table table-bordered table-striped table-hover">
	 	
		<thead>
			<tr>
				<th><a href="#" @click="sort($event, 'name')">Nome</a></th>
				<th><a href="#" @click="sort($event, 'name')">Email</a></th>
			</tr>
		</thead>
		<tbody>
	
			<tr v-for="u in list | orderBy sortProperty sortDirection">
				<td>{{u.name}}</td>
				<td>{{u.email}}</td>
			</tr>
		</tbody>
		

	 </table> 

	</div>

</template>
<style scoped=""></style>
