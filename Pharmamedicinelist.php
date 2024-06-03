


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benevolence Pharma</title>
    <style>
       body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: rgb(252, 252, 252);
        }

        header {
            text-align: right;
            padding: 10px;
            background-color: aqua;
            color: rgb(82, 82, 82);
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .search-container {
            text-align: center;
            margin-bottom: 20px;
        }

        input[type="text"] {
            padding: 5px;
            width: 200px;
        }

        button {
            padding: 5px 15px;
            background-color: aqua;
            border: none;
            color: white;
            cursor: pointer;
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
            }
        }
    </style>
</head>

<body>
    <header>
        <h1>Benevolence Pharma</h1>
    </header>
    <div class="container">
        <h2>Medicine List</h2>
        <div class="search-container">
            <input type="text" id="searchInput" placeholder="Search for medicine...">
            <button onclick="searchMedicine()">Search</button>
        </div>
        <table id="medicineTable">
            <thead>
                <tr>
                    <th>Medicine Name</th>
                    <th>Medicine Number</th>
                    <th>Cost</th>
                    <th>Company</th>
                </tr>
            </thead>
            <tbody>
               
    
    
     <tr>
                    <td>a-linolenic acid</td>
                    <td> Mc0001 </td>
                    <td> ₹80 </td>
                    <td> OEM manufacturers </td>
                   
     </tr>
    
    
     <tr>
                    <td> Acetaminophen.</td>
                    <td> Mc0002 </td>
                    <td>₹54 </td>
                    <td>  McNeil Consumer Healthcare</td>
                   
     </tr> 
    
    
    <tr>
                    <td>Adderall. </td>
                    <td>Mc0003  </td>
                    <td>₹43 </td>
                    <td>Takeda Pharmaceuticals </td>
                   
     </tr> 
    
    <tr>
                    <td>Amitriptyline. </td>
                    <td>Mc0004  </td>
                    <td> ₹87</td>
                    <td> Intas Pharmaceutical Ltd</td>
                   
     </tr> 
    
     <tr>
        <td>Amlodipine. </td>
        <td> Mc0005 </td>
        <td>₹99 </td>
        <td> Reddys Laboratories </td>
       
</tr> 

<tr>
        <td>Ativan. </td>
        <td> Mc0006</td>
        <td>₹69 </td>
        <td>Wyetd Pharmaceuticals  </td>
       
</tr> 

<tr>
        <td> Atorvastatin.</td>
        <td>Mc0007  </td>
        <td>₹88 </td>
        <td> Centrient Pharmaceuticals  </td>
       
</tr> 

<tr>
        <td>Azitdromycin. </td>
        <td> Mc0008</td>
        <td>₹43 </td>
        <td> Sohllvi Exports:</td>
       
</tr> 


<tr>
        <td>Doxycycline </td>
        <td>Mc0009  </td>
        <td> ₹55</td>
        <td>Anant Pharmaceuticals Pvt. Ltd </td>
       
</tr> 

<tr>
        <td>Dupixent </td>
        <td>Mc00010  </td>
        <td>₹67 </td>
        <td>Sanofi Healtdcare India Pvt. Ltd. </td>
       
</tr> 
<tr>
        <td> Lyrica</td>
        <td>Mc00011  </td>
        <td>₹87 </td>
        <td>Pregabalin API Manufacturers </td>
       
</tr> 
<tr>
        <td>Meloxicam </td>
        <td>Mc00012 </td>
        <td>₹88 </td>
        <td> Remedy Labs</td>
       
</tr> 
<tr>
        <td>Trazodone</td>
        <td>Mc00013  </td>
        <td>₹22 </td>
        <td> Trazodone Hydrochloride </td>
       
</tr> 
<tr>
        <td>Kevzara </td>
        <td>Mc00014  </td>
        <td>₹43 </td>
        <td>Sanofi and Regeneron Pharmaceuticals, Inc.
</td>
       
</tr> 
<tr>
        <td> Nurtec</td>
        <td> Mc00015 </td>
        <td>₹12 </td>
        <td>Biohaven Pharmaceutical Holding Company Ltd. </td>
       
</tr> 
<tr>
        <td>Narcan </td>
        <td>Mc00016  </td>
        <td>₹32 </td>
        <td>Samartd Pharma Pvt. Ltd. </td>
       
</tr> 
<tr>
        <td>Omeprazole </td>
        <td>Mc00017  </td>
        <td>₹56 </td>
        <td>Omeprazole API Manufacturer </td>
       
</tr> 
<tr>
        <td> Prednisone</td>
        <td>Mc00018 </td>
        <td>₹76 </td>
        <td> 3S Corporation. </td>
       
</tr> 
<tr>
        <td> Trazodone</td>
        <td> Mc00019 </td>
        <td>₹66 </td>
        <td>Trazodone Hydrochloride Manufacturers </td>
       
</tr> 
<tr>
        <td>secukinumab </td>
        <td>Mc00020  </td>
        <td>₹45 </td>
        <td>Novartis Healtdcare Pvt. </td>
       
</tr> 
<tr>
        <td>Gilenya </td>
        <td> Mc00021</td>
        <td>₹12 </td>
        <td>Ram Medical Agency. </td>
       
</tr> 

<tr>
        <td> Naloxone</td>
        <td> Mc00022 </td>
        <td>₹32  </td>
        <td> Nex 400.</td>
       
</tr> 
<tr>
        <td>Clonazepam </td>
        <td> Mc00023 </td>
        <td>₹23  </td>
        <td>Neuracle Lifesciences </td>
       
</tr> 

<tr>
        <td>Mobic </td>
        <td>Mc00024  </td>
        <td>₹78  </td>
        <td> BOEHRINGER INGELHEIM</td>
       
</tr> 
<tr>
        <td>Modafinil </td>
        <td>Mc00025  </td>
        <td>₹ 87 </td>
        <td> OEM manufacturers</td>
       
</tr> 

<tr>
        <td> Mavyret</td>
        <td>Mc00026  </td>
        <td>₹11  </td>
        <td> OEM manufacturers</td>
       
</tr> 
<tr>
        <td>Myrbetriq </td>
        <td>Mc00027  </td>
        <td>₹54  </td>
        <td>OEM manufacturers </td>
       
</tr> 

<tr>
        <td>Metformin </td>
        <td> Mc00028</td>
        <td> ₹65 </td>
        <td>BOEHRINGER INGELHEIM </td>
       
</tr> 

<tr>
        <td> Yupelri</td>
        <td>Mc00029  </td>
        <td>₹ 212 </td>
        <td> OEM manufacturers</td>
       
</tr> 

<tr>
        <td>Yosprala </td>
        <td>Mc00030  </td>
        <td>₹112 </td>
        <td> BOEHRINGER INGELHEIM</td>
       
</tr> 
<tr>
        <td>Yondelis</td>
        <td>Mc00031  </td>
        <td>₹432 </td>
        <td> BOEHRINGER INGELHEIM</td>
       
</tr> 

<tr>
        <td>Yescarta </td>
        <td> Mc00032 </td>
        <td>₹62 </td>
        <td>BOEHRINGER INGELHEIM </td>
       
</tr> 

<tr>
        <td>Ycantd </td>
        <td>Mc00033 </td>
        <td>₹127  </td>
        <td>BOEHRINGER INGELHEIM </td>
       
</tr> 

<tr>
        <td> Dilaudid</td>
        <td> Mc0034 </td>
        <td>₹54 </td>
        <td>  McNeil Consumer Healtdcare</td>
       
</tr> 


<tr>
        <td>Percocet</td>
        <td>Mc0035 </td>
        <td>₹43 </td>
        <td>Takeda Pharmaceuticals </td>
       
</tr> 

<tr>
        <td>naproxen </td>
        <td>Mc0036  </td>
        <td> ₹87</td>
        <td> Intas Pharmaceutical Ltd</td>
       
</tr> 

<tr>
        <td>Nucynta</td>
        <td> Mc0037 </td>
        <td>₹99 </td>
        <td> Reddys Laboratories </td>
       
</tr> 

<tr>
        <td>celecoxib </td>
        <td> Mc0038</td>
        <td>₹69 </td>
        <td>Wyetd Pharmaceuticals  </td>
       
</tr> 

<tr>
        <td> Atorvastatin.</td>
        <td>Mc0039  </td>
        <td>₹88 </td>
        <td> Centrient Pharmaceuticals  </td>
       
</tr> 

<tr>
        <td>meloxicam </td>
        <td> Mc0040</td>
        <td>₹43 </td>
        <td> Sohllvi Exports:</td>
       
</tr> 


<tr>
        <td>Doxycycline </td>
        <td>Mc0041  </td>
        <td> ₹55</td>
        <td>Anant Pharmaceuticals Pvt. Ltd </td>
       
</tr> 

<tr>
        <td>Vulvodynia  </td>
        <td>Mc00042  </td>
        <td>₹67 </td>
        <td>Sanofi Healtdcare India Pvt. Ltd. </td>
       
</tr> 
<tr>
        <td>Postoperative Pain (7 drugs)  </td>
        <td>Mc00044  </td>
        <td>₹67 </td>
        <td>Sanofi Healtdcare India Pvt. Ltd. </td>
       
</tr> 
<tr>
        <td>Nocturnal Leg Cramps (11 drugs)</td>
        <td>Mc00043  </td>
        <td>₹87 </td>
        <td>Pregabalin API Manufacturers </td>
       
</tr> 
<tr>
        <td>Dercum's Disease (2 drugs)</td>
        <td>Mc00045 </td>
        <td>₹88 </td>
        <td> Remedy Labs</td>
       
</tr> 
<tr>
        <td>Trazodone</td>
        <td>Mc00046  </td>
        <td>₹22 </td>
        <td> Trazodone Hydrochloride </td>
       
</tr> 
<tr>
        <td>Kevzara </td>
        <td>Mc00047  </td>
        <td>₹43 </td>
        <td>Sanofi and Regeneron Pharmaceuticals, Inc.
</td>
       
</tr> 
<tr>
        <td>Costochondritis</td>
        <td> Mc00048 </td>
        <td>₹12 </td>
        <td>Biohaven Pharmaceutical Holding Company Ltd. </td>
       
</tr> 
<tr>
        <td>Chronic Pain </td>
        <td>Mc00049  </td>
        <td>₹32 </td>
        <td>Samartd Pharma Pvt. Ltd. </td>
       
</tr> 

<tr>
        <td>Chronic Myofascial Pain</td>
        <td>Mc00050  </td>
        <td>₹22 </td>
        <td> Trazodone Hydrochloride </td>


        </table>

        <table>
            <tr id="addMedicineRow">
                <td><input type="text" id="medicineName"></td>
                <td><input type="text" id="medicineNumber"></td>
                <td><input type="text" id="medicineCost"></td>
                <td><input type="text" id="medicineCompany"></td>
                <td><button onclick="addMedicine()">Add Medicine</button></td>
            </tr>
        </table>
    </div>
    <script>
          function searchMedicine() {
            const input = document.getElementById("searchInput");
            const filter = input.value.toUpperCase();
            const table = document.querySelector("table");
            const rows = table.getElementsByTagName("tr");

            for (let i = 1; i < rows.length; i++) {
                const cells = rows[i].getElementsByTagName("td");
                let found = false;

                for (let j = 0; j < cells.length; j++) {
                    const cell = cells[j];
                    if (cell) {
                        const textValue = cell.textContent || cell.innerText;
                        if (textValue.toUpperCase().indexOf(filter) > -1) {
                            found = true;
                            break;
                        }
                    }
                }

                if (found) {
                    rows[i].style.display = "";
                } else {
                    rows[i].style.display = "none";
                }
            }
        }

        
        document.addEventListener("DOMContentLoaded", function () {
            const storedMedicines = JSON.parse(localStorage.getItem("medicines")) || [];
            const table = document.getElementById("medicineTable");

            storedMedicines.forEach((medicine) => {
                const row = table.insertRow(-1);
                for (const key in medicine) {
                    if (Object.hasOwnProperty.call(medicine, key)) {
                        const cell = row.insertCell();
                        cell.innerText = medicine[key];
                    }
                }
            });
        });

        function addMedicine() {
            const medicineName = document.getElementById("medicineName").value;
            const medicineNumber = document.getElementById("medicineNumber").value;
            const medicineCost = document.getElementById("medicineCost").value;
            const medicineCompany = document.getElementById("medicineCompany").value;

            const table = document.getElementById("medicineTable");
            const newRow = table.insertRow(-1);

            const cell1 = newRow.insertCell(0);
            const cell2 = newRow.insertCell(1);
            const cell3 = newRow.insertCell(2);
            const cell4 = newRow.insertCell(3);

            cell1.innerHTML = medicineName;
            cell2.innerHTML = medicineNumber;
            cell3.innerHTML = medicineCost;
            cell4.innerHTML = medicineCompany;

            const storedMedicines = JSON.parse(localStorage.getItem("medicines")) || [];
            storedMedicines.push({
                MedicineName: medicineName,
                MedicineNumber: medicineNumber,
                Cost: medicineCost,
                Company: medicineCompany
            });

            localStorage.setItem("medicines", JSON.stringify(storedMedicines));

            // Clear input fields after adding medicine
            document.getElementById("medicineName").value = "";
            document.getElementById("medicineNumber").value = "";
            document.getElementById("medicineCost").value = "";
            document.getElementById("medicineCompany").value = "";
        }
    </script>
</body>

</html>

