let locationButton = document.getElementById('locationButton'); 
let userLatitude = null; 
let userLongitude = null; 
const getUserLocation = () => {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, (err) => {
            console.log(err)
        }, {timeout:5000});
      } else {
        locationButton.innerText = "Geolocation is not supported by this browser.";
      }
}
const showPosition = (position) => {
    // locationButton.innerText = "Latitude: " + position.coords.latitude +
    // "<br>Longitude: " + position.coords.longitude;
    locationButton.innerText = "Done";
    userLatitude = position.coords.latitude; 
    userLongitude = position.coords.longitude; 
    console.log(userLatitude, userLongitude); 
  }

async function submitForm(){
    if(userLatitude === null || userLongitude === null) 
    {
        alert("Please provide location. It is mandatory."); 
        return; 
    }
    // const bloodGroup = document.getElementById('blood_group').value; 
    // alert(bloodGroup)
    else if(!document.getElementById('requirement_date').value)
    {
        alert("Please provide date. It is mandatory.");
        return; 
    } 
    else 
    {
        alert("DF")
        let blood_group = document.getElementById('blood_group').value; 
        let requirement_date = document.getElementById('requirement_date').value; 
        let baseUrl = `http://localhost/getData.php?lt=${userLatitude}&lg=${userLongitude}&r_date=${requirement_date}&bg=${blood_group}`; 
        const data1 = await fetch(baseUrl); 
        const data2 = await data1.json(); 
        console.log(data2); 
        console.log("Done finally"); 
        // alert("Submitted"); 
        // const data1 = await fetch('')
    }
}