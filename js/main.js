
const { createApp } = Vue

createApp({
    data() {
        return {
            dischi: [],
            apiUrl: 'server.php'
        }
    },
    mounted() {
        this.getalbums();
    },
    methods: {
        getalbums() {
            axios
            .get(this.apiUrl)
            .then( res => {
                this.dischi = res.data
            } )
        }
    }
}).mount('#app')