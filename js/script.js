const { createApp } = Vue;

createApp({
    data() {
        return{
            todoArray: [],
            url: "server.php"
        }
    },
    methods: {

    }
}).mount("#app")