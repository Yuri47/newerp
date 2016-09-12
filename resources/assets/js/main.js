import Vue from 'vue'
import VcUsers from './components/services.vue';
import VcClients from './components/clients.vue';
import VcInsert from './components/insertClient.vue'; 
import VueResource from 'vue-resource'
Vue.use(VueResource)

 new Vue ({
 	el: 'body',

 	components: {
		VcUsers,
		VcClients,
		VcInsert 
	}, 

 	data: function(){
 		return{
 		title: VcUsers.data().title, // isso pega o valor da variavel la de dentro do services.vue
 		nameName: VcUsers.data().nameName,
 		

 		 }
 	}
    
       
    

 })