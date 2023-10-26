import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import Vue3Toasity from 'vue3-toastify';
import 'vue3-toastify/dist/index.css';

import BaseLayout from './components/base/BaseLayout.vue';
const app = createApp(App);
app.use(Vue3Toasity, {
  autoClose: 3000,
});
app.component('base-layout', BaseLayout);
app.use(router);
app.mount("#app");
