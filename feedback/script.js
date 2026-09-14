function validateForm() {

    let name = document.getElementById("name").value;
    let rating = document.getElementById("rating").value;

    if (name.length < 3) {

        alert("Name must contain at least 3 characters");

        return false;
    }

    if (rating === "") {

        alert("Please select a rating");

        return false;
    }

    return true;
}
