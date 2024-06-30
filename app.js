//api.openweathermap.org/data/2.5/weather?q={city name}&appid={API key}&units=imperial


let API_KEY = "d3dd1a3951fb023555b63fc2c97e290a";
getWeatherData = (city) =>{
    const URL = 'https://api.openweathermap.org/data/2.5/weather';

    const Full_Url = `${URL}?q=${city}&appid=${API_KEY}&units=imperial`;
    const weatherPromise = fetch(Full_Url);
    console.log(city)

    return weatherPromise.then((response) =>{
        return response.json()
    })
}

function searchCity(){
    const city = document.getElementById("city-input").value;

    getWeatherData(city)
    .then((response)=>{
        showWeatherData(response)
        console.log(response)

    })
    .catch((err) =>{
        console.log(err)

    })
}


showWeatherData = (weatherData) =>{
    document.getElementById('city-name').innerText= weatherData.name;
    document.getElementById('weather-type').innerText= weatherData.weather[0].main;
    document.getElementById('des').innerText= weatherData.weather[0].description;
    document.getElementById('temp').innerText= weatherData.main.temp;
    document.getElementById('feel_like').innerText= weatherData.main.feels_like;
    document.getElementById('sea_level').innerText= weatherData.main.sea_level;
    document.getElementById('min-temp').innerText= weatherData.main.temp_min;
    document.getElementById('humidity').innerText= weatherData.main.humidity;
    
}