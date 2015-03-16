<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>

    <script type="text/javascript">
        function Login(){
     var id=document.getElementById('txtUserName').value;
     var pwd=document.getElementById('txtPassword').value;
     if (id=='' || pwd=='')
         alert('Please Enter Valid User Name/Password')
     else {
         debugger;
     document.Form1.submit();
      }
    </script>
</head>
<body>
<form id="Form1" action=" xxx.aspx" method="post">
    <input id="txtUserName" type="text" name="username" /><input id="txtPassword" type="text" name='password' /><input id="Submit1"
        type="submit" value="submit" onclick="Login();" />
</form>
</body>
</html>

	<!--<script runat="server">
        protected void Page_Load(object sender, EventArgs e)
        {
            string username = Request["username"];
            string password = Request["password"];
        }
    </script>