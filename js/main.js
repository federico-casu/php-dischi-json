
const { createApp } = Vue

createApp({
    data() {
        return {
            dischi: [],
            apiUrl: 'server.php'
        }
    },
    mounted() {
        this.getDiscs();
    },
    methods: {
        getDiscs() {
            axios
            .get(this.apiUrl)
            .then( res => {
                this.dischi = res.data
            } )
        }
    }
}).mount('#app')