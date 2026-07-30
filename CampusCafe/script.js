const form = document.getElementById("myForm");

form.addEventListener("submit", function (event) {

    event.preventDefault();

    clearErrors();

    let name = document.getElementById("name");
    let email = document.getElementById("email");
    let phone = document.getElementById("phone");
    let studentId = document.getElementById("studentId");
    let gender = document.querySelector('input[name="gender"]:checked');
    let department = document.getElementById("department");
    let selectedFoods = document.querySelectorAll('input[name="food"]:checked');
    let quantity = document.getElementById("quantity");

    let valid = true;


    if (name.value.trim() == "") {

        showError(name, "nameError", "Name cannot be empty.");
        valid = false;

    } else {

        showSuccess(name);

    }

    if (email.value.trim() == "") {

        showError(email, "emailError", "Email cannot be empty.");
        valid = false;

    } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value.trim())) {

        showError(email, "emailError", "Please enter a valid email address.");
        valid = false;

    } else {

        showSuccess(email);

    }

    if (phone.value.trim() == "") {

        showError(phone, "phoneError", "Phone number cannot be empty.");
        valid = false;

    } else {

        showSuccess(phone);

    }

    if (studentId.value.trim() == "") {

        showError(studentId, "studentIdError", "Student ID cannot be empty.");
        valid = false;

    } else {

        showSuccess(studentId);

    }

    if (gender == null) {

        document.getElementById("genderError").innerHTML = "Please select your gender.";
        valid = false;

    }


    if (department.value == "") {

        showError(department, "departmentError", "Please select a department.");
        valid = false;

    } else {

        showSuccess(department);

    }

    if (selectedFoods.length == 0) {

        document.getElementById("foodError").innerHTML = "Please select at least one food item.";
        valid = false;

    }

    let qtyValue = parseInt(quantity.value.trim(), 10);

    if (quantity.value.trim() == "" || isNaN(qtyValue) || qtyValue <= 0) {

        showError(quantity, "quantityError", "Quantity must be greater than 0.");
        valid = false;

    } else {

        showSuccess(quantity);

    }

    if (valid) {

        let foodPriceSum = 0;
        let foodListHTML = "";

        selectedFoods.forEach(function (item) {
            let price = parseFloat(item.getAttribute("data-price"));
            foodPriceSum += price;
            foodListHTML += "<li>" + item.value + " - $" + price + "</li>";
        });

        let totalBill = foodPriceSum * qtyValue;

        let outputDiv = document.getElementById("orderOutput");

        outputDiv.style.display = "block";
        outputDiv.innerHTML =
            "<h3>Order placed successfully!</h3>" +
            "<p><strong>Customer Name:</strong> " + name.value.trim() + "</p>" +
            "<p><strong>Student ID:</strong> " + studentId.value.trim() + "</p>" +
            "<p><strong>Department:</strong> " + department.value + "</p>" +
            "<p><strong>Selected Items:</strong></p>" +
            "<ul>" + foodListHTML + "</ul>" +
            "<p><strong>Quantity:</strong> " + qtyValue + "</p>" +
            "<p><strong>Total Bill:</strong> $" + totalBill + "</p>";

        form.reset();
        clearErrors();

    }

});


function showError(input, errorId, message) {

    input.classList.add("errorBorder");
    input.classList.remove("successBorder");

    document.getElementById(errorId).innerHTML = message;

}

function showSuccess(input) {

    input.classList.remove("errorBorder");
    input.classList.add("successBorder");

}

function clearErrors() {

    let errors = document.querySelectorAll(".error");

    errors.forEach(function (item) {

        item.innerHTML = "";

    });

    let fields = document.querySelectorAll("input, select, textarea");

    fields.forEach(function (field) {

        field.classList.remove("errorBorder");
        field.classList.remove("successBorder");

    });

}