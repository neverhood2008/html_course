function temperatureFahrenheit(temperature) {
    return 9 / 5 * temperature + 32;
}
const temperatureCelsius = +prompt("Введите температуру в градусах Цельсия ");
alert(`${temperatureCelsius} градусов Цельсия =  ${temperatureFahrenheit(temperatureCelsius).toFixed(2)} градусов по Фаренгейту`);