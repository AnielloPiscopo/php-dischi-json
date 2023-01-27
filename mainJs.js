const { createApp } = Vue;

createApp({
    data() {
        return {
            urlAdress: './server.php'
        }
    },

    methods: {
        getDiscsInfos() {
            axios.get(this.urlAdress)
                .then(response => {
                    console.log(response.data);
                })
                .catch(err => {
                    console.log(err);
                })
        }
    },

    created() {
        this.getDiscsInfos()
    }
}).mount('#app')