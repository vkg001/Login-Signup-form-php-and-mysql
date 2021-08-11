function Activate1()
{
    document.getElementById("activate1").style.color = "Black";
}

function Activate2()
{
    document.getElementById("activate2").style.color = "Black";
}


function Activate3()
{
    document.getElementById("activate3").style.color = "Black";
}


function Activate4()
{
    document.getElementById("activate4").style.color = "Black";
}

function Activate5()
{
    document.getElementById("activate5").style.color = "Black";
}

function Activate6()
{
    document.getElementById("activate6").style.color = "Black";
}

function myTrim(x) {
    return x.replace(/^\s+|\s+$/gm,'');
  }

function Test1()
{
    document.getElementById("activateplz").style.color = "grey";
    var regn = /^([a-zA-Z]+) ([a-zA-Z])*$/;
    var n = document.getElementById("name").value;
    var t = myTrim(n);
    if(regn.test(t)  &&  t.length > 2)
    {
        document.getElementById("name").style.borderBottom="2px solid green";
    }
    else
    {
        document.getElementById("name").style.borderBottom="2px solid red";
    }
}



function Test2()
{
    document.getElementById("activate2").style.color = "grey";
    var rege=/^([\w\.-]+)@([\w]+).([a-zA-Z]+)(.[a-zA-Z]+)?$/;
    var email=document.getElementById("email").value;
    if(rege.test(email))
    {
        retnum2 = true;
        document.getElementById("email").style.borderBottom="2px solid green";
    }
	else
    {
        document.getElementById("email").style.borderBottom="2px solid red";
    }
}



function Test3()
{
    document.getElementById("activate3").style.color = "grey";
    var regm=/^[6-9]\d{9}$/;
    var c=document.getElementById("primary").value;
    if(regm.test(c))
	{
        retnum1 = true;
        document.getElementById("primary").style.borderBottom="2px solid green";
	}
	else
    {
	    document.getElementById("primary").style.borderBottom="2px solid red";
    }

}



function Test4()
{
    document.getElementById("activate4").style.color = "grey";
    var regm=/^[6-9]\d{9}$/;
    var d=document.getElementById("additional").value;
    if(regm.test(d))
    {
        retnum3 = true;
        document.getElementById("additional").style.borderBottom="2px solid green";
	}
	else
    {
	    document.getElementById("additional").style.borderBottom="2px solid red";
    }
}

function Test6()
{
    var a = document.getElementById("activate5");
    var b = document.getElementById("activate6");
    a.style.color = "grey";
    b.style.color = "grey";
    var x = document.getElementById("pass").value;
    var y = document.getElementById("passcon").value;
    if((x.localeCompare(y)))
    {
        var d = document.getElementById("passcon");
        d.style.borderBottom = "2px solid red";
        d.value = "";
    }
    else
    {
        var d = document.getElementById("passcon");
        d.style.borderBottom = "2px solid green";
        var e = document.getElementById("pass");
        e.style.borderBottom = "2px solid green";
    }
}


function checkplz()
{
	var regm=/^[6-9]\d{9}$/;
	
    var email=document.getElementById("email").value;
	var c=document.getElementById("primary").value;
    var d=document.getElementById("additional").value;
	
    var rege=/^([\w\.-]+)@([\w]+).([a-zA-Z]+)(.[a-zA-Z]+)?$/;
	
    var retnum1 = false;
    var retnum2 = false;
    var retnum3 = true;
    
    document.getElementById("name").style.borderBottom="2px solid green";

    if(regm.test(c))
	{
        retnum1 = true;
        document.getElementById("primary").style.borderBottom="2px solid green";
	}
	else
    {
	    document.getElementById("primary").style.borderBottom="2px solid red";
    }
	
    
	if(rege.test(email))
    {
        retnum2 = true;
        document.getElementById("email").style.borderBottom="2px solid green";
    }
	else
    {
        document.getElementById("email").style.borderBottom="2px solid red";
    }
    if(d.length > 0)
    {
        if(regm.test(d))
        {
            document.getElementById("additional").style.borderBottom="2px solid green";
	    }
	    else
        {
            retnum3 = false;
	        document.getElementById("additional").style.borderBottom="2px solid red";
        }
    }
    return(retnum1 && retnum2  &&  retnum3);
}



function TOGGLE()
{
    document.getElementById("pass").type = "text";
}


function TOGGLE2()
{
    document.getElementById("pass").type = "password";
}