<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Get Blood Donation</title>
    <link rel="stylesheet" href="./css/get_blood_donation.css">
    
  </head>
  <body>    

    <div class="container">
        <div class="inside-container1">
            <h4>Get Blood Donation</h4>
            <h6>Please Fill The Details Below: </h6>
            <div class="first" style="text-align:center;">
            <!-- Form starts here -->
                <label for="Location">Location: </label>
                <button onclick="getUserLocation()" class="mx-2" id="locationButton">Turn On Location</button>
                <br>
                <label for="Blood_Group">Blood Group: </label>
                <select name="blood_group" id="blood_group" class="mx-2">
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="AB">AB</option>
                    <option value="O">O</option>
                </select>
                <br>
                <label for="date_of_requirement">Date Of Requirement: </label><br>
                <input type="date" id="requirement_date" name="requirement_date" class="mx-2">
                <br>
                <button style="margin-top:20px;" onclick="submitForm()">Submit</button>
            <!-- Form ends here -->
            </div>
        </div>
    </div>

    <script src="./js/get_blood_donation1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>