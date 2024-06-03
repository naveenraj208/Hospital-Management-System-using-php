<!DOCTYPE html>
<html>

<head>
    <style>
       body {
            font-family: Arial, sans-serif;
            background-image: url('https://media.tenor.com/ZkvpwwAnZNoAAAAd/not-reopening-doctor.gif');
            background-size: cover;
            background-position: center;
        }

        .container {
            width: 50%;
            margin: 0 auto;
            text-align: center;
            background-color: #ffffff;
            padding: 20px;
            margin-top: 50px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
        }

        input[type="submit"] {
            background-color: aqua;
            color: #ffffff;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #00ced1;
        }
    </style>
    <script>
        function validateForm() {
            var patientName = document.getElementById("patient_name").value;
            var doctorName = document.getElementById("doctor_name").value;

            if (patientName == "" || doctorName == "") {
                alert("Patient name and Doctor name are required fields!");
                return false;
            }
            else {
                alert("Prescription succesfully submitted  to patient: " + patientName);
                return true;
            }
        }
    </script>
</head>

<body>
    <div class="container">
        <h2>Benevolence Hospital</h2>
        <form onsubmit="return validateForm()">
            <label for="patient_name">Patient's Name</label>
            <br>
            <input type="text" id="patient_name" name="patient_name" placeholder="Enter patient's name..">
            <br>
            <label for="doctor_name">Doctor's Name</label>
            <br>
            <input type="text" id="doctor_name" name="doctor_name" placeholder="Enter doctor's name..">
            <br>
            <label for="prescription">Prescription</label>
            <br>
            <textarea id="prescription" name="prescription" placeholder="Write prescription.." style="height:200px"></textarea>
            <br>
            <label for="suggestion">Suggestion</label>
            <br>
            <textarea id="suggestion" name="suggestion" placeholder="Write suggestion.." style="height:100px"></textarea>
            <br>
            <label for="allergy">Allergy</label>
            <br>
            <input type="text" id="allergy" name="allergy" placeholder="Enter allergy..">
            <br>
            <label for="Scans">Scans</label>
            <br>
            <input type="text" id="Scans" name="Scans" placeholder="Enter Scans..">
            <br>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>

</html>
