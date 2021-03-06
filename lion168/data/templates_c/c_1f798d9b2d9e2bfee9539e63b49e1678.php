<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type" />
    <title>修改信息</title>
    <meta name="keywords" content="keyword ..." />
    <meta name="Description" content="description ..." />
    <link href="../css/member/global.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php echo $this->_fetch_compile("member/top.html"); ?>

<div id="maincontent">
 <div class="title">修改信息</div>
 <div id="leftcontent">
  <ul>
    <li><a href="info.php">账户信息</a></li>
    <li><a href="datum.php" class="current">修改信息</a></li>
    <li><a href="password.php">修改密码</a></li>
    <li><a href="bank_bd.php">绑定银行卡</a></li>
  </ul>
 </div>
 <div id="rightcontent">
 <form action ="" method="post" id="frmMain" name="frmMain" onSubmit="">
   <ul class="list">
 
     <li>
       <div class="l"><b>取款人姓名 </b><span>*</span><p>(取款人姓名)</p></div>
       <div class="r"><input name="truename" readonly="readonly" type="text" class="text" id="truename" value="<?php echo $this->_vars['truename']; ?>
" maxlength="10" /></div>
       <div class="clear"></div>
     </li>
     <li>
       <div class="l"><b>安全邮箱 </b><span>*</span><p>(用于找回密码)</p></div>
       <div class="r"><input name="email" type="text" class="text" id="email" value="<?php echo $this->_vars['email']; ?>
" maxlength="30" /></div>
       <div class="clear"></div>
     </li>     
     <li>
       <div class="l"><b>QQ号码 </b><span>*</span><p>(可修改)</p></div>
       <div class="r"><input name="qq" type="text" class="text" id="qq" value="<?php echo $this->_vars['qq']; ?>
" maxlength="11" /></div>
       <div class="clear"></div>
     </li>     
     <li>
       <div class="l"><b>手机号码 </b><span>*</span><p>(可修改)</p></div>
       <div class="r"><input name="phone" type="text" class="text" id="phone" value="<?php echo $this->_vars['phone']; ?>
" maxlength="18" /></div>
       <div class="clear"></div>
     </li>  
   </ul>
   <dl class="tip">
     <dt>重要提示：</dt>
     <dd>每次存款前，请注意查看我们最新的存款银行账户信息，否则可能会导致您的存款延迟</dd>
   </dl>
   <div class="btns"><div class="btndiv"><input type="hidden" name="action" value="save"><input name="提交" type="submit" class="submit" value="提交" onclick="Check_modify();" /></div></div>
   </form>
 </div>
 <div class="clear"></div>
</div>
<?php echo $this->_fetch_compile("member/footer.html"); ?>
<script type="text/javascript">
function Check_modify(){
	if(document.frmMain.phone.value==''){
		window.alert("请输入电话!");
		document.frmMain.phone.focus();
		return false;
	}

	if(!isEmail(document.frmMain.email.value)) {
		alert("电子邮件格式不正确!"); 
		document.frmMain.email.focus(); 
		return false;
	}
	document.frmMain.submit();
	return true;
}
</script>
</body>
</html>
