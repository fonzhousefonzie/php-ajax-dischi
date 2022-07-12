new Vue({
    el: "#app",
    data: {
        songs: [],
        selected: []
    },
    mounted() {
        axios.get("db.php")
            .then(resp => {
                this.songs = resp.data.songs;
                this.selected = resp.data.songs;
            })
    },
    methods: {
        selectGenre(genre) {
            this.selected = [];
            for (let i = 0; i < this.songs.length; i++) {
                if (this.songs[i].genre === genre) {
                    this.selected.push(this.songs[i]);
                }
            }
        },
        resetList(){
            this.selected = this.songs;
        }
    },
    computed: {
        findGenres() {
            const genreList = [];
            for (let i = 0; i < this.songs.length; i++) {
                if (!genreList.includes(this.songs[i].genre)) {
                    genreList.push(this.songs[i].genre)
                }
            }
            return genreList;
        }
    }
})