import axios from "axios";

axios.get('https://api.giphy.com/v1/gifs/trending?api_key=rVqooAAUbXsqtcG9FddZEn3MRKK9rXZX&limit=25&rating=g')
.then(response => console.log(response.data.data));