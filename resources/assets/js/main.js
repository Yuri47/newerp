import Vue from 'vue'
import VcUsers from './components/services.vue';
import VueResource from 'vue-resource'
Vue.use(VueResource)

 new Vue ({
 	el: '.container',

 	components: {
		VcUsers 
	},

 	data:{
 		title: ' '
 	}
 })