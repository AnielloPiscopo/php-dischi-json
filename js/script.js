const { createApp } = Vue;

createApp({
    data() {
        return {
            serverUrl: './assets/db/server.php'
        }
    },

    methods: {
        getDiscsInfos() {
            axios.get(this.serverUrl)
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