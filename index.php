<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Mailer</title>
</head>
<body>
<center>
    <h4 class="sent_notification"></h4>
    <form id="myForm">
        <h2>Send an email</h2>
        <label>Name</label>
        <input type="text" name="name" id="name" placeholder="Enter Name"><br>
        <label>Email</label>
        <input type="text" id="email" placeholder="Enter Email address"><br>
        <label>Subject</label>
        <input type="text" id="subject" placeholder="Enter Subject"><br>
        <label>Message</label>
        <textarea name="message" id="body" rows="15" placeholder="Enter Message"></textarea>
        <button onclick="sendEmail()">Submit</button>
    </form>
</center>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>
</html>
<script>
     sendEmail = () => {
        var name = $("#name");
        var email = $("#email");
        var subject = $("#subject");
        var body = $("#body");
console.log(name)
            $.ajax({
                url: 'sendEmai.php',
                method: 'POST',
                dataType: 'json',
                data: {
                    name: name.val(),
                    email: email.val(),
                    subject: subject.val(),
                    body: body.val()
                }, success : function(response) {
                    $('#myForm')[0].reset();
                    $('.sent_notification').text("Messagge sent Successfully")
                } 
            })
        
    }

    function isNotEmpty(calller) {
        if(caller.val() == "") {
            caller.css('border', '1px solid red');
            return false;
        } else {
            caller.css('border', '');
            return true;
        }
    }
</script>