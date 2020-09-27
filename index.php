<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="index.css">
  </head>
  <body>

    <form class="form"  method="post" name="myform" onsubmit="return validation()">
    <input type="text" id='name' ><br>
    <input type='text' id='txtEmail'>
    <input type='submit' name='submit' />

    </form>

    <script type="text/javascript">


function validation() {
  var name = document.getElementById('name').value;
  var email = document.getElementById('txtEmail');
  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;


  if (name == '') {
    alert('Please Provide Your name..');
    name.focus;
    return false;
    }
  else if (!filter.test(email.value)) {
    alert('Please provide a valid email address..');
    email.focus;
    return false;
  }

}

</script>


  </body>
</html>
