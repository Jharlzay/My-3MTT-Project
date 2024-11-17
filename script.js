//image slide

var slideIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1}
  x[slideIndex-1].style.display = "block";
  setTimeout(carousel, 2000); // Change image every 2 seconds
}

// Form validation
document.getElementById("driver-data-form").addEventListener("submit", function (event) {
    event.preventDefault();

    // Get form fields
    const driverName = document.getElementById("driver-name").value.trim();
    const nin = document.getElementById("nin").value.trim();
    const licenseNumber = document.getElementById("license-number").value.trim();
    const phoneNumber = document.getElementById("phone-number").value.trim();
    const driverPhoto = document.getElementById("driver-photo").files[0];
    const plateNumber = document.getElementById("plate-number").value.trim();
    const carModel = document.getElementById("car-model").value.trim();
    const carColor = document.getElementById("car-color").value.trim();
    const carYear = document.getElementById("car-year").value.trim();
    const carPhoto = document.getElementById("car-photo").files[0];

    // Validate fields
    const errors = [];

    if (!driverName) errors.push("Full Name is required.");
    if (!nin || !/^\d{10}$/.test(nin)) errors.push("National Identification Number must be a 10-digit number.");
    if (!licenseNumber) errors.push("Driver's License Number is required.");
    if (!phoneNumber || !/^\+?\d{10,15}$/.test(phoneNumber)) errors.push("Enter a valid phone number.");
    if (!driverPhoto) errors.push("Driver's photo is required.");
    if (!plateNumber) errors.push("Car Plate Number is required.");
    if (!carModel) errors.push("Car Model is required.");
    if (!carColor) errors.push("Car Color is required.");
    if (!carYear || !/^\d{4}$/.test(carYear) || parseInt(carYear) > new Date().getFullYear()) {
        errors.push("Enter a valid Year of Manufacture.");
    }
    if (!carPhoto) errors.push("Car photo is required.");

    // Show errors or submit
    if (errors.length > 0) {
        alert("Form validation failed:\n" + errors.join("\n"));
    } else {
        alert("Form submitted successfully!");
        this.submit(); // Proceed with submission
    }
});

//Form Preview
// function submitForm(e) {
//     e.preventDefault(); // Prevent the default form submission

//     // Collect form data
//     const formData = {
//         driverName: document.getElementById("driver-name").value,
//         nin: document.getElementById("nin").value,
//         licenseNumber: document.getElementById("license-number").value,
//         phoneNumber: document.getElementById("phone-number").value,
//         carPlate: document.getElementById("plate-number").value,
//         carModel: document.getElementById("car-model").value,
//         carColor: document.getElementById("car-color").value,
//         carYear: document.getElementById("car-year").value
//     };

//     // Generate preview HTML
// //     const previewContent = `
// //         <p><strong>Driver Name:</strong> ${formData.driverName}</p>
// //         <p><strong>NIN:</strong> ${formData.nin}</p>
// //         <p><strong>License Number:</strong> ${formData.licenseNumber}</p>
// //         <p><strong>Phone Number:</strong> ${formData.phoneNumber}</p>
// //         <p><strong>Car Plate Number:</strong> ${formData.carPlate}</p>
// //         <p><strong>Car Model:</strong> ${formData.carModel}</p>
// //         <p><strong>Car Color:</strong> ${formData.carColor}</p>
// //         <p><strong>Year of Manufacture:</strong> ${formData.carYear}</p>;

// //     // Display preview
// //     document.getElementById("preview-content").innerHTML = previewContent;
// //     document.getElementById("preview-section").style.display = "block";
// //     document.getElementById("driver-data-form").style.display = "none";
// // }

// // function editForm() {
// //     // Hide preview and show the form again for editing
// //     document.getElementById("preview-section").style.display = "none";
// //     document.getElementById("driver-data-form").style.display = "block";
// // }

// // function finalSubmit() {
// //     alert("Form submitted successfully!");
// //     // Add logic for final submission to the server or database here
// //     document.getElementById("driver-data-form").reset(); // Reset the form
// //     document.getElementById("preview-section").style.display = "none"; // Hide preview
// //     document.getElementById("driver-data-form").style.display = "block"; // Show the form for the next entry
// // }


// // Delete Officer

// function deleteOfficer(index) {
//     officers.splice(index, 1);
//     renderOfficers();
// }

// // Example Login Activity Data
// const loginActivity = [
//     {
//         officerId: 'OFF001',
//         name: 'John Doe',
//         timestamp: '2024-11-12 10:00:00',
//         ipAddress: '192.168.1.10',
//         status: 'Successful'
//     },
//     {
//         officerId: 'OFF002',
//         name: 'Jane Smith',
//         timestamp: '2024-11-12 11:15:00',
//         ipAddress: '192.168.1.12',
//         status: 'Failed'
//     }
// ];

// // Render Login Activity
// function renderLoginActivity() {
//     const loginActivityBody = document.getElementById('login-activity-body');
//     loginActivityBody.innerHTML = '';

//     loginActivity.forEach((activity) => {
//         const row = `
//             <tr>
//                 <td>${activity.officerId}</td>
//                 <td>${activity.name}</td>
//                 <td>${activity.timestamp}</td>
//                 <td>${activity.ipAddress}</td>
//                 <td>${activity.status}</td>
//             </tr>
//         `;
//         loginActivityBody.innerHTML += row;
//     });
// }

// // Call the renderLoginActivity function on page load
// renderLoginActivity();

// officerForm.addEventListener('submit', (e) => {
//     e.preventDefault();

//     const id = document.getElementById('officer-id').value;

//     if (officers.some((officer) => officer.id === id)) {
//         alert('Officer ID already exists!');
//         return;
//     }

//     // Rest of the code...
// });


// const searchInput = document.getElementById('searchBar');

// searchInput.addEventListener('input', () => {
//     const query = searchInput.value.toLowerCase();
//     const filteredOfficers = officers.filter(officer => 
//         officer.name.toLowerCase().includes(query) || 
//         officer.id.toLowerCase().includes(query) ||
//         officer.email.toLowerCase().includes(query)
//     );
//     renderFilteredOfficers(filteredOfficers);
// });

// function renderFilteredOfficers(filteredOfficers) {
//     officersTableBody.innerHTML = '';
//     filteredOfficers.forEach((officer, index) => {
//         const row = `
//             <tr>
//                 <td>${officer.id}</td>
//                 <td>${officer.name}</td>
//                 <td>${officer.email}</td>
//                 <td>${officer.phone}</td>
//                 <td>
//                     <button class="edit-btn" onclick="editOfficer(${index})">Edit</button>
//                     <button class="delete-btn" onclick="deleteOfficer(${index})">Delete</button>
//                 </td>
//             </tr>
//         `;
//         officersTableBody.innerHTML += row;
//     });
// }
