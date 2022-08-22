
import './bootstrap';
import { createApp } from 'vue';
import CreateCart from './components/CreateCart.vue';
window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

const app = createApp({});
app.component('create-cart', CreateCart);
app.mount('#app');
