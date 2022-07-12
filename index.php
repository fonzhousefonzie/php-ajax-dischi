<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css' integrity='sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==' crossorigin='anonymous' />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0-beta1/css/bootstrap.min.css' integrity='sha512-o/MhoRPVLExxZjCFVBsm17Pkztkzmh7Dp8k7/3JrtNCHh0AQ489kwpfA3dPSHzKDe8YCuEhxXq3Y71eb/o6amg==' crossorigin='anonymous' />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.14/vue.js' integrity='sha512-pSyYzOKCLD2xoGM1GwkeHbdXgMRVsSqQaaUoHskx/HF09POwvow2VfVEdARIYwdeFLbu+2FCOTRYuiyeGxXkEg==' crossorigin='anonymous'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/1.0.0-alpha.1/axios.min.js' integrity='sha512-xIPqqrfvUAc/Cspuj7Bq0UtHNo/5qkdyngx6Vwt+tmbvTLDszzXM0G6c91LXmGrRx8KEPulT+AfOOez+TeVylg==' crossorigin='anonymous'></script>
</head>

<body>
    <div id="app">
        <header class="px-3 d-flex justify-content-between">
            <img alt="Spotify Logo" src="https://grafica-facile.com/wp-content/uploads/2022/01/spotify-logo.png">
        </header>
        <main>
            <div class="container">
                <div class="dropdown pt-3">
                    <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Genre
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#" @click.prevent="resetList()">All</a></li>
                        <li><a class="dropdown-item" href="#" v-for="genre in findGenres" :key="genre" @click.prevent="selectGenre(genre)">{{ genre }}</a></li>
                    </ul>
                </div>
                <div class="row row-cols-2 row-cols-sm-5">
                    <div class="col card border-0" v-for="song in selected" :key="song.title">
                        <div>
                            <img :src="song.poster">
                            <h5>{{ song.title }}</h5>
                            <p>{{ song.author }}</p>
                            <p>{{ song.year }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="vue.js"></script>
</body>

<style>
    header {
        background: #2e3a46;
        max-height: 50px;
        padding: 0.5rem 1rem;
    }

    header img {
        max-height: calc(50px - 1rem);
    }

    main {
        background: #1e2d3b;
        min-height: 100vh;
    }

    main .container {
        background: inherit;
        padding: 3rem 0;
    }

    main .container .row .col.card {
        background: inherit;
    }

    .col div {
        background: #2e3a46;
        height: 100%;
        margin: 0.5rem 0;
        padding: 1rem;
    }

    .col img {
        width: 100%;
    }

    .col h5 {
        color: whitesmoke;
        text-transform: uppercase;
        padding: 1rem 0;
    }

    .col p {
        color: #6a7176;
        margin: 0;
        padding: 0;
    }
</style>

</html>