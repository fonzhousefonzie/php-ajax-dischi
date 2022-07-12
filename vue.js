new Vue({
    el: "#app",
    data: {
        songs: []
    },
    mounted() {
        axios.get("db.php")
            .then(resp => {
                this.songs = resp.data.songs;
            })
    }
})