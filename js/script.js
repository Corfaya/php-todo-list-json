const { createApp } = Vue;

createApp({
    data() {
        return{
            todoArray: [],
            url: "server.php",
            todo: ""
        }
    },
    methods: {
        getList(){
            axios.get(this.url).then((res) => {
                console.log(res.data)
                this.todoArray = res.data
            })
        },
        addItem() {
            const data = {
                // id: this.todoArray.length + 1,
                // done: false,
                todo: this.todo
            }
            axios.post(this.url, data, {headers: {"Content-type": "multipart/form-data"}}).then((res) => {
                this.todo = ""
                this.todoArray = res.data
                console.log(this.todoArray)
            })
        }
    },
    mounted() {
        this.getList()
    }
}).mount("#app")