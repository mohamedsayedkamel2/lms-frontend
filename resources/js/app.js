import './bootstrap';

import Alpine from 'alpinejs';
import { createApp } from 'vue';
import SendMessage from './components/SendMessage.vue' 
 
const app=createApp({
	components:{
		SendMessage, 
	}
});
app.mount('#app'); 

window.Alpine = Alpine;

Alpine.start();
