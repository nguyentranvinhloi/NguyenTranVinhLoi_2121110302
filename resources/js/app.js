import './bootstrap';
import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

import { createApp } from 'vue'
import { createWebHashHistory, createRouter } from 'vue-router'
import Livewire from 'livewire-vue'

const app = createApp({})
app.use(Livewire)
app.mount('#app')