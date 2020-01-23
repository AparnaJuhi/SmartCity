function GEEKFORGEEKS()
        {
        	var a=document.forms["RegForm"]["Firstname"];
            var b=document.forms["RegForm"]["Lastname"];
            var c=document.forms["RegForm"]["Fname"];
            var d=document.forms["RegForm"]["AadharId"];
            var e=document.forms["RegForm"]["dob"];
            var f=document.forms["RegForm"]["Address"];
            var g=document.forms["RegForm"]["State"];
            var h=document.forms["RegForm"]["District"];
            var i=document.forms["RegForm"]["Pincode"];
            var j=document.forms["RegForm"]["Email-id"];
            var k=document.forms["RegForm"]["Password"];
            var k=document.forms["RegForm"]["ConfirmPassword"];
            if(a.value=="")
            {
            	alert("Please enter your Firstname ");
            	a.focus();
            	return false;
            }
            if(b.value=="")
            {
                alert("Please enter your Lastname ");
                b.focus();
                return false;
            }
            if(c.value=="")
            {
            	alert("Please enter your Father's name ");
            	c.focus();
            	return false;
            }
            if(d.value=="")
            {
            	alert("Please enter your AadharId ");
            	d.focus();
            	return false;
            }
            if(d.value!="")
            {
            	var x=d.value;
            	if(x.length!=12)
            	{
            		alert("Please enter a valid AadharId");
            		d.focus();
                    return false;
            	}
            }
            if(e.value=="")
            {
                alert("Please enter your Date of Birth ");
            	e.focus();
            	return false;
            }
            if(f.value== "")
            {
            	alert("Please enter your Address ");
            	f.focus();
            	return false;
            }
            if(g.value=="")
            {
            	alert("Please select a State ");
            	g.focus();
            	return false;
            }
            if(h.value=="")
            {
            	alert("Please enter your District ");
            	h.focus();
            	return false;
            }
            if(i.value=="")
            {
            	alert("Please enter your PinCode ");
            	i.focus();
            	return false;
            }
            if(i.value!="")
            {
            	var x=i.value;
            	if(x.length!=6)
            	{
            		alert("Please enter a valid PinCode ");
            		i.focus();
            		return false;
            	}
            }
            if(j.value=="")
            {
            	alert("Please enter your Email-id ");
            	j.focus();
            	return false;
            }
            if
            if(k.value=="")
            {
            	alert("Please enter your Password ");
            	j.focus();
            	return false;
            }
            if(l.value=="")
            {
            	alert("Please Confirm your Password ");
            	l.focus();
            	return false;
            }
            if(k.value!=l.value)
            {
            	alert("Password didn't match Re-enter it");
            	l.focus()
            	return false;
            }

           return true;
        }
