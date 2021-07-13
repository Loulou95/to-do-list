require("./bootstrap");

window.Vue = require("vue");
window.axios = require("axios");


import Vue from 'vue'
import Tasks from "./components/Tasks/index.vue";

const app = new Vue({
    components: {
        "v-task": Tasks,
    },
    el: "#app",
});
