// document.getElementById("clickMe").addEventListener("click", function () {
//     alert("Button clicked!");
//   });
  
  document.querySelector("form").addEventListener("submit", function (e) {
    let email = document.querySelector("#email").value;
    let name = document.querySelector("#name").value;
    let message = document.querySelector("#message").value;

    if (!name || !email || !message) {
        alert("All fields are required.");
        e.preventDefault();
    } else if (!email.includes("@")) {
        alert("Invalid email address.");
        e.preventDefault();
    }
});
