
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
                res.data.forEach((element, index) => {
                    element.id = index
                });

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

            axios
            .post(this.apiUrl, data, 
            {
                headers: { 'Content-Type': 'multipart/form-data' }
            })
            .then( res => {
                console.log('chiamata post effettuata correttamente')
                console.log(res.data)
                this.selectedAlbum = res.data
            } )
        }
    }
}).mount('#app')