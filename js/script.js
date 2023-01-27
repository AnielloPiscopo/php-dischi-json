const { createApp } = Vue;

createApp({
    data() {
        return {
            serverUrl: './assets/db/server.php',
            discsInfos : [],
        }
    },

    methods: {
        getDiscsInfos() {
            axios.get(this.serverUrl)
                .then(response => {
                    this.discsInfos =response.data;
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