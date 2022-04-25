/* Sending Email from Contact Section */
(function () {
    emailjs.init("user_vRj2ol9eHVSt8dfK5Saj0");
})();

function sendmail() {
    let fullName = document.getElementById("name").value;
    let userEmail = document.getElementById("email").value;
    let userMessage = document.getElementById("message").value;

        var contactParams = {
            from_name: fullName,
            from_email: userEmail,
            message: userMessage
        };

        emailjs.send('service_o7voghk', 'template_njmeh9c', contactParams).then(function (res) {})
}