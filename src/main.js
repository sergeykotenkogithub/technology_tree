import { createApp } from 'vue';
import App from './App.vue';
import components from '@/components/UI';
import './registerServiceWorker';
import router from './router';
import store from './store';
import { library } from '@fortawesome/fontawesome-svg-core';
import { fas } from '@fortawesome/free-solid-svg-icons';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
import BootstrapVue3 from 'bootstrap-vue-3';
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue-3/dist/bootstrap-vue-3.css';

const app = createApp(App);

library.add(fas);
app.component('fa', FontAwesomeIcon);
app.config.productionTip = false;

components.forEach((component) => {
	app.component(component.name, component);
});

app.use(store).use(router).use(BootstrapVue3).mount('#app');
