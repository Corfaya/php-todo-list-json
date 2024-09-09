const { createApp } = Vue;

createApp({
    data() {
        return{
            todoArray: [],
            url: "server.php"
        }
    },
    methods: {
        getList(){
            axios.get(this.url).then((res) => {
                console.log(res.data)
            })
        }
    },
    mounted() {
        this.getList()
    }
}).mount("#app")