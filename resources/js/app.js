require('./bootstrap');

import { createApp } from 'vue';

import Calendario from "./components/Calendar.vue";
import Book from "./components/Book.vue";

const app = createApp({});

app.component('calendario', Calendario)
app.component('book', Book)

app.mount('#app')
