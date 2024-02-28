
const { createApp } = Vue

createApp({
    data() {
        return {
            dischi: [],
            apiUrl: 'server.php',
            selectedAlbum: {},
            displaySelectedAlbum: false
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
        },
        toggleDisplay() {
            this.displaySelectedAlbum = !this.displaySelectedAlbum
        },
        chooseAlbum(index) {
            this.toggleDisplay()
            console.log(this.displaySelectedAlbum)
            axios
            .get(this.apiUrl)
            .then( res => {
                console.log(res.data[index])
                this.selectedAlbum = res.data[index]
            } )
        }
    }
}).mount('#app')