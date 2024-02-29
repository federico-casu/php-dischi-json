
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
            const data = {
                albumIndex: index
            }

            this.toggleDisplay()
            console.log(this.displaySelectedAlbum)
            axios
            .post(this.apiUrl, data, 
            {
                Headers: { 'Content-Type': 'multpart/form-data' }
            })
            .then( res => {
                console.log(res.data)
                this.selectedAlbum = res.data
            } )
        }
    }
}).mount('#app')