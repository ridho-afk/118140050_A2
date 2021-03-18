<html>
<head>
    <tittle>USER PABW</tittle>
</head>
<body>
    <table border="0" cellpadding="10" cellspacing="1" width="100%">
        <tr>
            <td align="center">User Dashbord</td>
        </tr>
        <tr>
            <td>
            Selamat datang <?= $this->session->userdata('username');?>
            Klik disini untuk<a href="<?=base_url('user/logout');?>" title="Logout">Logout.
            </td>
        </tr>
</body>
</html>