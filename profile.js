//when we choose a photo to upload
var imgDiv = document.querySelector('.profile-pic');
var file = document.querySelector('#file');
var img = document.querySelector('#profile-photo');
var showPhoto = document.querySelector('#showPhoto');
var uploadBtn = document.querySelector('#uploadBtn');

file.addEventListener('change', function() {
    const choosedFile = this.files[0];

    if (choosedFile) {
        const reader = new FileReader();
        reader.addEventListener('load', function() {
            img.setAttribute('src', reader.result);
        });

        reader.readAsDataURL(choosedFile);
    }
})

//check validity
// const input = document.getElementById('floatingInput');
// input.addEventListener('keyup', function (event) {
//     isValidEmail = emailField.checkValidity()});

// Example starter JavaScript for disabling form submissions if there are invalid fields
// (function () {
// 'use strict'

// Fetch all the forms we want to apply custom Bootstrap validation styles to
var forms = document.querySelectorAll('.needs-validation')

// Loop over them and prevent submission
Array.prototype.slice.call(forms)
    .forEach(function(form) {
        form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.classList.add('was-validated')
        }, false)
    })
    //declare input
var fullName = document.querySelector("#fullName");
var firstName = document.querySelector('#firstName');
var lastName = document.querySelector('#lastName');
var email = document.querySelector('#email');
var emailForm = document.querySelector('#emailForm');
var password = document.querySelector('#password');
var passwordForm = document.querySelector('#passwordForm');
var mobileNo = document.querySelector('#mobileNo');
var mobileNoForm = document.querySelector('#mobileNoForm');
var birthDate = document.querySelector('#birthDate');
var birthDateForm = document.querySelector('#birthDateForm');
var address = document.querySelector('#address');
var addressLine1 = document.querySelector('#addressLine1');
var addressLine2 = document.querySelector('#addressLine2');
var postCode = document.querySelector('#postCode');
var city = document.querySelector('#city');
var state = document.querySelector('#state');

//click save changes button
var changeBtn = document.querySelector("#changeBtn");
changeBtn.addEventListener("click", changeText);

function changeText() {
    if ((firstName.value != null || firstName.value != '') && (lastName.value != null || lastName.value != "") &&
        (emailForm.value != null || emailForm.value != "") && (passwordForm.value != null || passwordForm.value != "") &&
        (mobileNoForm.value != null || mobileNoForm.value != "") && (birthDateForm.value != null || birthDateForm.value != "") &&
        (addressLine1.value != null || addressLine1.value != "") && (addressLine2.value != null || addressLine2.value != "") &&
        (postCode.value != null || postCode.value != "") && (city.value != null || city.value != "")) {
        changeBtn.innerText = "Saved";
    }
}

//edit button
var editBtn = document.querySelector("#editBtn");
editBtn.addEventListener("click", editText);

function editText() {
    changeBtn.innerText = "Save Changes";
}

//delete icon
// var deleteIcon = document.querySelector("#deleteIcon");
// deleteIcon.addEventListener("click", deleteProfile);
// function deleteProfile(){
//     alert("Are you sure want to delete your profile?");
// }

//update profile details
changeBtn.addEventListener("click", updateInfo);

function updateInfo() {
    fullName.textContent = "Name : " + document.getElementById("firstName").value + " " + document.getElementById("lastName").value;
    email.textContent = "Email Address : " + document.getElementById("emailForm").value;
    password.textContent = "Password : " + document.getElementById("passwordForm").value;
    mobileNo.textContent = "Mobile Number : " + document.getElementById("mobileNoForm").value;
    birthDate.textContent = "Birthdate : " + document.getElementById("birthDateForm").value;
    address.textContent = "Address : " + document.getElementById("addressLine1").value + ", " + document.getElementById("addressLine2").value + ", " +
        document.getElementById("postCode").value + " " + document.getElementById("city").value + ", " + document.getElementById("state").value;
    showPhoto.setAttribute('src', img.src);


}